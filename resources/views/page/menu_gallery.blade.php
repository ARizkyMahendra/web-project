@extends('layout.index')
@section('content')

<!-- Hero Start-->
    <div class="hero-wrap hero-bread" style="background-image: url(../../assets/images/home2.jpg);">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Gallery</span>
                    </p>
                    <h1 class="mb-0 bread">Gallery</h1>
                </div>
            </div>
        </div>
    </div>
<!-- Hero End-->

<!-- Gallery Menu Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                <h1 class="mb-5">Menu Gallery</h1>
            </div>
            <div class="row g-5">
                @foreach ($menuGallery as $item)
                    <div class="col-md-6 col-lg-3 ">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="{{asset('storage/' . $item->image)}}"
                                    alt="Colorlib Template">
                                <span class="status">{{$item -> label}}</span>
                                <div class="overlay"></div>
                            </a>
                        </div>
                    </div>
                @endforeach  
            </div>
        </div>
    </div>
<!-- Gallery Menu End -->
@endsection