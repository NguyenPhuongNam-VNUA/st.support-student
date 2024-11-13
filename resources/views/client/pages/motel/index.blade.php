@extends('client.layouts.master')

@section('title')
    Nhà trọ
@endsection

@section('content')
    <!-- breadcrumb start -->
    <section class="about-breadcrumb">
        <div class="about-back section-tb-padding"
            style="background-image: url({{ asset('assets/client/image/lecture-hall-image/toanhaTT.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            {{-- <ul class="about-link">
                            <li class="go-home"><a href="">Nhà trọ</a></li>
                        </ul> --}}
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
    <!-- breadcrumb end -->
    <!-- product start -->
    <livewire:client.motel.motel-index />
    <livewire:client.motel.motel-register />
    <!-- product start -->
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

        /* Custom styles for SweetAlert2 */
        .swal2-container-custom {
            z-index: 9999 !important;
        }

        .swal2-popup-custom {
            font-size: 1rem !important;
        }
    </style>

    <!-- Register motel -->
    <button id="register-motel-button" class="custom-btn" data-bs-toggle="modal" data-bs-target="#registerMotelModal">Đăng ký
        quảng bá phòng trọ</button>
@endsection
