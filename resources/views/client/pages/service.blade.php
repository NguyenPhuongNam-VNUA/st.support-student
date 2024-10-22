@extends('client.layouts.master')

@section('title')
Danh sách dịch vụ
@endsection

@section('content')

<!-- breadcrumb start -->
<section class="about-breadcrumb">
    <div class="about-back section-tb-padding" style="background-image: url({{asset('assets/client/image/footer-5.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-l">
                        <ul class="about-link">
                            <li class="go-home"><a href="index1.html">Dịch vụ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
<!-- grid-list start -->
<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="all-filter">
                    <div class="categories-page-filter">
                        <h4 class="filter-title">Danh mục</h4>
                        <a href="#category-filter" data-bs-toggle="collapse" class="filter-link"><span>Danh mục</span><i class="fa fa-angle-down"></i></a>
                        <ul class="all-option collapse" id="category-filter">
                            <li class="grid-list-option">
                                <input type="checkbox">
                                <a href="javascript:void(0)">Quán ăn<span class="grid-items">(3)</span></a>
                            </li>
                            <li class="grid-list-option">
                                <input type="checkbox">
                                <a href="javascript:void(0)">Tiệm sửa đồ<span class="grid-items">(15)</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="grid-4-product">
                    <div class="grid-pro">
                        <ul class="grid-product">
                            <li class="grid-items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="{{route('client.service-detail')}}">
                                            <img class="img-fluid" src="{{asset('assets/client/image/bunca.jpg')}}" alt="pro-img1">
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-text">New</span>
                                    </div>
                                    <div class="pro-icn">
                                        <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3><a href="product.html">Bún cá Thái G7</a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price">Giá từ 30.000 đ</span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="{{route('client.service-detail')}}">
                                            <img class="img-fluid" src="{{asset('assets/client/image/bunca.jpg')}}" alt="pro-img1">
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-text">New</span>
                                    </div>
                                    <div class="pro-icn">
                                        <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3><a href="product.html">Bún cá Thái G7</a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price">Giá từ 30.000 đ</span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="{{route('client.service-detail')}}">
                                            <img class="img-fluid" src="{{asset('assets/client/image/sua-do-dien.jpg')}}" alt="pro-img1">
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-text">New</span>
                                    </div>
                                    <div class="pro-icn">
                                        <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3><a href="product.html">Tiệm sửa đồ điện gia dụng</a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price">Giá từ 30.000 đ</span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="{{route('client.service-detail')}}">
                                            <img class="img-fluid" src="{{asset('assets/client/image/sua-do-dien.jpg')}}" alt="pro-img1">
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-text">New</span>
                                    </div>
                                    <div class="pro-icn">
                                        <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3><a href="{{route('client.service-detail')}}">Tiệm sửa đồ điện gia dụng</a></h3>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price">Giá từ 30.000 đ</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-all-page">
            <div class="page-number">
                <a href="" class="active">1</a>
                <a href="">2</a>
                <a href="">3</a>
                <a href="">4</a>
                <a href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- grid-list start -->
@endsection