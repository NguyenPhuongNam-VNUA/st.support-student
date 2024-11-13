<section class="quick-view">
    <div class="modal fade" id="registerMotelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between">
                    <h5 class="modal-title" id="exampleModalLabel">Điền thông tin phòng trọ</h5>
                    <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
                </div>
                <div class="quick-view-area">
                    <div class="modal-body d-flex flex-row flex-wrap" style="max-height: 70vh; overflow-y: auto; width: 100%;">
                        <div class="me-4 pe-4" style="width: 100%;">
                            <div class="form-group mt-2">
                                <label class="form-label">Tên chủ trọ: <span class="text-danger">*</span></label>
                                <input wire:model.live="owner_name" type="text" class="form-control @error('owner_name') is-invalid @enderror" placeholder="Nhập họ tên ...">
                                @error('owner_name') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                            </div>
                            
                            <div class="form-group mt-2">
                                <label class="form-label">Số điện thoại: <span class="text-danger">*</span></label>
                                <input wire:model.live="owner_phoneNumber" type="text" class="form-control @error('owner_phoneNumber') is-invalid @enderror" placeholder="Nhập số điện thoại...">
                                @error('owner_phoneNumber') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">Địa chỉ: <span class="text-danger">*</span></label>
                                <input wire:model.live="address" type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Nhập địa chỉ ...">
                                @error('address') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">Số phòng: <span class="text-danger">*</span></label>
                                <input wire:model.live="total_rooms" type="number" class="form-control @error('total_rooms') is-invalid @enderror" placeholder="Tổng số phòng ...">
                                @error('total_rooms') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">Số phòng trống: <span class="text-danger">*</span></label>
                                <input wire:model.live="available_rooms" type="number" class="form-control @error('available_rooms') is-invalid @enderror" placeholder="Số phòng còn trống ...">
                                @error('available_rooms') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">Ảnh đại diện phòng trọ: <span class="text-danger">*</span></label>
                                <input wire:model.live="thumbnail" type="file" class="form-control @error('thumbnail') is-invalid @enderror">
                                @error('thumbnail') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                                <div class="mt-2">
                                    @if ($thumbnail)
                                        <img src="{{ $thumbnail->temporaryUrl() }}" alt="New thumbnail" class="img-thumbnail" width="150">
                                    @else
                                        <label class="text-danger mt-1">Chưa tải ảnh lên</label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">Ảnh bổ sung: <span class="text-danger">*</span></label>
                                <input wire:model.live="motel_galleries" type="file" multiple class="form-control @error('motel_galleries') is-invalid @enderror">
                                @error('motel_galleries') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                                <div class="mt-2">
                                    @if ($motel_galleries)
                                        @foreach ($motel_galleries as $gallery)
                                            <img src="{{ $gallery->temporaryUrl() }}" alt="Uploaded image" class="img-thumbnail" width="150">
                                        @endforeach
                                    @else
                                        <label class="text-danger mt-1">Chưa tải ảnh lên</label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">Mô tả: <span class="text-danger">*</span></label>
                                <textarea wire:model.live="description" class="form-control @error('description') is-invalid @enderror" placeholder="Nhập mô tả ..."></textarea>
                                @error('description') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                            </div>
                            <br><br>
                            <div class="modal-footer" style="border-top-color: #448b1f; border-top-width: 2px;">
                                <button type="button" wire:click="store" class="btn" style="background-color: #448b1f; color: #fff">
                                    <i class="fas fa-paper-plane"></i> Gửi yêu cầu
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

