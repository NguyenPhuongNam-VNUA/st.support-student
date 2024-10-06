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

@include('client.includes.footer')
@include('client.includes.scripts')
</body>
