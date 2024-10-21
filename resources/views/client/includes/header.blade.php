<!-- header start -->
<header class="header-area">
    <div class="header-main-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-main">
                        <!-- logo start -->
                        <div class="header-element logo">
                            <a href="index1.html">
                                <img src="{{asset('assets/client/image/logo1.png')}}" alt="logo-image" class="img-fluid">
                            </a>
                        </div>
                        <!-- logo end -->
                        <!-- search start -->
                        <div class="header-element search-wrap">
                            <input type="text" name="search" placeholder="Bạn muốn tìm gì?">
                            <a href="search.html" class="search-btn"><i class="fa fa-search"></i></a>
                        </div>
                        <!-- search end -->
                        <!-- header-icon start -->
                        <div class="header-element right-block-box">
                            <ul class="shop-element">
                                <li class="side-wrap nav-toggler">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                                        <span class="line"></span>
                                    </button>
                                </li>
                                <li class="side-wrap notify-wrap">
                                    <a href="#" class="header-notify">
                                        <span class="notify-icon"><span class="bi bi-bell"></span></span>
                                        <span class="notify-counter">0</span>
                                    </a>
                                </li>
                                <li class="side-wrap user-wrap">
                                    <div class="acc-desk">
                                        <div class="user-icon">
                                            <a href="account.html" class="user-icon-desk">
                                                <span><i class="icon-user"></i></span>
                                            </a>
                                        </div>
                                        <div class="user-info">
                                            <span class="acc-title">Tài khoản</span>
                                            <div class="account-login">
                                                <a href="register.html">Đăng ký</a>
                                                <a href="login.html">Đăng nhập</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-mob">
                                        <a href="account.html" class="user-icon">
                                            <span><i class="icon-user"></i></span>
                                        </a>
                                    </div>
                                </li>
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
                                                    <a href="#" class="link-title">
                                                        <i class='fa-solid fa-house me-1'></i>
                                                        <span class="sp-link-title">Trang chủ</span>
{{--                                                        <i class="fa fa-angle-down"></i>--}}
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="#" class="link-title">
                                                        <i class='fa-solid fa-shop me-1'></i>
                                                        <span class="sp-link-title">Dịch vụ</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="#" class="link-title">
                                                        <i class='fa-solid fa-building-user me-1'></i>
                                                        <span class="sp-link-title">Nhà trọ</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="#" class="link-title">
                                                        <i class='fa fa-hospital-user me-1'></i>
                                                        <span class="sp-link-title">Sức khỏe</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="#" class="link-title">
                                                        <i class='fas fa-newspaper me-1'></i>
                                                        <span class="sp-link-title">Bài viết</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="{{route('client.lecture-hall')}}" class="link-title">
                                                        <i class="fa-solid fa-school me-1"></i>
                                                        <span class="sp-link-title">Giảng đường</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- menu end -->
                                <div class="img-hotline">
                                    <div class="image-line">
                                        <a href="javascript:void(0)"><img src="{{asset('assets/client/image/icon_contact.png')}}" class="img-fluid" alt="image-icon"></a>
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
    </div>
</header>
<!-- header end -->

