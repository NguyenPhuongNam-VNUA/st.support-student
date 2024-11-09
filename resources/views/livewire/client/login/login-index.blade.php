<section class="section-tb-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="register-area" style="max-width: 55%">
                    <div class="register-box" style="background-color: rgba(64,64,64,0.07); border-radius: 12px;">
                        <h1 class="text-success">Đăng nhập tài khoản</h1>
                        <p class="text-muted">Vui lòng nhập thông tin tài khoản bên dưới</p>
                        @error('error')
                        <div class="mt-2 text-center">
                            <label class="text-danger"> {{ $message }} </label>
                        </div>
                        @enderror
                        <form wire:submit="login">
                            <div class="mt-3">
                                <label class="text-muted form-label">Tài khoản: </label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    <input wire:model.live="username" type="text" class="form-control" placeholder="Nhập tài khoản">
                                </div>
                                @error('username') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                            </div>
                            <div class="mt-4">
                                <label class="text-muted form-label">Mật khẩu:</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                                    <input wire:model.live="password" type="password" class="form-control" placeholder="•••••••••••">
                                </div>
                                @error('password') <span class="text-danger bold mt-1">{{ $message }}</span> @enderror
                            </div>
                            <div class="d-flex gap-2 justify-content-between">
                                <a href="#" class="text-decoration-none text-warning">Quên mật khẩu</a>
                                <a href="{{ route('student.register') }}" class="text-decoration-none text-primary">Đăng ký</a>
                            </div>
                            <div  class="text-center mt-3">
                                <div wire:loading wire:target="login">
                                    <span ><h6 class="text-success">Đang kiểm tra...</h6></span>
                                </div>
                                <button wire:loading.remove wire:target="login" id="register-button" class="btn-style1 w-50">
                                    Đăng nhập
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('notification', event => {
            toastr.warning(event.detail.message, {
                timeOut: 5000,
            });
        });
    </script>
</section>


