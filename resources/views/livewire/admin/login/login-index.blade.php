<!-- Login form -->
<form class="login-form" wire:submit="login">
    <div class="card mb-0">
        <div class="card-body">
            <div class="text-center mb-3">
                <img style="width: 30%" src="{{ asset('assets/admin/images/logo_university.png') }}">
            </div>
            <div class="text-center mb-3">
                <h5 class="mb-0">Đăng nhập tài khoản</h5>
                <span class="d-block text-muted">Nhập thông tin đăng nhập của bạn bên dưới</span>
            </div>

            @error('error-login')
            <div class="mb-3 text-center">
                <label class="text-danger"> {{ $message }}</label>
            </div>
            @enderror

            <div class="mb-3">
                <label class="form-label">Tài khoản</label>
                <div class="form-control-feedback form-control-feedback-start">
                    <input wire:model.live="username" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Nhập tài khoản">
                    <div class="form-control-feedback-icon">
                        <i class="ph-user-circle text-muted"></i>
                    </div>
                    @error('username')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Mật khẩu</label>
                <div class="form-control-feedback form-control-feedback-start">
                    <input wire:model="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="•••••••••••">
                    <div class="form-control-feedback-icon">
                        <i class="ph-lock text-muted"></i>
                    </div>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex align-items-center mb-3">
                <label class="form-check">
                    <input type="checkbox" name="remember" class="form-check-input" checked>
                    <span class="form-check-label">Ghi nhớ</span>
                </label>

                <a href="{{ route('forgot-password') }}" class="ms-auto">Quên mật khẩu?</a>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success w-100">Đăng nhập</button>
            </div>

{{--            <div class="text-center text-muted content-divider mb-3">--}}
{{--                <span class="px-2">Don't have an account?</span>--}}
{{--            </div>--}}

{{--            <div class="mb-3">--}}
{{--                <a href="#" class="btn btn-light w-100">Sign up</a>--}}
{{--            </div>--}}

{{--            <span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>--}}
        </div>
    </div>
</form>
<!-- /login form -->
