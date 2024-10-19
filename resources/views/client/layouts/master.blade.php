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

{{--quickview quán ăn--}}
@include('client.includes.quickview_1')
{{--quickview một số bệnh--}}
@include('client.includes.quickview_2')

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