<!-- mobile menu start -->
<div class="header-bottom-area mobile">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="main-menu-area">
                    <div class="main-navigation navbar-expand-xl">
                        <div class="box-header menu-close">
                            <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                        </div>
                        <!-- menu start -->
                        <div class="navbar-collapse" id="navbarContent01">
                            <div class="megamenu-content">
                                <div class="mainwrap">
                                    <ul class="main-menu">
                                        <li class="menu-link parent">
                                            <a href="index1.html" class="link-title">
                                                <span class="sp-link-title">Trang chủ</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <a href="#collapse-home1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <span class="sp-link-title">Trang chủ</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu sub-menu collapse" id="collapse-home1">
                                                <li class="submenu-li">
                                                    <a href="index1.html" class="submenu-link">Vegist home 01</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist-rtl/index1.html" class="submenu-link">Vegist home 01 (RTL)</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist-box/index1.html" class="submenu-link">Vegist home 01 (BOX)</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="index2.html" class="submenu-link">Vegist home 02</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="index3.html" class="submenu-link">Vegist home 03</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="index4.html" class="submenu-link">Vegist home 04</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="index5.html" class="submenu-link">Vegist home 05</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="index6.html" class="submenu-link">Vegist home 06</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="index7.html" class="submenu-link">Vegist home 07</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="index8.html" class="submenu-link">Vegist home 08</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="index9.html" class="submenu-link">Vegist home 09</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="index10.html" class="submenu-link">Vegist home 10</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="index11.html" class="submenu-link">Vegist home 11</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="index12.html" class="submenu-link">Vegist home 12</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="index13.html" class="submenu-link">Vegist home 13</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="index14.html" class="submenu-link">Vegist home 14</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="index15.html" class="submenu-link">Vegist home 15</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="index16.html" class="submenu-link">Vegist home 16</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="index17.html" class="submenu-link">Vegist home 17</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="javascript:void(0)" class="link-title">
                                                <span class="sp-link-title">Shop</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <a href="#collapse-mega-menu1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <span class="sp-link-title">Shop</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu mega-menu collapse" id="collapse-mega-menu1">
                                                <li class="megamenu-li parent">
                                                    <h2 class="sublink-title">Fresh food</h2>
                                                    <a href="#collapse-sub-mega-menu1" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                        <span>Fresh food</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-supmenu collapse" id="collapse-sub-mega-menu1">
                                                        <li class="supmenu-li"><a href="product.html">Fruit & nut</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Snack food</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Organics nut gifts</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Non dairy</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Mayonnaise</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Milk almond</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-li parent">
                                                    <h2 class="sublink-title">Mixedfruits</h2>
                                                    <a href="#collapse-fruits-menu1" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                        <span>Mixedfruits</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-supmenu collapse" id="collapse-fruits-menu1">
                                                        <li class="supmenu-li"><a href="product.html">Oranges</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Coffee creamers</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Ghee beverages</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Ranch salad</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Hemp milk</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Nuts & seeds</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-li parent">
                                                    <h2 class="sublink-title">Bananas & plantains</h2>
                                                    <a href="#collapse-banana-menu1" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                        <span>Bananas & plantains</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-supmenu collapse" id="collapse-banana-menu1">
                                                        <li class="supmenu-li"><a href="product.html">Fresh gala</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Fresh berries</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Fruit & nut</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Fifts mixed fruits</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Oranges</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Oranges</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-li parent">
                                                    <h2 class="sublink-title">Apples berries</h2>
                                                    <a href="#collapse-apple-menu1" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                        <span>Apples berries</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-supmenu collapse" id="collapse-apple-menu1">
                                                        <li class="supmenu-li"><a href="product.html">Pears produce</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Bananas</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Natural grassbeab</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Fresh green orange</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Fresh organic reachter</a></li>
                                                        <li class="supmenu-li"><a href="product.html">Balckberry 100%organic</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="grid-list.html" class="link-title">
                                                <span class="sp-link-title">Collection</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <a href="#collapse-banner-menu1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <span class="sp-link-title">Collection</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu banner-menu collapse" id="collapse-banner-menu1">
                                                <li class="menu-banner">
                                                    <a href="grid-list.html" class="menu-banner-img"><img src="image/menu-banner01.jpg" alt="menu-image" class="img-fluid"></a>
                                                    <a href="grid-list.html" class="menu-banner-title"><span>Bestseller</span></a>
                                                </li>
                                                <li class="menu-banner">
                                                    <a href="grid-list.html" class="menu-banner-img"><img src="image/menu-banner02.jpg" alt="menu-image" class="img-fluid"></a>
                                                    <a href="grid-list.html" class="menu-banner-title"><span>Special product</span></a>
                                                </li>
                                                <li class="menu-banner">
                                                    <a href="grid-list.html" class="menu-banner-img"><img src="image/menu-banner03.jpg" alt="mneu image" class="img-fluid"></a>
                                                    <a href="grid-list.html" class="menu-banner-title"><span>Featured product</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="javascript:void(0)" class="link-title">
                                                <span class="sp-link-title">Pages</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <a href="#collapse-page-menu1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <span class="sp-link-title">Pages</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu sub-menu collapse" id="collapse-page-menu1">
                                                <li class="submenu-li">
                                                    <a href="about-us.html" class="submenu-link">About us</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="javascript:void(0)" class="g-l-link"><span>Account</span> <i class="fa fa-angle-right"></i></a>
                                                    <a href="#account-menu1" data-bs-toggle="collapse" class="sub-link"><span>Account</span> <i class="fa fa-angle-down"></i></a>
                                                    <ul class="collapse blog-style-1" id="account-menu1">
                                                        <li>
                                                            <a href="order-history.html" class="sub-style"><span>Order</span></a>
                                                            <a href="order-history.html" class="blog-sub-style"><span>Order</span></a>
                                                            <a href="profile.html" class="sub-style"><span>Profile</span></a>
                                                            <a href="profile.html" class="blog-sub-style"><span>Profile</span></a>
                                                            <a href="pro-addresses.html" class="sub-style"><span>Address</span></a>
                                                            <a href="pro-addresses.html" class="blog-sub-style"><span>Address</span></a>
                                                            <a href="pro-wishlist.html" class="sub-style"><span>Wishlist</span></a>
                                                            <a href="pro-wishlist.html" class="blog-sub-style"><span>Wishlist</span></a>
                                                            <a href="pro-tickets.html" class="sub-style"><span>My tickets</span></a>
                                                            <a href="pro-tickets.html" class="blog-sub-style"><span>My tickets</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="billing-info.html" class="submenu-link">Billing info</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="cancellation.html" class="submenu-link">Cancellation</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="cart.html" class="submenu-link">Cart page</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="coming-soon.html" class="submenu-link">Coming soon</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="faq%27s.html" class="submenu-link">Faq's</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="forgot-password.html" class="submenu-link">Forgot passowrd</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="order-complete.html" class="submenu-link">Order complete</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="tracking.html" class="submenu-link">Track page</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="contact.html" class="submenu-link">Contact us</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="payment-policy.html" class="submenu-link">Payment policy</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="privacy-policy.html" class="submenu-link">privacy policy</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="return-policy.html" class="submenu-link">Return policy</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="terms-conditions.html" class="submenu-link">Terms & conditions</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="wishlist.html" class="submenu-link">Wishlist</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="sitemap.html" class="submenu-link">Sitemap</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="fnf-page.html" class="submenu-link">4 not 4</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="javascript:void(0)" class="link-title">
                                                <span class="sp-link-title">Blogs</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <a href="#blog-style1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <span class="sp-link-title">Blogs</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu sub-menu collapse" id="blog-style1">
                                                <li class="submenu-li">
                                                    <a href="javascript:void(0)" class="g-l-link"><span>Blog grid</span> <i class="fa fa-angle-right"></i></a>
                                                    <a href="#blog-style031" data-bs-toggle="collapse" class="sub-link"><span>Blog grid</span> <i class="fa fa-angle-down"></i></a>
                                                    <ul class="collapse blog-style-1" id="blog-style031">
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="#grid-1" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="grid-1">
                                                                <li><a href="blog-style-1-3-grid.html">Blog 3 grid</a></li>
                                                                <li><a href="blog-style-1-left-3-grid.html">Left blog 3 grid</a></li>
                                                                <li><a href="blog-style-1-right-3-grid.html">Right blog 3 grid</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="#grid-2" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="grid-2">
                                                                <li><a href="blog-style-2-3-grid.html">Blog 3 grid</a></li>
                                                                <li><a href="blog-style-2-left-3-grid.html">Left blog 3 grid</a></li>
                                                                <li><a href="blog-style-2-right-3-grid.html">Right blog 3 grid</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="#grid-3" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="grid-3">
                                                                <li><a href="blog-style-3-grid.html">Blog 3 grid</a></li>
                                                                <li><a href="blog-style-3-left-grid-blog.html">Left blog 3 grid</a></li>
                                                                <li><a href="blog-style-3-right-grid-blog.html">Right blog 3 grid</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="#grid-4" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="grid-4">
                                                                <li><a href="blog-style-5-3-grid.html">Blog 3 grid</a></li>
                                                                <li><a href="blog-style-5-left-3-grid.html">Left blog 3 grid</a></li>
                                                                <li><a href="blog-style-5-right-3-grid.html">Right blog 3 grid</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="#grid-5" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="grid-5">
                                                                <li><a href="blog-style-6-3-grid.html">Blog 3 grid</a></li>
                                                                <li><a href="blog-style-6-left-3-grid.html">Left blog 3 grid</a></li>
                                                                <li><a href="blog-style-6-right-3-grid.html">Right blog 3 grid</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="#grid-6" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="grid-6">
                                                                <li><a href="blog-style-7-3-grid.html">Blog 3 grid</a></li>
                                                                <li><a href="blog-style-7-left-grid-blog.html">Left blog 3 grid</a></li>
                                                                <li><a href="blog-style-7-right-grid-blog.html">Right blog 3 grid</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="javascript:void(0)" class="g-l-link"><span>Blog list</span> <i class="fa fa-angle-right"></i></a>
                                                    <a href="#blog-style-01" data-bs-toggle="collapse" class="sub-link"><span>Blog list</span> <i class="fa fa-angle-down"></i></a>
                                                    <ul class="collapse blog-style-1" id="blog-style-01">
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="#list-1a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list-1a">
                                                                <li><a href="blog-style-1-list.html">Blog list</a></li>
                                                                <li><a href="blog-style-1-left-list.html">Left blog list</a></li>
                                                                <li><a href="blog-style-1-right-list.html">Right blog list</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="#list-22a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list-22a">
                                                                <li><a href="blog-style-2-list.html">Blog list</a></li>
                                                                <li><a href="blog-style-2-left-list.html">Left blog list</a></li>
                                                                <li><a href="blog-style-2-right-list.html">Right blog list</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="#list-33a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list-33a">
                                                                <li><a href="blog-style-3-list.html">Blog list</a></li>
                                                                <li><a href="blog-style-3-left-list-blog.html">Left blog list</a></li>
                                                                <li><a href="blog-style-3-right-list-blog.html">Right blog list</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="#list-44a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list-44a">
                                                                <li><a href="blog-style-5-list-blog.html">Blog list</a></li>
                                                                <li><a href="blog-style-5-left-list.html">Left blog list</a></li>
                                                                <li><a href="blog-style-5-right-list.html">Right blog list</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="#list-55a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list-55a">
                                                                <li><a href="blog-style-6-list-blog.html">Blog list</a></li>
                                                                <li><a href="blog-style-6-left-list-blog.html">Left blog list</a></li>
                                                                <li><a href="blog-style-6-right-list-blog.html">Right blog list</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="#list-66a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list-66a">
                                                                <li><a href="blog-style-7-list-blog.html">Blog list</a></li><!--list-->
                                                                <li><a href="blog-style-7-left-list-blog.html">Left blog list</a></li><!--list-->
                                                                <li><a href="blog-style-7-right-list-blog.html">Right blog list</a></li><!--list-->
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="javascript:void(0)" class="g-l-link"><span>Blog details</span> <i class="fa fa-angle-right"></i></a>
                                                    <a href="#blog-style-02" data-bs-toggle="collapse" class="sub-link"><span>Blog Details</span> <i class="fa fa-angle-down"></i></a>
                                                    <ul class="collapse blog-style-1 ex-width" id="blog-style-02">
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog details style 1</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="#list-11a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 1</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list-11a">
                                                                <li><a href="blog-style-1-details.html">Blog details</a></li>
                                                                <li><a href="blog-style-1-left-details.html">Left blog details</a></li>
                                                                <li><a href="blog-style-1-right-details.html">Right blog details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog details style 2</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="#list2a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 2</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list2a">
                                                                <li><a href="blog-style-2-details.html">Blog details</a></li>
                                                                <li><a href="blog-style-2-left-details.html">Left blog details</a></li>
                                                                <li><a href="blog-style-2-right-details.html">Right blog details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog details style 3</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="#list3a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 3</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list3a">
                                                                <li><a href="blog-style-3-details.html">Blog details</a></li>
                                                                <li><a href="blog-style-3-left-blog-details.html">Left blog details</a></li>
                                                                <li><a href="blog-style-3-right-blog-details.html">Right blog details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog details style 4</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="#list4a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 4</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list4a">
                                                                <li><a href="blog-style-5-details.html">Blog details</a></li>
                                                                <li><a href="blog-style-5-left-details.html">Left blog details</a></li>
                                                                <li><a href="blog-style-5-right-details.html">Right blog details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog details style 5</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="#list5a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 5</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list5a">
                                                                <li><a href="blog-style-6-details.html">Blog details</a></li>
                                                                <li><a href="blog-style-6-left-details-blog.html">Left blog details</a></li>
                                                                <li><a href="blog-style-6-right-details-blog.html">Right blog details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog details style 6</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="#list6a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 6</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list6a">
                                                                <li><a href="blog-style-7-details.html">Blog details</a></li>
                                                                <li><a href="blog-style-7-left-details.html">Left blog details</a></li>
                                                                <li><a href="blog-style-7-right-details.html">Right blog details</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="javascript:void(0)" class="g-l-link"><span>Center blog</span> <i class="fa fa-angle-right"></i></a>
                                                    <a href="#center-blog-1" data-bs-toggle="collapse" class="sub-link"><span>Center blog</span> <i class="fa fa-angle-down"></i></a>
                                                    <ul class="collapse blog-style-1" id="center-blog-1">
                                                        <li>
                                                            <a href="blog-style-1-center-blog.html" class="sub-style"><span>Blog style 1</span></a>
                                                            <a href="blog-style-1-center-blog.html" class="blog-sub-style"><span>Blog style 1</span></a>
                                                            <a href="blog-style-2-center-blog.html" class="sub-style"><span>Blog style 2</span></a>
                                                            <a href="blog-style-2-center-blog.html" class="blog-sub-style"><span>Blog style 2</span></a>
                                                            <a href="blog-style-3-center-blog.html" class="sub-style"><span>Blog style 3</span></a>
                                                            <a href="blog-style-3-center-blog.html" class="blog-sub-style"><span>Blog style 3</span></a>
                                                            <a href="blog-style-5-center-blog.html" class="sub-style"><span>Blog style 4</span></a>
                                                            <a href="blog-style-5-center-blog.html" class="blog-sub-style"><span>Blog style 4</span></a>
                                                            <a href="blog-style-6-center-blog.html" class="sub-style"><span>Blog style 5</span></a>
                                                            <a href="blog-style-6-center-blog.html" class="blog-sub-style"><span>Blog style 5</span></a>
                                                            <a href="blog-style-7-center-blog.html" class="sub-style"><span>Blog style 6</span></a>
                                                            <a href="blog-style-7-center-blog.html" class="blog-sub-style"><span>Blog style 6</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="javascript:void(0)" class="link-title">
                                                <span class="sp-link-title">Feature</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <a href="#feature-1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <span class="sp-link-title">Feature</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu mega-menu collapse" id="feature-1">
                                                <li class="megamenu-li parent">
                                                    <h2 class="sublink-title">Header style</h2>
                                                    <a href="#feature-01" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                        <span>Header style</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-supmenu collapse" id="feature-01">
                                                        <li class="supmenu-li"><a href="header-style-1.html">Header style 1</a></li>
                                                        <li class="supmenu-li"><a href="header-style-2.html">Header style 2</a></li>
                                                        <li class="supmenu-li"><a href="header-style-3.html">Header style 3</a></li>
                                                        <li class="supmenu-li"><a href="header-style-4.html">Header style 4</a></li>
                                                        <li class="supmenu-li"><a href="header-style-5.html">Header style 5</a></li>
                                                        <li class="supmenu-li"><a href="header-style-6.html">Header style 6</a></li>
                                                        <li class="supmenu-li"><a href="header-style-7.html">Header style 7</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-li parent">
                                                    <h2 class="sublink-title">Footer style</h2>
                                                    <a href="#feature-02" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                        <span>Footer style</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-supmenu collapse" id="feature-02">
                                                        <li class="supmenu-li"><a href="footer-style-1.html">Footer style 1</a></li>
                                                        <li class="supmenu-li"><a href="footer-style-2.html">Footer style 2</a></li>
                                                        <li class="supmenu-li"><a href="footer-style-3.html">Footer style 3</a></li>
                                                        <li class="supmenu-li"><a href="footer-style-4.html">Footer style 4</a></li>
                                                        <li class="supmenu-li"><a href="footer-style-5.html">Footer style 5</a></li>
                                                        <li class="supmenu-li"><a href="footer-style-6.html">Footer style 6</a></li>
                                                        <li class="supmenu-li"><a href="footer-style-7.html">Footer style 7</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-li parent">
                                                    <h2 class="sublink-title">Product details</h2>
                                                    <a href="#feature-03" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                        <span>Product details</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-supmenu collapse" id="feature-03">
                                                        <li class="supmenu-li"><a href="product.html">Product details style 1</a></li>
                                                        <li class="supmenu-li"><a href="product-style-2.html">Product details style 2</a></li>
                                                        <li class="supmenu-li"><a href="product-style-3.html">Product details style 3</a></li>
                                                        <li class="supmenu-li"><a href="product-style-4.html">Product details style 4</a></li>
                                                        <li class="supmenu-li"><a href="product-style-5.html">Product details style 5</a></li>
                                                        <li class="supmenu-li"><a href="product-style-6.html">Product details style 6</a></li>
                                                        <li class="supmenu-li"><a href="product-style-7.html">Product details style 7</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-li parent">
                                                    <h2 class="sublink-title">Other style</h2>
                                                    <a href="#feature-04" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                        <span>Other style</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-supmenu collapse" id="feature-04">
                                                        <li class="supmenu-li"><a href="checkout-1.html">Checkout style 1</a></li>
                                                        <li class="supmenu-li"><a href="checkout-2.html">Checkout style 2</a></li>
                                                        <li class="supmenu-li"><a href="checkout-3.html">Checkout style 3</a></li>
                                                        <li class="supmenu-li"><a href="cart.html">Cart style 1</a></li>
                                                        <li class="supmenu-li"><a href="cart-2.html">Cart style 2</a></li>
                                                        <li class="supmenu-li"><a href="cart-3.html">Cart style 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-link">
                                            <a href="javascript:void(0)" class="link-title">
                                                <span class="sp-link-title">Buy vegist <span class="hot">Hot</span></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- menu end -->
                        <div class="img-hotline">
                            <div class="image-line">
                                <a href="javascript:void(0)"><img src="image/icon_contact.png" class="img-fluid" alt="image-icon"></a>
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
