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
                                <li class="text-muted"><a href="{{ route('client.service') }}">Dịch vụ</a> / </li>
                                <li class="text-muted"><span>{{ $service->name }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- product info start -->
    <livewire:client.service.service-detail :id="$id" />
    <!-- product info end -->
    <!-- product page tab start -->
    <livewire:client.service.service-comment :id="$id" />

    <!-- product page tab end -->
    <!-- releted product start -->
    <livewire:client.service.service-more :id="$id" />
    <script>
        function changeImage(imageUrl) {
            const largeImage = document.getElementById('large-image');
            const figureZoom = document.getElementById('figure-zoom');
            largeImage.src = imageUrl;
            figureZoom.style.backgroundImage = `url(${imageUrl})`;
        }
    </script>

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    @if (session('success'))
        <div class="alert bg-success text-white alert-dismissible fade show custom-alert">
            <div class="d-flex">
                <i class="ph-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif



    <style>
        .custom-alert {
            position: fixed;
            top: 20px;
            right: 20px;
            width: auto;
            z-index: 1050;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
    </style>
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

    <livewire:client.service.service-register />

    <!-- releted product end -->
    <button id="register-service-button" class="custom-btn" data-bs-toggle="modal" data-bs-target="#registerServiceModal">
        Đăng ký quảng bá dịch vụ
    </button>
@endsection
