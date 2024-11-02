<div class="card">
    <div class="card-header bg-secondary text-white border-bottom-0">
        <div class="row">
            <div class="col-md-6">
                <i class="ph-rocket fa-2x" style="vertical-align: middle; margin-right: 8px;"></i>
                <span style="font-size: 20px">Thông tin dịch vụ</span>

            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
                    <i class="ph-arrow-bend-down-left"></i>&nbsp;Danh sách dịch vụ
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('storage/' . $service->thumbnail) }}" alt="{{ $service->name }}"
                    class="img-fluid rounded">
            </div>
            <div class="col-md-9">
                <div class="mt-1">
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-rocket"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Tên dịch vụ :</div>
                        <div class="col">{{ $service->name }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-crown"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Tên chủ dịch vụ :</div>
                        <div class="col">{{ $service->owner_name }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-map-pin-line"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Địa chỉ :</div>
                        <div class="col">{{ $service->location }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-phone-call"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Số điện thoại: </div>
                        <div class="col">{{ $service->phone_number }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-list-bullets"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Danh mục: </div>
                        <div class="col">{{ $service->serviceCategory?->name }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-package"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Trạng thái :</div>
                        <div class = "col">
                            @if ($service->isShip === \App\Enums\Deliver::Yes->value)
                                <span class="badge bg-success bg-opacity-20 text-success">
                                    {{ \App\Enums\Deliver::Yes->description() }}
                                </span>
                            @elseif($service->isShip === \App\Enums\Deliver::No->value)
                                <span class="badge bg-danger bg-opacity-20 text-danger">
                                    {{ \App\Enums\Deliver::No->description() }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-note"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Mô tả :</div>
                        <div class="col">{{ $service->description }}</div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="mt-4">Hình ảnh bổ sung</h4>
        @if($service->serviceGalleries && $service->serviceGalleries->isNotEmpty())
        <div class="row">
                @foreach($service->serviceGalleries as $gallery)
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
