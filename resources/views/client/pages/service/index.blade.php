@extends('client.layouts.master')

@section('title')
    Dịch vụ
@endsection

@section('content')
    <!-- breadcrumb start -->
    <section class="about-breadcrumb">
        <div class="about-back section-tb-padding"
            style="background-image: url({{ asset('assets/client/image/lecture-hall-image/ClientBreadcrumb.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link d-flex gap-2" style="font-size: 1rem">
                                <li class="text-muted"><a href="{{ route('client.index') }}">Trang chủ</a> / </li>
                                <li class="text-muted"><span>Dịch vụ</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Livewire.on('registration-success', () => {
                var modal = document.getElementById('registerServiceModal');
                var bootstrapModal = bootstrap.Modal.getInstance(modal);
                bootstrapModal.hide();

                Swal.fire({
                    icon: 'success',
                    title: 'Đăng ký thành công',
                    text: 'Yêu cầu của bạn đã được gửi đi thành công.',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#448B1F',
                });
            });
        });
    </script>
    <!-- breadcrumb end -->
    <livewire:client.service.service-index />
    <livewire:client.service.service-register />

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
    <button id="register-service-button" class="custom-btn" data-bs-toggle="modal" data-bs-target="#registerServiceModal">
        Đăng ký quảng bá dịch vụ
    </button>
@endsection
