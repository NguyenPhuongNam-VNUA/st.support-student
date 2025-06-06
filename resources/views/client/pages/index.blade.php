@extends('client.layouts.master')

@section('title')
    Trang chủ
@endsection

@section('content')
    <!--home page slider start-->
    @include('client.includes.home-slider')
    <!--home page slider start-->

    <!-- service start -->
    <section class="service4-section section1-t-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="service">
                        <div class="service-box">
                            <div class="s-box">
                                <div class="service-img">
                                    <a href="{{route('client.service')}}">
                                        <img src="{{ asset('assets/client/image/s-image1.png') }}" class="img-fluid"
                                            alt="s-image">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <a href="{{route('client.service')}}"><span>Dịch vụ</span></a>
                                    <p>Cung cấp thông tin về dịch vụ ăn uống, giặt là, và các cửa hàng tiện lợi,...</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-box">
                            <div class="s-box">
                                <div class="service-img">
                                    <a href="{{route('client.motel')}}">
                                        <img src="{{ asset('assets/client/image/s-image2.png') }}" class="img-fluid"
                                            alt="s-image">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <a href="{{route('client.motel')}}"><span>Nhà ở</span></a>
                                    <p>Cung cấp thông tin và đăng ký ký túc xá và giúp sinh viên kết nối với các chủ nhà
                                        thuê <trọ class=""></trọ>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="service-box">
                            <div class="s-box">
                                <div class="service-img">
                                    <a href="{{route('client.health')}}">
                                        <img src="{{ asset('assets/client/image/s-image3.png') }}" class="img-fluid"
                                            alt="s-image">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <a href="{{route('client.health')}}"><span>Sức khỏe</span></a>
                                    <p>Tìm hiểu về quy trình khám bệnh, chăm sóc sức khỏe tại trạm y tế, Tư vấn sức khỏe,...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="service-box">
                            <div class="s-box">
                                <div class="service-img">
                                    <a href="#vnua-map">
                                        <img src="{{ asset('assets/client/image/s-image5.png') }}" class="img-fluid"
                                            alt="s-image" style="width: 30px; height: 30px">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <a href="#vnua-map"><span>Vnua map</span> </a>
                                        <p>Bản đồ trực tuyến của vnua, giúp sinh viên dễ dàng tìm các giảng đường, thư viện,...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service end -->

    <!-- dịch vụ start -->
    <section class="our-products-tab section-tb-padding mt-5" style="background-color: #85dd5729">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title">
                        <h2>Dịch vụ</h2>
                    </div>
                    <div class="tab-content pro-tab-slider">
                        <div class="tab-pane fade show active" id="home">
                            <div class="home-pro-tab swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach ($services as $service)
                                        <div class="swiper-slide">
                                            <div class="blog-post">
                                                <div class="blog-image img-size">
                                                    <a href="{{ route('client.service-detail', ['slug' => $service->slug]) }}">
                                                        <img src="{{ asset('storage/' . $service->thumbnail) }}"
                                                            alt="pro-img1" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <h3 class="title my-3" style="font-size: 18px"><a href="{{ route('client.service-detail', ['slug' => $service->slug]) }}">
                                                        {{$service->name}}</a></h3>
                                                    <p class="desc mb-3">{{$service->location}}</p>
                                                    <a href="{{ route('client.service-detail', ['slug' => $service->slug]) }}" class="read-btn btn-style5">
                                                        <span class="text">Xem thêm</span>
                                                        <span class="icon"><i class='fa fa-arrow-right'></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dịch vụ end -->

    <!-- service start -->
    <section class="home-service section-b-padding my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title">
                        <h2>Nhà ở</h2>
                    </div>
                    <div class="service-area-main">
                        <div class="service-area-1 service">
                            <ul class="service-ul">
                                <li class="service-li">
                                    <div class="icon">
                                        <a href="{{ route('client.dormitory.index') }}">
                                            <span class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 640 512">
                                                    <path
                                                        d="M336 0C362.5 0 384 21.49 384 48V367.8C345.8 389.2 320 430 320 476.9C320 489.8 323.6 501.8 329.9 512H240V432C240 405.5 218.5 384 192 384C165.5 384 144 405.5 144 432V512H48C21.49 512 0 490.5 0 464V48C0 21.49 21.49 0 48 0H336zM64 272C64 280.8 71.16 288 80 288H112C120.8 288 128 280.8 128 272V240C128 231.2 120.8 224 112 224H80C71.16 224 64 231.2 64 240V272zM176 224C167.2 224 160 231.2 160 240V272C160 280.8 167.2 288 176 288H208C216.8 288 224 280.8 224 272V240C224 231.2 216.8 224 208 224H176zM256 272C256 280.8 263.2 288 272 288H304C312.8 288 320 280.8 320 272V240C320 231.2 312.8 224 304 224H272C263.2 224 256 231.2 256 240V272zM80 96C71.16 96 64 103.2 64 112V144C64 152.8 71.16 160 80 160H112C120.8 160 128 152.8 128 144V112C128 103.2 120.8 96 112 96H80zM160 144C160 152.8 167.2 160 176 160H208C216.8 160 224 152.8 224 144V112C224 103.2 216.8 96 208 96H176C167.2 96 160 103.2 160 112V144zM272 96C263.2 96 256 103.2 256 112V144C256 152.8 263.2 160 272 160H304C312.8 160 320 152.8 320 144V112C320 103.2 312.8 96 304 96H272zM576 272C576 316.2 540.2 352 496 352C451.8 352 416 316.2 416 272C416 227.8 451.8 192 496 192C540.2 192 576 227.8 576 272zM352 477.1C352 425.7 393.7 384 445.1 384H546.9C598.3 384 640 425.7 640 477.1C640 496.4 624.4 512 605.1 512H386.9C367.6 512 352 496.4 352 477.1V477.1z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="text">
                                        <a href="{{ route('client.dormitory.index') }}" class="title">Xem ký túc xá</a>
                                        {{--                                        <span class="sub-title">Alway online 24/7</span> --}}
                                    </div>
                                </li>
                                <li class="service-li">
                                    <div class="icon">
                                        <a href="{{ route('client.dormitory.index') }}">
                                            <span class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                                                    <path
                                                        d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="text">
                                        <a href="{{ route('client.dormitory.index') }}" class="title">Đăng ký ở Ký túc
                                            xá</a>
                                        {{--                                        <span class="sub-title">Orders from all item</span> --}}
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="service-area-1 service-img">
                            <img src="{{ asset('assets/client/image/logo-vnua.png') }}" class="img-fluid" alt="image">
                        </div>
                        <div class="service-area-2 service">
                            <ul class="service-ul">
                                <li class="service-li">
                                    <div class="icon">
                                        <a href="{{ route('client.motel') }}">
                                            <span class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 576 512">
                                                    <path
                                                        d="M511.8 287.6L512.5 447.7C512.6 483.2 483.9 512 448.5 512H128.1C92.75 512 64.09 483.3 64.09 448V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L416 100.7V64C416 46.33 430.3 32 448 32H480C497.7 32 512 46.33 512 64V185L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6L511.8 287.6zM288 288C323.3 288 352 259.3 352 224C352 188.7 323.3 160 288 160C252.7 160 224 188.7 224 224C224 259.3 252.7 288 288 288zM192 416H384C392.8 416 400 408.8 400 400C400 355.8 364.2 320 320 320H256C211.8 320 176 355.8 176 400C176 408.8 183.2 416 192 416z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="text">
                                        <a href="{{ route('client.motel') }}" class="title">
                                            Xem phòng trọ
                                        </a>
                                        {{--                                        <span class="sub-title">20% off by subscribing</span> --}}
                                    </div>
                                </li>
                                <li class="service-li">
                                    <div class="icon">
                                        <a href="{{ route('client.motel') }}">
                                            <span class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                                                    <path
                                                        d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="text">
                                        <a href="{{ route('client.motel') }}" class="title">Đăng ký quảng bá phòng
                                            trọ</a>
                                        {{--                                        <span class="sub-title">Money back guarantee</span> --}}
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service end -->

    <!-- sức khỏe start -->
    <section class="our-products-tab section-tb-padding home12-blog" style="background-color: #85dd5729">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title">
                        <h2>Sức khỏe</h2>
                    </div>
                    <div class="tab-content pro-tab-slider">
                        <div class="tab-pane fade show active" id="home">
                            <div class="home-pro-tab swiper-container blog-home12">
                                <div class="swiper-wrapper">
                                    @foreach ($healthsBlogs as $healthsBlog)
                                    <div class="swiper-slide">
                                        <div class="blog-start">
                                            <div class="blog-image">
                                                <a href="{{ route('client.blog-detail', ['slug' => $healthsBlog->slug]) }}">
                                                    <img src="{{ asset('storage/' . $healthsBlog->thumbnail) }}"
                                                        alt="blog-image" class="img-fluid">
                                                </a>
                                                <a href="{{ route('client.blog-detail', ['slug' => $healthsBlog->slug]) }}" class="blog-icon"><i class="icon-link icons"></i></a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-title">
                                                    <h6><a href="{{ route('client.blog-detail', ['slug' => $healthsBlog->slug]) }}">{{$healthsBlog->title}}</a></h6>
                                                </div>
                                                <p class="blog-description">
                                                    {!! Str::limit(strip_tags($healthsBlog->content), 100, '...') !!}
                                                </p>
                                                <div class="blog-date">
                                                    <span class="date">{{ \Carbon\Carbon::parse($healthsBlog->created_at)->isoFormat('D MMMM YYYY') }}</span>
                                                    <p class="blog-admin">
                                                        <span class="color-text">Danh mục</span>
                                                        <span>{{$healthsBlog->user->role->name}}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sức khỏe end -->

    <!-- vnuamap start -->
    <section class="section-tb-padding mt-5" id="vnua-map">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title">
                        <h2 class="mb-3">Vnua map</h2>
                    </div>
                    <div style="position: relative">
                        <button id="toggleView">2D</button>
                        <div id='map' style='width: 85%; height: 450px; margin: auto; '></div>
                        <div class="mapbox"></div>
                    </div>
                    <!-- Modal -->
                    <div id="imageModal" class="modal" style="display: none;">
                        <span class="close" onclick="closeModal()">x</span>
                        <img class="modal-content" id="modalImage" style="width: 100%;">
                        <div id="caption"></div>
                    </div>
                    <script>
                        const icons = @json($icons);
                        const points = @json($points);
                    </script>
                </div>
            </div>
        </div>
    </section>
    <!-- vnuamap end -->

    <!-- Blog start -->
    <section class="section-tb-padding blog1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title">
                        <h2>Tin tức gần đây</h2>
                    </div>
                    <div class="home-blog owl-carousel owl-theme">
                        @foreach ($posts as $post)
                        <div class="items">
                            <div class="blog-start">
                                <div class="blog-image">
                                    <a href="{{ route('client.blog-detail', ['slug' => $post->slug]) }}">
                                        <img src="{{ asset('storage/' . $post->thumbnail) }}"
                                            alt="blog-image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h6><a href="{{ route('client.blog-detail', ['slug' => $post->slug]) }}">{{$post->title}}</a></h6>
                                        <span class="blog-admin">Danh mục: <span class="blog-editor">{{$post->user->role->name}}</span></span>
                                    </div>
                                    <p class="blog-description">
                                        {!! Str::limit(strip_tags($post->content), 100, '...') !!}
                                    </p>
                                    <a href="{{ route('client.blog-detail', ['slug' => $post->slug]) }}" class="read-link">
                                        <span>Xem thêm</span>
                                        <i class="ti-arrow-right"></i>
                                    </a>
                                    <div class="blog-date-comment">
                                        <span class="blog-date">{{ \Carbon\Carbon::parse($post->created_at)->isoFormat('D MMMM YYYY') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="all-blog">
                        <a href="{{ route('client.blog') }}" class="btn btn-style4">Xem tất cả</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog end -->
    @if(session('loginSuccess'))
        <script>
            window.addEventListener('DOMContentLoaded', event => {
                toastr.success("{{ session('loginSuccess') }}" , {
                    timeOut: 5000,
                });
            });
        </script>
    @endif

@endsection

@section('styles-custom')
    <style>
        #header {
            position: relative;
            background-image: url("{{ asset('assets/client/image/student-login.jpg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            overflow: hidden; /* Ẩn phần dư thừa của lớp phủ */
        }

        #register-button:hover {
            background-color: rgba(255, 255, 255, 0.5);
            color: rgba(13, 51, 37, 0.8);
        }

        .toast-title {
            font-weight: 700
        }

        .toast-message {
            -ms-word-wrap: break-word;
            word-wrap: break-word
        }

        .toast-message a,
        .toast-message label {
            color: #FFF
        }

        .toast-message a:hover {
            color: #CCC;
            text-decoration: none
        }

        .toast-close-button {
            position: relative;
            right: -.3em;
            top: -.3em;
            float: right;
            font-size: 20px;
            font-weight: 700;
            color: #FFF;
            -webkit-text-shadow: 0 1px 0 #fff;
            text-shadow: 0 1px 0 #fff;
            opacity: .8;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
            filter: alpha(opacity=80);
            line-height: 1
        }

        .toast-close-button:focus,
        .toast-close-button:hover {
            color: #000;
            text-decoration: none;
            cursor: pointer;
            opacity: .4;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
            filter: alpha(opacity=40)
        }

        .rtl .toast-close-button {
            left: -.3em;
            float: left;
            right: .3em
        }

        button.toast-close-button {
            padding: 0;
            cursor: pointer;
            background: 0 0;
            border: 0;
            -webkit-appearance: none
        }

        .toast-top-center {
            top: 0;
            right: 0;
            width: 100%
        }

        .toast-bottom-center {
            bottom: 0;
            right: 0;
            width: 100%
        }

        .toast-top-full-width {
            top: 0;
            right: 0;
            width: 100%
        }

        .toast-bottom-full-width {
            bottom: 0;
            right: 0;
            width: 100%
        }

        .toast-top-left {
            top: 12px;
            left: 12px
        }

        .toast-top-right {
            top: 12px;
            right: 12px
        }

        .toast-bottom-right {
            right: 12px;
            bottom: 12px
        }

        .toast-bottom-left {
            bottom: 12px;
            left: 12px
        }

        #toast-container {
            position: fixed;
            z-index: 999999;
            pointer-events: none
        }

        #toast-container * {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        #toast-container>div {
            position: relative;
            pointer-events: auto;
            overflow: hidden;
            margin: 0 0 6px;
            padding: 15px 15px 15px 50px;
            width: 300px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            background-position: 15px center;
            background-repeat: no-repeat;
            -moz-box-shadow: 0 0 12px #999;
            -webkit-box-shadow: 0 0 12px #999;
            box-shadow: 0 0 12px #999;
            color: #FFF;
            opacity: .8;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
            filter: alpha(opacity=80)
        }

        #toast-container>div.rtl {
            direction: rtl;
            padding: 15px 50px 15px 15px;
            background-position: right 15px center
        }

        #toast-container>div:hover {
            -moz-box-shadow: 0 0 12px #000;
            -webkit-box-shadow: 0 0 12px #000;
            box-shadow: 0 0 12px #000;
            opacity: 1;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
            filter: alpha(opacity=100);
            cursor: pointer
        }

        #toast-container>.toast-info {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhLtZa9SgNBEMc9sUxxRcoUKSzSWIhXpFMhhYWFhaBg4yPYiWCXZxBLERsLRS3EQkEfwCKdjWJAwSKCgoKCcudv4O5YLrt7EzgXhiU3/4+b2ckmwVjJSpKkQ6wAi4gwhT+z3wRBcEz0yjSseUTrcRyfsHsXmD0AmbHOC9Ii8VImnuXBPglHpQ5wwSVM7sNnTG7Za4JwDdCjxyAiH3nyA2mtaTJufiDZ5dCaqlItILh1NHatfN5skvjx9Z38m69CgzuXmZgVrPIGE763Jx9qKsRozWYw6xOHdER+nn2KkO+Bb+UV5CBN6WC6QtBgbRVozrahAbmm6HtUsgtPC19tFdxXZYBOfkbmFJ1VaHA1VAHjd0pp70oTZzvR+EVrx2Ygfdsq6eu55BHYR8hlcki+n+kERUFG8BrA0BwjeAv2M8WLQBtcy+SD6fNsmnB3AlBLrgTtVW1c2QN4bVWLATaIS60J2Du5y1TiJgjSBvFVZgTmwCU+dAZFoPxGEEs8nyHC9Bwe2GvEJv2WXZb0vjdyFT4Cxk3e/kIqlOGoVLwwPevpYHT+00T+hWwXDf4AJAOUqWcDhbwAAAAASUVORK5CYII=) !important
        }

        #toast-container>.toast-error {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa/SgNBEMZzh0WKCClSCKaIYOED+AAKeQQLG8HWztLCImBrYadgIdY+gIKNYkBFSwu7CAoqCgkkoGBI/E28PdbLZmeDLgzZzcx83/zZ2SSXC1j9fr+I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10+8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8+J4C7yAoRTWI3w/4klGRgR4lO7Rpn9+gvMyWp+uxFh8+H+ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc/oO+mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB+oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq/S/B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c/HWOXJGsvVg+RA/k2MC/wN6I2YA2Pt8GkAAAAASUVORK5CYII=) !important
        }

        #toast-container>.toast-success {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==) !important
        }

        #toast-container>.toast-warning {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVEhL5ZSvTsNQFMbXZGICMYGYmJhAQIJAICYQPAACiSDB8AiICQQJT4CqQEwgJvYASAQCiZiYmJhAIBATCARJy+9rTsldd8sKu1M0+dLb057v6/lbq/2rK0mS/TRNj9cWNAKPYIJII7gIxCcQ51cvqID+GIEX8ASG4B1bK5gIZFeQfoJdEXOfgX4QAQg7kH2A65yQ87lyxb27sggkAzAuFhbbg1K2kgCkB1bVwyIR9m2L7PRPIhDUIXgGtyKw575yz3lTNs6X4JXnjV+LKM/m3MydnTbtOKIjtz6VhCBq4vSm3ncdrD2lk0VgUXSVKjVDJXJzijW1RQdsU7F77He8u68koNZTz8Oz5yGa6J3H3lZ0xYgXBK2QymlWWA+RWnYhskLBv2vmE+hBMCtbA7KX5drWyRT/2JsqZ2IvfB9Y4bWDNMFbJRFmC9E74SoS0CqulwjkC0+5bpcV1CZ8NMej4pjy0U+doDQsGyo1hzVJttIjhQ7GnBtRFN1UarUlH8F3xict+HY07rEzoUGPlWcjRFRr4/gChZgc3ZL2d8oAAAAASUVORK5CYII=) !important
        }

        #toast-container.toast-bottom-center>div,
        #toast-container.toast-top-center>div {
            width: 300px;
            margin-left: auto;
            margin-right: auto
        }

        #toast-container.toast-bottom-full-width>div,
        #toast-container.toast-top-full-width>div {
            width: 96%;
            margin-left: auto;
            margin-right: auto
        }

        .toast {
            background-color: #030303
        }

        .toast-success {
            background-color: #198754
        }

        .toast-error {
            background-color: #BD362F
        }

        .toast-info {
            background-color: #2F96B4
        }

        .toast-warning {
            background-color: #F89406
        }

        .toast-progress {
            position: absolute;
            left: 0;
            bottom: 0;
            height: 4px;
            background-color: #000;
            opacity: .4;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
            filter: alpha(opacity=40)
        }

        @media all and (max-width:240px) {
            #toast-container>div {
                padding: 8px 8px 8px 50px;
                width: 11em
            }

            #toast-container>div.rtl {
                padding: 8px 50px 8px 8px
            }

            #toast-container .toast-close-button {
                right: -.2em;
                top: -.2em
            }

            #toast-container .rtl .toast-close-button {
                left: -.2em;
                right: .2em
            }
        }

        @media all and (min-width:241px) and (max-width:480px) {
            #toast-container>div {
                padding: 8px 8px 8px 50px;
                width: 18em
            }

            #toast-container>div.rtl {
                padding: 8px 50px 8px 8px
            }

            #toast-container .toast-close-button {
                right: -.2em;
                top: -.2em
            }

            #toast-container .rtl .toast-close-button {
                left: -.2em;
                right: .2em
            }
        }

        @media all and (min-width:481px) and (max-width:768px) {
            #toast-container>div {
                padding: 15px 15px 15px 50px;
                width: 25em
            }

            #toast-container>div.rtl {
                padding: 15px 50px 15px 15px
            }
        }
    </style>
