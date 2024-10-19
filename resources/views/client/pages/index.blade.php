@extends('client.layouts.master')

@section('title')
    Trang chủ
@endsection

@section('content')
    <!--home page slider start-->
    @include('client.includes.home-slider')
    <!--home page slider start-->

    <!--banner start-->
    <section class="t-banner1 section-tb-padding mt-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home-offer-banner">
                        <div class="o-t-banner">
                            <a href="" class="image-b">
                                <img class="img-fluid" src="{{asset('assets/client/image/banner-1.jpg')}}" alt="banner image">
                            </a>
                            <div class="o-t-content">
                                <h6>Fresh fruits, vagetable on our product</h6>
                                <a href="product.html" class="btn btn-style1">Shop now</a>
                            </div>
                        </div>
                        <div class="o-t-banner">
                            <a href="" class="image-b">
                                <img class="img-fluid" src="{{asset('assets/client/image/banner-2.jpg')}}" alt="banner image">
                            </a>
                            <div class="o-t-content banner-color">
                                <h6>Vagetable eggplant 100% fresh food</h6>
                                <a href="product.html" class="btn btn-style1">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- Our Products Tab start -->
    <section class="our-products-tab section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title">
                        <h2>Dịch vụ</h2>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home">Quán ăn</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#profile">Quán sửa chữa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact">Quán ...</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content pro-tab-slider">
                        <div class="tab-pane fade show active" id="home">
                            <div class="home-pro-tab swiper-container">
                                <div class="swiper-wrapper" >
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product.html">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="pro-img1" class="img-fluid">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                {{--                                                <div class="Pro-lable">--}}
                                                {{--                                                    <span class="p-text">Quán ăn</span>--}}
                                                {{--                                                </div>--}}
                                                <div class="pro-icn">
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_1"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption" >
                                                <h3><a href="#"> Bún bò huế cô Hoa </a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                {{--                                                <div class="pro-price">--}}
                                                {{--                                                    <span class="new-price">$117.00 USD</span>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product.html">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="pro-img1" class="img-fluid">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                {{--                                                <div class="Pro-lable">--}}
                                                {{--                                                    <span class="p-text">Quán ăn</span>--}}
                                                {{--                                                </div>--}}
                                                <div class="pro-icn">
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_1"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption" >
                                                <h3><a href="#"> Bún bò huế cô Hoa </a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                {{--                                                <div class="pro-price">--}}
                                                {{--                                                    <span class="new-price">$117.00 USD</span>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product.html">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="pro-img1" class="img-fluid">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                {{--                                                <div class="Pro-lable">--}}
                                                {{--                                                    <span class="p-text">Quán ăn</span>--}}
                                                {{--                                                </div>--}}
                                                <div class="pro-icn">
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_1"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption" >
                                                <h3><a href="#"> Bún bò huế cô Hoa </a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                {{--                                                <div class="pro-price">--}}
                                                {{--                                                    <span class="new-price">$117.00 USD</span>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product.html">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="pro-img1" class="img-fluid">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                {{--                                                <div class="Pro-lable">--}}
                                                {{--                                                    <span class="p-text">Quán ăn</span>--}}
                                                {{--                                                </div>--}}
                                                <div class="pro-icn">
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_1"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption" >
                                                <h3><a href="#"> Bún bò huế cô Hoa </a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                {{--                                                <div class="pro-price">--}}
                                                {{--                                                    <span class="new-price">$117.00 USD</span>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product.html">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="pro-img1" class="img-fluid">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                {{--                                                <div class="Pro-lable">--}}
                                                {{--                                                    <span class="p-text">Quán ăn</span>--}}
                                                {{--                                                </div>--}}
                                                <div class="pro-icn">
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_1"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption" >
                                                <h3><a href="#"> Bún bò huế cô Hoa </a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                {{--                                                <div class="pro-price">--}}
                                                {{--                                                    <span class="new-price">$117.00 USD</span>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product.html">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="pro-img1" class="img-fluid">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                {{--                                                <div class="Pro-lable">--}}
                                                {{--                                                    <span class="p-text">Quán ăn</span>--}}
                                                {{--                                                </div>--}}
                                                <div class="pro-icn">
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_1"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption" >
                                                <h3><a href="#"> Bún bò huế cô Hoa </a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                {{--                                                <div class="pro-price">--}}
                                                {{--                                                    <span class="new-price">$117.00 USD</span>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="content-buttons">
                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <div class="home-pro-tab swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product.html">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="pro-img1" class="img-fluid">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                {{--                                                <div class="Pro-lable">--}}
                                                {{--                                                    <span class="p-text">Quán ăn</span>--}}
                                                {{--                                                </div>--}}
                                                <div class="pro-icn">
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_1"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption" >
                                                <h3><a href="#"> Bún bò huế cô Hoa </a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                {{--                                                <div class="pro-price">--}}
                                                {{--                                                    <span class="new-price">$117.00 USD</span>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product.html">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="pro-img1" class="img-fluid">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                {{--                                                <div class="Pro-lable">--}}
                                                {{--                                                    <span class="p-text">Quán ăn</span>--}}
                                                {{--                                                </div>--}}
                                                <div class="pro-icn">
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_1"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption" >
                                                <h3><a href="#"> Bún bò huế cô Hoa </a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                {{--                                                <div class="pro-price">--}}
                                                {{--                                                    <span class="new-price">$117.00 USD</span>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product.html">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="pro-img1" class="img-fluid">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                {{--                                                <div class="Pro-lable">--}}
                                                {{--                                                    <span class="p-text">Quán ăn</span>--}}
                                                {{--                                                </div>--}}
                                                <div class="pro-icn">
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_1"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption" >
                                                <h3><a href="#"> Bún bò huế cô Hoa </a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                {{--                                                <div class="pro-price">--}}
                                                {{--                                                    <span class="new-price">$117.00 USD</span>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product.html">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="pro-img1" class="img-fluid">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                {{--                                                <div class="Pro-lable">--}}
                                                {{--                                                    <span class="p-text">Quán ăn</span>--}}
                                                {{--                                                </div>--}}
                                                <div class="pro-icn">
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_1"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption" >
                                                <h3><a href="#"> Bún bò huế cô Hoa </a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                {{--                                                <div class="pro-price">--}}
                                                {{--                                                    <span class="new-price">$117.00 USD</span>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product.html">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="pro-img1" class="img-fluid">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                {{--                                                <div class="Pro-lable">--}}
                                                {{--                                                    <span class="p-text">Quán ăn</span>--}}
                                                {{--                                                </div>--}}
                                                <div class="pro-icn">
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_1"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption" >
                                                <h3><a href="#"> Bún bò huế cô Hoa </a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                {{--                                                <div class="pro-price">--}}
                                                {{--                                                    <span class="new-price">$117.00 USD</span>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product.html">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="pro-img1" class="img-fluid">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                {{--                                                <div class="Pro-lable">--}}
                                                {{--                                                    <span class="p-text">Quán ăn</span>--}}
                                                {{--                                                </div>--}}
                                                <div class="pro-icn">
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_1"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption" >
                                                <h3><a href="#"> Bún bò huế cô Hoa </a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                {{--                                                <div class="pro-price">--}}
                                                {{--                                                    <span class="new-price">$117.00 USD</span>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="content-buttons">
                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact">
                            <div class="home-pro-tab swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product.html">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="pro-img1" class="img-fluid">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
{{--                                                <div class="Pro-lable">--}}
{{--                                                    <span class="p-text">Quán ăn</span>--}}
{{--                                                </div>--}}
                                                <div class="pro-icn">
{{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
{{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_1"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption" >
                                                <h3><a href="#"> Bún bò huế cô Hoa </a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
{{--                                                <div class="pro-price">--}}
{{--                                                    <span class="new-price">$117.00 USD</span>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product.html">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="pro-img1" class="img-fluid">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                {{--                                                <div class="Pro-lable">--}}
                                                {{--                                                    <span class="p-text">Quán ăn</span>--}}
                                                {{--                                                </div>--}}
                                                <div class="pro-icn">
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_1"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption" >
                                                <h3><a href="#"> Bún bò huế cô Hoa </a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                {{--                                                <div class="pro-price">--}}
                                                {{--                                                    <span class="new-price">$117.00 USD</span>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product.html">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="pro-img1" class="img-fluid">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                {{--                                                <div class="Pro-lable">--}}
                                                {{--                                                    <span class="p-text">Quán ăn</span>--}}
                                                {{--                                                </div>--}}
                                                <div class="pro-icn">
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_1"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption" >
                                                <h3><a href="#"> Bún bò huế cô Hoa </a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                {{--                                                <div class="pro-price">--}}
                                                {{--                                                    <span class="new-price">$117.00 USD</span>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product.html">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="pro-img1" class="img-fluid">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                {{--                                                <div class="Pro-lable">--}}
                                                {{--                                                    <span class="p-text">Quán ăn</span>--}}
                                                {{--                                                </div>--}}
                                                <div class="pro-icn">
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_1"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption" >
                                                <h3><a href="#"> Bún bò huế cô Hoa </a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                {{--                                                <div class="pro-price">--}}
                                                {{--                                                    <span class="new-price">$117.00 USD</span>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product.html">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="pro-img1" class="img-fluid">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                {{--                                                <div class="Pro-lable">--}}
                                                {{--                                                    <span class="p-text">Quán ăn</span>--}}
                                                {{--                                                </div>--}}
                                                <div class="pro-icn">
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_1"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption" >
                                                <h3><a href="#"> Bún bò huế cô Hoa </a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                {{--                                                <div class="pro-price">--}}
                                                {{--                                                    <span class="new-price">$117.00 USD</span>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product.html">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="pro-img1" class="img-fluid">
                                                        <img src="{{asset('assets/client/image/bbch.jpg')}}" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                {{--                                                <div class="Pro-lable">--}}
                                                {{--                                                    <span class="p-text">Quán ăn</span>--}}
                                                {{--                                                </div>--}}
                                                <div class="pro-icn">
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
                                                    {{--                                                    <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_1"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption" >
                                                <h3><a href="#"> Bún bò huế cô Hoa </a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                {{--                                                <div class="pro-price">--}}
                                                {{--                                                    <span class="new-price">$117.00 USD</span>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="content-buttons">
                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Products Tab end -->

    <!-- Trending Products Start -->
    <section class="h-t-products1 section-t-padding section-b-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title">
                        <h2>Một số bệnh phổ biến</h2>
                    </div>
                    <div class="trending-products owl-carousel owl-theme">
                        <div class="items">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="#">
                                        <img class="img-fluid" src="{{asset('assets/client/image/camcum.jpg')}}" alt="pro-img1">
                                        <img class="img-fluid additional-image" src="{{asset('assets/client/image/camcum.jpg')}}" alt="additional image">
                                    </a>
                                </div>
                                <div class="Pro-lable">
{{--                                    <span class="p-text">New</span>--}}
                                </div>
                                <div class="pro-icn">
{{--                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>--}}
{{--                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>--}}
                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal_2"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="caption">
                                <h3><a href="#">Các mẹo phòng bệnh phổ biến vào mùa đông</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trending Products end -->

    <!-- Back-image and countdown star -->
    <section class="home-countdown1">
        <div class="back-img" style="background-image: url({{asset('assets/client/image/home-slider-ktx.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="deal-content">
                                <h2>Ký túc xá là nhà</h2>
                                <h2 class="mt-2">Sinh viên là chủ</h2>
                            <span class="deal-c">Hãy đang ký để gia nhập ngôi nhà chung</span>
                            <ul class="contdown_row">
                                <li class="countdown_section">
                                    <span id="days" class="countdown_timer">00</span>
                                    <span class="countdown_title">text</span>
                                </li>
                                <li class="countdown_section">
                                    <span id="hours" class="countdown_timer">00</span>
                                    <span class="countdown_title">text</span>
                                </li>
                                <li class="countdown_section">
                                    <span id="minutes" class="countdown_timer">00</span>
                                    <span class="countdown_title">text</span>
                                </li>
                                <li class="countdown_section">
                                    <span id="seconds" class="countdown_timer">00</span>
                                    <span class="countdown_title">text</span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-style1">Đăng ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Back image and countdown end -->

    <!-- Blog start -->
    <section class="section-tb-padding blog1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title">
                        <h2>Tin tức gần đây</h2>
                    </div>
                    <div class="home-blog owl-carousel owl-theme">
                        <div class="items">
                            <div class="blog-start">
                                <div class="blog-image">
                                    <a href="#">
                                        <img src="{{asset('assets/client/image/blog-image/blog-1.jpg')}}" alt="blog-image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h6><a href="blog-style-1-details.html">Title</a></h6>
                                        <span class="blog-admin">Tác giả: <span class="blog-editor">Name</span></span>
                                    </div>
                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Text content Text content Text content Text content Text content Text content</p>
                                    <a href="blog-style-1-details.html" class="read-link">
                                        <span>Xem thêm</span>
                                        <i class="ti-arrow-right"></i>
                                    </a>
                                    <div class="blog-date-comment">
                                        <span class="blog-date">01 01 2024</span>
                                        <a href="javascript:void(0)">00 bình luận</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="blog-start">
                                <div class="blog-image">
                                    <a href="#">
                                        <img src="{{asset('assets/client/image/blog-image/blog-2.jpg')}}" alt="blog-image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h6><a href="blog-style-1-details.html">Title</a></h6>
                                        <span class="blog-admin">Tác giả: <span class="blog-editor">Name</span></span>
                                    </div>
                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Text content Text content Text content Text content Text content Text content</p>
                                    <a href="blog-style-1-details.html" class="read-link">
                                        <span>Xem thêm</span>
                                        <i class="ti-arrow-right"></i>
                                    </a>
                                    <div class="blog-date-comment">
                                        <span class="blog-date">01 01 2024</span>
                                        <a href="javascript:void(0)">00 bình luận</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="blog-start">
                                <div class="blog-image">
                                    <a href="#">
                                        <img src="{{asset('assets/client/image/blog-image/blog-3.jpg')}}" alt="blog-image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h6><a href="blog-style-1-details.html">Title</a></h6>
                                        <span class="blog-admin">Tác giả: <span class="blog-editor">Name</span></span>
                                    </div>
                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Text content Text content Text content Text content Text content Text content</p>
                                    <a href="blog-style-1-details.html" class="read-link">
                                        <span>Xem thêm</span>
                                        <i class="ti-arrow-right"></i>
                                    </a>
                                    <div class="blog-date-comment">
                                        <span class="blog-date">01 01 2024</span>
                                        <a href="javascript:void(0)">00 bình luận</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="blog-start">
                                <div class="blog-image">
                                    <a href="#">
                                        <img src="{{asset('assets/client/image/blog-image/blog-1.jpg')}}" alt="blog-image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h6><a href="blog-style-1-details.html">Title</a></h6>
                                        <span class="blog-admin">Tác giả: <span class="blog-editor">Name</span></span>
                                    </div>
                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Text content Text content Text content Text content Text content Text content</p>
                                    <a href="blog-style-1-details.html" class="read-link">
                                        <span>Xem thêm</span>
                                        <i class="ti-arrow-right"></i>
                                    </a>
                                    <div class="blog-date-comment">
                                        <span class="blog-date">01 01 2024</span>
                                        <a href="javascript:void(0)">00 bình luận</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="blog-start">
                                <div class="blog-image">
                                    <a href="#">
                                        <img src="{{asset('assets/client/image/blog-image/blog-1.jpg')}}" alt="blog-image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h6><a href="blog-style-1-details.html">Title</a></h6>
                                        <span class="blog-admin">Tác giả: <span class="blog-editor">Name</span></span>
                                    </div>
                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Text content Text content Text content Text content Text content Text content</p>
                                    <a href="blog-style-1-details.html" class="read-link">
                                        <span>Xem thêm</span>
                                        <i class="ti-arrow-right"></i>
                                    </a>
                                    <div class="blog-date-comment">
                                        <span class="blog-date">01 01 2024</span>
                                        <a href="javascript:void(0)">00 bình luận</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="blog-start">
                                <div class="blog-image">
                                    <a href="#">
                                        <img src="{{asset('assets/client/image/blog-image/blog-1.jpg')}}" alt="blog-image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h6><a href="blog-style-1-details.html">Title</a></h6>
                                        <span class="blog-admin">Tác giả: <span class="blog-editor">Name</span></span>
                                    </div>
                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Text content Text content Text content Text content Text content Text content</p>
                                    <a href="blog-style-1-details.html" class="read-link">
                                        <span>Xem thêm</span>
                                        <i class="ti-arrow-right"></i>
                                    </a>
                                    <div class="blog-date-comment">
                                        <span class="blog-date">01 01 2024</span>
                                        <a href="javascript:void(0)">00 bình luận</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="blog-start">
                                <div class="blog-image">
                                    <a href="#">
                                        <img src="{{asset('assets/client/image/blog-image/blog-1.jpg')}}" alt="blog-image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h6><a href="blog-style-1-details.html">Title</a></h6>
                                        <span class="blog-admin">Tác giả: <span class="blog-editor">Name</span></span>
                                    </div>
                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Text content Text content Text content Text content Text content Text content</p>
                                    <a href="blog-style-1-details.html" class="read-link">
                                        <span>Xem thêm</span>
                                        <i class="ti-arrow-right"></i>
                                    </a>
                                    <div class="blog-date-comment">
                                        <span class="blog-date">01 01 2024</span>
                                        <a href="javascript:void(0)">00 bình luận</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="all-blog">
                        <a href="#" class="btn btn-style4">Xem tất cả</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog end -->
@endsection
