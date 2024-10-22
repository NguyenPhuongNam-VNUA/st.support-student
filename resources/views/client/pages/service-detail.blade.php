@extends('client.layouts.master')

@section('title')
Dịch vụ
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
                            <li class="go-home"><a href="">Dịch vụ</a></li>
                        </ul>
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
                                    <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{asset('assets/client/image/bunca.jpg')}})">
                                        <img src="{{asset('assets/client/image/bunca.jpg')}}" class="img-fluid" alt="image">
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <ul class="nav nav-tabs pro-page-slider owl-carousel owl-theme">
                            <li class="nav-item items">
                                <a class="nav-link active" data-bs-toggle="tab" href="#image-11"><img src="{{asset('assets/client/image/bunca.jpg')}}" class="img-fluid" alt="image"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 pro-info">
                        <h4>Bún cá Thái G7</h4>
                        <div class="rating">
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="pro-availabale">
                            <i class="fa-solid fa-truck-fast"></i>
                            <span class="available">Nhận ship</span>
                        </div>
                        <div class="pro-price">
                            <span class="new-price">Giá từ 30.000 đ</span>
                        </div>
                        <span class="pro-details">Địa chỉ: Đường G - Trâu Qùy - Gia Lâm - Hà Nội</span>
                        <div>
                            <span class="pro-details">Số điện thoại: 0912345678</span>
                        </div>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and
                        </p>
                        <!-- <div class="pro-btn">
                            <a href="wishlist.html" class="btn btn-style1"><i class="fa fa-heart"></i></a>
                            <a href="cart.html" class="btn btn-style1"><i class="fa fa-shopping-bag"></i> Add to cart</a>
                            <a href="checkout-1.html" class="btn btn-style1">Buy now</a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-xs-12 pro-shipping">
                <div class="product-service">
                    <div class="icon-title">
                        <span><i class="fa-regular fa-hourglass"></i></span>
                        <h4>NHANH CHÓNG & KỊP THỜI</h4>
                    </div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting the printing and typesetting industry.
                    </p>
                </div>
                <div class="product-service">
                    <div class="icon-title">
                        <span><i class="fa-regular fa-star"></i></i></span>
                        <h4>UY TÍN TẠO LÊN CHẤT LƯỢNG</h4>
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
                                <h4>Thông tin quán</h4>
                                <ul class="tab-description">
                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                                    <li>Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.</li>
                                    <li>Type here your detail one by one li more add</li>
                                    <li>Has been the industry’s standard dummy text ever since. Lorem Ips</li>
                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.</li>
                                </ul>
                            </div>
                            <div class="tab-2content">
                                <h4>Menu</h4>
                                <ul class="tab-description">
                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                                    <li>Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.</li>
                                    <li>Type here your detail one by one li more add</li>
                                    <li>Has been the industry’s standard dummy text ever since. Lorem Ips</li>
                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.</li>
                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="tab-2">
                            <h4 class="reviews-title">Đánh giá của thực khách</h4>
                            <div class="customer-reviews t-desk-2">
                                <span class="p-rating">
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                </span>
                                <p class="review-desck">Dựa trên đánh giá của 5 thực khách</p>
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
                                <h4 class="review-head">Ngon tuyệt vời</h4>
                                <span class="reviews-editor">Nguyễn Văn A <span class="review-name"> - </span> 5, tháng 10, 2021</span>
                                <p class="r-description">Bún rất ngon, quán sạch sẽ và phục vụ nhiệt tình</p>
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
                    <h2>Top dịch vụ xuất sắc</h2>
                </div>
                <div class="releted-products owl-carousel owl-theme">
                    <div class="items">
                        <div class="tred-pro">
                            <div class="tr-pro-img">
                                <a href="{{route('client.service-detail')}}">
                                    <img class="img-fluid" src="{{asset('assets/client/image/bunca.jpg')}}" alt="pro-img1">
                                </a>
                            </div>
                            <div class="Pro-lable">
                                <span class="p-text">New</span>
                            </div>
                        </div>
                        <div class="caption">
                            <h3><a href="{{route('client.service-detail')}}">Bún cá Thái G7</a></h3>
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
                    </div>
                    <div class="items">
                        <div class="tred-pro">
                            <div class="tr-pro-img">
                                <a href="{{route('client.service-detail')}}">
                                    <img class="img-fluid" src="{{asset('assets/client/image/sua-do-dien.jpg')}}" alt="pro-img1">
                                </a>
                            </div>
                            <div class="Pro-lable">
                                <span class="p-text">New</span>
                            </div>
                        </div>
                        <div class="caption">
                            <h3><a href="{{route('client.service-detail')}}">Tiệm sửa chữa đồ điện gia dụng</a></h3>
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
                    </div>
                    <div class="items">
                        <div class="tred-pro">
                            <div class="tr-pro-img">
                                <a href="{{route('client.service-detail')}}">
                                    <img class="img-fluid" src="{{asset('assets/client/image/bunca.jpg')}}" alt="pro-img1">
                                </a>
                            </div>
                            <div class="Pro-lable">
                                <span class="p-text">New</span>
                            </div>
                        </div>
                        <div class="caption">
                            <h3><a href="{{route('client.service-detail')}}">Bún cá Thái G7</a></h3>
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
                    </div>
                    <div class="items">
                        <div class="tred-pro">
                            <div class="tr-pro-img">
                                <a href="{{route('client.service-detail')}}">
                                    <img class="img-fluid" src="{{asset('assets/client/image/sua-do-dien.jpg')}}" alt="pro-img1">
                                </a>
                            </div>
                            <div class="Pro-lable">
                                <span class="p-text">New</span>
                            </div>
                        </div>
                        <div class="caption">
                            <h3><a href="{{route('client.service-detail')}}">Tiệm sửa chữa đồ điện gia dụng</a></h3>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- releted product end -->
