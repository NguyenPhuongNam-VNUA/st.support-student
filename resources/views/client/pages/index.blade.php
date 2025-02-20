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
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('assets/client/image/s-image1.png') }}" class="img-fluid"
                                            alt="s-image">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <span>Dịch vụ</span>
                                    <p>Cung cấp thông tin về dịch vụ ăn uống, giặt là, và các cửa hàng tiện lợi,...</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-box">
                            <div class="s-box">
                                <div class="service-img">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('assets/client/image/s-image2.png') }}" class="img-fluid"
                                            alt="s-image">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <span>Nhà ở</span>
                                    <p>Cung cấp thông tin và đăng ký ký túc xá và giúp sinh viên kết nối với các chủ nhà
                                        thuê <trọ class=""></trọ>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="service-box">
                            <div class="s-box">
                                <div class="service-img">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('assets/client/image/s-image3.png') }}" class="img-fluid"
                                            alt="s-image">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <span>Sức khỏe</span>
                                    <p>Tìm hiểu về quy trình khám bệnh, chăm sóc sức khỏe tại trạm y tế, Tư vấn sức khỏe,...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="service-box">
                            <div class="s-box">
                                <div class="service-img">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('assets/client/image/s-image5.png') }}" class="img-fluid"
                                            alt="s-image" style="width: 30px; height: 30px">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <span>Vnua map</span>
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
    <section class="section-tb-padding mt-5">
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
@endsection
