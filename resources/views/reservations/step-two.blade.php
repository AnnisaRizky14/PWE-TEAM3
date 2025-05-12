<x-guest-layout>

    <!-- ------------------------   Reservation Step Two Form Section ------------------------ -->
    <section class="my-5">
        <div class="container">
            <div class="row my-4 mx-1">
                <div
                    class="col-md-12 mx-auto text-white p-md-5 p-4 shadow-lg rounded-3" style="background-color: #0b5b45; border-color: #0b5b45;">
                    <small class="text-uppercase fw-bold" style="letter-spacing: 1px; font-size: 0.9rem;">Mulai reservasi!</small>
                    <h1 class="fw-bold mt-3" style="font-size: 2.5rem; letter-spacing: 2px; text-transform: uppercase; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">Reservasi meja Anda di Temu Rasa</h1>
                    <p class="mt-3" style="font-size: 1.1rem; line-height: 1.6; color: #f1f1f1;">Pilih meja tempat Anda reservasi di Temu Rasa</p>
                    <hr />
                    <form method="POST" action="{{ route('reservations.store.step.two') }}" class="row g-3" style="margin-top: 30px;">
                        @csrf
                        <div class="col-md-12">
                            <label for="jenis_kelamin_input" class="form-label">Pilih Meja</label>
                            <select name="table_id" id="jenis_kelamin_input" class="form-select">
                                <option selected>Pilih Meja ...</option>
                                @forelse ($tables as $table)
                                    <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                                        {{ $table->name }}
                                        ({{ $table->guest_number }} Guests)
                                    </option>
                                @empty
                                    <option value="">
                                        Tidak ada meja yang tersedia :()
                                    </option>
                                @endforelse
                            </select>
                            @error('table_id')
                                <p class="register_text_error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-12 mx-auto mt-4 text-center">
                            <p class="text-center col-md-8 mx-auto">
                                Dengan klik "Buat Reservasi", Anda setuju dan bertanggung jawab atas pemesanan ini.
                            </p>
                            <a href="{{ route('reservations.step.one') }}"
                                class="btn btn-outline-light text-white px-5 py-2 fw-bold me-3" style="margin-top: 30px;">
                                <i class="fas fa-arrow-left"></i> &nbsp; Sebelumnya
                            </a>
                            <button type="submit" class="btn btn-outline-light text-white px-5 py-2 fw-bold" style="margin-top: 30px;">
                                Buat Reservasi &nbsp; <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
