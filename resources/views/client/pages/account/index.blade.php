@extends('client.layouts.master')

@section('title')
    Quản lý tài khoản
@endsection

@section('content')
    <section class="about-breadcrumb" >
        <div id="header" class="about-back section-tb-padding" style="background-image: url({{asset('assets/client/image/lecture-hall-image/ClientBreadcrumb.jpg')}}); background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link d-flex gap-2" style="font-size: 1rem">
                                <li class="text-white"><a href="{{ route('client.index') }}">Trang chủ</a> / </li>
                                <li class="text-muted"><span>Tài khoản</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div style="background-color: #3333331a">
        <livewire:client.account.index/>
    </div>
@endsection


