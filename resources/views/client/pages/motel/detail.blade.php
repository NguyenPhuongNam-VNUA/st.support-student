@extends('client.layouts.master')

@section('title')
    Nhà trọ
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
                                <li class="text-muted"><a href="{{route('client.index')}}">Trang chủ</a> / </li>
                                <li class="text-muted"><a href="{{route('client.motel')}}">Nhà trọ</a> / </li>
                                <li class="text-muted"><span>{{ \Illuminate\Support\Str::limit($motel->address, 20) }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- product info start -->
    <livewire:client.motel.motel-detail :id="$id" />
    <livewire:client.motel.motel-register />
    <livewire:client.motel.motel-comment :id="$id" />
    <!-- product info end -->
    <!-- product page tab start -->

    <!-- product page tab end -->
    <!-- releted product start -->
    <livewire:client.motel.motel-more :id="$id" />
    <!-- releted product end -->
    <script>
        function changeImage(imageUrl) {
            const largeImage = document.getElementById('large-image');
            const figureZoom = document.getElementById('figure-zoom');
            largeImage.src = imageUrl;
            figureZoom.style.backgroundImage = `url(${imageUrl})`;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Livewire.on('registration-success', () => {
                var modal = document.getElementById('registerMotelModal');
                var bootstrapModal = bootstrap.Modal.getInstance(modal);
                bootstrapModal.hide();

                Swal.fire({
                    icon: 'success',
                    title: 'Đăng ký thành công',
                    text: 'Yêu cầu của bạn đã được gửi đi thành công. Vui lòng chờ phản hồi từ chúng tôi qua số điện thoại.',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#448B1F',
                });
            });
        });
    </script>

    <style>
        /* Custom styles for SweetAlert2 */
        .swal2-container-custom {
            z-index: 9999 !important;
        }

        .swal2-popup-custom {
            font-size: 1rem !important;
        }
    </style>
    <button id="register-motel-button" class="custom-btn" data-bs-toggle="modal" data-bs-target="#registerMotelModal">Đăng
        ký quảng bá phòng trọ</button>
@endsection
