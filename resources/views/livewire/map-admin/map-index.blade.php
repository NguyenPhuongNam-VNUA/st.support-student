<div class="col">
    <div class="card">
        <div class="card-body">
            <div class="content-header d-flex justify-content-between align-items-end">
                <div class="content-filter w-50">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            {{--                                    <div class="form-group">--}}
                            {{--                                        <label for="user-search-input">Tìm kiếm</label>--}}
                            {{--                                        <div class="form-control-feedback form-control-feedback-end">--}}
                            {{--                                            <input wire:model.live="search" type="text" name="q"--}}
                            {{--                                                   placeholder="Nhập vào tên, email hoặc SDT ..."--}}
                            {{--                                                   class="form-control" id="user-search-input">--}}
                            {{--                                            <div class="form-control-feedback-icon">--}}
                            {{--                                                <i class="ph-magnifying-glass"></i>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                        </div>
                    </div>
                </div>
                <div class="content-action">
                    <a href="{{route('admin.map.create_icon')}}" class="btn btn-teal"><i class="ph-plus-circle me-1"></i> Thêm icon</a>
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
                        <th class="text-center">Tên icon</th>
                        <th class="text-center">Hình ảnh</th>
                        <th class="text-center" style="text-align: center">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($icons->isEmpty())
                        <tr>
                            <td colspan="100%" class="text-center">
                                <img src="{{ asset('assets/admin/images/emptyData.png') }}" alt="Không tìm thấy kết quả" style="width: 400px;" />
                            </td>
                        </tr>
                    @else
                        @foreach($icons as $icon)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td> {{$icon->name}}</td>
                                <td> <img src="{{ asset('storage/' . $icon->thumbnail) }}" alt="{{ $icon->name }}" width="32"></td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown">
                                            <i class="ph-list"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{route('admin.map.edit_icon',$icon->id)}}" class="dropdown-item">
                                                <i class="ph-pencil me-2"></i>
                                                Chỉnh sửa
                                            </a>
                                            <button type="button" wire:click="openDeleteModelIcon({{ $icon->id }})" class="dropdown-item text-danger">
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
                        {{ $icons->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="">
                <div style="position: relative">
                    <button id="toggleView">2D</button>
                    <div id='map' style='width: 95%; height: 450px; margin: auto; ' ></div>
                    <div class="mapbox"></div>
                </div>
                <script>
                    const icons = @json($icons_2);
                    const points = @json($points);
                    const createPointUrl = "{{ route('admin.map.create_point') }}";
                    const editPointUrl = "{{ route('admin.map.edit_point', ':id') }}";
                </script>
            </div>
        </div>
    </div>
</div>
