$(document).ready(function(){
 "use strict";

/*==============================================================
    Fullscreen Height
==============================================================*/
function resizefullscreen() {
    var minheight = $(window).height();
    $(".fullscreen").css('min-height', minheight);
}
$(window).resize(function () {
    resizefullscreen();
});
resizefullscreen();


// Chạy khi trang bắt đầu load
    window.addEventListener('load', function() {
        // Ẩn loader sau khi trang đã tải xong
        document.getElementById('page_loader').style.display = 'none';
    });

    // Chạy khi trang bắt đầu tải
    document.onreadystatechange = function() {
        if (document.readyState === "loading") {
            // Hiển thị loader
            document.getElementById('page_loader').style.display = 'block';
        }
    };

/*==============================================================
// toggler js
==============================================================*/

$("button.navbar-toggler").on('click', function(){
    $(".main-menu-area").addClass("active");
    $(".mm-fullscreen-bg").addClass("active");
    $("body").addClass("hidden");
});

$(".close-box").on('click', function(){
    $(".main-menu-area").removeClass("active");
    $(".mm-fullscreen-bg").removeClass("active");
    $("body").removeClass("hidden");
});

$(".mm-fullscreen-bg").on('click', function(){
    $(".main-menu-area").removeClass("active");
    $(".mm-fullscreen-bg").removeClass("active");
    $("body").removeClass("hidden");
});

/*==============================================================
// cart js
==============================================================*/

$(".shopping-cart a.cart-count").on('click', function(){
    $(".mini-cart").addClass("show");
    $(".mm-fullscreen-bg").addClass("active");
    $("body").addClass("hidden");
});

$(".shopping-cart-close").on('click', function(){
    $(".mini-cart").removeClass("show");
    $(".mm-fullscreen-bg").removeClass("active");
    $("body").removeClass("hidden");
});

$(".mm-fullscreen-bg").on('click', function(){
    $(".mini-cart").removeClass("show");
    $(".mm-fullscreen-bg").removeClass("active");
    $("body").removeClass("hidden");
});

/*==============================================================
// header sticky
==============================================================*/
  $(window).scroll(function() {
    var sticky = $('.header-main-area');
    var sidebar = $('.menu-sidebar');
    scroll = $(window).scrollTop();
    if (scroll >= 150) {
      sticky.addClass('is-sticky');
      // sidebar.addClass('is-sticky-sidebar');
    }
    else {
      sticky.removeClass('is-sticky');
      // sidebar.removeClass('is-sticky-sidebar');
    }
  });

/*==============================================================
// home slider
==============================================================*/
$('.home-slider').owlCarousel({
    loop: true,
    items: 1,
    margin: 0,
    nav: true,
    navText : ['<i class="fa fa-angle-double-left"></i>','<i class="fa fa-angle-double-right"></i>'],
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    slideTransition: 'linear',
    smartSpeed: 800
});

$('.home-slider2').owlCarousel({
    loop: true,
    items: 1,
    margin: 0,
    nav: true,
    navText : ['<i class="fa fa-angle-double-left"></i>','<i class="fa fa-angle-double-right"></i>'],
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    fade: true,
    transitionStyle: "fade",
    animateOut: 'fadeOut',
    animateIn: 'fadeIn'
});

/*==============================================================
// category image slider
==============================================================*/
$('.home-category').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    autoplay: false,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive:{
        0: {
          items: 1,
          margin: 15
        },
        320: {
          items: 2,
          margin: 15
        },
        479: {
          items: 2,
          margin: 15
        },
        540: {
          items: 3,
          margin: 15
        },
        750: {
          items: 3,
          margin: 15
        },
        768: {
          items: 3
        },
        979: {
          items: 5
        },
        1199: {
          items: 5
        },
        1399: {
          items: 6
        },
        1599: {
          items: 6
        }
    }
});

/*==============================================================
// trending products slider
==============================================================*/

$('.trending-products').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    responsive: {
      0: {
        items: 2,
        margin: 15
      },
      479: {
        items: 2,
        margin: 15
      },
      540: {
        items: 2,
        margin: 15
      },
      640: {
        items: 3,
        margin: 15
      },
      768: {
        items: 3
      },
      979: {
        items: 4
      },
      1199: {
        items: 4
      }
    }
});

/*==============================================================
//quick view slider
==============================================================*/
  $('.quick-slider').owlCarousel({
    loop: false,
    margin: 10,
    autoHeight : true,
    nav: false,
    dots: false,
    autoplay: false,
    sautoplayTimeout: 1000,
    autoplayHoverPause: true,
    responsive:{
      0:{
        items:3
      },
      600:{
        items:3
      },
      1000:{
        items:4
      }
    }
  });

