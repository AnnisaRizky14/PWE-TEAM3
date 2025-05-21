<x-guest-layout>
    <section class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center bg-white p-5 rounded shadow">

                    <h2 class="fw-bold mt-3" style="font-size: 2.5rem; letter-spacing: 2px; text-transform: uppercase; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); color: #0b5b45;">Pembayaran Uang Muka</h2>
                    <p class="mt-3" style="font-size: 1.1rem; line-height: 1.6; color: #0b5b45;">Silakan bayar sebesar <strong>Rp20.000</strong> untuk melanjutkan reservasi Anda.</p>

                    <hr class="my-4">

                    <h4 class="mb-3">Metode Pembayaran</h4>

                    <!-- Simulasi QRIS -->
                   <div class="mb-4">
                        <h5 class="fw-bold mt-3" style="font-size: 2.5rem; letter-spacing: 2px; text-transform: uppercase; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); color: #0b5b45;">QRIS</h5>
                        <img src="{{ asset('images/qris-example.png') }}" 
                            alt="QRIS Code" 
                            class="img-fluid rounded mx-auto d-block" 
                            style="max-width: 250px;">
                        <p class="text-muted mt-2">Scan QR ini menggunakan aplikasi pembayaran favorit Anda</p>
                    </div>


                    <hr class="my-4">

                    <!-- Simulasi Transfer Bank -->
                    <div class="mb-4">
                        <h5>Transfer Bank</h5>
                        <ul class="list-unstyled fs-6">
                            <li><strong>Bank:</strong> BCA</li>
                            <li><strong>No. Rekening:</strong> 1234567890</li>
                            <li><strong>Atas Nama:</strong> PT. Temu Rasa</li>
                        </ul>
                        <p class="text-muted">Gunakan kode referensi saat transfer: <strong>DP-{{ strtoupper(uniqid()) }}</strong></p>
                    </div>

                    <form method="POST" action="{{ route('reservations.store.step.three') }}">
                        @csrf
                       <button type="submit" class="btn btn-success mt-4 px-5 py-2">
                            Saya Sudah Bayar &nbsp; <i class="fas fa-check-circle"></i>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
