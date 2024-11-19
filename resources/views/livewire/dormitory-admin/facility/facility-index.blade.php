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
                                           placeholder="Nhập số lượng cơ sở hạ tầng ..."
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
                <div class="content-action">
                    <a href="{{route('admin.dormitory.facilities.create')}}" class="btn btn-teal"><i class="ph-plus-circle me-1"></i> Tạo mới</a>
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
                        <th class="text-center">Tên phòng</th>
                        <th class="text-center">Diện tích </th>
                        <th class="text-center">Số lượng giường</th>
                        <th class="text-center">Số lượng tủ </th>
                        <th class="text-center">Số lượng điều hòa</th>
                        <th class="text-center" style=" text-align: center">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($facilities->isEmpty())
                        <tr>
                            <td colspan="100%" class="text-center">
                                <img src="{{ asset('assets/admin/images/emptyData.png') }}" alt="Không tìm thấy kết quả" style="width: 400px;" />
                            </td>
                        </tr>
                    @else
                        @foreach($facilities as $facility)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center"> {{ $facility->room->name }} </td>
                                <td class="text-center">{{ $facility->area }} m&#178; </td>
                                <td class="text-center">{{ $facility->bed }}</td>
                                <td class="text-center">{{ $facility->wardrobe }}</td>
                                <td class="text-center">{{ $facility->air_conditioner}}</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown">
                                            <i class="ph-list"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{ route('admin.dormitory.facilities.edit', ['id' => $facility->id]) }}" class="dropdown-item">
                                                <i class="ph-pencil me-2"></i>
                                                Chỉnh sửa
                                            </a>
                                            <button type="button" wire:click="openDeleteModel({{ $facility->id }})" class="dropdown-item text-danger">
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
                        {{ $facilities->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

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
            $('#status').val(null).trigger('change');
        });
    </script>
</div>
