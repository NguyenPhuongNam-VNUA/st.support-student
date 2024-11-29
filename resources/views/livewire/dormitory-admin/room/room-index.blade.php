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
                                           placeholder="Nhập vào tên phòng ..."
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

                                            <div class="d-flex gap-2">
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

                                                <!-- Trống -->
                                                <div class="flex-fill container-status">
                                                    <label class="form-label text-muted">Trạng thái:</label>
                                                    <div>
                                                        <select wire:model.live="status" id="status">
                                                            <option value="">Chọn trạng thái</option>
                                                            <option value="empty">Còn trống</option>
                                                            <option value="full">Đã đầy</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-action">
                    <a href="{{route('admin.dormitory.rooms.create')}}" class="btn btn-teal"><i class="ph-plus-circle me-1"></i> Tạo mới</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%">STT</th>
                            <th class="text-center">Ảnh đại diện phòng</th>
                            <th class="text-center">Tên phòng</th>
                            <th class="text-center">Tòa</th>
                            <th class="text-center">Số người tối đa</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center" style=" text-align: center">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($rooms->isEmpty())
                        <tr>
                            <td colspan="100%" class="text-center">
                                <img src="{{ asset('assets/admin/images/empty.png') }}" alt="Không tìm thấy kết quả" style="width: 400px;" />
                            </td>
                        </tr>
                        @else
                        @foreach($rooms as $room)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">
                                <img src="{{ asset('storage/' . $room->thumbnail) }}"
                                     alt="{{ $room->name }}" width="100">
                            </td>
                            <td class="text-center">{{ $room->name }}</td>
                            <td class="text-center">{{ $room->dormitory->name ?? 'Không thuộc tòa nhà nào' }}</td>
                            <td>{{ $room->capacity}}</td>
                            <td class="text-center">
                                @if($room->status == \App\Enums\StatusRoom::Empty)
                                <span class="badge bg-success bg-opacity-20 text-success">Còn trống</span>
                                @else
                                <span class="badge bg-danger bg-opacity-20 text-danger">Đã đầy</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="{{ route('admin.dormitory-students.index',['room_id' => $room->id ?? null]) }}" class="dropdown-item">
                                            <i class="ph-eye me-2"></i>
                                            Danh sách sinh viên
                                            <span class="badge bg-primary ms-2">{{ \App\Models\Dormitory\DormitoryStudent::query()->where('room_id', $room->id)->count() }}</span>
                                        </a>
                                        <a href="{{ route('admin.dormitory.facilities.index', ['room_id' => $room->id ?? null]) }}" class="dropdown-item">
                                            <i class="ph-bed me-3"></i>
                                            Cơ sở vật chất
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ route('admin.dormitory.rooms.edit', ['id' => $room->id]) }}" class="dropdown-item">
                                            <i class="ph-pencil me-2"></i>
                                            Chỉnh sửa
                                        </a>
                                        <button type="button" wire:click="openDeleteModel({{ $room->id }})" class="dropdown-item text-danger">
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
                        {{ $rooms->links() }}
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
            Livewire.dispatch('changeDormitory', [$(this).val()]);
        });

        $('#status').select2({
            placeholder: 'Chọn trạng thái',
            allowClear: true,
            dropdownParent: $('.container-status')
        }).change(function() {
            Livewire.dispatch('changeStatus', [$(this).val()]);
        });

        window.addEventListener('resetFilter', event => {
            $('#dormitory').val(null).trigger('change');
            $('#status').val(null).trigger('change');
        });
    </script>
</div>
