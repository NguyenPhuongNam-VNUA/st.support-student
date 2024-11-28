@extends('client.layouts.master')

@section('title')
    Sức khỏe
@endsection
@section('content')
    <!--home page slider start-->
    <section class="home-slider-6">
        <div class="home-6 container">
            <div class="row-6">
                <div class="col-8">
                    <div class="slider-banner-6">
                        <div class="home-6 home-slider-main-6">
                            <div class="home6-slider owl-carousel owl-theme">
                                <div class="items" style="width: 777.33px">
                                    <div class="img-back-6"
                                        style="background-image:url({{ asset('assets/client/image/vnua7.jpg') }});">
                                        <div class="h-s-content">
                                            <br>
                                            <h1>Trạm Y tế - Học viện Nông nghiệp Việt Nam</h1>
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
                                            <h1>Trạm Y tế - Học viện Nông nghiệp Việt Nam</h1>
                                            <h2>Địa chỉ: Học viện Nông nghiệp Việt Nam</h2>
                                            <a href="grid-list.html" class="btn btn-style1"><span>Truy cập</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="items" style="width: 777.33px">
                                    <div class="img-back-6"
                                        style="background-image:url({{ asset('assets/client/image/vnua9.jpg') }});">
                                        <div class="h-s-content">
                                            <br>
                                            <h1>Trạm Y tế - Học viện Nông nghiệp Việt Nam</h1>
                                            <h2>Địa chỉ: Học viện Nông nghiệp Việt Nam</h2>
                                            <a href="grid-list.html" class="btn btn-style1"><span>Truy cập</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="top-banner">
                        <div class="right-banner-6">
                            <a href="grid-list.html" class="r-banner">
                                <img src="{{ asset('assets/client/image/yte1.jpg') }}" class="img-fluid" alt="banner-image">
                            </a>
                            <div class="banner-r-content1">
                                <a href="#" class="banner-shop1"><span>Tel: 024.62.617.681</span></a>
                            </div>
                        </div>
                        <div class="right-banner-6">
                            <a href="grid-list.html" class="r-banner">
                                <img src="{{ asset('assets/client/image/kham-sk002.png') }}" class="img-fluid"
                                    alt="banner-image">
                            </a>
                            <div class="banner-r-content2">
                                <a href="#"class="banner-shop2"><span>E-mail: yte.hua@vnua.edu.vn</span></a>
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

    {{-- s2 --}}
    <section class="home6-category">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title3">
                        <h2><span>THÔNG TIN TRIỆU TRỨNG CÁC BỆNH THƯỜNG GẶP</span></h2>
                    </div>
                    <div class="category-6">
                        <div class="cate-6 owl-carousel owl-theme">
                            <div class="items">
                                <div class="cate-back"
                                    style="background-image:url({{ asset('assets/client/image/CL.jpg') }});">
                                    <div class="cat-box">
                                        <h2>Cảm lạnh thông thường</h2>
                                        <ul class="category-link">
                                            <li><i class="fa fa-angle-right"></i>Sổ mũi</li>
                                            <li><i class="fa fa-angle-right"></i>Nghẹt mũi</li>
                                            <li><i class="fa fa-angle-right"></i>Hắt hơi</li>
                                            <li><i class="fa fa-angle-right"></i>Ho</li>
                                            <li><i class="fa fa-angle-right"></i>Đau họng</li>
                                            <li><i class="fa fa-angle-right"></i>Sốt nhẹ</li>
                                            <li><i class="fa fa-angle-right"></i>Mệt mỏi</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="cate-back"
                                    style="background-image:url({{ asset('assets/client/image/CL.jpg') }});">
                                    <div class="cat-box">
                                        <h2>Viêm họng</h2>
                                        <ul class="category-link">
                                            <li><i class="fa fa-angle-right"></i>Đau họng</a></li>
                                            <li><i class="fa fa-angle-right"></i>Ngứa họng</a></li>
                                            <li><i class="fa fa-angle-right"></i>Kích ứng ở cổ họng</a></li>
                                            <li><i class="fa fa-angle-right"></i>Ho</a></li>
                                            <li><i class="fa fa-angle-right"></i>Sổ mũi</a></li>
                                            <li><i class="fa fa-angle-right"></i>Sốt nhẹ</a></li>
                                            <li><i class="fa fa-angle-right"></i>Sưng hạch</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="cate-back"
                                    style="background-image: url({{ asset('assets/client/image/CL.jpg') }});">
                                    <div class="cat-box">
                                        <h2>Viêm phổi</h2>
                                        <ul class="category-link">
                                            <li><i class="fa fa-angle-right"></i>Ho</a></li>
                                            <li><i class="fa fa-angle-right"></i>Sốt</a></li>
                                            <li><i class="fa fa-angle-right"></i>Hơi thở ngắn</a></li>
                                            <li><i class="fa fa-angle-right"></i>Thở gấp gáp</a></li>
                                            <li><i class="fa fa-angle-right"></i>Đau ngực</a></li>
                                            <li><i class="fa fa-angle-right"></i>Khó thở</a></li>
                                            <li><i class="fa fa-angle-right"></i>Mệt mỏi</a></li>
                                            <li><i class="fa fa-angle-right"></i>Có thể bị nôn hoặc tiêu chảy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="cate-back"
                                    style="background-image: url({{ asset('assets/client/image/CL.jpg') }});">
                                    <div class="cat-box">
                                        <h2>Viêm dạ dày</h2>
                                        <ul class="category-link">
                                            <li><i class="fa fa-angle-right"></i>Đau bụng hoặc khó chịu</li>
                                            <li><i class="fa fa-angle-right"></i>Buồn nôn</li>
                                            <li><i class="fa fa-angle-right"></i>Đầy hơi</li>
                                            <li><i class="fa fa-angle-right"></i>Chán ăn</li>
                                            <li><i class="fa fa-angle-right"></i>Khó tiêu</li>
                                            <li><i class="fa fa-angle-right"></i>Đôi khi có máu trong bãi nôn hoặc phân
                                            </li>
                                            <li><i class="fa fa-angle-right"></i>Mệt mỏi</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="cate-back"
                                    style="background-image: url({{ asset('assets/client/image/CL.jpg') }});">
                                    <div class="cat-box">
                                        <h2>Đau mắt đỏ</h2>
                                        <ul class="category-link">
                                            <li><a href="grid-list.html"><i class="fa fa-angle-right"></i>Shimp jumbo</a>
                                            </li>
                                            <li><a href="grid-list.html"><i class="fa fa-angle-right"></i>Fresh mussel</a>
                                            </li>
                                            <li><a href="grid-list.html"><i class="fa fa-angle-right"></i>Green mussel</a>
                                            </li>
                                            <li><a href="grid-list.html"><i class="fa fa-angle-right"></i>Green
                                                    seafood</a></li>
                                            <li><a href="grid-list.html"><i class="fa fa-angle-right"></i>Fresh
                                                    seafish</a></li>
                                            <li><a href="grid-list.html"><i class="fa fa-angle-right"></i>Prod of
                                                    india</a></li>
                                        </ul>
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
    <!-- category end -->
    <!-- products tab start -->
    <section class="section-t-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="pro-tab6">
                        <div class="section-title3">
                            <h2><span>LÃNH ĐẠO TRẠM Y TẾ QUA CÁC THỜI KỲ TỪ NĂM 1956 ĐẾN NAY</span></h2>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#tab-bac-si">Bác sĩ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-y-si">Y sĩ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-thac-si">Thạc sĩ</a>
                            </li>
                        </ul>
                        <div class="tab-content tab-pro-slider">
                            <!-- Tab Bác sĩ -->
                            <div class="tab-pane fade show active" id="tab-bac-si">
                                <div class="doctor-list">
                                    <!-- Thêm bác sĩ -->
                                    <div class="doctor-item">
                                        <div class="doctor-img">
                                            <img src="{{ asset('assets/client/image/avatar-mh.jpg') }}"
                                                alt="Bs. Nguyễn Thục Khanh" class="img-fluid">
                                        </div>
                                        <div class="doctor-info">
                                            <h3>Bs. Nguyễn Thục Khanh</h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">Thời gian: 1956 - 1959</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-item">
                                        <div class="doctor-img">
                                            <img src="{{ asset('assets/client/image/avatar-mh1.jpg') }}"
                                                alt="Bs. Nguyễn Thanh Tiềm" class="img-fluid">
                                        </div>
                                        <div class="doctor-info">
                                            <h3>Bs. Nguyễn Thanh Tiềm</h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">Thời gian: 1968 - 1974</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-item">
                                        <div class="doctor-img">
                                            <img src="{{ asset('assets/client/image/avatar-mh.jpg') }}"
                                                alt="Bs. Nguyễn Thục Khanh" class="img-fluid">
                                        </div>
                                        <div class="doctor-info">
                                            <h3>Bs. Vũ Thu Hường</h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">Thời gian: 1992 - 2001</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-item">
                                        <div class="doctor-img">
                                            <img src="{{ asset('assets/client/image/avatar-mh1.jpg') }}"
                                                alt="Bs. Nguyễn Thanh Tiềm" class="img-fluid">
                                        </div>
                                        <div class="doctor-info">
                                            <h3>Bs. Hoàng Thị Liễu <br> (Phó phụ trách)</h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">Thời gian: 3/2015 – 8/2016</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-item">
                                        <div class="doctor-img">
                                            <img src="{{ asset('assets/client/image/avatar-mh1.jpg') }}"
                                                alt="Bs. Nguyễn Thanh Tiềm" class="img-fluid">
                                        </div>
                                        <div class="doctor-info">
                                            <h3>BSCK1 Vũ Văn Cường</h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">Thời gian: 9/2016 - nay</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-item">
                                        <div class="doctor-img">
                                            <img src="{{ asset('assets/client/image/avatar-mh.jpg') }}"
                                                alt="Bs. Nguyễn Thục Khanh" class="img-fluid">
                                        </div>
                                        <div class="doctor-info">
                                            <h3>Bs.Vũ Văn Cường (Từ 2010)</h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">Thời gian: 2001 - 2014</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Y sĩ -->
                            <div class="tab-pane fade" id="tab-y-si">
                                <div class="doctor-list">
                                    <div class="doctor-item">
                                        <div class="doctor-img">
                                            <img src="{{ asset('assets/client/image/avatar-mh1.jpg') }}"
                                                alt="Y sỹ Nguyễn Như Hoà" class="img-fluid">
                                        </div>
                                        <div class="doctor-info">
                                            <h3>Y sỹ Nguyễn Như Hoà</h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">Thời gian: 1968 - 1974</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Thêm nhiều y sĩ khác nếu cần -->
                                    <div class="doctor-item">
                                        <div class="doctor-img">
                                            <img src="{{ asset('assets/client/image/avatar-mh1.jpg') }}"
                                                alt="Y sỹ Nguyễn Như Hoà" class="img-fluid">
                                        </div>
                                        <div class="doctor-info">
                                            <h3>Y sỹ Nguyễn Thị Lộc</h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">Thời gian: 1974 - 1992</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-item">
                                        <div class="doctor-img">
                                            <img src="{{ asset('assets/client/image/avatar-mh1.jpg') }}"
                                                alt="Y sỹ Nguyễn Như Hoà" class="img-fluid">
                                        </div>
                                        <div class="doctor-info">
                                            <h3>Y sỹ Nguyễn Như Hoà</h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">Thời gian: 1968 - 1974</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Thạc sĩ -->
                            <div class="tab-pane fade" id="tab-thac-si">
                                <div class="doctor-list">
                                    <div class="doctor-item">
                                        <div class="doctor-img">
                                            <img src="{{ asset('assets/client/image/avatar-mh2.jpg') }}" alt="Thạc sĩ 1"
                                                class="img-fluid">
                                        </div>
                                        <div class="doctor-info">
                                            <h3>Ths.BSCK1.Nguyễn Thị Thuý Vinh</h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">Thời gian: 2001 - 2014</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-item">
                                        <div class="doctor-img">
                                            <img src="{{ asset('assets/client/image/avatar-mh1.jpg') }}" alt="Thạc sĩ 2"
                                                class="img-fluid">
                                        </div>
                                        <div class="doctor-info">
                                            <h3>Thạc sĩ 2</h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">Thời gian: 1975 - 1979</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Thêm nhiều thạc sĩ khác nếu cần -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- s5 --}}
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
