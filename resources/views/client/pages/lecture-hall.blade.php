@extends('client.layouts.master')

@section('title')
Tìm giảng đường
@endsection

@section('content')
<!-- breadcrumb start -->
<section class="about-breadcrumb">
    <div class="about-back section-tb-padding" style="background-image: url({{ asset('assets/client/image/lecture-hall-image/toanhaTT.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-l">
                        <ul class="about-link">
                            <li class="go-home"><a href="">Giảng đường</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
<!-- blog start -->
<section class="section-tb-padding blog-page">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="blog-style-1-list">
                    <div class="blog-start">
                        <div class="blog-post">
                            <div class="blog-image">
                                <a href="">
                                    <img src="{{ asset('assets/client/image/lecture-hall-image/gdND.jpg') }}" alt="blog-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h6><a href="">Giảng đường Nguyễn Đăng</a></h6>
                                </div>
                                <div class="date-comm-adit">
                                    <a href="javascript:void(0)"><i class="fa-solid fa-mug-hot"></i>Có máy bán nước</a>
                                    <a href="javascript:void(0)"><i class="fa-solid fa-person-biking"></i>Nhà để xe rộng rãi, có mái che</a>
                                    <a href="javascript:void(0)"><i class="fa-solid fa-bowl-food"></i>Có căng-tin</a>
                                </div>
                                <p class="blog-description">
                                    Giảng đường Nguyễn Đăng là một trong những giảng đường chính có thiết kế đẹp nhất.
                                    Tên giảng đường được lấy cảm hứng từ tên của nhà giáo Nguyễn Đăng (1921-2008).
                                    Ông là Hiệu trưởng của trường trong giai đoạn 1963-1975
                                </p>
                                <a href="" class="read-link">
                                    <span>Xem chi tiết</span>
                                    <i class="ti-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="blog-start">
                        <div class="blog-post">
                            <div class="blog-image">
                                <a href="">
                                    <img src="{{ asset('assets/client/image/lecture-hall-image/gdTT.jpg') }}" alt="blog-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h6><a href="">Giảng đường Trung tâm</a></h6>
                                </div>
                                <div class="date-comm-adit">
                                    <a href="javascript:void(0)"><i class="fa-solid fa-mug-hot"></i>Có máy bán nước</a>
                                    <a href="javascript:void(0)"><i class="fa-solid fa-person-biking"></i>Khu gửi xe ngoài trời, rộng rãi</a>
                                </div>
                                <p class="blog-description">
                                    Giảng đường Trung tâm nằm trong dự án "Nâng cao chất lượng giáo dục đại học" (SAHEP) do Bộ Giáo dục và Đào tạo (GD&ĐT) phối hợp với Ngân hàng thế giới tổ chức. 
                                    Nhờ đó, giảng đường hiện được trang bị những cơ sở vật chất tốt nhất, phục vụ tối đa việc học tập và phát triển cho sinh viên Học viện.
                                </p>
                                <a href="" class="read-link">
                                    <span>Xem chi tiết</span>
                                    <i class="ti-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-start">
                        <div class="blog-post">
                            <div class="blog-image">
                                <a href="">
                                    <img src="{{ asset('assets/client/image/lecture-hall-image/gdB.jpg') }}" alt="blog-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h6><a href="">Giảng đường B</a></h6>
                                </div>
                                <div class="date-comm-adit">
                                    <a href="javascript:void(0)"><i class="fa-solid fa-mug-hot"></i>Có máy bán nước</a>
                                    <a href="javascript:void(0)"><i class="fa-solid fa-person-biking"></i>Nhà để xe rộng rãi, có mái che</a>
                                </div>
                                <p class="blog-description">
                                    Giảng đường B mang vẻ mộc mạc, trữ tình với mặt tiền hướng ra hồ Hi vọng, nơi gió mát cùng những nhành cây nhẹ đưa trong gió. Học tập tại đây sinh viên luôn có thể cảm thấy trong lòng khoan khoái đến lạ.
                                    Cảm thấy tâm hồn thật nhẹ nhõm khi rảo bước quanh hồ, ngồi đọc sách hay tán gẫu những câu chuyện từ thuở hoa niên.
                                </p>
                                <a href="" class="read-link">
                                    <span>Xem chi tiết</span>
                                    <i class="ti-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-start">
                        <div class="blog-post">
                            <div class="blog-image">
                                <a href="">
                                    <img src="{{ asset('assets/client/image/lecture-hall-image/gdC.jpg') }}" alt="blog-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h6><a href="">Giảng đường C</a></h6>
                                </div>
                                <div class="date-comm-adit">
                                    <a href="javascript:void(0)"><i class="fa-solid fa-mug-hot"></i>Có máy bán nước</a>
                                    <a href="javascript:void(0)"><i class="fa-solid fa-person-biking"></i>Nhà để xe rộng rãi, có mái che</a>
                                </div>
                                <p class="blog-description">
                                    Bên cạnh các giảng đường hiện đại, giảng đường C vẫn ở đó đồng hành cùng bước đường phát triển của sinh viên Học viện.
                                    Với vẻ đẹp cổ kính, nhuốm màu thời gian giảng đường C đã làm bao con tim của các lứa sinh viên xao xuyến chẳng thể nào quên.
                                </p>
                                <a href="" class="read-link">
                                    <span>Xem chi tiết</span>
                                    <i class="ti-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-start">
                        <div class="blog-post">
                            <div class="blog-image">
                                <a href="">
                                    <img src="{{ asset('assets/client/image/lecture-hall-image/gdCDnew.jpg') }}" alt="blog-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h6><a href="">Giảng đường Khoa Cơ - Điện mới</a></h6>
                                </div>
                                <div class="date-comm-adit">
                                    <a href="javascript:void(0)"><i class="fa-solid fa-mug-hot"></i>Có máy bán nước</a>
                                    <a href="javascript:void(0)"><i class="fa-solid fa-person-biking"></i>Nhà để xe rộng rãi, có mái che</a>
                                </div>
                                <p class="blog-description">
                                    Giảng đường Khoa Cơ - Điện mới nằm trong dự án "Nâng cao chất lượng giáo dục đại học" (SAHEP) do Bộ Giáo dục và Đào tạo (GD&ĐT) phối hợp với Ngân hàng thế giới tổ chức. 
                                    Nhờ đó, giảng đường hiện được trang bị những cơ sở vật chất tốt nhất, phục vụ tối đa việc học tập và phát triển cho sinh viên Học viện.
                                </p>                                <a href="" class="read-link">
                                    <span>Xem chi tiết</span>
                                    <i class="ti-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="all-page">
                    <span class="page-title">Showing 1 - 5 of 6 result</span>
                    <div class="page-number style-1">
                        <a href="javascript:void(0)" class="active">1</a>
                        <a href="javascript:void(0)">2</a>
                        <a href="javascript:void(0)">3</a>
                        <a href="javascript:void(0)">4</a>
                        <a href="javascript:void(0)">5</a>
                        <a href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- blog end -->

@endsection