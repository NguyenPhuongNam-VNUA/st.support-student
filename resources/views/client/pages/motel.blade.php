@extends('client.layouts.master')

@section('title')
Nhà trọ
@endsection

@section('content')
<!-- breadcrumb start -->
<section class="about-breadcrumb">
    <div class="about-back section-tb-padding" style="background-image: url({{ asset('assets/client/image/lecture-hall-image/toanhaTT.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-l">
                        <ul class="about-link">
                            <li class="go-home"><a href="">Nhà trọ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
<!-- product start -->
<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header-style-pro">
                    <div class="header-pro">
                        <div class="tred-pro">
                            <div class="tr-pro-img">
                                <a href="{{route('client.motel-detail')}}">
                                    <img class="img-fluid" src="{{asset('assets/client/image/nhatro.jpg')}}" alt="pro-img1">
                                    <img class="img-fluid additional-image" src="{{asset('assets/client/image/nhatro.jpg')}}" alt="additional image">
                                </a>
                            </div>
                            <div class="Pro-lable">
                                <span class="p-text">New</span>
                            </div>
                            <div class="pro-icn">
                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#motelModal"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="caption">
                            <h3><a href="{{route('client.motel-detail')}}">Nhà 86, phố Thành Trung</a></h3>
                            <div class="rating">
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="pro-price">
                                <span class="new-price">Giá từ 100.000 đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="header-pro">
                        <div class="tred-pro">
                            <div class="tr-pro-img">
                                <a href="{{route('client.motel-detail')}}">
                                    <img class="img-fluid" src="{{asset('assets/client/image/nhatro.jpg')}}" alt="pro-img1">
                                    <img class="img-fluid additional-image" src="{{asset('assets/client/image/nhatro.jpg')}}" alt="additional image">
                                </a>
                            </div>
                            <div class="Pro-lable">
                                <span class="p-text">New</span>
                            </div>
                            <div class="pro-icn">
                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#motelModal"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="caption">
                            <h3><a href="{{route('client.motel-detail')}}">Nhà 86, phố Thành Trung</a></h3>
                            <div class="rating">
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="pro-price">
                                <span class="new-price">Giá từ 100.000 đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="header-pro">
                        <div class="tred-pro">
                            <div class="tr-pro-img">
                                <a href="{{route('client.motel-detail')}}">
                                    <img class="img-fluid" src="{{asset('assets/client/image/nhatro.jpg')}}" alt="pro-img1">
                                    <img class="img-fluid additional-image" src="{{asset('assets/client/image/nhatro.jpg')}}" alt="additional image">
                                </a>
                            </div>
                            <div class="Pro-lable">
                                <span class="p-text">New</span>
                            </div>
                            <div class="pro-icn">
                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#motelModal"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="caption">
                            <h3><a href="{{route('client.motel-detail')}}">Nhà 86, phố Thành Trung</a></h3>
                            <div class="rating">
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="pro-price">
                                <span class="new-price">Giá từ 100.000 đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="header-pro">
                        <div class="tred-pro">
                            <div class="tr-pro-img">
                                <a href="{{route('client.motel-detail')}}">
                                    <img class="img-fluid" src="{{asset('assets/client/image/nhatro.jpg')}}" alt="pro-img1">
                                </a>
                            </div>
                            <div class="Pro-lable">
                                <span class="p-text">New</span>
                            </div>
                            <div class="pro-icn">
                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#motelModal"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="caption">
                            <h3><a href="{{route('client.motel-detail')}}">Nhà 86, phố Thành Trung</a></h3>
                            <div class="rating">
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="pro-price">
                                <span class="new-price">Giá từ 100.000 đ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product start -->

<!-- Register motel -->
<button id="register-motel-button" class="custom-btn" data-bs-toggle="modal" data-bs-target="#registerMotelModal">Đăng ký quảng bá phòng trọ.</button>
@endsection

