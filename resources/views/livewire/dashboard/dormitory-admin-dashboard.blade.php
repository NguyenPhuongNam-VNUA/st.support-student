<div class="row">

    <div class="col-lg-3">
        <div class="card bg-pink text-white">
            <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h1 class="mb-0">{{$roomCount}}</h1>
                        <div>Phòng kí túc còn trống</div>
                    </div>
                    <div>
                        <i class="ph-bed fs-1"
                            style="transform: scale(2.9); margin-right: 20px; color: rgba(255, 255, 255, 0.5);"></i>
                    </div>
                </div>
                <div class="darker-bg mt-auto">
                    <a href="{{route('admin.dormitory.rooms.index')}}"
                        class="text-white d-flex justify-content-between align-items-center">
                        <span>Xem chi tiết</span>
                        <i class="ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card bg-primary text-white">
            <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h1 class="mb-0">{{$motelCount}}</h1>
                        <div>Nhà trọ chờ phê duyệt</div>
                    </div>
                    <div>
                        <i class="ph-house-line fs-1"
                            style="transform: scale(2.9); margin-right: 20px; color: rgba(255, 255, 255, 0.5);"></i>
                    </div>
                </div>
                <div class="darker-bg mt-auto">
                    <a href="{{route('admin.dormitory.motel.index')}}"
                        class="text-white d-flex justify-content-between align-items-center">
                        <span>Xem chi tiết</span>
                        <i class="ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card bg-teal text-white">
            <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h1 class="mb-0">{{$successCount}}</h1>
                        <div>Sinh viên đăng ký thành công</div>
                    </div>
                    <div>
                        <i class="ph-circle-wavy-check fs-1"
                            style="transform: scale(2.9); margin-right: 20px; color: rgba(255, 255, 255, 0.5);"></i>
                    </div>
                </div>
                <div class="darker-bg mt-auto">
                    <a href="{{route('admin.dormitory.register.student-success')}}"
                        class="text-white d-flex justify-content-between align-items-center">
                        <span>Xem chi tiết</span>
                        <i class="ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card bg-warning text-white">
            <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h1 class="mb-0">{{$requestCount}}</h1>
                        <div>Đơn đăng ký KTX chờ phê duyệt</div>
                    </div>
                    <div>
                        <i class="ph-files fs-1"
                            style="transform: scale(2.9); margin-right: 20px; color: rgba(255, 255, 255, 0.5);"></i>
                    </div>
                </div>
                <div class="darker-bg mt-auto">
                    <a href="{{route('admin.dormitory.register.index')}}"
                        class="text-white d-flex justify-content-between align-items-center">
                        <span>Xem chi tiết</span>
                        <i class="ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

