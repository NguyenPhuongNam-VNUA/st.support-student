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
                                        <a class="text-success navbar-nav-link align-items-center justify-content-center w-40px h-32px rounded-pill position-absolute end-0 top-50 translate-middle-y p-0 me-1" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <i class="ph-faders-horizontal mt-3"></i>
                                        </a>

                                        <div wire:ignore class="dropdown-menu w-100 p-3" style="--dropdown-min-width: 25rem">
                                            <div class="d-flex align-items-center mb-3">
                                                <h6 class="mb-0 text-success">Bộ lọc</h6>
                                                <a wire:click="resetFilter" class="text-body rounded-pill ms-auto">
                                                    <i class="ph-clock-counter-clockwise"></i>
                                                </a>
                                            </div>

                                            <div class="d-flex gap-3 mb-3" >
                                                <!-- Tòa nhà -->
                                                <div class="flex-fill container-dormitory">
                                                    <label class="form-label text-muted">Tòa nhà:</label>
                                                    <div wire:ignore>
                                                        <select id="dormitory">
                                                            <option value=""></option>
                                                            @foreach($dormitories as $dormitory)
                                                            <option value="{{ $dormitory->id }}">{{ $dormitory->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Phòng -->
                                                <div class="flex-fill container-room">
                                                    <label class="form-label text-muted">Phòng:</label>
                                                    <div wire:ignore>
                                                        <select id="room">
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

{{--                                            <div class="ms-auto d-flex justify-content-end">--}}
{{--                                                <button wire:click="filter" type="button" class="btn btn-success w-25 ms-2">Lọc</button>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-action">
                    <a href="{{ route('admin.dormitory-students.create') }}" class="btn btn-teal"><i class="ph-plus-circle me-1"></i> Tạo mới</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div>
                <a class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-indigo">
                    <i class="fas fa-building me-3 fa"></i>Tòa: {{ $dormitory_name }}
                </a>
            </div>
            <div class="mt-3">
                <a class="badge bg-light border-start border-width-3 text-body rounded-start-0 border-pink">
                    <i class="fas fa-th-large me-3"></i>Phòng: {{ $room_name }}
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
                            <th class="text-center">Phòng</th>
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
                            <td>{{ $dormitory_student->room->name }}</td>
                            <td>{{ $dormitory_student->phone_number }}</td>
                            <td> {{ \Carbon\Carbon::parse($dormitory_student->bod)->format('d/m/Y') }}</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="{{route('admin.dormitory-students.detail', ['id' => $dormitory_student -> id])}}" class="dropdown-item">
                                            <i class="ph-eye me-2"></i>
                                            Xem chi tiết
                                        </a>
                                        <a href="{{route('admin.dormitory-students.edit', ['id' => $dormitory_student -> id])}}" class="dropdown-item">
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

    <script>
        $('#dormitory').select2({
            placeholder: 'Chọn tòa nhà',
            allowClear: true,
            dropdownParent: $('.container-dormitory')
        }).change(function() {
            Livewire.dispatch('changeDormitoryId', [$(this).val()]);
            $('#room').val(null).trigger('change');
        });

        $('#room').select2({
            placeholder: 'Chọn phòng',
            allowClear: true,
            dropdownParent: $('.container-room')
        }).change(function() {
            Livewire.dispatch('changeRoomId', [$(this).val()]);
        });

        window.addEventListener('reloadRoom', event => {
            let rooms = event.detail.rooms;
            console.log(rooms);
            $('#room').empty();
            $('#room').append($('<option>', {value: '', text:  ''}));
            rooms.forEach(room => {
                let option = $('<option>', {value: room.id, text: room.name})
                $('#room').append(option);
            });
        });

        window.addEventListener('resetFilter', event => {
            $('#dormitory').val(null).trigger('change');
            $('#room').val(null).trigger('change');
        });
    </script>
</div>
