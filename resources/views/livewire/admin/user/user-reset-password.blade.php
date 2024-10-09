<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header bold">
                <i class="ph-info"></i>
                Đổi mật khẩu
            </div>

            <div class="card-body">
                <div class="text-muted mb-3">
                    Tài khoản của: <span class="text-primary">{{ $user->name }}</span>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Mât khẩu mới: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="newPassword" type="password" class="form-control">
                        @error('newPassword')
                        <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Nhập lại mật khẩu mới: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="confirmPassword" type="password" class="form-control">
                        @error('confirmPassword')
                        <label class="text-danger">{{ $message }}</label>
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
                <button wire:click="resetPassword" class="btn btn-primary" type="submit"><i class="ph-floppy-disk"></i>Đổi mật khẩu</button>
                <a href="{{ route('admin.users.index') }}" type="button" class="btn btn-warning"><i class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>
</div>

