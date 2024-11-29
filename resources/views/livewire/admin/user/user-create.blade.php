<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header bold">
                <i class="ph-info"></i>
                Thông tin người dùng
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label class="form-label">
                        Họ và tên: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="name" type="text" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Email: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="email" type="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Số điện thoại: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror">
                        @error('phone_number')
                        <label class="text-danger mt-1">{{$message}}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Chức vụ: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <select wire:model.live="role_id" class="form-control @error('role_id') is-invalid @enderror">
                            <option value="">Chọn chức vụ</option>
                            @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>

                        @error('role_id')
                        <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label class="form-label">
                        Tên người dùng: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror">
                        @error('user_name')
                        <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Mật khẩu: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="password" type="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                        <label class="text-danger mt-1">{{ $message}}</label>
                        @enderror
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header bold">
                <i class="ph-gear-six"></i>
                Hành động
            </div>
            <div class="card-body d-flex align-items-center gap-1">
                <button wire:click="store" class="btn btn-primary" type="submit"><i class="ph-floppy-disk"></i>Tạo mới</button>
                <a href="{{ route('admin.users.index') }}" type="button" class="btn btn-warning"><i class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>
</div>
