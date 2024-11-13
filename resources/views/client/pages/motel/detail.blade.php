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
    <!-- breadcrumb end -->
    <!-- product info start -->
    <livewire:client.motel.motel-detail :id="$id" />
    <livewire:client.motel.motel-register />

    <!-- product info end -->
    <!-- product page tab start -->
    <section class="section-b-padding pro-page-content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="pro-page-tab">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#tab-1">Mô tả</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Đánh giá</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-1">
                                <div class="tab-1content">
                                    <h4>Thông tin nhà trọ</h4>
                                    <ul class="tab-description">
                                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                                        <li>Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy
                                            text.</li>
                                        <li>Type here your detail one by one li more add</li>
                                        <li>Has been the industry’s standard dummy text ever since. Lorem Ips</li>
                                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s
                                            standard dummy text ever since. Lorem Ipsum is simply dummy text.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="tab-2">
                                <h4 class="reviews-title">Đánh giá</h4>
                                <div class="customer-reviews t-desk-2">
                                    <span class="p-rating">
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                    </span>
                                    <p class="review-desck">Dựa trên đánh giá của 5 người </p>
                                    <a href="#add-review" data-bs-toggle="collapse">Viết đánh giá</a>
                                </div>
                                <div class="review-form collapse" id="add-review">
                                    <h4>Đánh giá của bạn</h4>
                                    <form>
                                        <label>Tên</label>
                                        <input type="text" name="name" placeholder="Enter your name">
                                        <label>Email</label>
                                        <input type="text" name="mail" placeholder="Enter your Email">
                                        <label>Điểm đánh giá</label>
                                        <span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                        <label>Tiêu đề</label>
                                        <input type="text" name="mail" placeholder="Review title">
                                        <label>Nội dung đánh giá</label>
                                        <textarea name="comment" placeholder="Write your comments"></textarea>
                                    </form>
                                </div>
                                <div class="customer-reviews">
                                    <span class="p-rating">
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star e-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <h4 class="review-head">Tuyệt vời</h4>
                                    <span class="reviews-editor">Nguyễn Văn A <span class="review-name"> - </span> 5, tháng
                                        10, 2021</span>
                                    <p class="r-description">Nhà trọ thoáng, mặt đường, giá cả hợp lý</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
