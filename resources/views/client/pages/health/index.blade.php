@extends('client.layouts.master')

@section('title')
    Sức khỏe
@endsection
@section('content')
    <section class="about-breadcrumb">
        <div class="about-back section-tb-padding"
            style="background-image: url({{ asset('assets/client/image/lecture-hall-image/ClientBreadcrumb.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link d-flex gap-2" style="font-size: 1rem">
                                <li class="text-muted"><a href="{{ route('client.index') }}">Trang chủ</a> / </li>
                                <li class="text-muted"><span>Sức khỏe</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!--home page slider start-->
    <section class="home-slider-6">
        <div class="home-6 container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="slider-banner-6">
                        <div class="home-6home-slider-main-6">
                            <div class="home6-slider owl-carousel owl-theme">
                                <div class="items" style="width: 777.33px">
                                    <div class="img-back-6"
                                        style="background-image:url({{ asset('assets/client/image/vnua7.jpg') }});">
                                        <div class="h-s-content">
                                            <br>
                                            <h1 class="title-vnua">Trạm Y tế - Học viện Nông nghiệp Việt Nam</h1>
                                            <h2>Địa chỉ: Học viện Nông nghiệp Việt Nam</h2>
                                            <a href="https://tramyte.vnua.edu.vn/gioi-thieu/gioi-thieu-chung"
                                                class="btn btn-style1"><span>Truy cập</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="items" style="width: 777.33px">
                                    <div class="img-back-6"
                                        style="background-image:url({{ asset('assets/client/image/vnua3.jpg') }});">
                                        <div class="h-s-content">
                                            <br>
                                            <h1 class="title-vnua">Trạm Y tế - Học viện Nông nghiệp Việt Nam</h1>
                                            <h2>Địa chỉ: Học viện Nông nghiệp Việt Nam</h2>
                                            <a href="#" class="btn btn-style1"><span>Truy cập</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="items" style="width: 777.33px">
                                    <div class="img-back-6"
                                        style="background-image:url({{ asset('assets/client/image/vnua9.jpg') }});">
                                        <div class="h-s-content">
                                            <br>
                                            <h1 class="title-vnua">Trạm Y tế - Học viện Nông nghiệp Việt Nam</h1>
                                            <h2>Địa chỉ: Học viện Nông nghiệp Việt Nam</h2>
                                            <a href="#" class="btn btn-style1"><span>Truy cập</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="top-banner">
                        <div class="right-banner-6">
                            <a href="#" class="r-banner">
                                <img src="{{ asset('assets/client/image/yte1.jpg') }}" class="img-fluid" alt="banner-image">
                            </a>
                            <div class="banner-r-content1">
                                <a href="#" class="banner-shop1"><span>Tel: 024.62.617.681</span></a>
                            </div>
                        </div>
                        <div class="right-banner-6">
                            <a href="#" class="r-banner">
                                <img src="{{ asset('assets/client/image/kham-sk002.png') }}" class="img-fluid"
                                    alt="banner-image">
                            </a>
                            <div class="banner-r-content2">
                                <a href="#" class="banner-shop2"><span>E-mail: yte.hua@vnua.edu.vn</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- s3 --}}
    <section class="patient-care-process">
        <div class="container-1">
            <h2 class="section-title">QUY TRÌNH HƯỚNG DẪN CBVC VÀ SINH VIÊN (NGƯỜI BỆNH) <br>
                ĐẾN KHÁM BỆNH, CHỮA BỆNH TRONG GIỜ HÀNH CHÍNH</h2>
            <div class="process-content">
                <div class="process-row">
                    <div class="process-box">
                        <h3>I. Cán bộ, viên chức, sinh viên (người bệnh) chuẩn bị:</h3>
                        <ol>
                            <li>Sổ y bạ</li>
                            <li>Thẻ BHYT</li>
                            <li>Giấy tùy thân có ảnh (CMND, thẻ sinh viên, thẻ công chức...)</li>
                            <li>Địa điểm: Tại phòng khám bệnh P107</li>
                        </ol>
                    </div>

                    <div class="process-box">
                        <h3>Quy trình khám bệnh tại phòng P107:</h3>
                        <ol>
                            <li>Kiểm tra sổ thẻ của người bệnh</li>
                            <li>Hướng dẫn người bệnh vào phòng khám phù hợp:</li>
                            <ul>
                                <li>Khám Tổng hợp: Phòng 107</li>
                                <li>Khám Răng: Phòng 108</li>
                                <li>Khám Tai – Mũi - Họng: Phòng 109</li>
                            </ul>
                        </ol>
                    </div>

                    <div class="process-box">
                        <h3>Nhập đơn điều trị:</h3>
                        <ol>
                            <li>Nhập đơn điều trị theo CĐ của bác sĩ vào cổng thông tin BHXH</li>
                            <li>Cho người bệnh ký thủ thuật thực hiện (nếu có)</li>
                            <li>Trả phiếu, sổ y bạ cho người bệnh</li>
                        </ol>
                    </div>

                    <div class="process-box">
                        <h3>Trường hợp chuyển lên tuyến trên:</h3>
                        <ol>
                            <li>Cấp thuốc BHYT tại P105</li>
                            <li>Kiểm tra phiếu thuốc</li>
                            <li>Cấp thuốc theo đơn</li>
                        </ol>
                    </div>
                </div>

                <div class="process-row">
                    <div class="process-box">
                        <h3>Tiêm, thủ thuật tại P.104:</h3>
                        <ol>
                            <li>Kiểm tra sổ y bạ</li>
                            <li>Thực hiện thủ thuật theo y lệnh</li>
                        </ol>
                    </div>

                    <div class="process-box">
                        <h3>Lưu bệnh nhân:</h3>
                        <ol>
                            <li>Lưu bệnh nhân tại P. 101 (nếu cần)</li>
                        </ol>
                    </div>

                    <div class="process-box">
                        <h3>Thông tin liên hệ:</h3>
                        <ul>
                            <li><strong>Thực hiện:</strong> Điều dưỡng</li>
                        </ul>
                    </div>

                    <div class="process-box empty-box"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="patient-care-process" style="min-height: auto">
        <div class="container-1">
            <h2 class="section-title">QUY TRÌNH HƯỚNG DẪN CBVC VÀ SINH VIÊN (NGƯỜI BỆNH)<br>
                ĐẾN KHÁM BỆNH, CHỮA BỆNH NGOÀI GIỜ HÀNH CHÍNH <br>
                (Chỉ giải quyết cấp cứu)</h2>
            <div class="process-content" >
                <div class="process-row">
                    <div class="process-box">
                        <h3>I. Cán bộ, viên chức, sinh viên (người bệnh) chuẩn bị:</h3>
                        <ol>
                            <li>Sổ y bạ</li>
                            <li>Thẻ BHYT</li>
                            <li>Giấy tùy thân có ảnh (CMND, thẻ sinh viên, thẻ công chức...)</li>
                        </ol>
                    </div>
                    <div class="process-box">
                        <h3>. Phòng trực cấp cứu P.103</h3>
                        <ol>
                            <li>Thực hiện cấp cứu: Bác sỹ và điều dưỡng</li>
                        </ol>
                    </div>

                    <div class="process-box">
                        <h3>Phòng lưu bệnh nhân P.101</h3>
                        <ol>
                            <li>Chuyển lên tuyến trên</li>
                            <li>Khám và điều trị tại chỗ</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <livewire:client.health.doctor />
    {{-- end s2 --}}
    <livewire:client.health.blog />

    <!-- Register health -->
    <button id="register-motel-button" class="custom-btn" data-bs-toggle="modal" data-bs-target="#healthRequestModal">Tham
        vấn sức khỏe từ chuyên gia
    </button>
    <livewire:client.health.health-request />
    <style>
        .doctor-card {
            max-width: 200px;
            margin: 0 auto;
        }

        .doctor-image img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border: 3px solid #007BFF;
            padding: 5px;
        }

        .doctor-info {
            text-align: center;
        }

        .doctor-name {
            margin-top: 10px;
            font-size: 16px;
            color: #333;
        }

        .doctor-title,
        .doctor-specialty {
            font-size: 14px;
            color: #666;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Livewire.on('request-success', () => {
                var modal = document.getElementById('healthRequestModal');
                var bootstrapModal = bootstrap.Modal.getInstance(modal);
                bootstrapModal.hide();

                Swal.fire({
                    icon: 'success',
                    title: 'Yêu cầu được gửi đi thành công',
                    text: 'Các bác sĩ đã nhận được yêu cầu từ bạn. Vui lòng chờ phản hồi từ bác sĩ qua Zalo.',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#448B1F',
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Livewire.on('request-denied', () => {
                var modal = document.getElementById('healthRequestModal');
                var bootstrapModal = bootstrap.Modal.getInstance(modal);
                bootstrapModal.hide();

                Swal.fire({
                    icon: 'warning',
                    title: 'Bạn cần đăng nhập để thực hiện chức năng này',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#F39C12',
                    html: `
                    <a href="{{ route('student.login') }}" style="color: #F39C12;">Click để tới trang đăng nhập</a>
                    `,
                });
            });
        });
    </script>

    <style>
        /* Custom styles for SweetAlert2 */
        .swal2 - container - custom {
            z - index: 9999 !important;
        }

        .swal2 - popup - custom {
            font - size: 1 rem !important;
        }
    </style>
@endsection
