<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Link ke CSS Eksternal -->
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Bootstrap 5 CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Link ke Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

<!-- ------------------------ Header Section ------------------------ -->
<nav class="navbar navbar-light bg-white py-3 border-bottom sticky-top">
    <div class="container-fluid d-flex align-items-center">
        <!-- Logo and Name -->
        <a class="navbar-brand d-flex align-items-center text-dark text-decoration-none" href="/">
            <img src="{{ url('images/logo/TR.png') }}" alt="Logo" height="30" class="me-2">
            <span class="fs-3 fw-bold" style="color: #0b5b45;">Temu Rasa</span>
        </a>

        <!-- Menu Items aligned to the left (beside the logo) -->
        <ul class="nav d-flex ms-3">
            <li class="nav-item me-2">
                <a href="/" class="nav-link link-dark text-grey px-2 active" aria-current="page">Beranda</a>
            </li>
            <li class="nav-item me-2">
                <a href="/#tentang-kami" class="nav-link link-dark text-grey px-2">Tentang Kami</a>
            </li>
            <li class="nav-item me-2">
                <a href="{{ route('categories.index') }}" class="nav-link link-dark text-grey px-2">Kategori</a>
            </li>
            <li class="nav-item me-2">
                <a href="{{ route('menus.index') }}" class="nav-link link-dark text-grey px-2">Menu</a>
            </li>
            <li class="nav-item me-2">
                <a href="/#galeri-outlet" class="nav-link link-dark text-grey px-2">Galeri Kami</a>
            </li>
        </ul>

        <!-- Contact Information aligned to the right and closer to the button -->
        <div class="d-flex ms-auto me-2">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link link-dark text-grey px-2 no-effect-hover">Nomor Telepon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-dark text-grey px-2 no-effect-hover">|</a>
                </li>
                <li class="nav-item">
                    <a href="https://wa.me/+6282264563534" class="nav-link link-dark text-grey px-2" target="_blank">
                        +6282264563534</a>
                </li>
                <li class="nav-item">
                    <a href="https://wa.me/+6282245737282" target="_blank"
                        class="nav-link link-dark text-grey px-2">+6282245737282</a>
                </li>
            </ul>
        </div>

        <!-- "Buat Reservasi" Button -->
        <button class="btn text-white px-5 fw-500 ms-auto" onclick="location.href='http://127.0.0.1:8000/reservation/step-one'" type="button" style="background-color: #0b5b45; border-color: #0b5b45;">
            <i class="fas fa-calendar-plus"></i> &nbsp; &nbsp; Buat Reservasi
        </button>
    </div>
</nav>

<!-- ------------------------ Main Content Section ------------------------ -->
<main>
    {{ $slot }}
</main>

<!-- --------------------------- Footer Section ---------------------------- -->
<footer class="py-5" style="background-color: #0b5b45; border-color: #0b5b45;">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-6 border-end">
                <h4 class="fw-bold">Temu Rasa — Harga kaki lima rasa bintang lima!</h4>
                <p class="">
                    Temu Rasa menawarkan berbagai hidangan lezat, mulai dari minuman segar hingga dessert manis, semuanya dengan harga kaki lima tapi rasa bintang lima. Jangan sampai kehabisan tempat, segera reservasi!
                </p>
                <small class="d-block mb-3">
                    copyright - 2025 Team 3 | Annisa & Fikri
                </small>
            </div>

            <div class="col-6 col-md ms-0 ms-md-4">
                <h4 class="fw-bold mb-3">Navigasi Cepat</h4>
                <ul class="list-unstyled">
                    <li class="mb-1">
                        <a class="link-light text-decoration-none" href="/">
                            Beranda
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="link-light text-decoration-none" href="/#tentang-kami">
                            Tentang Kami
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="link-light text-decoration-none" href="{{ route('categories.index') }}">
                            Kategori
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="link-light text-decoration-none" href="{{ route('menus.index') }}">
                            Menu
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="link-light text-decoration-none" href="/#galeri-outlet">
                            Galeri Outlet
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h4 class="fw-bold mb-3">Sosial Media</h4>
                <ul class="list-unstyled">
                    <li class="mb-1">
                        <a class="link-light text-decoration-none" href="https://web.whatsapp.com/" target="_blank">
                            <i class="fab fa-whatsapp"></i> &nbsp; Whatsapp
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="link-light text-decoration-none" href="https://www.instagram.com/" target="_blank">
                            <i class="fab fa-instagram"></i> &nbsp; Instagram
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="link-light text-decoration-none" href="https://x.com/" target="_blank">
                            <i class="fab fa-twitter"></i> &nbsp;Twitter
                        </a>
                    </li>
                    <li class="mb-5 mb-md-1">
                        <a class="link-light text-decoration-none" href="https://www.facebook.com/" target="_blank">
                            <i class="fab fa-facebook-square"></i> &nbsp; Facebook
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>

<!-- Tambahkan Splide JS -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Splide('.splide', {
            type       : 'loop',     // Slide secara berulang
            perPage    : 1,          // Menampilkan 1 gambar per halaman
            autoplay  : true,        // Otomatis play
            arrows    : true,        // Tampilkan panah navigasi
            pagination: true,        // Tampilkan pagination (titik)
            gap       : '1rem',      // Jarak antar slide
        }).mount();                  // Mount Splide ke element
    });

    document.addEventListener('DOMContentLoaded', function () {
        new Splide('.splide2', {          // Gunakan kelas splide2 untuk inisialisasi
            type        : 'fade',         // Slide secara berulang
            perPage     : 1,              // Menampilkan 1 gambar per halaman
            rewind      :true,
            autoplay   : true,            // Otomatis berganti slide
            interval   : 5000,            // Interval berganti slide (3 detik)
            speed      : 600,             // Kecepatan transisi antar slide
            arrows     : false,           // Menyembunyikan tombol navigasi
            pagination: true,             // Menampilkan pagination
            gap        : '1rem',          // Jarak antar slide
        }).mount();
    });
    
    </script>

    <!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Testimonial Swiper -->
<script>
    var swiper = new Swiper(".testimonial-swiper", {
        slidesPerView: 1,
        spaceBetween: 12,
        loop: true, 
        pagination: {
            el: ".swiper-pagination",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 12,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 12,
            },
        },
    });
</script>

<script> 
    var swiper = new Swiper(".menu-swiper", {
        slidesPerView: 3,  // Shows 3 cards at a time
        spaceBetween: 12,  // Space between cards
        loop: true,        // Enables looping of slides
        autoplay: {
            delay: 3000,   // 3 seconds per slide
            disableOnInteraction: false,  // Keeps autoplay even when user interacts with the slider
        },
        pagination: {
            el: ".swiper-pagination",  // Pagination controls
        },
        breakpoints: {
            768: {
                slidesPerView: 2,   // On medium screens, show 2 cards
                spaceBetween: 12,
            },
            1024: {
                slidesPerView: 3,   // On large screens, show 3 cards
                spaceBetween: 12,
            },
        },
    });
</script>

</script>
</body>
</html>
