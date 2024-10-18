<form class="login-form" wire:submit="resetPassword">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h4 class="card-text py-6 mt-2 text-success">Thay đổi mật khẩu</h4>
            <div class="ms-auto my-auto">
{{--                <img src="" class="rounded-pill" width="32" height="32" alt="">--}}
                <p class="text-muted bold">Tài khoản: <span class="text-primary">{{ $user->name }}</span> </p>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">Mật khẩu mới:</label>
                <div class="form-control-feedback form-control-feedback-start">
                    <input wire:model.live="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="........">
                    <div class="form-control-feedback-icon">
                        <i class="ph-lock text-muted"></i>
                    </div>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-2">
                <label class="form-label mt-2">Nhập lại mật khẩu mới: </label>
                <div class="form-control-feedback form-control-feedback-start">
                    <input wire:model.live="confirmPassword" type="password" class="form-control @error('confirmPassword') is-invalid @enderror" placeholder="........">
                    <div class="form-control-feedback-icon">
                        <i class="ph-lock-key text-muted"></i>
                    </div>
                    @error('confirmPassword')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-success w-100">
                    <i class="ph-arrow-circle-right me-2"></i>
                    Thay đổi
                </button>
            </div>
        </div>
    </div>
</form>
