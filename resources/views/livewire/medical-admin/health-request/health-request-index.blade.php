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
                                        placeholder="Nhập vào tên hoặc mã sinh viên ..." class="form-control"
                                        id="user-search-input">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-magnifying-glass"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <th class="text-center">Tên sinh viên</th>
                            <th class="text-center">Mã sinh viên</th>
                            <th class="text-center">Mô tả</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($health_requests->isEmpty())
                            <tr>
                                <td colspan="100%" class="text-center">
                                    <img src="{{ asset('assets/admin/images/empty.png') }}" alt="Không tìm thấy kết quả"
                                        style="width: 400px;" />
                                </td>
                            </tr>
                        @else
                            @foreach ($health_requests as $health_request)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $health_request->name }}</td>
                                    <td>{{ $health_request->code }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($health_request->issue_description, 100) }}
                                    </td>
                                    <td>
                                        <div class="col">
                                            @if ($health_request->status === \App\Enums\HealthRequest::Pending->value)
                                                <span class="badge bg-warning bg-opacity-20 text-warning">
                                                    {{ \App\Enums\HealthRequest::Pending->description() }}
                                                </span>
                                            @elseif($health_request->status === \App\Enums\HealthRequest::Seen->value)
                                                <span class="badge bg-primary bg-opacity-20 text-primary">
                                                    {{ \App\Enums\HealthRequest::Seen->description() }}
                                                </span>
                                            @elseif($health_request->status === \App\Enums\HealthRequest::Responded->value)
                                                <span class="badge bg-success bg-opacity-20 text-success">
                                                    {{ \App\Enums\HealthRequest::Responded->description() }}
                                                </span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                <i class="ph-list"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                @if ($health_request->status === \App\Enums\HealthRequest::Seen->value)
                                                    <button type="button"
                                                        wire:click="respondedRequest({{ $health_request->id }})"
                                                        class="dropdown-item text-success">
                                                        <i class="ph-check-circle me-2"></i>
                                                        Đã phản hồi
                                                    </button>
                                                @endif
                                                    <button type="button"
                                                        wire:click="openDeleteModel({{ $health_request->id }})"
                                                        class="dropdown-item text-danger">
                                                        <i class="ph-trash me-2"></i>
                                                        Xóa
                                                    </button>

                                                    <a href="{{ route('admin.medical.healthRequest.detail', ['id' => $health_request->id]) }}"
                                                        class="dropdown-item"
                                                        wire:click.prevent="markAsSeen({{ $health_request->id }})">
                                                        <i class="ph-eye me-2"></i>
                                                        Xem chi tiết
                                                    </a>
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
                        {{ $health_requests->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
