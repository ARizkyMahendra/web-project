@extends('layout.index')
@section('content')

<!-- Hero Start-->
    <div class="hero-wrap hero-bread" style="background-image: url(../../assets/images/home2.jpg);">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span>
                    </p>
                    <h1 class="mb-0 bread">Checkout</h1>
                </div>
            </div>
        </div>
    </div>
<!-- Hero End-->

<!-- Order Start-->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 ftco-animate">
                    <form action="#" class="billing-form">
                        <h3 class="mb-4 billing-heading">Order Details</h3>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="country">Pilih Paket</label>
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control" required>
                                        <option value="">France</option>
                                        <option value="">Italy</option>
                                        <option value="">Philippines</option>
                                        <option value="">South Korea</option>
                                        <option value="">Hongkong</option>
                                        <option value="">Japan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="country">Pilih lokasi catering</label>
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control" required>
                                        <option value="">Yogyakarta Utara</option>
                                        <option value="">Yogyakarta Selatan</option>
                                        <option value="">Yogyakarta Barat</option>
                                        <option value="">Solo</option>
                                        <option value="">Semarang</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">Firt Name</label>
                                    <input type="text" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="w-100"></div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="lastname">Alamat Lengkap</label>
                                        <input type="text" class="form-control" placeholder="" required>
                                    </div>
                                </div>                             
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailaddress">Email Address</label>
                                    <input type="text" class="form-control" placeholder="" required>
                                </div>
                            </div>
                        </div>
                    </form><!-- END -->
                </div>
                <div class="col-xl-5">
                    <div class="row mt-5 pt-3">
                        <div class="col-md-12 d-flex mb-5">
                            <div class="cart-detail cart-total p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Cart Total</h3>
                                <p class="d-flex">
                                    <span>Subtotal</span>
                                    <span>Rp. 20.60</span>
                                </p>
                                <p class="d-flex">
                                    <span>Delivery</span>
                                    <span>Rp. 0.00</span>
                                </p>
                                <p class="d-flex">
                                    <span>Discount</span>
                                    <span>Rp. 3.00</span>
                                </p>
                                <hr>
                                <p class="d-flex total-price">
                                    <span>Total</span>
                                    <span>Rp. 17.60</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="cart-detail p-3 p-md-4">
                                <p><a href="#" class="btn btn-primary py-3 px-4">Place an order</a></p>
                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section>
<!-- Order Start-->

@endsection