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
                        {{-- <ul class="about-link">
                            <li class="go-home"><a href="">Nhà trọ</a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
<!-- product info start -->
<section class="section-tb-padding pro-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-12 col-md-12 col-xs-12 pro-image">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 larg-image">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="image-11">
                                <a href="javascript:void(0)" class="long-img">
                                    <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{asset('assets/client/image/nhatro.jpg')}})">
                                        <img src="{{asset('assets/client/image/nhatro.jpg')}}" class="img-fluid" alt="image">
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <ul class="nav nav-tabs pro-page-slider owl-carousel owl-theme">
                            <li class="nav-item items">
                                <a class="nav-link active" data-bs-toggle="tab" href=""><img src="{{asset('assets/client/image/nhatro.jpg')}}" class="img-fluid" alt="image"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 pro-info">
                        <h4>Số 86, phố Thành Trung</h4>
                        <div class="rating">
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="pro-price">
                            <span class="new-price">Giá từ 100.000 đ</span>
                        </div>
                        <span class="pro-details">Địa chỉ: Số 86 - phố Thành Trung - Trâu Qùy - Gia Lâm - Hà Nội</span>
                        <div>
                            <span class="pro-details">Số điện thoại: 0912345678</span>
                        </div>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-xs-12 pro-shipping">
                <div class="product-service">
                    <div class="icon-title">
                        <span><i class="fas fa-history"></i></span>
                        <h4>THÔNG TIN CẬP NHẬT THƯƠNG XUYÊN</h4>
                    </div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting the printing and typesetting industry.
                    </p>
                </div>
                <div class="product-service">
                    <div class="icon-title">
                        <span><i class="fa-regular fa-star"></i></i></span>
                        <h4>CHẤT LƯỢNG ĐƯỢC KIỂM CHỨNG</h4>
                    </div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting the printing and typesetting industry.
                    </p>
                </div>
                <div class="product-service">
                    <div class="icon-title">
                        <span><i class="fa-regular fa-comment"></i></span>
                        <h4>ĐÁNH GIÁ KHÁCH QUAN</h4>
                    </div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting the printing and typesetting industry.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product info end -->
<!-- product page tab start -->
<section class="section-b-padding pro-page-content">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="pro-page-tab">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#tab-1">Mô tả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Đánh giá</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-1">
                            <div class="tab-1content">
                                <h4>Thông tin nhà trọ</h4>
                                <ul class="tab-description">
                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                                    <li>Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.</li>
                                    <li>Type here your detail one by one li more add</li>
                                    <li>Has been the industry’s standard dummy text ever since. Lorem Ips</li>
                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="tab-2">
                            <h4 class="reviews-title">Đánh giá</h4>
                            <div class="customer-reviews t-desk-2">
                                <span class="p-rating">
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                </span>
                                <p class="review-desck">Dựa trên đánh giá của 5 người </p>
                                <a href="#add-review" data-bs-toggle="collapse">Viết đánh giá</a>
                            </div>
                            <div class="review-form collapse" id="add-review">
                                <h4>Đánh giá của bạn</h4>
                                <form>
                                    <label>Tên</label>
                                    <input type="text" name="name" placeholder="Enter your name">
                                    <label>Email</label>
                                    <input type="text" name="mail" placeholder="Enter your Email">
                                    <label>Điểm đánh giá</label>
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <label>Tiêu đề</label>
                                    <input type="text" name="mail" placeholder="Review title">
                                    <label>Nội dung đánh giá</label>
                                    <textarea name="comment" placeholder="Write your comments"></textarea>
                                </form>
                            </div>
                            <div class="customer-reviews">
                                <span class="p-rating">
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                <h4 class="review-head">Tuyệt vời</h4>
                                <span class="reviews-editor">Nguyễn Văn A <span class="review-name"> - </span> 5, tháng 10, 2021</span>
                                <p class="r-description">Nhà trọ thoáng, mặt đường, giá cả hợp lý</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product page tab end -->
<!-- releted product start -->
<section class="section-b-padding pro-releted">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Xem thêm </h2>
                </div>
                <div class="releted-products owl-carousel owl-theme">
                    <div class="items">
                        <div class="tred-pro">
                            <div class="tr-pro-img">
                                <a href="{{route('client.motel-detail')}}">
                                    <img class="img-fluid" src="{{asset('assets/client/image/nhatro.jpg')}}" alt="pro-img1">
                                </a>
                            </div>
                            <div class="Pro-lable">
                                <span class="p-text">New</span>
                            </div>
                        </div>
                        <div class="caption">
                            <h3><a href="{{route('client.motel-detail')}}">Nhà số 86, phố Thành Trung</a></h3>
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
                    <div class="items">
                        <div class="tred-pro">
                            <div class="tr-pro-img">
                                <a href="{{route('client.motel-detail')}}">
                                    <img class="img-fluid" src="{{asset('assets/client/image/nhatro.jpg')}}" alt="pro-img1">
                                </a>
                            </div>
                            <div class="Pro-lable">
                                <span class="p-text">New</span>
                            </div>
                        </div>
                        <div class="caption">
                            <h3><a href="{{route('client.motel-detail')}}">Nhà số 86, phố Thành Trung</a></h3>
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
                    <div class="items">
                        <div class="tred-pro">
                            <div class="tr-pro-img">
                                <a href="{{route('client.motel-detail')}}">
                                    <img class="img-fluid" src="{{asset('assets/client/image/nhatro.jpg')}}" alt="pro-img1">
                                </a>
                            </div>
                            <div class="Pro-lable">
                                <span class="p-text">New</span>
                            </div>
                        </div>
                        <div class="caption">
                            <h3><a href="{{route('client.motel-detail')}}">Nhà số 86, phố Thành Trung</a></h3>
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
                    <div class="items">
                        <div class="tred-pro">
                            <div class="tr-pro-img">
                                <a href="{{route('client.motel-detail')}}">
                                    <img class="img-fluid" src="{{asset('assets/client/image/nhatro.jpg')}}" alt="pro-img1">
                                </a>
                            </div>
                            <div class="Pro-lable">
                                <span class="p-text">New</span>
                            </div>
                        </div>
                        <div class="caption">
                            <h3><a href="{{route('client.motel-detail')}}">Nhà số 86, phố Thành Trung</a></h3>
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
<!-- releted product end -->

<button id="register-motel-button" class="custom-btn" data-bs-toggle="modal" data-bs-target="#registerMotelModal">Đăng ký quảng bá phòng trọ.</button>
@endsection