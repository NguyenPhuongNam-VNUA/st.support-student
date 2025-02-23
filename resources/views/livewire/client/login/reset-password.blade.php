<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="register-area">
                    <div class="register-box" style="background-color: rgba(64,64,64,0.07)">
                        <h1 class="text-success mb-2">Nhập lại mật khẩu</h1>
                            <span class="text-muted">Hãy đặt mật khẩu mới cho tài khoản của bạn:<span class="ms-1 text-primary fw-bold fs-6"> {{$student_name}}</span></span>
                        <form wire:submit="resetPassword">
                            <div class="form-floating mt-4">
                                <input wire:model.live="password" type="password" class="form-control" placeholder="">
                                <label class="text-muted">Mật khẩu mới: </label>
                                @error('password') <span class="text-danger bold mt-1"> {{ $message }}</span> @enderror
                            </div>
                            <div class="form-floating mt-4">
                                <input wire:model.live="confirmPassword" type="password" class="form-control" placeholder="">
                                <label class="text-muted">Nhập lại mật khẩu mới: </label>
                                @error('confirmPassword') <span class="text-danger bold mt-1"> {{ $message }}</span> @enderror
                            </div>


                            <div  class="text-center mt-3">
                                <button wire:target="resetPassword" id="register-button" class="btn-style1 w-50">
                                    Xác nhận
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
            toastr.success(event.detail.message, {
                timeOut: 5000,
            });
        });
    </script>

    @if(session('success'))
        <script>
            window.addEventListener('DOMContentLoaded', event => {
                toastr.success("{{ session('success') }}" , {
                    timeOut: 5000,
                });
            });
        </script>
    @endif
</section>


