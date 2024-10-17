<div class="card">
    <div class="card-header bg-secondary text-white border-bottom-0">
        <div class="row">
            <div class="col-md-6">
                <i class="ph-first-aid"></i>
                <span style="font-size: 20px">Thông tin cán bộ y tế</span>

            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a href="{{ route('medicaladmin.doctors.index') }}" class="btn btn-secondary">
                    <i class="ph-arrow-bend-down-left"></i>&nbsp;Danh sách cán bộ y tế
                </a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('storage/' . $doctor->thumbnail) }}"
                    alt="{{ $doctor->name }}"
                    class="img-fluid rounded"
                    style="height:100%">
            </div>
            <div class="col-md-9">
                <div class="mt-1">
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-user-square"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Họ và tên :</div>
                        <div class="col">{{ $doctor->name }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-telegram-logo"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Email :</div>
                        <div class="col">{{ $doctor->email }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-phone-call"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Số điện thoại :</div>
                        <div class="col">{{ $doctor->phone_number }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1 text-end text-muted">
                            <i class="ph-clipboard-text"></i>
                        </div>
                        <div class="col-2 fw-bold text-muted">Mô tả :</div>
                        <div class="col">{{ $doctor->description }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>