<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="register-area">
                    <div class="register-box" style="background-color: rgba(64,64,64,0.07)">
                        <h1 class="text-success">Quên mật khẩu</h1>
                        <p class="text-muted">Vui lòng nhập thông tin tài khoản</p>
                        <form wire:submit="forgotPassword">
                            <div class="form-floating mt-4">
                                <input wire:model.live="code" type="text" class="form-control" placeholder="">
                                <label class="text-muted">Mã sinh viên:</label>
                                @error('code') <span class="text-danger bold mt-1">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-floating mt-4">
                                <input wire:model.live="phone_number" type="text" class="form-control" placeholder="">
                                <label class="text-muted">Số điện thoại:</label>
                                @error('phone_number') <span class="text-danger bold mt-1">{{ $message }}</span> @enderror
                            </div>
                            <div  class="text-center mt-3">
                                <div wire:loading wire:target="forgotPassword">
                                    <span ><h6 class="text-success">Đang gửi...</h6></span>
                                </div>
                                <button wire:loading.remove wire:target="forgotPassword" id="register-button" class="btn-style1 w-50">
                                    Xác nhận
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="register-account h-100">
                        <h4>Nếu bạn đã có tài khoản?</h4>
                        <a href="{{ route('student.login') }}" class="ceate-a">Đăng nhập</a>
                        <div class="register-info mt-3">
                            <p class="text-primary fw-bold" style="font-family: Arial"><span>*</span> Lưu ý:</p>
                            <p class="text-muted">
                                Khi xác nhận quên mật khẩu, bạn sẽ nhận được một email xác nhận qua email sinh viên của bạn.
                                <span class="text-warning fw-semibold">Vui lòng kiểm tra hộp thư đến của bạn!</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('notification', event => {
            toastr.success(event.detail.message, {
                timeOut: 5000,
            });
        });
    </script>
</section>


