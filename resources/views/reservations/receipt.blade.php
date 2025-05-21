<x-guest-layout>
    <section class="my-5">
        <div class="container">
            <div class="row my-4 mx-1">
                <div class="col-md-12 mx-auto bg-white p-md-5 p-4 shadow-lg rounded-3 text-center">
                    <h2 class="fw-bold mt-3" style="font-size: 2.5rem; letter-spacing: 2px; text-transform: uppercase; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); color: #0b5b45;">Pembayaran Berhasil!</h2>
                    <p class="fs-5" style="color: #6b4a31;">Terima kasih atas pembayaran uang muka Anda.</p>

                    <hr class="my-4" />

                    <h4 class="mb-3">Rincian Reservasi</h4>
                    <p><strong>Nama:</strong> {{ $reservation->first_name }} {{ $reservation->last_name }}</p>
                    <p><strong>Email:</strong> {{ $reservation->email }}</p>
                    <p><strong>Nomor Telepon:</strong> {{ $reservation->tel_number }}</p>
                    <p><strong>Tanggal Reservasi:</strong> {{ \Carbon\Carbon::parse($reservation->res_date)->format('d M Y, H:i') }}</p>
                    <p><strong>Jumlah Tamu:</strong> {{ $reservation->guest_number }}</p>
                    <p><strong>Status Pembayaran:</strong> <span class="badge bg-success">LUNAS</span></p>

                    <a href="{{ route('thankyou') }}" class="btn btn-success mt-4 px-5 py-2">
                        Lanjutkan &nbsp; <i class="fas fa-check"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
