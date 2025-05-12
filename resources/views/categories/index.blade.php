<x-guest-layout>

    <!-- ------------------------ Category Hero Section ------------------------ -->
    <section>
        <div class="container" style="margin-bottom: 50px; margin-top: 50px;">
            <div class="mt-4 mt-md-0 mb-3 text-white rounded-3" style="background-color: #0b5b45; border-color: #0b5b45;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 p-5 my-auto align-center">
                            <h1 class="fw-bold" style="color:rgb(255, 255, 255); font-size: 3rem; letter-spacing: 2px; text-transform: uppercase;">Kategori Makanan & Minuman Temu Rasa</h1>
                            <p class="col-md-10">
                            Pengen coba sesuatu yang baru atau balik lagi ke favoritmu? Lihat kategori makanan dan minuman kita di bawah ini! Siapa tahu ada yang bikin kamu penasaran. Kalau udah nemu yang pas di hati, langsung klik detailnya ya!
                            </p>
                            <button class="btn btn-outline-light text-white px-4 fw-bold" type="button" style="margin-top: 30px;">
                                Lihat detail &nbsp; <i class="fas fa-arrow-down"></i>
                            </button>
                        </div>
                        <div class="col-md-4 my-auto p-0">
                            <img src="{{ url('images/landing-page/category-hero-images.png') }}"
                                class="img-fluid img-jumbotron d-none d-md-block" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------ Category Card Section ------------------------ -->
    <section>
        <div class="container mt-4 mb-5">
            <div class="row g-3">
                @foreach ($categories as $category)
                    <div class="col-md-3">
                        <div class="card card-borderless-shadow card-min-height">
                            <img src="{{ Storage::url($category->image) }}"
                                class="card-img-top card-img-top-landing-page" />
                            <div class="card-body">
                                <h5 class="card-title fw-bold"> {{ $category->name }}</h5>
                                <div class="category-card-description-wrapper">
                                    <p class="card-text category-card-description" style="font-size: 13px;">
                                        {{ $category->description }}
                                    </p>
                                </div>
                                <a href="{{ route('categories.show', $category->id) }}"
                                    class="text-white fs-12 btn mt-3" style="background-color: #0b5b45; border-color: #0b5b45;">Selengkapnya ⇾</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-guest-layout>
