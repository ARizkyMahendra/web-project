@extends('layout.index')
@section('content')

<!-- Hero Start -->
    <div class="hero-wrap hero-bread" style="background-image: url(../../assets/images/hero-about.jpg);">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>about</span>
                    </p>
                    <h1 class="mb-0 bread">tentang kami</h1>
                </div>
            </div>
        </div>
    </div>
<!-- Hero End -->

<!-- Desc Start -->
    <div class="row mt-5 align-items-center">
        <div class="col-md-7">
            <div class="content-text p-4" style="font-size: 15px; text-align: center">
                <p><span style="text-align: start;">
                    Catering Box 3 Putri merupakan salah satu catering yang mana menu-menunya sangat 
                    dinanti oleh masyarakat di Jogja, Solo, maupun Semarang. Catering Box 3 Putri berdiri 
                    sejak tahun 2020 dan mampu menyediakan berbagai macam pilihan menu, dengan jumlah atau porsi besar maupun kecil, 
                    Catering Box 3 Putri juga mampu melayani berbagai macam kalangan, seperti pejabat, mahasiswa, anak sekolah, 
                    ibu-ibu rumah tangga dan masih banyak lagi.
                </span></p>
                <p><span style="text-align: start;">
                    Catering Box 3 Putri menyediakan berbagai macam pilihan menu yang dapat dinikmati oleh berbagai macam kalangan, 
                    dan pastinya dijamin affordable. Menu yang disediakan mulai dari menu masakan Jawa sampai dengan menu modern. 
                    hal tersebut juga didukung dengan sertifikasi Halal MUI.
                </span></p>
            </div>
        </div>
        <div class="col-md-5 text-center mt-2">
            <img src="{{asset('assets/images/icon-vacation.png')}}" style="width: 40%;" alt="">
        </div>
    </div>
<!-- Desc End -->

<hr class="mb-5 mt-5">

<!-- Services Start -->
    <div class="row d-flex text-center mt-5">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <img src="{{asset('assets/images/customer.png')}}" alt="" srcset="" style="width: 80px; height: 80px;">
            <p class="m-0 fs-6 mt-3">MELAYANI 25.000+ CUSTOMER</p>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <img src="{{asset('assets/images/users-handsake.png')}}" alt="" srcset="" style="width: 80px; height: 80px;">
            <p class="m-0 fs-6 mt-3">2000+ KONSUMEN MINGGUAN</p>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <img src="{{asset('assets/images/karyawan.png')}}" alt="" srcset="" style="width: 80px; height: 80px;">
            <p class="m-0 fs-6 mt-3">80+ KARYAWAN</p>
        </div>
    </div>
<!-- Services End -->

<hr class="mt-5 mb-5">

<!-- Message Start -->
    <h5 class="text-center mt-md-5 mb-md-2 mt-5"> Contact Us </h5>
    <div class="row mb-md-5 mt-4">
        <div class="col-md-5 p-5">
            <img src="{{asset('assets/images/message.png')}}" alt="" style="width: 100%;">
        </div>
        <div class="col-md-7 p-5">
            <div class="card mb-4">
                <div class="card-header text-center">
                    <h3>Pesan</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3 row">
                        <label for="Pesan" class="form-label">Kritik dan Saran</label>
                        <textarea class="form-control" id="Pesan" rows="3"></textarea>
                    </div>
                    <button class="btn btn-primary mt-2 w-100">Kirim pesan</button>
                </div>
            </div>
        </div>
    </div>
<!-- Message End -->

@endsection