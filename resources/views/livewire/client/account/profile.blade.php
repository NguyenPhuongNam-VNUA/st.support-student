<div class="card-body">
    <div class="title">
        <span class="fs-5 ps-3">Thông tin tài khoản</span>
    </div>
    <div>
        <form wire:submit="editProfile" >
            <div class="form-profile">
                <div class="d-flex flex-column">
                    <label class="label_profile">Họ và tên: </label>
                    <input wire:model.live="name" type="text" class="fs-6" placeholder="Họ và tên">
                    @error('name') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                </div>
                <div class="d-flex flex-column">
                    <label class="label_profile">Ngày sinh: </label>
                    <input wire:model.live="bod" type="text" class="fs-6" disabled>
                </div>
                <div class="d-flex flex-column">
                    <label class="label_profile">Email: </label>
                    <input wire:model.live="email" type="text" class="fs-6" disabled>
                </div>
                <div class="d-flex flex-column">
                    <label class="label_profile">Số điện thoại: </label>
                    <input wire:model.live="phone_number" type="text" class="fs-6" placeholder="Số điện thoại">
                    @error('phone_number') <span class="text-danger bold mt-1"> {{ $message }}</span> @enderror
                </div>
                <div class="d-flex flex-column">
                    <label class="label_profile">Mật khẩu: </label>
                    <input wire:model.live="password" type="password" class="fs-6" placeholder="Vui lòng nhập mật khẩu" >
                    @error('password') <span class="text-danger bold mt-1"> {{ $message }}</span> @enderror
                </div>
            </div>
            <div  class="text-center my-3 d-flex justify-content-center">
                <button wire:target="editProfile" id="edit-button" class="btn-style5 px-5">
                   Lưu chỉnh sửa
                </button>
            </div>
        </form>
    </div>
    <script>
        window.addEventListener('notifySuccess', event => {
            toastr.success(event.detail.message, {
                timeOut: 5000,
            });
        });

        window.addEventListener('notifyError', event => {
            toastr.error(event.detail.message, {
                timeOut: 5000,
            });
        });
    </script>
</div>
