<div class="card">
    <div class="card-header" style="background-color: #b3deed">
        <div class="row">
            <div class="col-md-6">
                <i class="ph-folder-user"></i>
                <span style="font-size: 20px">Thông tin chi tiết</span>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a href="{{ route('dormitoryadmin.dormitory-students.index') }}" class="btn btn-outline-primary">
                    <i class="ph-arrow-bend-down-left"></i>&nbsp;Danh sách sinh viên
                </a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="mt-1">
            <div class="row justify-content-center">
                <div class="col-md-5 mx-auto">
                    <div class="row mb-3">
                        <div class="col-4 fw-bold text-muted">Họ và tên :</div>
                        <div class="col">{{ $dormitory_student->name }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 fw-bold text-muted">Mã sinh viên :</div>
                        <div class="col">{{ $dormitory_student->code }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 fw-bold text-muted">Giới tính :</div>
                        <div class="col">
                            @if($dormitory_student->gender === \App\Enums\Gender::Male->value)
                            <span class="text-primary">
                                <i class="ph-gender-male"></i>
                                {{ \App\Enums\Gender::Male->description() }}
                            </span>
                            @elseif($dormitory_student->gender === \App\Enums\Gender::Female->value)
                            <span class="text-danger">
                                <i class="ph-gender-female"></i>
                                {{ \App\Enums\Gender::Female->description() }}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 fw-bold text-muted">Ngày sinh :</div>
                        <div class="col">{{ \Carbon\Carbon::parse($dormitory_student->bod)->format('d/m/Y') }}</div>
                    </div>
                </div>
                <div class="col-md-5 mx-auto">
                    <div class="row mb-3">
                        <div class="col-4 fw-bold text-muted">Email :</div>
                        <div class="col">{{ $dormitory_student->email }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 fw-bold text-muted">Số điện thoại :</div>
                        <div class="col">{{ $dormitory_student->phone_number }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 fw-bold text-muted">CCCD :</div>
                        <div class="col">{{ $dormitory_student->citizen_id }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 fw-bold text-muted">Phòng :</div>
                        <div class="col">{{ $dormitory_student->room->name }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>