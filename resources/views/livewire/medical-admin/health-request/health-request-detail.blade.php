<div class="card">
    <div class="card-header bg-secondary text-white border-bottom-0">
        <div class="row">
            <div class="col-md-6">
                <i class="ph-chats-circle fa-2x" style="vertical-align: middle; margin-right: 8px;"></i>
                <span style="font-size: 20px">Thông tin yêu cầu từ sinh viên</span>

            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a href="{{ route('admin.medical.healthRequest.index') }}" class="btn btn-secondary">
                    <i class="ph-arrow-bend-down-left"></i>&nbsp;Danh sách yêu cầu tư vấn sức khởe
                </a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-1">
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-user-square"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Họ và tên :</div>
                        <div class="col">{{ $healthRequest->name }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-identification-card"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Mã sinh viên :</div>
                        <div class="col">{{ $healthRequest->code }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-phone-call"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Số điện thoại :</div>
                        <div class="col">{{ $healthRequest->phone }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-notification"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Trạng thái :</div>
                        <div class="col">
                            @if ($healthRequest->status === \App\Enums\HealthRequest::Pending->value)
                                <span class="badge bg-warning bg-opacity-20 text-warning">
                                    {{ \App\Enums\HealthRequest::Pending->description() }}
                                </span>
                            @elseif($healthRequest->status === \App\Enums\HealthRequest::Seen->value)
                                <span class="badge bg-primary bg-opacity-20 text-primary">
                                    {{ \App\Enums\HealthRequest::Seen->description() }}
                                </span>
                            @elseif($healthRequest->status === \App\Enums\HealthRequest::Responded->value)
                                <span class="badge bg-success bg-opacity-20 text-success">
                                    {{ \App\Enums\HealthRequest::Responded->description() }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-clipboard-text"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Mô tả:</div>
                        <div class="col-11" style="padding-left: 50px">{{ $healthRequest->issue_description }}</div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-image"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Ảnh mô tả:</div>
                        @if($healthRequest->healthRequestGalleries && $healthRequest->healthRequestGalleries->isNotEmpty())
                        
                        <br><br>
                        <div class="row" style="padding-left: 50px">
                                @foreach($healthRequest->healthRequestGalleries as $gallery)
                                    <div class="col-md-3 mb-3">
                                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gallery image" class="img-fluid">
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p>Không có hình ảnh mô tả.</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
    </div>
</div>
