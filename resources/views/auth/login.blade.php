<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Restawrant —  Admin Management Dashboard">
    <meta name="description" content="  Restawrant adalah restoran yang menyediakan berbagai macam kategori makanan mulai dari minuman,
                        dessert dan lain lain dengan harga kaki lima namun rasanya bintang lima. Outlet kita selalu
                        rame, jadi jangan lupa reservasi ya!">
    <meta name="keywords" content="Restawrant, Open Source Restaurant Website">
    <meta name="author" content="SYAUQIZAIDAN KHAIRAN KHALAF">
    <link rel="icon" href="{{ url('images/logo/TR.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('images/logo/TR.png') }}" type="image/x-icon">
    <title>Login - Temu Rasa</title>
    @include('includes.backend.style')
</head>

<body>
    <!---login-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7">
                <img class="bg-img-cover bg-center" src="{{ url('cuba/assets/images/login/login2.svg') }}"
                    alt="looginpage">
            </div>
            <div class="col-xl-5 p-0">
                <div class="login-card">
                    <div class="login-main col-10 col-md-10">
                        <form class="theme-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <h1>🥗</h1>
                            <h4>Login untuk masuk dashboard</h4>
                            <p class="mb-2">Masukkan email & password kamu buat login</p>

                            @if ($errors->any())
                                <div class="alert alert-danger py-1 mb-1">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <label class="col-form-label">Alamat Email</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-at"
                                            width="16" height="16" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="4"></circle>
                                            <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path>
                                        </svg>
                                    </span>
                                </div>
                                <input class="form-control" type="email" name="email" placeholder="contoh@gmail.com"
                                    autofocus required>
                            </div>

                            <label class="col-form-label">Password</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-lock" width="16" height="16"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <rect x="5" y="11" width="14" height="10" rx="2"></rect>
                                            <circle cx="12" cy="16" r="1"></circle>
                                            <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
                                        </svg>
                                    </span>
                                </div>
                                <input class="form-control" type="password" name="password" required
                                    placeholder="*********">
                            </div>

                            <div class="form-group mb-0">
                                <div class="checkbox p-0">
                                    <input id="checkbox1" type="checkbox" name="remember">
                                    <label class="text-muted" for="checkbox1">Ingat Password</label>
                                </div>
                                <button class="btn btn-block" type="submit" style="background-color: #0b5b45; border-color: #0b5b45;">Masuk Sekarang ⇾</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        @include('includes.backend.script')
    </div>
</body>

</html>
