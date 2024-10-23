@extends('client.layouts.master')

@section('title')
Bài viết
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

<!-- blog start -->
<section class="section-tb-padding blog-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                <div class="left-column style-1">
                    <div class="blog-title">
                        <h4>Bài viết gần đây</h4>
                    </div>
                    <div class="left-blog">
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
            <div class="col-xl-9 col-lg-8 col-md-7 col-12">
                <div class="blog-style-1-left-list-blog">
                    <div class="blog-start">
                        <div class="blog-post">
                            <div class="blog-image">
                                <a href="">
                                    <img src="{{asset('assets/client/image/blog-image/blog-1.jpg')}}" alt="blog-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h6><a href="">Green onion knife and salad plased</a></h6>
                                </div>
                                <div class="date-comm-adit">
                                    <span class="blog-date"><i class="ti-calendar"></i> 2 Jan 2021</span>
                                    <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 1 Comment</a>
                                    <span class="blog-admin"><i class="ti-user"></i> By <span class="blog-editor">andrew louise</span></span>
                                </div>
                                <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                <a href="{{route('client.blog-detail')}}" class="read-link">
                                    <span>Read more</span>
                                    <i class="ti-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-start">
                        <div class="blog-post">
                            <div class="blog-image">
                                <a href="">
                                    <img src="{{asset('assets/client/image/blog-image/blog-1.jpg')}}" alt="blog-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h6><a href="">Green onion knife and salad plased</a></h6>
                                </div>
                                <div class="date-comm-adit">
                                    <span class="blog-date"><i class="ti-calendar"></i> 2 Jan 2021</span>
                                    <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 1 Comment</a>
                                    <span class="blog-admin"><i class="ti-user"></i> By <span class="blog-editor">andrew louise</span></span>
                                </div>
                                <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                <a href="{{route('client.blog-detail')}}" class="read-link">
                                    <span>Read more</span>
                                    <i class="ti-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-start">
                        <div class="blog-post">
                            <div class="blog-image">
                                <a href="">
                                    <img src="{{asset('assets/client/image/blog-image/blog-1.jpg')}}" alt="blog-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h6><a href="">Green onion knife and salad plased</a></h6>
                                </div>
                                <div class="date-comm-adit">
                                    <span class="blog-date"><i class="ti-calendar"></i> 2 Jan 2021</span>
                                    <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 1 Comment</a>
                                    <span class="blog-admin"><i class="ti-user"></i> By <span class="blog-editor">andrew louise</span></span>
                                </div>
                                <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                <a href="{{route('client.blog-detail')}}" class="read-link">
                                    <span>Read more</span>
                                    <i class="ti-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-page">
            <span class="page-title">Showing 1 - 5 of 6 result</span>
            <div class="page-number style-1">
                <a href="javascript:void(0)" class="active">1</a>
                <a href="javascript:void(0)">2</a>
                <a href="javascript:void(0)">3</a>
                <a href="javascript:void(0)">4</a>
                <a href="javascript:void(0)">5</a>
                <a href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- blog end -->
@endsection