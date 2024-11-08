@extends('layout.index')
@section('content')

<!-- Hero Start-->
    <div class="hero-wrap hero-bread" style="background-image: url(../../assets/images/home2.jpg);">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Paket</span>
                    </p>
                    <h1 class="mb-0 bread">Paket Kita</h1>
                </div>
            </div>
        </div>
    </div>
<!-- Hero End-->

<!-- Package Start -->
    <div class="container-xxl project py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Paket Menu</h5>
                <h1 class="mb-5">Paket Catering</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-3">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h4 class="m-0">01. Paket Reguler</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h4 class="m-0">02. Paket Lauk Praktis</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h4 class="m-0">03. Prasmanan</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h4 class="m-0">04. Nasi Dus Kotak</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 600px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets/images/image (6).png')}}"
                                            style="object-fit: fill;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Paket Makan Reguler: Praktis, Sehat, dan Terjangkau!</h1>
                                    <p class="mb-4">Paket Makan Reguler kami yang dirancang khusus untuk memenuhi kebutuhan harian Anda. Dengan pilihan menu yang beragam setiap hari, kami memastikan Anda mendapatkan makanan yang sehat, lezat, dan seimbang.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Variasi Menu Harian</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Bahan-bahan Segar 100%</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Harga Terjangkau</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Cocok untuk Kebutuhan Harian</p>
                                    <h3>Mulai dari Rp190.000 / Minggu</h3>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 600px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets/images/image (2).png')}}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Paket Lauk Praktis: Solusi Cepat dan Lezat untuk Setiap Hari!</h1>
                                    <p class="mb-4">Paket Lauk Praktis kami. Pilihan lauk yang lezat dan bervariasi siap memenuhi kebutuhan makan Anda setiap hari. Mudah, cepat, dan tentunya nikmat, paket ini cocok untuk Anda yang sibuk tapi tetap ingin makan enak.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Pilihan Lauk Beragam</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Pengemasan Praktis</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Porsi Pas dan Mengenyangkan</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Cocok untuk Keluarga atau Individu</p>
                                    <h3>Mulai dari Rp32.000 / paket</h3>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 600px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets/images/Prasmanan.jpg')}}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Paket Prasmanan: Sajian Melimpah, Nikmat Tanpa Batas!</h1>
                                    <p class="mb-4">Dengan pilihan hidangan beragam, Anda dan tamu-tamu Anda dapat menikmati sajian lezat dengan berbagai menu yang menggugah selera. Cocok untuk acara besar maupun kecil, kami siap memberikan pengalaman kuliner yang berkesan.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Menu Fleksibel</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Kualitas Rasa Terjamin</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Porsi Melimpah</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Pilihan Menu Lengkap</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Menu yang Dapat Disesuaikan dengan Tema</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 600px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets/images/Dus-Box.jpg')}}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Paket Dus-Box: Praktis, Higienis, dan Lezat untuk Segala Kebutuhan!</h1>
                                    <p class="mb-4">Paket Dus-Box kami yang dirancang praktis untuk berbagai acara atau kebutuhan harian Anda. Setiap kotak diisi dengan menu lengkap dan seimbang, menjamin Anda tetap bisa menikmati hidangan berkualitas kapan pun dan di mana pun.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Kemasan Praktis dan Higienis</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Harga Terjangkau</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Ukuran Porsi yang Pas</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Tersedia untuk Pesanan Besar</p>
                                    <h3>Mulai dari harga 15.000 / pax</h3>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Package End -->

@endsection