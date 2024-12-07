<div class="row">

    <div class="col-lg-3">
        <div class="card bg-pink text-white">
            <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h1 class="mb-0">{{ $userCount }}</h1>
                        <div>Người dùng</div>
                    </div>
                    <div>
                        <i class="ph-users-three fs-1"
                            style="transform: scale(2.9); margin-right: 20px; color: rgba(255, 255, 255, 0.5);"></i>
                    </div>
                </div>
                <div class="darker-bg mt-auto">
                    <a href="{{ route('admin.users.index') }}"
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
                        <h1 class="mb-0">{{$studentCount}}</h1>
                        <div>Sinh viên hệ thống</div>
                    </div>
                    <div>
                        <i class="ph-student fs-1"
                            style="transform: scale(2.9); margin-right: 20px; color: rgba(255, 255, 255, 0.5);"></i>
                    </div>
                </div>
                <div class="darker-bg mt-auto">
                    <a href="{{ route('admin.students.index') }}"
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
                        <h1 class="mb-0">{{$postCount}}</h1>
                        <div>Bài viết</div>
                    </div>
                    <div>
                        <i class="ph-newspaper fs-1"
                            style="transform: scale(2.9); margin-right: 20px; color: rgba(255, 255, 255, 0.5);"></i>
                    </div>
                </div>
                <div class="darker-bg mt-auto">
                    <a href="{{ route('admin.blogs.index') }}"
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
                        <h1 class="mb-0">{{$roleCount}}</h1>
                        <div>Chức vụ</div>
                    </div>
                    <div>
                        <i class="ph-user-circle-gear fs-1"
                            style="transform: scale(2.9); margin-right: 20px; color: rgba(255, 255, 255, 0.5);"></i>
                    </div>
                </div>
                <div class="darker-bg mt-auto">
                    <a href="{{ route('admin.roles.index') }}"
                        class="text-white d-flex justify-content-between align-items-center">
                        <span>Xem chi tiết</span>
                        <i class="ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