/*==============================================================
// deal countdown js
==============================================================*/
    if(document.getElementById('days1'))
    {
        const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;
        x = setInterval(function() {
        if(document.querySelectorAll('.contdown_row').length == 1){
                document.getElementById('days').innerText = Math.floor(distance / (day)),
                document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
                document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
                document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
        }else{
            var i;
            for (i = 1; i <= document.querySelectorAll('.contdown_row').length; i++) {
                console.log($('[data-timer='+i+']').attr('data-date'));
                var date_date = $('[data-timer='+i+']').attr('data-date');
                var date_timer = $('.contdown_row').attr('data-timer');
                    var countDown = new Date(date_date).getTime();
                    var now = new Date().getTime();
                    var distance = countDown - now;
                    if(document.getElementById('days'+[i])){
                        document.getElementById('days'+[i]).innerText = Math.floor(distance / (day)),
                        document.getElementById('hours'+[i]).innerText = Math.floor((distance % (day)) / (hour)),
                        document.getElementById('minutes'+[i]).innerText = Math.floor((distance % (hour)) / (minute)),
                        document.getElementById('seconds'+[i]).innerText = Math.floor((distance % (minute)) / second);
                    }
                }
            }
        }, second)
    }

/*==============================================================
// swiper product-tab slider
==============================================================*/
var swiper = new Swiper('.swiper-container.home-pro-tab', {
    slidesPerView: 3,
    slidesPerColumn: 1,
    nav:true,
    spaceBetween: 30,
    observer: true,
    observeParents: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 15
        },
        640: {
            slidesPerView: 1,
            spaceBetween: 15
        },
        767: {
            slidesPerView: 3,
            spaceBetween: 15
        },
        991: {
            slidesPerView: 3
        },
        1199: {
            slidesPerView: 4
        }
    }
});

/*==============================================================
// testimonials slider
==============================================================*/
$('.testi-m').owlCarousel({
    loop: false,
    rewind: true,
    nav: true,
    margin: 30,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 1,
            margin: 15
        },
        768: {
            items: 2
        },
        979: {
            items: 2
        },
        1199: {
            items: 2
        }
    }
});

/*==============================================================
// blog slider
==============================================================*/

$('.home-blog').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 2,
            margin: 15
        },
        768: {
            items: 2
        },
        979: {
            items: 2
        },
        1199: {
            items: 3
        }
    }
});

/*==============================================================
// brand-logo slider
==============================================================*/

$('.brand-carousel').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: false,
    dots: false,
    autoplay: true,
    slideTransition: 'linear',
    autoplaySpeed: 3000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 2
        },
        479: {
            items: 2
        },
        540: {
            items: 3
        },
        768: {
            items: 5
        },
        979: {
            items: 6
        },
        1199: {
            items: 6
        }
    }
});

/*==============================================================
// back to top js
==============================================================*/

$(window).on('scroll',function() {
    if ($(this).scrollTop() > 600) {
        $('#top').addClass('show');
    } else {
        $('#top').removeClass('show');
    }
});
$('#top').on('click',function() {
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
});

    });

/*==============================================================
// swiper product-tab slider
==============================================================*/
var swiper = new Swiper('.swiper-container.our-products-tab', {
    slidesPerView: 3,
    slidesPerColumn: 3,
    spaceBetween: 30,
    observer: true,
    observeParents: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 15
        },
        640: {
            slidesPerView: 1,
            spaceBetween: 15
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 2,
            slidesPerColumn: 3
        }
    }
});
/*==============================================================
// featured products slider
==============================================================*/

$('.featured').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items: 2,
            margin: 15
        },
        479:{
            items: 2,
            margin: 15
        },
        640:{
            items: 3,
            margin: 15
        },
        768:{
            items: 3
        },
        979:{
            items: 4
        },
        1199:{
            items: 5
        }
    }
});
/*==============================================================
// swiper product-tab slider
==============================================================*/

var swiper = new Swiper('.swiper-container.our-pro-tab', {
    slidesPerView: 4,
    slidesPerColumn: 1,
    spaceBetween: 30,
    observer: true,
    observeParents: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    breakpoints: {
        0: {
            slidesPerView: 2,
            spaceBetween: 15
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 15
        },
        767: {
            slidesPerView: 3,
            spaceBetween: 15
        },
        768: {
            slidesPerView: 3
        },
        1024: {
            slidesPerView: 3
        },
        1199: {
            slidesPerView: 4
        }
    }
});
/*==============================================================
// special products swiper
==============================================================*/

