<div class="card-body">
    <div class="title">
        <span class="fs-5 ps-3"> Đổi mật khẩu </span>
    </div>
    <div>
        <form wire:submit="changePassword" >
            <div class="form-profile">
                <div class="d-flex flex-column">
                    <label class="label_profile">Nhập mật khẩu cũ: </label>
                    <input wire:model.live="oldPassword" type="password" class="fs-6" placeholder="Mật khẩu cũ">
                    @error('oldPassword') <span class="text-danger mt-1" >{{ $message }}</span> @enderror
                </div>
                <div class="d-flex flex-column">
                    <label class="label_profile">Nhập mật khẩu mới: </label>
                    <input wire:model.live="newPassword" type="password" class="fs-6" placeholder="Nhập mật khẩu mới">
                    @error('newPassword') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                </div>
                <div class="d-flex flex-column">
                    <label class="label_profile">Nhập lại mật khẩu mới: </label>
                    <input wire:model.live="confirmNewPassword" type="password" class="fs-6" placeholder="Nhập lại mật khẩu mới">
                    @error('confirmNewPassword') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                </div>
            </div>
            <div  class="text-center my-3 d-flex justify-content-center">
                <button wire:target="changePassword" id="edit-button" class="btn-style5 px-5">
                    Thay đổi mật khẩu
                </button>
            </div>
        </form>
    </div>

</div>
