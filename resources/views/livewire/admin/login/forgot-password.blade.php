<form class="login-form" wire:submit="forgotPassword">
    <div class="card mb-0">
        <div class="card-body">
            <div class="text-center mb-3">
                <div class="d-inline-flex bg-success bg-opacity-10 text-success lh-1 rounded-pill p-3 mb-3 mt-1">
                    <i class="ph-telegram-logo ph-2x"></i>
                </div>
                <h5 class="mb-0">Quên mật khẩu</h5>
                <span class="d-block text-muted">Nhập email để xác thực lấy lại mật khẩu</span>
            </div>

            <div class="mb-3">
                <label class="form-label">Email của bạn</label>
                <div class="form-control-feedback form-control-feedback-start">
                    <input wire:model.live="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="john@doe.com">
                    <div class="form-control-feedback-icon">
                        <i class="ph-at text-muted"></i>
                    </div>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="card-footer d-flex gap-5">
                <a href="{{ route('login') }}" class="btn btn-outline-danger w-100">
                    <i class="ph-arrow-circle-left me-2"></i>
                    Quay lại
                </a>
                <button type="submit" class="btn btn-success w-100">
                    <i class="ph-arrow-circle-right me-2"></i>
                    Xác thực
                </button>
            </div>
        </div>
    </div>
</form>
