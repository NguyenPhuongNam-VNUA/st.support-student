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
                                        placeholder="Nhập từ khoá để tìm kiếm..."
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
                    <a href="{{route('admin.roles.create')}}" class="btn btn-teal"><i class="ph-plus-circle me-1"></i> Tạo mới</a>
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
                            <th class="text-center">Họ và tên</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Số điện thoại</th>
                            <th class="text-center">Vai trò</th>
                            <th class="text-center" style="width: 150px; text-align: center">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td class="text-center"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-center"></td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <form action="" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="" class="dropdown-item">
                                                <i class="ph-pencil me-2"></i>
                                                Chỉnh sửa
                                            </a>
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="ph-trash me-2"></i>
                                                Xóa
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>

                        </tr>
                    </tbody>
                </table>

                <div class="d-flex justify-content-end align-items-center w-100 mt-3">
                    <div class="pagination">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>