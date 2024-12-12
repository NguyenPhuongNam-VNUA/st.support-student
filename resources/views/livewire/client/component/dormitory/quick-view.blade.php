<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h6 class="modal-title">Thông tin phòng</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        @if($room)
        <div class="modal-body">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                    @if($room->roomGalleries->isNotEmpty())
                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                            @foreach($room->roomGalleries as $key => $roomGallery)
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></button>
                            @endforeach
                        </div>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner text-center">
                            @foreach($room->roomGalleries as $key => $roomGallery)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="{{ asset('storage/'. $roomGallery->image) }}" class="img-fluid" alt="image">
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="carousel-inner text-center">
                            <div class="carousel-item active">
                                <img src="{{ asset('storage/'.$room->thumbnail) }}" class="img-fluid" alt="image">
                            </div>
                        </div>
                    @endif

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark"></span>
                    </button>
                </div>
        </div>

        <div class="modal-footer">
            <div class="quick-caption">
                <h4 style="color: #004586">Phòng: {{ $room->name }}</h4>

                <span class="badge rounded-pill bg-success mt-3">Tổng quan:</span>
                <ul class="mt-1">
                    <li>
                        <div class="d-flex justify-content-between">
                            <strong style="font-size: 13px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;"><i class="fa-solid fa-warehouse me-2"></i>Diện tích:</strong>
                            <span>{{ $room->facility->area ?? 'Không có thông tin' }} m²</span>
                        </div>
                    </li>
                    <li class="mt-2">
                        <div class="d-flex justify-content-between">
                            <strong style="font-size: 13px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;"><i class="fa-solid fa-bed me-2"></i>Số giường:</strong>
                            <span>{{ $room->facility->bed ?? 'Không có thông tin' }}</span>
                        </div>
                    </li>
                    <li class="mt-2">
                        <div class="d-flex justify-content-between">
                            <strong style="font-size: 13px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;"><i class="fa-solid fa-wind me-2"></i>Điều hòa:</strong>
                            <span>{{ $room->facility->air_conditioner ?? 'Không có thông tin' }}</span>
                        </div>
                    </li>
                    <li class="mt-2">
                        <div class="d-flex justify-content-between">
                            <strong style="font-size: 13px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;"><i class="fa-solid fa-tablet me-2"></i>Tủ quần áo:</strong>
                            <span>{{ $room->facility->wardrobe ?? 'Không có thông tin' }}</span>
                        </div>
                    </li>
                </ul>
                <span class="badge rounded-pill bg-success mt-3">Mô tả:</span>
                <div class="pro-description">
                    <p>{{ $room->description }}</p>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

