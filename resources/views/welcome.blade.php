<x-guest-layout>

    <!-- ------------------------ Slide awal landing-page ------------------------ -->
    <section class="splide my-4" aria-label="Splide Basic HTML Example" style="margin-bottom: 100px; margin-top: 50px;">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <a href="{{ url('/menus') }}">
                        <img src="{{ url('images/splide/landing-page/slide-1.png') }}" class="d-block w-100"
                            style="border-radius:8px;">
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="{{ url('/reservation/step-one') }}">
                        <img src=" {{ url('images/splide/landing-page/slide-2.png') }}" class="d-block w-100"
                            style="border-radius:8px;">
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="{{ url('/reservation/step-one') }}">
                        <img src="{{ url('images/splide/landing-page/slide-3.png') }}" class="d-block w-100"
                            style="border-radius:8px;">
                    </a>
                </li>
                <li class="splide__slide">
                    <img src="{{ url('images/splide/landing-page/slide-4.png') }}" class="d-block w-100"
                        style="border-radius:8px;">
                </li>
            </ul>
        </div>
    </section>

    <!-- ------------------------ Logo List Section ------------------------ -->
    <section class="logo-list d-none d-sm-none d-md-none d-lg-block" style="margin-bottom: 100px; margin-top: 50px;">
        <div class="container py-2">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="#"><img src="{{ url('images/logo/1.png') }}" class="img-fluid"
                            alt="matchamu logo"/></a>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="#"><img src="{{ url('images/logo/2.png') }}" class="img-fluid"
                            alt="van houten logo" /></a>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="#"><img src="{{ url('images/logo/3.png') }}" class="img-fluid"
                            alt="bogasari logo" /></a>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="#"><img src="{{ url('images/logo/4.png') }}" class="img-fluid"
                            alt="prima logo" /></a>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="#"><img src="{{ url('images/logo/5.png') }}" class="img-fluid"
                            alt="greenfields logo" /></a>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <a href="#"><img src="{{ url('images/logo/6.png') }}" class="img-fluid"
                            alt="sania logo" /></a>
                </div>
            </div>
        </div>
    </section>

