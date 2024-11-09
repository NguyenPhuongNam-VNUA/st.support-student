@extends('client.layouts.master')

@section('title')
Danh sách các phòng
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
                            <li class="go-home"><a href="index1.html">Phòng</a></li>
                            <li class="about-p"><span>Danh sách</span></li>
                        </ul> --}}
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
            <div class="col">
                <div class="full-blog-style-2">
                    <div class="blog-start">
                        <div class="blog-image">
                            <a href="blog-style-2-details.html">
                                <img src="https://sohanews.sohacdn.com/160588918557773824/2022/7/29/4hoc-vien-nong-nghiep-viet-nam-16591074416731935219354.jpg" alt="blog-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-date-comment">
                                <span class="blog-date"><i class="ti-calendar"></i> 12 Jan 2021</span>
                                <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 6 Comment</a>
                            </div>
                            <div class="blog-title">
                                <h6><a href="blog-style-2-details.html">Phòng ND101</a></h6>
                            </div>
                            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                            <div class="more-blog">
                                <a href="blog-style-2-details.html" class="read-link">
                                    <span>Read more</span>
                                    <i class="ti-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all-page">
                    <span class="page-title">Showing 1 - 5 of 6 result</span>
                    <div class="page-number style-2">
                        <a href="javascript:void(0)" class="active">1</a>
                        <a href="javascript:void(0)">2</a>
                        <a href="javascript:void(0)">3</a>
                        <a href="javascript:void(0)">4</a>
                        <a href="javascript:void(0)">5</a>
                        <a href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog start -->

<!-- blog end -->

@endsection