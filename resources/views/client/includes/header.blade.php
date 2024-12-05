<!-- header start -->
<header class="header-area">
    <div class="header-main-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-main d-flex justify-content-between">
                        <!-- logo start -->
                        <div class="header-element logo">
                            <a href="{{route('client.index')}}">
                                <img src="{{asset('assets/admin/images/logo_vnua.png')}}" alt="logo-image" class="img-fluid logo-size">
                            </a>
                        </div>
                        <!-- logo end -->
                        <!-- search start -->
{{--                        <div class="header-element search-wrap">--}}
{{--                            <input type="text" name="search" placeholder="Bạn muốn tìm gì?">--}}
{{--                            <a href="#" class="search-btn"><i class="fa fa-search"></i></a>--}}
{{--                        </div>--}}
                        <!-- search end -->
                        <!-- header-icon start -->
                        <div class="header-element right-block-box">
                            <ul class="shop-element">
                                <li class="side-wrap nav-toggler">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                                        <span class="line"></span>
                                    </button>
                                </li>
                                @auth('students')
                                    <li class="side-wrap user-wrap">
                                        <div class="acc-desk">
                                            <div class="user-icon">
                                                <a href="#" class="user-icon-desk">
                                                    <span><i class="icon-user"></i></span>
                                                </a>
                                            </div>
                                            <div class="user-info">
                                                <span class="acc-title">{{ auth('students')->user()->name }}</span>
                                                <div class="account-login">
                                                    <a href="{{ route('student.logout') }}">Đăng xuất</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="acc-mob">
                                            <a href="#" class="user-icon">
                                                <span><i class="icon-user"></i></span>
                                            </a>
                                        </div>
                                    </li>
                                @endauth

                                @guest('students')
                                <li class="side-wrap user-wrap">
                                    <div class="acc-desk">
                                        <div class="user-icon">
                                            <a href="#" class="user-icon-desk">
                                                <span><i class="icon-user"></i></span>
                                            </a>
                                        </div>
                                        <div class="user-info">
                                            <span class="acc-title">Tài khoản</span>
                                            <div class="account-login">
                                                <a href="{{ route('student.register') }}">Đăng ký</a>
                                                <a href="{{ route('student.login') }}">Đăng nhập</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-mob">
                                        <a href="#" class="user-icon">
                                            <span><i class="icon-user"></i></span>
                                        </a>
                                    </div>
                                </li>
                                @endguest
                                <!-- <li class="side-wrap cart-wrap">
                                    <div class="shopping-widget">
                                        <div class="shopping-cart">
                                            <a href="javascript:void(0)" class="cart-count">
                                                <span class="cart-icon-wrap">
                                                    <span class="cart-icon"><i class="icon-handbag"></i></span>
                                                    <span id="cart-total" class="bigcounter">5</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                        <!-- header-icon end -->
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="main-menu-area">
                            <div class="main-navigation navbar-expand-xl">
                                <div class="box-header menu-close">
                                    <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                                </div>
                                <!-- menu start -->
                                <div class="navbar-collapse" id="navbarContent">
                                    <div class="megamenu-content">
                                        <div class="mainwrap">
                                            <ul class="main-menu">
                                                <li class="menu-link parent">
                                                    <a href="{{route('client.index')}}" class="link-title">
                                                        <i class='fa-solid fa-house me-1'></i>
                                                        <span class="sp-link-title">Trang chủ</span>
                                                        {{-- <i class="fa fa-angle-down"></i>--}}
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="{{route('client.service')}}" class="link-title">
                                                        <i class='fa-solid fa-shop me-1'></i>
                                                        <span class="sp-link-title">Dịch vụ</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="{{route('client.motel')}}" class="link-title">
                                                        <i class='fa-solid fa-house-user me-1'></i>
                                                        <span class="sp-link-title">Nhà trọ</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="{{route('client.health')}}" class="link-title">
                                                        <i class='fas fa-stethoscope me-1'></i>
                                                        <span class="sp-link-title">Sức khỏe</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="{{route('client.blog')}}" class="link-title">
                                                        <i class='fas fa-newspaper me-1'></i>
                                                        <span class="sp-link-title">Bài viết</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="{{route('client.dormitory.index')}}" class="link-title">
                                                        <i class="fa-solid fa-building-user me-1"></i>
                                                        <span class="sp-link-title">Ký túc xá</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- menu end -->
                                {{-- <div class="img-hotline">--}}
                                {{-- <div class="image-line">--}}
                                {{-- <a href="javascript:void(0)"><img src="{{asset('assets/client/image/icon_contact.png')}}" class="img-fluid" alt="image-icon"></a>--}}
                                {{-- </div>--}}
                                {{-- <div class="image-content">--}}
                                {{-- <span class="hot-l">Hotline:</span>--}}
                                {{-- <span>0123 456 789</span>--}}
                                {{-- </div>--}}
                                {{-- </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

<!-- mobile menu start -->
<div class="header-bottom-area mobile">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="main-menu-area">
                    <div class="main-navigation navbar-expand-xl" style="height: 98%; align-items: normal">
                        <div class="box-header menu-close">
                            <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                        </div>
                        <!-- menu start -->
                        <div class="navbar-collapse" id="navbarContent01" style="align-items: normal">
                            <div class="megamenu-content">
                                <div class="mainwrap d-flex flex-column justify-content-between" style="height: 100%">
                                    <ul class="main-menu" >
                                        <li class="menu-link">
                                            <a href="{{route('client.index')}}" class="link-title">
                                                <i class='fa-solid fa-house me-1'></i>
                                                <span class="sp-link-title">Trang chủ</span>
                                            </a>
                                        </li>
                                        <li class="menu-link">
                                            <a href="{{route('client.service')}}" class="link-title">
                                                <i class='fa-solid fa-shop me-1'></i>
                                                <span class="sp-link-title">Dịch vụ</span>
                                            </a>
                                        </li>
                                        <li class="menu-link">
                                            <a href="{{route('client.motel')}}" class="link-title">
                                                <i class='fa-solid fa-house-user'></i>
                                                <span class="sp-link-title">Nhà trọ</span>
                                            </a>
                                        </li>
                                        <li class="menu-link">
                                            <a href="{{route('client.health')}}" class="link-title">
                                                <i class='fas fa-stethoscope me-1'></i>
                                                <span class="sp-link-title">Sức khỏe</span>
                                            </a>
                                        </li>
                                        <li class="menu-link">
                                            <a href="{{route('client.blog')}}" class="link-title">
                                                <i class='fas fa-newspaper me-1'></i>
                                                <span class="sp-link-title">Bài viết</span>
                                            </a>
                                        </li>
                                        <li class="menu-link">
                                            <a href="{{route('client.dormitory.index')}}" class="link-title">
                                                <i class="fa-solid fa-building-user me-1"></i>
                                                <span class="sp-link-title">Ký túc xá</span>
                                            </a>
                                        </li>
                                    </ul>
                                    @auth('students')
                                    <ul class="main-menu">
                                        <li class="menu-link">
                                            <a href="{{ route('student.logout') }}" class="link-title">
                                                <i class="fa-solid fa-door-open me-1"></i>
                                                <span class="sp-link-title">Đăng xuất</span>
                                            </a>
                                        </li>
                                    </ul>
                                    @endauth
                                    @guest('students')
                                        <ul class="main-menu">
                                            <li class="menu-link">
                                                <a href="{{ route('student.login') }}" class="link-title">
                                                    <i class="fa-solid fa-arrow-right-to-bracket me-1"></i>
                                                    <span class="sp-link-title">Đăng nhập</span>
                                                </a>
                                            </li>
                                        </ul>
                                    @endguest
                                </div>
                            </div>
                        </div>
                        <!-- menu end -->
                        <div class="img-hotline">
                            <div class="image-line">
                                <a href="javascript:void(0)"><img src="" class="img-fluid" alt="image-icon"></a>
                            </div>
                            <div class="image-content">
                                <span class="hot-l">Hotline:</span>
                                <span>0123 456 789</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile menu end -->
