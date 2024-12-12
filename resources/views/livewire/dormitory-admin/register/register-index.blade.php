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
                                           placeholder="Nhập mã sinh viên, họ tên ..."
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
                                                    <label class="form-label text-muted">Phòng:</label>
                                                    <div wire:ignore>
                                                        <select id="room">
                                                            <option value=""></option>
                                                            @foreach($rooms as $dormitoryName => $room)
                                                                @if (!empty($room))
                                                                    <optgroup class="text-primary" label="{{ $dormitoryName }}">
                                                                        @foreach($room as $item)
                                                                            <option class="text-muted" value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                                                        @endforeach
                                                                    </optgroup>
                                                                @endif
                                                            @endforeach
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
{{--                <div class="content-action">--}}
{{--                    <a href="{{route('admin.dormitory.facilities.create')}}" class="btn btn-teal"><i class="ph-plus-circle me-1"></i> Tạo mới</a>--}}
{{--                </div>--}}
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
                        <th class="text-center">Tên phòng</th>
                        <th class="text-center">Họ và tên </th>
                        <th class="text-center">Mã sinh viên</th>
                        <th class="text-center">Giới tính</th>
                        <th class="text-center">Trạng thái</th>
                        <th class="text-center" style=" text-align: center">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($dormitoryRequests->isEmpty())
                        <tr>
                            <td colspan="100%" class="text-center">
                                <img src="{{ asset('assets/admin/images/empty.png') }}" alt="Không tìm thấy kết quả" style="width: 400px;" />
                            </td>
                        </tr>
                    @else
                        @foreach($dormitoryRequests as $request)
                            <tr @if($request->is_check == 1) style="background-color: rgba(128,128,128,0.11)" @endif">
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center"> {{ $request->room->name }} </td>
                                <td class="text-center">{{ $request->name }} </td>
                                <td class="text-center">{{ $request->code }}</td>
                                <td class="text-center">{!! $request->genderText !!}</td>
                                <td class="text-center">{!! $request->statusText !!}</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a class="text-body" data-bs-toggle="dropdown">
                                            <i class="ph-list"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <!-- Nút xem chi tiết luôn được hiển thị -->
                                                <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal_{{ $request->id }}">
                                                    <i class="ph-eye me-2"></i> Chi tiết
                                                </button>
                                            </li>

                                            <!-- Chỉ hiển thị các nút khác nếu không phải trạng thái Completed hoặc Cancel -->
                                            @if(!in_array($request->status, [\App\Enums\StatusRequest::Completed->value, \App\Enums\StatusRequest::Cancel->value]))
                                                <li>
                                                    <button type="button" class="dropdown-item text-success" data-bs-toggle="modal" data-bs-target="#modal_form_horizontal_success{{ $request->id }}">
                                                        <i class="ph-check-circle me-2"></i>
                                                        Xác nhận thành công
                                                    </button>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <button type="button" class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#modal_form_horizontal_{{ $request->id }}">
                                                        <i class="ph-file-x me-2"></i>Từ chối
                                                    </button>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>

                <div class="d-flex justify-content-end align-items-center w-100 mt-3">
                    <div class="pagination">
                        {{ $dormitoryRequests->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach($dormitoryRequests as $request)
        <div id="modal_{{ $request->id }}" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title">Thông tin đơn đăng ký</h5>
{{--                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>--}}
                        <span class="bg-success" style="padding: 5px; border-radius: 5px">Phòng: {{ $request->room->name }}</span>
                    </div>

                    <div class="modal-body">
                        <h6 class="fw-semibold">Thông tin cá nhân: </h6>
                        <p class="text-muted">Họ và tên: {{ $request->name }}</p>
                        <p class="text-muted">Mã sinh viên: {{ $request->code }}</p>
                        <p class="text-muted">Giới tính: {!! $request->genderText !!}</p>
                        <p class="text-muted">Ngày sinh: {{ \Carbon\Carbon::parse($request->bod)->format('d-m-Y') }}</p>
                        <p class="text-muted">Số điện thoại: {{ $request->phone }}</p>

                        <hr>

                        <h6 class="fw-semibold">Chú thích</h6>
                        <p> {{ $request->note }}</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div wire:ignore.self id="modal_form_horizontal_{{ $request->id }}" class="modal fade" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title text-white">Từ chối</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <h6 class="fw-semibold">Thông tin sinh viên: </h6>
                        <p class="text-muted">Họ và tên: {{ $request->name }}</p>
                        <p class="text-muted">Mã sinh viên: {{ $request->code }}</p>
                        <p class="text-muted">Giới tính: {!! $request->genderText !!}</p>
                        <p class="text-muted">Ngày sinh: {{ \Carbon\Carbon::parse($request->bod)->format('d-m-Y') }}</p>
                        <p class="text-muted">Số điện thoại: {{ $request->phone }}</p>
                        <hr>
                        <h6 class="fw-semibold">Lý do từ chối: </h6>
                        <textarea wire:model.live="cancelContent" class="form-control @error('cancelContent') is-invalid @enderror" rows="3" placeholder="Nhập lý do từ chối"></textarea>
                        @error('cancelContent')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Đóng</button>
                        <button wire:loading.remove wire:target="cancelRequest" wire:click="cancelRequest({{ $request->id }})" type="button" class="btn btn-danger"><i class="ph-at me-2"></i>Xác nhận</button>
                        <span wire:loading wire:target="cancelRequest" class="text-danger">Đang gửi...</span>
                    </div>
                </div>
            </div>
        </div>

        <div wire:ignore.self id="modal_form_horizontal_success{{ $request->id }}" class="modal fade" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title text-white">Xác nhận thành công</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <h6 class="fw-semibold">Thông tin sinh viên: </h6>
                        <p class="text-muted">Họ và tên: {{ $request->name }}</p>
                        <p class="text-muted">Mã sinh viên: {{ $request->code }}</p>
                        <p class="text-muted">Giới tính: {!! $request->genderText !!}</p>
                        <p class="text-muted">Ngày sinh: {{ \Carbon\Carbon::parse($request->bod)->format('d-m-Y') }}</p>
                        <p class="text-muted">Số điện thoại: {{ $request->phone }}</p>
                        <hr>
                        <h6 class="fw-semibold">Nội dung: </h6>
                        <textarea wire:model.live="completedContent" class="form-control @error('completedContent') is-invalid @enderror" rows="3" placeholder="Nhập nội dung thông báo thành công"></textarea>
                        @error('completedContent')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Đóng</button>
                        <button wire:loading.remove wire:target="completedRequest" wire:click="completedRequest({{ $request->id }})" type="button" class="btn btn-success"><i class="ph-at me-2"></i>Xác nhận</button>
                        <span wire:loading wire:target="completedRequest" class="text-success">Đang gửi...</span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    <script>
        $('#room').select2({
            placeholder: 'Chọn phòng',
            allowClear: true,
            dropdownParent: $('.container-dormitory')
        }).change(function() {
            Livewire.dispatch('changeRoom', [$(this).val()]);
        });

        window.addEventListener('resetFilter', event => {
            $('#dormitory').val(null).trigger('change');
        });
    </script>
</div>
