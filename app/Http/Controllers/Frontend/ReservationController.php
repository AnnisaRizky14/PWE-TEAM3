<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReservationController extends Controller
{
    public function stepOne(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addWeek();
        return view('reservations.step-one', compact('reservation', 'min_date', 'max_date'));
    }

    public function storeStepOne(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'res_date' => ['required', 'date', new DateBetween, new TimeBetween],
            'tel_number' => ['required'],
            'guest_number' => ['required'],
        ]);

        if (empty($request->session()->get('reservation'))) {
            $reservation = new Reservation();
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        } else {
            $reservation = $request->session()->get('reservation');
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        }

        return to_route('reservations.step.two');
    }
    public function stepTwo(Request $request)
    {
        $reservation = $request->session()->get('reservation');

        // Check if reservation is null
        if (!$reservation) {
            // Handle the error, redirect back or show an error message
            return redirect()->route('reservations.step.one')->withErrors('Reservation data is missing.');
        }

        $res_table_ids = Reservation::orderBy('res_date')->get()->filter(function ($value) use ($reservation) {
            return $value->res_date->format('Y-m-d') == $reservation->res_date->format('Y-m-d');
        })->pluck('table_id');

        $tables = Table::where('status', TableStatus::Avalaiable)
            ->where('guest_number', '>=', $reservation->guest_number)
            ->whereNotIn('id', $res_table_ids)->get();

        return view('reservations.step-two', compact('reservation', 'tables'));
    }


    public function storeStepTwo(Request $request)
    {
        $validated = $request->validate([
            'table_id' => ['required']
        ]);

        $reservation = $request->session()->get('reservation');
        $reservation->fill($validated);

        // Jangan simpan dulu ke database karena belum bayar DP
        $request->session()->put('reservation', $reservation);

        return to_route('reservations.step.three');
    }


    public function stepThree(Request $request)
    {
        $reservation = $request->session()->get('reservation');

        if (!$reservation) {
            return redirect()->route('reservations.step.one')->withErrors('Reservation data is missing.');
        }

        return view('reservations.step-three', compact('reservation'));
    }

    public function storeStepThree(Request $request)
    {
        $reservation = $request->session()->get('reservation');

        if (!$reservation) {
            return redirect()->route('reservations.step.one')->withErrors('Reservation data is missing.');
        }

        $reservation->payment_status = 'paid';
        $reservation->save();

        $request->session()->forget('reservation');

        // Redirect ke halaman receipt
        return redirect()->route('reservations.receipt', ['id' => $reservation->id]);
    }

    public function showReceipt($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reservations.receipt', compact('reservation'));
    }


    public function thankyouFromReceipt()
    {
        return view('thankyou');
    }

}
