@extends('client.layouts.master')

@section('title')
Bài viết ABC
@endsection

@section('content')
<!-- breadcrumb start -->
<section class="about-breadcrumb">
    <div class="about-back section-tb-padding" style="background-image: url(image/about-image.jpg)">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-l">
                        <ul class="about-link">
                            <li class="go-home"><a href="index1.html">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<section class="section-tb-padding blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                        <div class="left-column style-1">
                            <div class="right-area style-1">
                            </div>
                            <div class="blog-title">
                                <h4>Bài đăng gần đây</h4>
                            </div>
                            <div class="left-blog">
                                <div class="blog-item">
                                    <div class="l-blog-image">
                                        <a href="">
                                            <img src="{{asset('assets/client/image/blog-image/blog-5.jpg')}}" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="l-blog-caption">
                                        <span class="date">10-10-2024</span>
                                        <h4><a href="">Organics mix...</a></h4>
                                    </div>
                                </div>

                                <div class="blog-item">
                                    <div class="l-blog-image">
                                        <a href="">
                                            <img src="{{asset('assets/client/image/blog-image/blog-3.jpg')}}" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="l-blog-caption">
                                        <span class="date">10-10-2024</span>
                                        <h4><a href="">Organics mix...</a></h4>
                                    </div>
                                </div>

                                <div class="blog-item">
                                    <div class="l-blog-image">
                                        <a href="">
                                            <img src="{{asset('assets/client/image/blog-image/blog-1.jpg')}}" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="l-blog-caption">
                                        <span class="date">10-10-2024</span>
                                        <h4><a href="">Organics mix...</a></h4>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                        <div class="blog-style-1-left-details">
                            <div class="single-image">
                                <a href="">
                                    <img src="{{asset('assets/client/image/blog-image/blog-2.jpg')}}" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="single-blog-content">
                                <div class="single-b-title">
                                    <h4>Green onion knife and salad placed</h4>
                                </div>
                                <div class="date-edit-comments">
                                    <div class="blog-info-wrap">
                                        <span class="blog-data date">
                                            <i class="icon-clock"></i>
                                            <span class="blog-d-n-c">Feb 10, 2021</span>
                                        </span>
                                        <span class="blog-data blog-edit">
                                            <i class="icon-user"></i>
                                            <span class="blog-d-n-c">By <span class="editor">andrew louise</span></span>
                                        </span>
                                        <span class="blog-data comments">
                                            <i class="icon-bubble"></i>
                                            <span class="blog-d-n-c">4 <span class="add-comments">comments</span></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="blog-description">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eutu, pretiumem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justotuio, rhoncus ut loret, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Intege</p>
                                    
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eutu, pretiumem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justotuio, rhoncus ut loret, imperdiet a, venenatis vitae, justo. Nullam dictum.</p>
                                    <p class="color-description"><i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus. Donec quam felis, ultricies nec,</i></p>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eutu, pretiumem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justotuio, rhoncus ut loret, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>
                                </div>
                                <div class="blog-info">
                                    <i class="fa fa-quote-left"></i>
                                    <h6>Andrew louise</h6>
                                </div>
                                <div class="blog-comments">
                                    <h4><span>5</span> Comments</h4>
                                    <div class="blog-comment-info">
                                        <ul class="comments-arae">
                                            <li class="comments-man">JM</li>
                                            <li class="comments-content">
                                                <span class="comments-result">What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting...</span>
                                                <span class="comment-name"><i>By <span class="comments-title">Jenim</span></i></span>
                                                <span class="comments-result c-date">jan 20, 2021 <a href="javascript:void(0)" class="Reply">Reply</a></span>
                                            </li>
                                        </ul>
                                        <ul class="comments-arae comment-reply">
                                            <li class="comments-man">JE</li>
                                            <li class="comments-content">
                                                <span class="comments-result">What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum...</span>
                                                <span class="comment-name"><i>By <span class="comments-title">Jenis</span></i></span>
                                                <span class="comments-result c-date">jan 15, 2021 <a href="javascript:void(0)" class="Reply">Reply</a></span>
                                            </li>
                                        </ul>
                                        
                                    </div>
                                </div>
                                <div class="comments-form">
                                    <h4>Hãy để lại bình luận của bạn</h4>
                                    <form>
                                        <label>Tên*</label>
                                        <input type="text" name="name" placeholder="Tên ...">
                                        <label>Email*</label>
                                        <input type="text" name="email" placeholder="Email ...">
                                        <label>Bình luận*</label>
                                        <textarea placeholder="Nhập vào ý kiến của bạn ..."></textarea>
                                    </form>
                                    <a href="blog-style-1-3-grid.html" class="btn-style1">Bình luận</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection