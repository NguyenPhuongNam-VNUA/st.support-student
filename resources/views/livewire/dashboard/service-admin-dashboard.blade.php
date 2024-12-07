<div class="row">

    <div class="col-lg-4">
        <div class="card bg-pink text-white">
            <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h1 class="mb-0">{{$serviceCount}}</h1>
                        <div>Dịch vụ</div>
                    </div>
                    <div>
                        <i class="ph-planet fs-1"
                            style="transform: scale(2.9); margin-right: 20px; color: rgba(255, 255, 255, 0.5);"></i>
                    </div>
                </div>
                <div class="darker-bg mt-auto">
                    <a href="{{route('admin.services.index')}}"
                        class="text-white d-flex justify-content-between align-items-center">
                        <span>Xem chi tiết</span>
                        <i class="ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card bg-primary text-white">
            <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h1 class="mb-0">{{$categoryCount}}</h1>
                        <div>Danh mục dịch vụ</div>
                    </div>
                    <div>
                        <i class="ph-list-bullets fs-1"
                            style="transform: scale(2.9); margin-right: 20px; color: rgba(255, 255, 255, 0.5);"></i>
                    </div>
                </div>
                <div class="darker-bg mt-auto">
                    <a href="{{route('admin.service.service-category.index')}}"
                        class="text-white d-flex justify-content-between align-items-center">
                        <span>Xem chi tiết</span>
                        <i class="ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
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
                    <a href="{{route('admin.blogs.index')}}"
                        class="text-white d-flex justify-content-between align-items-center">
                        <span>Xem chi tiết</span>
                        <i class="ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


</div>
