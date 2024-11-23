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
                                        placeholder="Nhập vào tên chủ trọ ..." class="form-control"
                                        id="user-search-input">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-magnifying-glass"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-action">
                    <a href="{{ route('admin.dormitory.motel.create') }}" class="btn btn-teal"><i
                            class="ph-plus-circle me-1"></i> Tạo mới</a>
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
                            <th class="text-center">Ảnh đại diện trọ</th>
                            <th class="text-center">Tên chủ trọ</th>
                            <th class="text-center">Số điện thoại</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center">Số phòng trống</th>
                            <th class="text-center" style="text-align: center">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($motels->isEmpty())
                            <tr>
                                <td colspan="100%" class="text-center">
                                    <img src="{{ asset('assets/admin/images/empty.png') }}"
                                        alt="Không tìm thấy kết quả" style="width: 400px;" />
                                </td>
                            </tr>
                        @else
                            @foreach ($motels as $motel)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $motel->thumbnail) }}" alt=""
                                            width="100">
                                    </td>
                                    <td>{{ $motel->owner_name }}</td>
                                    <td>{{ $motel->owner_phoneNumber }}</td>
                                    <td class="text-center">
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
                                    </td>

                                    <td>{{ $motel->available_rooms }}</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                <i class="ph-list"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                @if ($motel->status !== \App\Enums\StatusRequest::Cancel->value)
                                                    <button type="button"
                                                        wire:click="approveMotel({{ $motel->id }})"
                                                        class="dropdown-item text-success">
                                                        <i class="ph-check-circle me-2"></i>
                                                        Duyệt
                                                    </button>
                                                @else
                                                    <button type="button" class="dropdown-item text-muted" disabled>
                                                        <i class="ph-check-circle me-2"></i>
                                                        Duyệt
                                                    </button>
                                                @endif

                                                <button type="button" wire:click="cancelMotel({{ $motel->id }})"
                                                    class="dropdown-item text-warning">
                                                    <i class="ph-x-circle me-2"></i>
                                                    Hủy bỏ
                                                </button>
                                                <a href="{{ route('admin.dormitory.motel.detail', ['id' => $motel->id]) }}"
                                                    class="dropdown-item">
                                                    <i class="ph-eye me-2"></i>
                                                    Xem chi tiết
                                                </a>
                                                <a href="{{ route('admin.dormitory.motel.edit', ['id' => $motel->id]) }}"
                                                    class="dropdown-item">
                                                    <i class="ph-pencil me-2"></i>
                                                    Chỉnh sửa
                                                </a>
                                                <button type="button"
                                                    wire:click="openDeleteModel({{ $motel->id }})"
                                                    class="dropdown-item text-danger">
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
                        {{ $motels->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
