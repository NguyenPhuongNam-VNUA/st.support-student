<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header justify-content-between">
            <h5 class="modal-title" id="quickviewDormitoryLabel">Thông tin phòng</h5>
            <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
        </div>
        <div class="quick-veiw-area">
            @if($room)
                <div class="quick-image">
                    <div class="tab-content">
                        @if($room->roomGalleries->isNotEmpty())
                            @foreach($room->roomGalleries as $key => $roomGallery)
                                <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}" id="image-{{ $key + 1 }}">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="{{ asset('storage/'. $roomGallery->image) }}" class="img-fluid" alt="image">
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="tab-pane fade show active" id="image-1">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="{{ asset('storage/'.$room->thumbnail) }}" class="img-fluid" alt="image">
                                </a>
                            </div>
                        @endif
                    </div>
                    <ul class="nav nav-tabs quick-slider owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer owl-height" style="height: 88.05px;">
                            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 640px;">
                                @foreach($room->roomGalleries as $key => $roomGallery)
                                    <div class="owl-item active" style="width: 70px; margin-right: 10px;">
                                        <li class="nav-item items">
                                            <a class="nav-link {{ $key == 0 ? 'active' : '' }}" data-bs-toggle="tab" href="#image-{{ $key + 1 }}">
                                                <img src="{{ asset('storage/'. $roomGallery->image) }}" class="img-fluid" alt="image">
                                            </a>
                                        </li>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </ul>
                </div>
                <div class="quick-caption">
                    <h4 style="color: #004586">Phòng: {{ $room->name }}</h4>

                    <span class="badge rounded-pill bg-success mt-3">Tổng quan:</span>
                    <ul class="mt-1">
                        <li>
                            <div class="d-flex justify-content-between">
                                <strong style="font-size: 13px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;"><i class="fa-solid fa-warehouse me-2"></i>Diện tích:</strong>
                                <span>{{ $room->facilities->first()->area ?? 'Không có thông tin' }} m²</span>
                            </div>
                        </li>
                        <li class="mt-2">
                            <div class="d-flex justify-content-between">
                                <strong style="font-size: 13px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;"><i class="fa-solid fa-bed me-2"></i>Số giường:</strong>
                                <span>{{ $room->facilities->first()->bed ?? 'Không có thông tin' }}</span>
                            </div>
                        </li>
                        <li class="mt-2">
                            <div class="d-flex justify-content-between">
                                <strong style="font-size: 13px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;"><i class="fa-solid fa-wind me-2"></i>Điều hòa:</strong>
                                <span>{{ $room->facilities->first()->air_conditioner ?? 'Không có thông tin' }}</span>
                            </div>
                        </li>
                        <li class="mt-2">
                            <div class="d-flex justify-content-between">
                                <strong style="font-size: 13px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;"><i class="fa-solid fa-tablet me-2"></i>Tủ quần áo:</strong>
                                <span>{{ $room->facilities->first()->wardrobe ?? 'Không có thông tin' }}</span>
                            </div>
                        </li>
                    </ul>
                    <span class="badge rounded-pill bg-success mt-3">Mô tả:</span>
                    <div class="pro-description">
                        <p>{{ $room->description }}</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
