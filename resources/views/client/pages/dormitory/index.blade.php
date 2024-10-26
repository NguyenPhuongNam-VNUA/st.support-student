@extends('client.layouts.master')

@section('title')
    Ký túc xá
@endsection

@section('content')
    <!-- breadcrumb start -->
    <section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url(https://via.placeholder.com/1519x250); background-size: cover;">
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

    <section class="order-histry-area section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="order-history">
                        <div class="profile sticky-container">
                            <div class="order-pro d-block">
                                <div class="order-name">
                                    <h4 class="text-success text-center">Ký túc xá</h4>
                                </div>
                            </div>
                            <div class="order-his-page">
                                <ul class="profile-ul">
                                    <li class="profile-li"><a href="javascript:void(0)" onclick="showContent('toaA')" class="nav-link active">Tòa A <span class="badge bg-success">5</span></a></li>
                                    <li class="profile-li"><a href="javascript:void(0)" onclick="showContent('toaB')" class="nav-link">Tòa B</a></li>
                                    <li class="profile-li"><a href="javascript:void(0)" onclick="showContent('toaC')" class="nav-link">Tòa C</a></li>
                                    <li class="profile-li"><a href="javascript:void(0)" onclick="showContent('toaD')" class="nav-link">Tòa D <span class="badge bg-success">3</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="order-info border rounded p-3">
                            <div id="toaA" class="content-div active">
                                <section class="section-b-padding pro-page-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="pro-page-tab">
                                                    <ul class="nav nav-tabs">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-bs-toggle="tab" onclick="showRoom('tang1')">Tầng 1</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab" onclick="showRoom('tang2')">Tầng 2</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab" onclick="showRoom('tang3')">Tầng 3</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tang1" class="room-div active">
                                        <div class="d-flex flex-wrap gap-4">
                                            <div class="card room-card">
                                                <div class="card-header room-header">
                                                    <h5>Phòng 101</h5>
                                                </div>
                                                <div class="card-body room-body">
                                                    <p><i class="fa-solid fa-people-roof"></i> Số lượng chỗ trống: 3/6</p>
                                                    <p><i class="fa-solid fa-kaaba"></i> Tiện ích: Điều hòa, Wi-Fi, Bàn học, Tủ đồ</p>
                                                    <p><i class="fa-solid fa-hand-holding-dollar"></i> Giá: 1,500,000 VND/tháng</p>
                                                </div>
                                                <div class="card-footer d-flex justify-content-end">
                                                    <a href="#" class="btn btn-primary">Đăng ký</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tang2" class="room-div">
                                        <h4>Thông tin Tầng 2</h4>
                                        <p>Đây là nội dung của Tầng 2.</p>
                                    </div>
                                    <div id="tang3" class="room-div">
                                        <h4>Thông tin Tầng 3</h4>
                                        <p>Đây là nội dung của Tầng 3.</p>
                                    </div>
                                </section>
                            </div>

                            <div id="toaB" class="content-div">
                                <h4>Thông tin Tòa B</h4>
                                <p>Đây là nội dung của Tòa B.</p>
                            </div>

                            <div id="toaC" class="content-div">
                                <h4>Thông tin Tòa C</h4>
                                <p>Đây là nội dung của Tòa C.</p>
                            </div>

                            <div id="toaD" class="content-div">
                                <h4>Thông tin Tòa D</h4>
                                <p>Đây là nội dung của Tòa D.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        .room-div {
            display: none;
        }
        .room-div.active {
            display: block;
        }

        .order-info {
            border-left:3px solid #066140 !important;
        }

        .profile-ul li a {
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .profile-ul li a:hover,
        .profile-ul li a.active {
            background-color: #f1f1f1;
            color: #066140;
        }

        .order-history .profile {
            border-left: 3px solid #066140 !important;
        }

        .nav-item a {
            color: #066140 !important;
            text-transform: none !important;
            cursor: pointer;
        }

        .nav-item a:hover {
            color: #ffffff !important;
            background-color: #066140 !important;
        }

        .card {
            padding: 10px;
            border: 1px solid #066140;
            border-radius: 5px;
            color: #066140;
            font-weight: 500;
            cursor: pointer;
        }

        .room-div {
            display: none;
        }
        .room-div.active {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .room-card {
            width: 250px;
            padding: 15px;
            border: 1px solid #066140;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            color: #066140;
        }

        .room-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .room-header {
            background-color: #448b1f;
            padding: 8px;
            border-radius: 5px 5px 0 0;
            text-align: center;
        }

        .room-header h5 {
            color: #ffffff;
            font-size: 1.1rem;
            margin: 0;
        }

        .room-body p {
            font-size: 0.95rem;
            margin: 5px 0;
        }

        .btn-primary {
            background-color: #066140;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #054f33;
        }

        .pro-page-content .pro-page-tab ul.nav.nav-tabs{
            flex-direction: row !important;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
    </style>
@endsection

@section('scripts-custom')
    <script>
        // Hàm để hiển thị nội dung tòa tương ứng khi nhấn vào nút
        function showContent(toaId) {
            const tabs = document.querySelectorAll('.profile-ul li a');
            tabs.forEach(tab => tab.classList.remove('active'));

            const activeTab = document.querySelector(`a[onclick="showContent('${toaId}')"]`);
            activeTab.classList.add('active');

            const allContentDivs = document.querySelectorAll('.content-div');
            allContentDivs.forEach(div => div.classList.remove('active'));

            const selectedDiv = document.getElementById(toaId);
            selectedDiv.classList.add('active');
        }

        // Hàm để hiển thị nội dung tầng tương ứng khi nhấn vào nút
        function showRoom(tangId) {
            const allRoomDivs = document.querySelectorAll('.room-div');
            allRoomDivs.forEach(div => div.classList.remove('active'));

            const selectedDiv = document.getElementById(tangId);
            selectedDiv.classList.add('active');
        }
    </script>
@endsection
