<div class="col">
    <div class="card">
        <div class="card-body">
            <div class="content-header d-flex justify-content-between align-items-end">
                <div class="content-filter w-50">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="form-group">
                                <label for="user-search-input">Tìm kiếm</label>
                                <div class="form-control-feedback form-control-feedback-end">
                                    <input wire:model.live="search" type="text" name="q"
                                        placeholder="Nhập vào tên sinh viên hoặc MSV ..."
                                        class="form-control" id="user-search-input">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-magnifying-glass"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-action">
                    <a href="{{route('dormitoryadmin.dormitory-students.create')}}" class="btn btn-teal"><i class="ph-plus-circle me-1"></i> Tạo mới</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div>
                <a href="#" class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-indigo">
                    <i class="fas fa-building me-3 fa"></i>Tòa: Kí túc xá A1
                </a>
            </div>
            <div class="mt-2">
                <a href="#" class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-pink">
                    <i class="fas fa-th-large me-3 fa"></i>Phòng: Kí túc xá A1
                </a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 2%">STT</th>
                            <th class="text-center">Họ và tên</th>
                            <th class="text-center">Mã sinh viên</th>
                            <th class="text-center">CCCD</th>
                            <th class="text-center">Số điện thoại</th>
                            <th class="text-center">Ngày sinh</th>
                            <th class="text-center" style=" text-align: center">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($dormitory_students->isEmpty())
                        <tr>
                            <td colspan="100%" class="text-center">
                                <img src="{{ asset('assets/admin/images/emptyData.png') }}" alt="Không tìm thấy kết quả" style="width: 400px;" />
                            </td>
                        </tr>
                        @else
                        @foreach($dormitory_students as $dormitory_student)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $dormitory_student->name }}</td>
                            <td>{{ $dormitory_student->code}}</td>
                            <td>{{ $dormitory_student->citizen_id }}</td>
                            <td>{{ $dormitory_student->phone_number }}</td>
                            <td> {{ \Carbon\Carbon::parse($dormitory_student->bod)->format('d/m/Y') }}</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="{{route('dormitoryadmin.dormitory-students.detail', ['id' => $dormitory_student -> id])}}" class="dropdown-item">
                                            <i class="ph-eye me-2"></i>
                                            Xem chi tiết
                                        </a>
                                        <a href="{{route('dormitoryadmin.dormitory-students.edit', ['id' => $dormitory_student -> id])}}" class="dropdown-item">
                                            <i class="ph-pencil me-2"></i>
                                            Chỉnh sửa
                                        </a>
                                        <button type="button" wire:click="openDeleteModel({{ $dormitory_student->id }})" class="dropdown-item text-danger">
                                            <i class="ph-trash me-2"></i>
                                            Xóa
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>

                <div class="d-flex justify-content-end align-items-center w-100 mt-3">
                    <div class="pagination">
                        {{ $dormitory_students->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>