<!-- ------------------------ Menu Card Section ------------------------ -->
<section class="my-100">
        <div class="container">
            <div class="row mt-5 text-center" style="margin-bottom: 100px;">
                <small class="text-uppercase fw-bold" style="color: #0b5b45; letter-spacing: 3px;">MENU SPESIAL UNTUK ANDA DAN ORANG TERKASIH</small>
                <h1 class="fw-bold" style="color: #6b4a31; font-size: 3rem; letter-spacing: 2px; text-transform: uppercase; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);">Cicipi menu istimewa kami hari ini!</h1>
                <p style="color: #0b5b45;">Jangan lupa reservasi terlebih dahulu di website kami ya. Kalau masih penasaran dengan menunya, intip dulu aja guys</p>
            </div>
            <div class="row mt-4">
                <div class="container">
                    <div class="swiper menu-swiper">
                        <div class="swiper-wrapper">
                            @forelse ($menus as $menu)
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="{{ Storage::url($menu->image) }}"
                                            class="card-img-top card-img-top-landing-page" />
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold"> {{ $menu->name }}</h5>
                                            <div class="category-card-description-wrapper">
                                                <p class="card-text category-card-description" style="font-size: 13px;">
                                                    {{ $menu->description }}
                                                </p>
                                            </div>
                                            <hr>
                                            <h5 class="fw-semibold">Rp.{{ $menu->price }}.000,00</h5>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>belum ada menu</p>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <a href="{{ url('/menus') }}"
                            class="btn text-white px-4 mx-auto text-center col-10 col-md-3 my-3 fw-bold" style="background-color: #0b5b45; border-color: #0b5b45;">Lihat Semua
                            &nbsp; <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------ #1 Feature Section ------------------------ -->
    <section class="my-4" id="tentang-kami" style="margin-top: 40px; margin-bottom: 100px;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Section: Image Slider -->
                <div class="col-12 col-md-12 col-lg-7 mb-4 mb-lg-0 my-auto">
                    <div class="splide splide2">
                        <div class="splide__track">
                            <div class="splide__list">
                                <div class="splide__slide" data-splide-interval="600">
                                    <img src="{{ url('images/landing-page/features1.png') }}"
                                        class="img-fluid shadow-images" />
                                </div>
                                <div class="splide__slide" data-splide-interval="600">
                                    <img src="{{ url('images/landing-page/features2.png') }}"
                                        class="img-fluid shadow-images" />
                                </div>
                                <div class="splide__slide" data-splide-interval="600">
                                    <img src="{{ url('images/landing-page/features3.png') }}"
                                        class="img-fluid shadow-images" />
                                </div>
                                <div class="splide__slide" data-splide-interval="600">
                                    <img src="{{ url('images/landing-page/features4.png') }}"
                                        class="img-fluid shadow-images" />
                                </div>
                                <div class="splide__slide" data-splide-interval="600">
                                    <img src="{{ url('images/landing-page/features5.png') }}"
                                        class="img-fluid shadow-images" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Section: Text Content -->
                <div class="col-12 col-md-12 col-lg-5 ms-auto text-center text-md-start text-lg-start my-auto" style="margin-bottom: 100px;">
                    <p class="text-uppercase fw-bold" style="color: #0b5b45; letter-spacing: 3px;">FITUR TEMU RASA</p>
                    <h2 class="fw-bold" style="color: #6b4a31; font-size: 3rem; letter-spacing: 2px; text-transform: uppercase; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);">Mau Pesan? Gampang Banget!</h2>
                    <div class="row mt-4">
                        <div class="col-3 col-md-2 col-lg-3 mx-auto">
                            <div class="p-1 rounded-logo text-center" style="background-color: #0b5b45; border-color: #0b5b45;">
                                <i class="fab fa-wpforms py-3" style="color: white; font-size:24px"></i>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-9 mt-3 mt-md-0 mt-lg-0">
                            <h5 class="mb-1 fw-semibold" style="color: #6b4a31;">Lengkapi data</h5>
                            <small style="color: #0b5b45;">Sebutkan nama, nomor HP, dan alamat emailmu.</small>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-3 col-md-2 col-lg-3 mx-auto">
                            <div class="p-1 rounded-logo text-center" style="background-color: #0b5b45; border-color: #0b5b45;">
                                <i class="fas fa-chair py-3" style="color: white; font-size:24px"></i>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-9 mt-3 mt-md-0 mt-lg-0">
                            <h5 class="mb-1 fw-semibold" style="color: #6b4a31;">Atur Pesananmu</h5>
                            <small style="color: #0b5b45;">Pilih meja, tanggal kunjungan, jam, dan menu yang kamu inginkan.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------ Category Cards Section ------------------------ -->
    <section class="my-100" style="margin-bottom: 100px; margin-top: 100px;">
        <div class="container">
            <div class="text-center mb-5">
                <small class="fw-bold text-uppercase" style="color: #0b5b45; letter-spacing: 3px;">Kategori Makanan Temu Rasa</small>
                <h1 class="fw-bold" style="color: #6b4a31; font-size: 3rem; letter-spacing: 2px; text-transform: uppercase; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);">Kategori Makanan & Minuman</h1>
                <p style="color: #0b5b45; font-size: 1.1rem; line-height: 1.6;">Mau cari minuman, makanan, dan dessert? kita punya semua kategori itu loh!</p>
            </div>
            <div class="row g-4">
                @forelse ($categories as $cat)
                    <div class="col-md-4 col-lg-3">
                        <div class="card card-in-home text-white text-center" style="background-color: #0b5b45; border-radius: 10px; overflow: hidden;">
                            <img class="card-img-top card-img-top-category-landing-page"
                                src="{{ Storage::url($cat->image) }}" alt="{{ $cat->name }}" 
                                style="object-fit: cover; height: 200px; border-bottom: 2px solid #fff;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mt-2" style="font-size: 1.2rem;">{{ $cat->name }}</h5>
                                <p class="card-text category-card-description" style="font-size: 14px; color: #f1f1f1;">
                                    {{ $cat->description }}
                                </p>
                                <a href="{{ route('categories.show', $cat->id) }}" class="btn btn-outline-light fs-12 mt-3">
                                    Lihat Semua &nbsp;
                                    <small class="arrow-category-button">→</small>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Belum ada kategori</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- ------------------------ #2 Feature Section ------------------------ -->
    <section class="my-100">
        <div class="container">
            <div class="row">
                <!-- Bagian Kiri: Teks dan Deskripsi -->
                <div class="order-2 order-md-1 col-12 col-md-12 col-lg-5 me-auto text-center text-md-start text-lg-start my-auto">
                    <p class="fw-bold text-uppercase" style="color: #0b5b45; letter-spacing: 3px;">MALES GERAK? KAMI ANTAR!</p>
                    <h2 class="fw-bold" style="color: #6b4a31; font-size: 3rem; letter-spacing: 2px; text-transform: uppercase; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);">Cocok buat kalian yang tim #dirumahaja.</h2>
                    
                    <!-- Fitur 1: Order Simpel -->
                    <div class="row mt-4">
                        <div class="col-3 col-md-2 col-lg-3 mx-auto">
                            <div class="p-1 rounded-logo text-center" style="background-color: #0b5b45; border-color: #0b5b45;">
                                <i class="fas fa-search py-3" style="color: white; font-size:24px"></i>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-9 mt-3 mt-md-0 mt-lg-0">
                            <h5 class="mb-1 fw-semibold" style="color: #6b4a31;">Order Simpel</h5>
                            <small style="color: #0b5b45;">Cek menu di aplikasi, isi info lengkapmu.</small>
                        </div>
                    </div>

                    <!-- Fitur 2: Nikmati Di Rumah -->
                    <div class="row mt-4">
                        <div class="col-3 col-md-2 col-lg-3 mx-auto">
                            <div class="p-1 rounded-logo text-center" style="background-color: #0b5b45; border-color: #0b5b45;">
                                <i class="fas fa-motorcycle py-3" style="color: white; font-size:24px"></i>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-9 mt-3 mt-md-0 mt-lg-0">
                            <h5 class="mb-1 fw-semibold" style="color: #6b4a31;">Nikmati Di Rumah</h5>
                            <small style="color: #0b5b45;">Makanan lezat akan segera di tanganmu!</small>
                        </div>
                    </div>
                </div>

                <!-- Bagian Kanan: Gambar dan Overlay -->
                <div class="order-1 order-md-2 col-12 col-md-12 col-lg-7 mb-4 mt-lg-0 mb-lg-0 overlay-container">
                    <img src="{{ url('images/landing-page/video2.png') }}" class="img-fluid shadow-images img-video" />
                    
                    <!-- The overlay area -->
                    <div class="container__overlay">
                        <!-- The player button -->
                        <a target="_blank" href="https://www.youtube.com/">
                            <i class="fas fa-play-circle text-white play-button"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------ Gallery Pictures Section ------------------------ -->
    <section class="my-100" id="galeri-outlet">
        <div class="container">
            <!-- Section Title -->
            <div class="text-center mb-5">
                <small class="fw-bold text-uppercase" style="color: #0b5b45; letter-spacing: 3px;">BIKIN PENASARAN? NIH, INTIP OUTLET KITA!</small>
                <h1 class="fw-bold" style="color: #6b4a31; font-size: 3rem; letter-spacing: 2px; text-transform: uppercase; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);">Galeri Temu Rasa</h1>
                <p style="color: #0b5b45;">Buat yang kepo sama tempatnya, nih kita kasih lihat. Dijamin bikin kamu pengen dateng!</p>
            </div>

            <!-- Gallery Images -->
            <div class="row">
                <!-- Column 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <img src="https://images.pexels.com/photos/2323432/pexels-photo-2323432.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-100 shadow-1-strong rounded mb-4" alt="Interior view" />
                    <img src="https://images.pexels.com/photos/10839533/pexels-photo-10839533.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-100 shadow-1-strong rounded mb-4" alt="Restaurant seating" />
                </div>

                <!-- Column 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <img src="https://images.pexels.com/photos/30440927/pexels-photo-30440927/free-photo-of-cozy-indoor-restaurant-seating-area.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-100 shadow-1-strong rounded mb-4" alt="Restaurant atmosphere" />
                    <img src="https://images.pexels.com/photos/29250093/pexels-photo-29250093/free-photo-of-cozy-coffee-shop-interior-with-customers.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-100 shadow-1-strong rounded mb-4" alt="Cafe interior" />
                </div>

                <!-- Column 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <img src="https://images.pexels.com/photos/16514703/pexels-photo-16514703/free-photo-of-photo-of-an-empty-cafe-interior.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-100 shadow-1-strong rounded mb-4" alt="Empty cafe interior" />
                    <img src="https://images.pexels.com/photos/10506976/pexels-photo-10506976.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-100 shadow-1-strong rounded mb-4" alt="Cozy cafe" />
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------ Testimonials Section ------------------------ -->
    <section class="my-100">
        <div class="container">
            <!-- Section Title -->
            <div class="text-center mb-5">
                <small class="fw-bold text-uppercase" style="color: #0b5b45; letter-spacing: 3px;">MEREKA SUDAH BUKTIKAN!</small>
                <h1 class="fw-bold" style="color: #6b4a31; font-size: 3rem; letter-spacing: 2px; text-transform: uppercase; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);">Apa Kata Pelanggan Setia Kami?</h1>
                <p style="color: #0b5b45;">Jangan ragu lagi, ini kata mereka yang sudah merasakan pengalaman terbaik di sini.</p>
            </div>

            <!-- Testimonials Grid -->
            <div class="row d-flex justify-content-center">
                <!-- Testimonial 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-white" style="background-color: #0b5b45; border-color: #0b5b45;">
                        <div class="card-body">
                            <h5 class="card-title lh-lg">⭐⭐⭐⭐⭐</h5>
                            <h5 class="card-title lh-lg fw-bold">
                                Suasana tempatnya top, bikin tenang.
                            </h5>
                            <p class="card-text mb-4">
                                Saya sangat menikmati waktu bersantai di sini. Suasananya tenang dan desain interiornya menenangkan pikiran setelah seharian beraktivitas. Selain itu, stafnya juga sangat perhatian dan membuat saya merasa aman dan nyaman selama berkunjung. Benar-benar tempat yang nyaman.
                            </p>
                            <hr />
                            <div class="row">
                                <div class="col-2 col-md-2 my-auto">
                                    <img src="https://www.sibberhuuske.nl/wp-content/uploads/2016/10/default-avatar.png" class="img-fluid rounded-circle" />
                                </div>
                                <div class="col-10 col-md-10 my-auto">
                                    <p class="mb-0 fw-bold">Aisyah Putri</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-white" style="background-color: #0b5b45; border-color: #0b5b45;">
                        <div class="card-body">
                            <h5 class="card-title lh-lg">⭐⭐⭐⭐⭐</h5>
                            <h5 class="card-title lh-lg fw-bold">
                                Rasa makanannya nggak ada duanya!
                            </h5>
                            <p class="card-text mb-4">
                                Jujur, saya dibuat ketagihan dengan rasa makanannya! Setiap hidangan memiliki cita rasa yang unik dan menggunakan bahan-bahan segar berkualitas tinggi. Presentasinya juga sangat menarik, sayang kalau tidak diabadikan. Saya pasti akan kembali lagi untuk mencoba menu lainnya!
                            </p>
                            <hr />
                            <div class="row">
                                <div class="col-2 col-md-2 my-auto">
                                    <img src="https://www.sibberhuuske.nl/wp-content/uploads/2016/10/default-avatar.png" class="img-fluid rounded-circle" />
                                </div>
                                <div class="col-10 col-md-10 my-auto">
                                    <p class="mb-0 fw-bold">Rizky Pratama</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-white" style="background-color: #0b5b45; border-color: #0b5b45;">
                        <div class="card-body">
                            <h5 class="card-title lh-lg">⭐⭐⭐⭐⭐</h5>
                            <h5 class="card-title lh-lg fw-bold">
                                Pegawainya profesional dan ramah!
                            </h5>
                            <p class="card-text mb-4">
                                Selain tempatnya yang oke dan makanannya yang lezat, pelayanan di sini juga patut diacungi jempol. Para pegawainya ramah, cepat tanggap, dan selalu siap membantu dengan senyuman. Suasana jadi lebih menyenangkan dan membuat pengalaman bersantap semakin berkesan.
                            </p>
                            <hr />
                            <div class="row">
                                <div class="col-2 col-md-2 my-auto">
                                    <img src="https://www.sibberhuuske.nl/wp-content/uploads/2016/10/default-avatar.png" class="img-fluid rounded-circle" />
                                </div>
                                <div class="col-10 col-md-10 my-auto">
                                    <p class="mb-0 fw-bold">Amanda Surya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------ CTA Social Media Section ------------------------ -->
    <section>
        <div class="container mb-5">
            <div class="row rounded mx-auto" style="background-color: #0b5b45; border-color: #0b5b45;">
                <div class="col-md-7 my-auto text-white px-5 py-5">
                    <h2 class="fw-bold" style="color:rgb(255, 255, 255); font-size: 3rem; letter-spacing: 2px; text-transform: uppercase;">ADA PROMO NIH! JANGAN SAMPAI LOLOS!</h2>
                    <p>
                        Pantengin terus Instagram & Twitter kita ya! Bakal ada info promo, event asik, menu baru yang bikin penasaran, dan giveaway buat kalian semua di Indonesia!
                    </p>
                </div>
                <div class="col-md-5 d-flex align-items-center justify-content-center">
                    <!-- Image -->
                    <img src="{{ url('images/promo.png') }}" class="img-fluid" alt="Promo Image">
                </div>
            </div>
        </div>
    </section>


</x-guest-layout>
