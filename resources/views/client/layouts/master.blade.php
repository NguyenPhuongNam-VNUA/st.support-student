<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title -->
    <title>@yield('title')</title>

    @include('client.includes.styles')
    
</head>
<body class="home-1">

@include('client.includes.header')
@yield('content')
{{--quick view dịch vụ--}}
@include('client.includes.quickview_service')

{{--quick view nhà trọ--}}
@include('client.includes.quickview_motel')

{{--quick view đăng ký trọ--}}
@include('client.includes.modal_register_motel')

{{--quick view đăng ký ký túc xa--}}
@include('client.includes.modal_register_dormitory')

{{--quick view yêu cầu tư vấn sức khỏe--}}

@include('client.includes.footer')

<!-- back to top start -->
<a href="javascript:void(0)" class="scroll" id="top">
    <span><i class="fa fa-angle-double-up"></i></span>
</a>
<!-- back to top end -->
<div class="mm-fullscreen-bg"></div>

<div id="page_loader">
    <div class="loader"></div>
</div>

@include('client.includes.scripts')
</body>