@endsection

@section('scripts-custom')
    <script>
        ! function(e) {
            e(["jquery"], function(e) {
                return function() {
                    function t(e, t, n) {
                        return g({
                            type: O.error,
                            iconClass: m().iconClasses.error,
                            message: e,
                            optionsOverride: n,
                            title: t
                        })
                    }

                    function n(t, n) {
                        return t || (t = m()), v = e("#" + t.containerId), v.length ? v : (n && (v = d(t)), v)
                    }

                    function o(e, t, n) {
                        return g({
                            type: O.info,
                            iconClass: m().iconClasses.info,
                            message: e,
                            optionsOverride: n,
                            title: t
                        })
                    }

                    function s(e) {
                        C = e
                    }

                    function i(e, t, n) {
                        return g({
                            type: O.success,
                            iconClass: m().iconClasses.success,
                            message: e,
                            optionsOverride: n,
                            title: t
                        })
                    }

                    function a(e, t, n) {
                        return g({
                            type: O.warning,
                            iconClass: m().iconClasses.warning,
                            message: e,
                            optionsOverride: n,
                            title: t
                        })
                    }

                    function r(e, t) {
                        var o = m();
                        v || n(o), u(e, o, t) || l(o)
                    }

                    function c(t) {
                        var o = m();
                        return v || n(o), t && 0 === e(":focus", t).length ? void h(t) : void(v.children().length && v.remove())
                    }

                    function l(t) {
                        for (var n = v.children(), o = n.length - 1; o >= 0; o--) u(e(n[o]), t)
                    }

                    function u(t, n, o) {
                        var s = !(!o || !o.force) && o.force;
                        return !(!t || !s && 0 !== e(":focus", t).length) && (t[n.hideMethod]({
                            duration: n.hideDuration,
                            easing: n.hideEasing,
                            complete: function() {
                                h(t)
                            }
                        }), !0)
                    }

                    function d(t) {
                        return v = e("<div/>").attr("id", t.containerId).addClass(t.positionClass), v.appendTo(e(t.target)), v
                    }

                    function p() {
                        return {
                            tapToDismiss: !0,
                            toastClass: "toast",
                            containerId: "toast-container",
                            debug: !1,
                            showMethod: "fadeIn",
                            showDuration: 300,
                            showEasing: "swing",
                            onShown: void 0,
                            hideMethod: "fadeOut",
                            hideDuration: 1e3,
                            hideEasing: "swing",
                            onHidden: void 0,
                            closeMethod: !1,
                            closeDuration: !1,
                            closeEasing: !1,
                            closeOnHover: !0,
                            extendedTimeOut: 1e3,
                            iconClasses: {
                                error: "toast-error",
                                info: "toast-info",
                                success: "toast-success",
                                warning: "toast-warning"
                            },
                            iconClass: "toast-info",
                            positionClass: "toast-top-right",
                            timeOut: 5e3,
                            titleClass: "toast-title",
                            messageClass: "toast-message",
                            escapeHtml: !1,
                            target: "body",
                            closeHtml: '<button type="button">&times;</button>',
                            closeClass: "toast-close-button",
                            newestOnTop: !0,
                            preventDuplicates: !1,
                            progressBar: !1,
                            progressClass: "toast-progress",
                            rtl: !1
                        }
                    }

                    function f(e) {
                        C && C(e)
                    }

                    function g(t) {
                        function o(e) {
                            return null == e && (e = ""), e.replace(/&/g, "&amp;").replace(/"/g, "&quot;").replace(/'/g, "&#39;").replace(/</g, "&lt;").replace(/>/g, "&gt;")
                        }

                        function s() {
                            c(), u(), d(), p(), g(), C(), l(), i()
                        }

                        function i() {
                            var e = "";
                            switch (t.iconClass) {
                                case "toast-success":
                                case "toast-info":
                                    e = "polite";
                                    break;
                                default:
                                    e = "assertive"
                            }
                            I.attr("aria-live", e)
                        }

                        function a() {
                            E.closeOnHover && I.hover(H, D), !E.onclick && E.tapToDismiss && I.click(b), E.closeButton && j && j.click(function(e) {
                                e.stopPropagation ? e.stopPropagation() : void 0 !== e.cancelBubble && e.cancelBubble !== !0 && (e.cancelBubble = !0), E.onCloseClick && E.onCloseClick(e), b(!0)
                            }), E.onclick && I.click(function(e) {
                                E.onclick(e), b()
                            })
                        }

                        function r() {
                            I.hide(), I[E.showMethod]({
                                duration: E.showDuration,
                                easing: E.showEasing,
                                complete: E.onShown
                            }), E.timeOut > 0 && (k = setTimeout(b, E.timeOut), F.maxHideTime = parseFloat(E.timeOut), F.hideEta = (new Date).getTime() + F.maxHideTime, E.progressBar && (F.intervalId = setInterval(x, 10)))
                        }

                        function c() {
                            t.iconClass && I.addClass(E.toastClass).addClass(y)
                        }

                        function l() {
                            E.newestOnTop ? v.prepend(I) : v.append(I)
                        }

                        function u() {
                            if (t.title) {
                                var e = t.title;
                                E.escapeHtml && (e = o(t.title)), M.append(e).addClass(E.titleClass), I.append(M)
                            }
                        }

                        function d() {
                            if (t.message) {
                                var e = t.message;
                                E.escapeHtml && (e = o(t.message)), B.append(e).addClass(E.messageClass), I.append(B)
                            }
                        }

                        function p() {
                            E.closeButton && (j.addClass(E.closeClass).attr("role", "button"), I.prepend(j))
                        }

                        function g() {
                            E.progressBar && (q.addClass(E.progressClass), I.prepend(q))
                        }

                        function C() {
                            E.rtl && I.addClass("rtl")
                        }

                        function O(e, t) {
                            if (e.preventDuplicates) {
                                if (t.message === w) return !0;
                                w = t.message
                            }
                            return !1
                        }

                        function b(t) {
                            var n = t && E.closeMethod !== !1 ? E.closeMethod : E.hideMethod,
                                o = t && E.closeDuration !== !1 ? E.closeDuration : E.hideDuration,
                                s = t && E.closeEasing !== !1 ? E.closeEasing : E.hideEasing;
                            if (!e(":focus", I).length || t) return clearTimeout(F.intervalId), I[n]({
                                duration: o,
                                easing: s,
                                complete: function() {
                                    h(I), clearTimeout(k), E.onHidden && "hidden" !== P.state && E.onHidden(), P.state = "hidden", P.endTime = new Date, f(P)
                                }
                            })
                        }

                        function D() {
                            (E.timeOut > 0 || E.extendedTimeOut > 0) && (k = setTimeout(b, E.extendedTimeOut), F.maxHideTime = parseFloat(E.extendedTimeOut), F.hideEta = (new Date).getTime() + F.maxHideTime)
                        }

                        function H() {
                            clearTimeout(k), F.hideEta = 0, I.stop(!0, !0)[E.showMethod]({
                                duration: E.showDuration,
                                easing: E.showEasing
                            })
                        }

                        function x() {
                            var e = (F.hideEta - (new Date).getTime()) / F.maxHideTime * 100;
                            q.width(e + "%")
                        }
                        var E = m(),
                            y = t.iconClass || E.iconClass;
                        if ("undefined" != typeof t.optionsOverride && (E = e.extend(E, t.optionsOverride), y = t.optionsOverride.iconClass || y), !O(E, t)) {
                            T++, v = n(E, !0);
                            var k = null,
                                I = e("<div/>"),
                                M = e("<div/>"),
                                B = e("<div/>"),
                                q = e("<div/>"),
                                j = e(E.closeHtml),
                                F = {
                                    intervalId: null,
                                    hideEta: null,
                                    maxHideTime: null
                                },
                                P = {
                                    toastId: T,
                                    state: "visible",
                                    startTime: new Date,
                                    options: E,
                                    map: t
                                };
                            return s(), r(), a(), f(P), E.debug && console && console.log(P), I
                        }
                    }

                    function m() {
                        return e.extend({}, p(), b.options)
                    }

                    function h(e) {
                        v || (v = n()), e.is(":visible") || (e.remove(), e = null, 0 === v.children().length && (v.remove(), w = void 0))
                    }
                    var v, C, w, T = 0,
                        O = {
                            error: "error",
                            info: "info",
                            success: "success",
                            warning: "warning"
                        },
                        b = {
                            clear: r,
                            remove: c,
                            error: t,
                            getContainer: n,
                            info: o,
                            options: {},
                            subscribe: s,
                            success: i,
                            version: "2.1.3",
                            warning: a
                        };
                    return b
                }()
            })
        }("function" == typeof define && define.amd ? define : function(e, t) {
            "undefined" != typeof module && module.exports ? module.exports = t(require("jquery")) : window.toastr = t(window.jQuery)
        });
        //# sourceMappingURL=toastr.js.map
    </script>
@endsection