var swiper = new Swiper('.swiper-container.special-pro', {
    slidesPerView: 1,
    slidesPerColumn: 3,
    observer: true,
    observeParents: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        0: {
            slidesPerColumn: 2,
            slidesPerView: 1,
        },
        640: {
            slidesPerColumn: 2,
            slidesPerView: 1,
        },
        768: {
            slidesPerColumn: 3,
            slidesPerView: 2,
        },
        1024: {
            slidesPerColumn: 2
        }
    }
});
/*==============================================================
// testimonials slider
==============================================================*/

$('.testi-3').owlCarousel({
    loop: false,
    rewind: true,
    nav: false,
    margin: 30,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 1,
            margin: 15
        },
        768: {
            items: 1
        },
        979: {
            items: 1
        },
        1199: {
            items: 1
        }
    }
});

/*==============================================================
// deal of the day
==============================================================*/

$('.deal-day').owlCarousel({
    loop: false,
    rewind: true,
    nav: true,
    dots:false,
    margin: 30,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 2,
            margin: 15
        },
        768: {
            items: 1
        },
        979: {
            items: 1
        },
        1199: {
            items: 1
        }
    }
});
/*==============================================================
// trending products swiper
==============================================================*/

var swiper = new Swiper('.swiper-container.trening-left-pro', {
    slidesPerView: 1,
    slidesPerColumn: 3,
    observer: true,
    observeParents: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        0: {
            slidesPerColumn: 2,
            slidesPerView: 1,
        },
        640: {
            slidesPerColumn: 2,
            slidesPerView: 1,
        },
        768: {
            slidesPerColumn: 3,
            slidesPerView: 2,
        },
        1024: {
            slidesPerColumn: 2
        }
    }
});

/*==============================================================
// featured products slider
==============================================================*/

$('.featured-products-slider').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    autoplay: true,
    sautoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items: 2,
            margin: 15
        },
        479:{
            items: 2,
            margin: 15
        },
        640:{
            items: 3,
            margin: 15
        },
        768:{
            items: 3
        },
        979:{
            items: 3
        },
        1199:{
            items: 4
        }
    }
});

// **************************************** cart page********************************************

/* ==========================================
  Minus and Plus Btn Height
  ========================================== */

$('.minus-btn,.minus-btn-1').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val(),10);

    if (value > 1) {
        value = value - 1;
    } else {
        value = 0;
    }
    $input.val(value);
});

$('.plus-btn,.plus-btn-1').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val(),10);

    if (value < 100) {
        value = value + 1;
    } else {
        value =100;
    }
    $input.val(value);
});
/* ==========================================
//additional
========================================== */

$('.pro-page-slider').owlCarousel({
    loop: true,
    margin: 15,
    nav: true,
    navText: ['<i class="ti-arrow-left"></i>','<i class="ti-arrow-right"></i>'],
    dots: false,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:4
        },
        1000:{
            items:4
        }
    }
});

$('.pro-page .nav-item .nav-link').on( "click", function() {
    $('.pro-page .nav-item .nav-link').removeClass('active');
    $(this).addClass('active');
});
/* ==========================================
 //related product
========================================== */
$('.releted-products').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: false,
    dots: false,
    autoplay: true,
    sautoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:2,
            margin: 15
        },
        480:{
            items: 2
        },
        768:{
            items: 3
        },
        979:{
            items: 3
        },
        1200:{
            items: 4
        }
    }
});

$('.single-image-carousel').owlCarousel({
    loop: false,
    rewind: true,
    nav: false,
    margin: 30,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 1,
            margin: 15
        },
        768: {
            items: 1
        },
        979: {
            items: 1
        },
        1199: {
            items: 1
        }
    }
});

/* ==========================================
   //blog
  ========================================== */

$('.details-blog-carousel').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    lazyLoad:true,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:1,
            margin: 15
        },
        479:{
            items:2,
            margin: 20
        },
        768:{
            items:2
        },
        979:{
            items:3
        },
        1199:{
            items:3
        }
    }
});

$('.home6-slider').owlCarousel({
    loop: false,
    items: 1,
    rewind: true,
    margin: 0,
    nav: true,
    navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    fade: true,
    transitionStyle: "fade",
    animateOut: 'fadeOut',
    animateIn: 'fadeIn'
});

$('.cate-6').owlCarousel({
    loop: true,
    rewind: true,
    nav: true,
    margin: 0,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,autoplay: false,
    responsive:{
        0:{
            items:1,
        },
        479:{
            items:2
        },
        768:{
            items:2
        },
        979:{
            items:3
        },
        1199:{
            items:4
        }
    }
});
