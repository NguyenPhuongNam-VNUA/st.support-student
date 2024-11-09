@extends('client.layouts.master')

@section('title')
Dịch vụ
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
                            <li class="go-home"><a href="">Dịch vụ</a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
<livewire:client.service.service-index />
<style>
    .page-number.style-1 {
    display: flex;
    justify-content: center;
    align-items: center;
}

.page-link {
    display: inline-block;
    padding: 8px 15px;
    margin: 0 5px;
    background-color: #f1f1f1;
    border: 1px solid #ddd;
    color: #448B1F;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.page-link:hover {
    background-color: #448B1F;
    color: #fff;
}

.page-link.active {
    background-color: #448B1F;
    color: #fff;
    font-weight: bold;
}

.page-link.disabled {
    background-color: #f9f9f9;
    color: #ccc;
    pointer-events: none;
}

.page-title {
    font-size: 16px;
    margin-bottom: 10px;
    display: block;
    text-align: center;
}

</style>
@endsection