<!-- quick veiw start -->
<section class="quick-view">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Product quickview</h5>
                    <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
                </div>
                <div class="quick-veiw-area">
                    <div class="quick-image">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="image-1">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="image/pro-page-image/pro-page-image.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-2">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="image/pro-page-image/prro-page-image01.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-3">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="image/pro-page-image/pro-page-image1-1.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-4">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="image/pro-page-image/pro-page-image1.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-5">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="image/pro-page-image/pro-page-image2.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-6">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="image/pro-page-image/pro-page-image2-2.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-7">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="image/pro-page-image/pro-page-image3.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-8">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="image/pro-page-image/pro-page-image03.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                        </div>
                        <ul class="nav nav-tabs quick-slider owl-carousel owl-theme">
                            <li class="nav-item items">
                                <a class="nav-link active" data-bs-toggle="tab" href="#image-1"><img src="image/pro-page-image/image1.jpg" class="img-fluid" alt="image"></a>
                            </li>
                            <li class="nav-item items">
                                <a class="nav-link" data-bs-toggle="tab" href="#image-2"><img src="image/pro-page-image/image2.jpg" class="img-fluid" alt="iamge"></a>
                            </li>
                            <li class="nav-item items">
                                <a class="nav-link" data-bs-toggle="tab" href="#image-3"><img src="image/pro-page-image/image3.jpg" class="img-fluid" alt="image"></a>
                            </li>
                            <li class="nav-item items">
                                <a class="nav-link" data-bs-toggle="tab" href="#image-4"><img src="image/pro-page-image/image4.jpg" class="img-fluid" alt="image"></a>
                            </li>
                            <li class="nav-item items">
                                <a class="nav-link" data-bs-toggle="tab" href="#image-5"><img src="image/pro-page-image/image5.jpg" class="img-fluid" alt="image"></a>
                            </li>
                            <li class="nav-item items">
                                <a class="nav-link" data-bs-toggle="tab" href="#image-6"><img src="image/pro-page-image/image6.jpg" class="img-fluid" alt="image"></a>
                            </li>
                            <li class="nav-item items">
                                <a class="nav-link" data-bs-toggle="tab" href="#image-7"><img src="image/pro-page-image/image8.jpg" class="img-fluid" alt="image"></a>
                            </li>
                            <li class="nav-item items">
                                <a class="nav-link" data-bs-toggle="tab" href="#image-8"><img src="image/pro-page-image/image7.jpg" class="img-fluid" alt="image"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="quick-caption">
                        <h4>Fresh organic reachter</h4>
                        <div class="quick-price">
                            <span class="new-price">$350.00 USD</span>
                            <span class="old-price"><del>$399.99 USD</del></span>
                        </div>
                        <div class="quick-rating">
                            <i class="fa fa-star c-star"></i>
                            <i class="fa fa-star c-star"></i>
                            <i class="fa fa-star c-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="pro-description">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                        </div>
                        <div class="pro-size">
                            <label>Size: </label>
                            <select>
                                <option>1 ltr</option>
                                <option>3 ltr</option>
                                <option>5 ltr</option>
                            </select>
                        </div>
                        <div class="plus-minus">
                            <span>
                                <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                <input type="text" name="name" value="1">
                                <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                            </span>
                            <a href="cart.html" class="quick-cart"><i class="fa fa-shopping-bag"></i></a>
                            <a href="wishlist.html" class="quick-wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- quick veiw end -->
@endsection