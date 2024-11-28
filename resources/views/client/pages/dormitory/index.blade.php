@extends('client.layouts.master')

@section('title')
    Ký túc xá
@endsection

@section('content')
    <!-- breadcrumb start -->
    <section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url({{ asset('assets/client/image/dormitory/dormitory.jpg') }}); background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link d-flex gap-2" style="font-size: 1rem">
                                <li class="text-muted"><a href="#">Trang chủ</a> / </li>
                                <li class="text-muted"><span>Ký túc xá</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <section class="order-histry-area section-tb-padding">
        <div class="container">
            <section class="quick-view">
                <div class="modal fade" id="quickviewDormitory" tabindex="-1" aria-labelledby="quickviewDormitoryLabel" aria-hidden="true">
                    <livewire:client.component.dormitory.quick-view />
                </div>
            </section>
            <livewire:client.dormitory.dormitory-index />
        </div>
    </section>
@endsection

@section('styles-custom')
    <style>
        .content-div {
            display: none;
        }
        .content-div.active {
            display: block;
        }

        .order-info {
            border-left: 3px solid #448b1f !important;
            background-color: #f8f9fa;
        }

        .profile-ul li a {
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .profile-ul li a:hover,
        .profile-ul li a.active {
            background-color: #f1f1f1;
            color: #448b1f;
        }

        .card {
            padding: 15px;
            border: 1px solid #448b1f;
            border-radius: 8px;
            color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .room-header {
            background-color: #448b1f;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }

        .btn-primary {
            background-color: #448b1f;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #ea6c3c;
        }

        .count-text {
            background-color: #ea6c3c;
            color: #fff;
            padding: 2px 5px;
            border-radius: 3px;
        }
    </style>
@endsection

@section('scripts-custom')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

