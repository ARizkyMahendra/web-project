@extends('layout.index')
@section('content')
<!-- Hero Start-->
    <div class="hero-wrap hero-bread" style="background-image: url(../../assets/images/home2.jpg);">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span>
                    </p>
                    <h1 class="mb-0 bread">Contact</h1>
                </div>
            </div>
        </div>
    </div>
<!-- Hero End-->

<!-- Contact Start -->
    <div class="container-xxl pt-5 pb-3">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact</h5>
                <h1 class="mb-5">Our Location</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($contact as $item)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s" >
                        <div class="team-item text-center rounded overflow-hidden align-items-center">
                            <div class=" rounded-circle overflow-hidden m-4  ">
                                <img class="img-fluid" src="{{asset('storage/' . $item->image)}}" alt="" style="width: 250px; height: 250px;">
                            </div>
                            <h5 class="mb-0" >{{ $item -> nama_lokasi }}</h5>
                            <small style="padding: 4px;">{{ $item -> maps }}</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" 
                                    href="https://wa.me/{{ $item -> phone }}?text=Halo%20min%2C%20saya%20mau%20tanya%20tanya%20paket%20catering%20box%203%20putri">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
<!-- Contact End -->

@endsection