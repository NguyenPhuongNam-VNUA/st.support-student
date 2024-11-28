@extends('client.layouts.master')

@section('title')
    Sức khỏe
@endsection
@section('content')
    <!--home page slider start-->
    <section class="home-slider-6">
        <div class="home-6 container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="slider-banner-6">
                        <div class="home-6 home-slider-main-6">
                            <div class="home6-slider owl-carousel owl-theme">
                                <div class="items" style="width: 777.33px">
                                    <div class="img-back-6"
                                        style="background-image:url({{ asset('assets/client/image/vnua7.jpg') }});">
                                        <div class="h-s-content">
                                            <br>
                                            <h1 class="title-vnua" >Trạm Y tế - Học viện Nông nghiệp Việt Nam</h1>
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

                    <div class="process-box empty-box"></div> <!-- Thêm ô trống để giữ cân bằng -->
                </div>
            </div>
        </div>
    </section>
    {{-- s4 --}}
    <section class="patient-care-process">
        <div class="container-1">
            <h2 class="section-title">QUY TRÌNH HƯỚNG DẪN CBVC VÀ SINH VIÊN (NGƯỜI BỆNH)<br>
                ĐẾN KHÁM BỆNH, CHỮA BỆNH NGOÀI GIỜ HÀNH CHÍNH <br>
                (Chỉ giải quyết cấp cứu)</h2>
            <div class="process-content">
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

    <section class="section-tb-padding">
        <div class="container"  style="border: 2px solid #007BFF; border-radius: 10px">
            <div class="row">
                <div class="col">
                    <div class="our-tab">
                        <div class="section-title" style="border-bottom:2px solid #007BFF">
                            <h5 class="mt-4 mb-4">LÃNH ĐẠO TRẠM Y TẾ QUA CÁC THỜI KỲ TỪ NĂM 1956 ĐẾN NAY</h5>
                        </div>
                        <div class="tab-content tab-pro-slider mb-4">
                            <div class="tab-pane fade show active" id="home">
                                <div class="our-products-tab swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tab-product">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/client/image/avatar-mh.jpg') }}" alt="pro-img1" class="img-fluid">
                                                            <img src="{{ asset('assets/client/image/avatar-mh.jpg') }}" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-caption" style="line-height: 18px">
                                                    <h3><a href="#">Họ tên: Nguyễn Văn A</a></h3>
                                                    <h3 style="color: black">Chức vụ: Bác sĩ</h3>
                                                    <h3 style="color: black">Số điện thoại: 012131233</h3>
                                                    <h3 style="color: black">Email: abc@gmail.com</h3>
{{--                                                    <div class="pro-price">--}}
{{--                                                        <span class="new-price">$117.00 USD</span>--}}
{{--                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tab-product">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/client/image/avatar-mh.jpg') }}" alt="pro-img1" class="img-fluid">
                                                            <img src="{{ asset('assets/client/image/avatar-mh.jpg') }}" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-caption" style="line-height: 18px">
                                                    <h3><a href="#">Họ tên: Nguyễn Văn A</a></h3>
                                                    <h3 style="color: black">Chức vụ: Bác sĩ</h3>
                                                    <h3 style="color: black">Số điện thoại: 012131233</h3>
                                                    <h3 style="color: black">Email: abc@gmail.com</h3>
                                                    {{--                                                    <div class="pro-price">--}}
                                                    {{--                                                        <span class="new-price">$117.00 USD</span>--}}
                                                    {{--                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tab-product">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/client/image/avatar-mh.jpg') }}" alt="pro-img1" class="img-fluid">
                                                            <img src="{{ asset('assets/client/image/avatar-mh.jpg') }}" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-caption" style="line-height: 18px">
                                                    <h3><a href="#">Họ tên: Nguyễn Văn A</a></h3>
                                                    <h3 style="color: black">Chức vụ: Bác sĩ</h3>
                                                    <h3 style="color: black">Số điện thoại: 012131233</h3>
                                                    <h3 style="color: black">Email: abc@gmail.com</h3>
                                                    {{--                                                    <div class="pro-price">--}}
                                                    {{--                                                        <span class="new-price">$117.00 USD</span>--}}
                                                    {{--                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tab-product">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/client/image/avatar-mh.jpg') }}" alt="pro-img1" class="img-fluid">
                                                            <img src="{{ asset('assets/client/image/avatar-mh.jpg') }}" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-caption" style="line-height: 18px">
                                                    <h3><a href="#">Họ tên: Nguyễn Văn A</a></h3>
                                                    <h3 style="color: black">Chức vụ: Bác sĩ</h3>
                                                    <h3 style="color: black">Số điện thoại: 012131233</h3>
                                                    <h3 style="color: black">Email: abc@gmail.com</h3>
                                                    {{--                                                    <div class="pro-price">--}}
                                                    {{--                                                        <span class="new-price">$117.00 USD</span>--}}
                                                    {{--                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tab-product">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/client/image/avatar-mh.jpg') }}" alt="pro-img1" class="img-fluid">
                                                            <img src="{{ asset('assets/client/image/avatar-mh.jpg') }}" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-caption" style="line-height: 18px">
                                                    <h3><a href="#">Họ tên: Nguyễn Văn A</a></h3>
                                                    <h3 style="color: black">Chức vụ: Bác sĩ</h3>
                                                    <h3 style="color: black">Số điện thoại: 012131233</h3>
                                                    <h3 style="color: black">Email: abc@gmail.com</h3>
                                                    {{--                                                    <div class="pro-price">--}}
                                                    {{--                                                        <span class="new-price">$117.00 USD</span>--}}
                                                    {{--                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tab-product">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/client/image/avatar-mh.jpg') }}" alt="pro-img1" class="img-fluid">
                                                            <img src="{{ asset('assets/client/image/avatar-mh.jpg') }}" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-caption" style="line-height: 18px">
                                                    <h3><a href="#">Họ tên: Nguyễn Văn A</a></h3>
                                                    <h3 style="color: black">Chức vụ: Bác sĩ</h3>
                                                    <h3 style="color: black">Số điện thoại: 012131233</h3>
                                                    <h3 style="color: black">Email: abc@gmail.com</h3>
                                                    {{--                                                    <div class="pro-price">--}}
                                                    {{--                                                        <span class="new-price">$117.00 USD</span>--}}
                                                    {{--                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end s2 --}}
    <section class="news-section">
        <div class="container-5">
            <h2 class="section-title">Tin tức & Sự kiện</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="news-box">
                        <img src="{{ asset('assets/client/image/vnua3.jpg') }}" class="img-fluid" alt="news-image">
                        <h4>Chương trình khám sức khỏe định kỳ</h4>
                        <p>Tham gia chương trình khám sức khỏe định kỳ dành cho toàn thể sinh viên và cán bộ trong trường
                            vào tháng tới.</p>
                        <a href="news-details.html" class="btn btn-news">Đọc thêm</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="news-box">
                        <img src="{{ asset('assets/client/image/vnua4.jpg') }}" class="img-fluid" alt="news-image">
                        <h4>Buổi Tư Vấn Sức Khỏe Tâm Lý</h4>
                        <p>Buổi tư vấn sức khỏe tâm lý miễn phí với chuyên gia, giúp bạn cân bằng cuộc sống học tập và công
                            việc.</p>
                        <a href="news-details.html" class="btn btn-news">Đọc thêm</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="news-box">
                        <img src="{{ asset('assets/client/image/vnua5.jpg') }}" class="img-fluid" alt="news-image">
                        <h4>Chương trình Hiến Máu Nhân Đạo</h4>
                        <p>Chương trình hiến máu nhân đạo hằng năm của trường sẽ diễn ra vào tháng tới. Hãy đăng ký và tham
                            gia ngay!</p>
                        <a href="news-details.html" class="btn btn-news">Đọc thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register health -->
    <button id="register-motel-button" class="custom-btn" data-bs-toggle="modal"
        data-bs-target="#healthRequestModal">Tham vấn sức khỏe từ chuyên gia
    </button>
@endsection
