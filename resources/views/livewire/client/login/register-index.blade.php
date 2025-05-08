<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="register-area">
                    <div class="register-box" style="background-color: rgba(64,64,64,0.07)">
                        <h1 class="text-success">Đăng ký tài khoản</h1>
                        <p class="text-muted">Vui lòng đăng ký thông tin tài khoản bên dưới</p>
                        <form wire:submit="register">
                            <div class="form-floating mt-5">
                                <input wire:model.live="name" type="text" class="form-control" placeholder="">
                                <label class="text-muted">Họ và tên: </label>
                                @error('name') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-floating mt-4">
                                <input wire:model.live="code" type="number" class="form-control" placeholder="">
                                <label class="text-muted">Mã sinh viên:</label>
                                @error('code') <span class="text-danger bold mt-1">{{ $message }}</span> @enderror
                            </div>
                            <div class="mt-4">
                                <input wire:model.live="bod" type="date" class="form-control" placeholder="">
                                @error('bod') <span class="text-danger bold mt-1"> {{ $message }}</span> @enderror
                            </div>
                            <div class="form-floating mt-4">
                                <input wire:model.live="phone_number" type="text" class="form-control" placeholder="">
                                <label class="text-muted">Số điện thoại: </label>
                                @error('phone_number') <span class="text-danger bold mt-1"> {{ $message }}</span> @enderror
                            </div>

                            <div  class="text-center mt-3">
                                <div wire:loading wire:target="register">
                                    <span ><h6 class="text-success">Đang gửi...</h6></span>
                                </div>
                                <button wire:loading.remove wire:target="register" id="register-button" class="btn-style1 w-50">
                                    Đăng ký
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
                                Khi đăng kí tài khoản, bạn sẽ nhận được một email xác nhận qua <strong style="font-size: 14px">email sinh viên của bạn</strong> .
                                <span class="text-warning fw-semibold mt-2">Vui lòng kiểm tra hộp thư đến của bạn!</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="..." class="rounded me-2" alt="...">
                    <strong class="me-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="btn-close"  data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Hello, world! This is a toast message.
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


