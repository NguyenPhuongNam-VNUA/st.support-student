<div class="card">
    <div class="card-header bg-secondary text-white border-bottom-0">
        <div class="row">
            <div class="col-md-6">
                <i class="ph-house-line fa-2x" style="vertical-align: middle; margin-right: 8px;"></i>
                <span style="font-size: 20px">Thông tin nhà trọ</span>

            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a href="{{ route('admin.dormitory.motel.index') }}" class="btn btn-secondary">
                    <i class="ph-arrow-bend-down-left"></i>&nbsp;Danh sách nhà trọ
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('storage/' . $motel->thumbnail) }}" alt=""
                    class="img-fluid rounded">
            </div>
            <div class="col-md-9">
                <div class="mt-1">
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-crown"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Tên chủ trọ :</div>
                        <div class="col">{{ $motel->owner_name}}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-phone-call"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Số điện thoại :</div>
                        <div class="col">{{ $motel->owner_phoneNumber }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-map-pin-line"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Địa chỉ :</div>
                        <div class="col">{{ $motel->address }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-door"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Số phòng: </div>
                        <div class="col">{{ $motel->total_rooms }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-thumbs-up"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Số phòng trống: </div>
                        <div class="col">{{ $motel->available_rooms }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-gear-six"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Trạng thái :</div>
                        <div class="col">
                            @if ($motel->status === \App\Enums\StatusRequest::Pending->value)
                                <span class="badge bg-warning bg-opacity-20 text-warning">
                                    {{ \App\Enums\StatusRequest::Pending->description() }}
                                </span>
                            @elseif($motel->status === \App\Enums\StatusRequest::Completed->value)
                                <span class="badge bg-success bg-opacity-20 text-success">
                                    {{ \App\Enums\StatusRequest::Completed->description() }}
                                </span>
                            @elseif($motel->status === \App\Enums\StatusRequest::Cancel->value)
                                <span class="badge bg-danger bg-opacity-20 text-danger">
                                    {{ \App\Enums\StatusRequest::Cancel->description() }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-note"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Mô tả :</div>
                        <div class="col">{{ $motel->description }}</div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="mt-4">Hình ảnh bổ sung</h4>
        @if($motel->motelGalleries && $motel->motelGalleries->isNotEmpty())
        <div class="row">
                @foreach($motel->motelGalleries as $gallery)
                    <div class="col-md-3 mb-3">
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gallery image" class="img-fluid">
                    </div>
                @endforeach
            </div>
        @else
            <p>Không có hình ảnh bổ sung.</p>
        @endif
    </div>
</div>
