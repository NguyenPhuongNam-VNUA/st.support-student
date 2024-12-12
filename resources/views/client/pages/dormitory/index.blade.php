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

    <section class="order-histry-area section-tb-padding" style="background-color: #3333331a">
        <div class="container">
{{--            <section class="quick-view">--}}
{{--                <div class="modal fade" id="quickviewDormitory" tabindex="-1" aria-labelledby="quickviewDormitoryLabel" aria-hidden="true">--}}
{{--                    <livewire:client.component.dormitory.quick-view />--}}
{{--                </div>--}}
{{--            </section>--}}
            <div class="modal fade" id="quickviewDormitory" tabindex="-1">
                <livewire:client.component.dormitory.quick-view />
            </div>
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

        .btn-primary:hover {
            background-color: #ea6c3c;
        }

        .count-text {
            background-color: #ea6c3c;
            color: #fff;
            padding: 2px 5px;
            border-radius: 3px;
        }

        :root{
            --spacer: 1.25rem;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box
        }

        .content {
            padding: var(--spacer) 1.25rem;
            -ms-flex-positive: 1;
            flex-grow: 1
        }

        .card {
            border: 0;
            margin-bottom: var(--spacer)
        }


        @media (min-width:576px) {
            .blog-horizontal .card-img-actions {
                width: 45%;
                float: left;
                max-width: 25rem;
                z-index: 10
            }

            .align-items-sm-center {
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .justify-content-sm-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .d-sm-flex {
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .mt-sm-0 {
                margin-top: 0 !important;
            }
        }

        @media (min-width:576px) {
            .blog-horizontal-xs .card-img-actions {
                width: 35%;
                max-width: 12.5rem
            }
        }

        @media (min-width:576px) {
            .blog-horizontal-sm .card-img-actions {
                width: 40%;
                max-width: 18.75rem
            }
        }

        @media (min-width:576px) {
            .blog-horizontal-lg .card-img-actions {
                width: 50%;
                max-width: 31.25rem
            }
        }

    </style>
@endsection

@section('scripts-custom')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

