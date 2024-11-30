<div class="modal-content">
    <!-- Icon chuông nằm trên -->
    <div
        style="position: absolute; top: -32px; left: 50%; transform: translateX(-50%);
               background-color: #fff; border-radius: 50%; width: 64px; height: 64px;
               box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); display: flex; justify-content: center; align-items: center;">
        <img src="{{ asset('assets/admin/images/logo_vnua.png') }}" alt="Logo"
             style="width: 64px; height: 64px;">
    </div>

    <!-- Header Modal -->
    <div class="modal-header d-flex justify-content-between" style="border-bottom-color: white">
        <h5 class="modal-title" id="exampleModalLabel">Đăng ký ký túc xá 🖊</h5>
        <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close">
            <i class="ion-close-round"></i>
        </a>
    </div>

    <div class="modal-room-info ms-3" style="border-bottom: 1px solid #ddd;">
        <strong class="text-muted">Tên phòng: <span class="text-success">{{ $roomName }}</span></strong>
    </div>

    <div class="quick-view-area">
        <div class="modal-body d-flex flex-row flex-wrap" style="max-height: 70vh; overflow-y: auto; width: 100%;">
            <div class="me-4 pe-4" style="width: 100%;">
                <div class="form-group mt-2">
                    <label class="form-label">Họ tên: <span class="text-danger">*</span></label>
                    <input wire:model.live="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nhập họ tên ...">
                    @error('name') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                </div>

                <div class="form-group mt-2">
                    <label class="form-label">Mã sinh viên: <span class="text-danger">*</span></label>
                    <input wire:model.live="code" type="text" class="form-control @error('code') is-invalid @enderror" placeholder="Nhập mã sinh viên...">
                    @error('code') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                </div>

                <div class="form-group mt-2">
                    <label class="form-label">Số điện thoại: <span class="text-danger">*</span></label>
                    <input wire:model.live="phone" type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Nhập số điện thoại...">
                    @error('phone') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                </div>

                <div class="form-group mt-2">
                    <label class="form-label">Ngày sinh: <span class="text-danger">*</span></label>
                    <input wire:model.live="bod" type="date" class="form-control @error('bod') is-invalid @enderror" placeholder="Nhập ngày tháng năm sinh ...">
                    @error('bod') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                </div>

                <div class="form-group mt-2">
                    <label class="form-label">Căn cước công dân: <span class="text-danger">*</span></label>
                    <input wire:model.live="citizen_id" type="text" class="form-control @error('citizen_id') is-invalid @enderror" placeholder="Nhập căn cước công dân ...">
                    @error('citizen_id') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                </div>

                <div class="form-group mt-2">
                    <label class="form-label">Giới tính: <span class="text-danger">*</span></label>
                    <select wire:model.live="gender" class="form-control @error('gender') is-invalid @enderror" id="gender">
                        <option value="">Chọn giới tính</option>
                        <option value="{{ \App\Enums\Gender::Male }}">Nam</option>
                        <option value="{{ \App\Enums\Gender::Female }}}">Nữ</option>
                    </select>
                    @error('gender') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                </div>

                <div class="form-group mt-2">
                    <label class="form-label">Ghi chú:</label>
                    <textarea wire:model.live="note" class="form-control @error('note') is-invalid @enderror" placeholder="Nhập ghi chú ..."></textarea>
                    @error('note') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                </div>
                <br><br>
                <div class="modal-footer" style="border-top: 2px solid #066140;">
                    <button wire:click="registerDorm" type="button" class="btn" style="background-color: #448b1f; color: #fff;">
                        <i class="fas fa-paper-plane"></i> Gửi yêu cầu
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Livewire.on('registration-success', () => {
                var modal = document.getElementById('registerDormitoryModal');
                var bootstrapModal = bootstrap.Modal.getInstance(modal);
                bootstrapModal.hide();

                Swal.fire({
                    icon: 'success',
                    title: 'Đăng ký thành công',
                    text: 'Yêu cầu của bạn đã được gửi đi thành công. Vui lòng chờ phản hồi từ chúng tôi qua hệ thống.',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#448B1F',
                });
            });
        });
    </script>
</div>
