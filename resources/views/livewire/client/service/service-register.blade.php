<section class="quick-view">
    <div class="modal fade" id="registerServiceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between">
                    <h5 class="modal-title" id="exampleModalLabel">Điền thông tin dịch vụ</h5>
                    <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ion-close-round"></i></a>
                </div>
                <div class="quick-view-area">
                    <div class="modal-body d-flex flex-row flex-wrap"
                        style="max-height: 70vh; overflow-y: auto; width: 100%;">
                        <div class="me-4 pe-4" style="width: 100%;">
                            <div class="form-group mt-2">
                                <label class="form-label">Tên dịch vụ: <span class="text-danger">*</span></label>
                                <input wire:model.live="service_name" type="text"
                                    class="form-control @error('service_name') is-invalid @enderror"
                                    placeholder="Nhập tên dịch vụ ...">
                                @error('service_name')
                                    <label class="text-danger mt-1">{{ $message }}</label>
                                @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">Tên chủ dịch vụ: <span class="text-danger">*</span></label>
                                <input wire:model.live="owner_name" type="text"
                                    class="form-control @error('owner_name') is-invalid @enderror"
                                    placeholder="Nhập họ tên ...">
                                @error('owner_name')
                                    <label class="text-danger mt-1">{{ $message }}</label>
                                @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">Số điện thoại: <span class="text-danger">*</span></label>
                                <input wire:model.live="phone" type="text"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    placeholder="Nhập số điện thoại...">
                                @error('phone')
                                    <label class="text-danger mt-1">{{ $message }}</label>
                                @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">Địa chỉ: <span class="text-danger">*</span></label>
                                <input wire:model.live="address" type="text"
                                    class="form-control @error('address') is-invalid @enderror"
                                    placeholder="Nhập địa chỉ ...">
                                @error('address')
                                    <label class="text-danger mt-1">{{ $message }}</label>
                                @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">Danh mục dịch vụ: <span class="text-danger">*</span></label>
                                <div>
                                    <select wire:model="service_category_id"
                                        class="form-control @error('service_category_id') is-invalid @enderror">
                                        <option value="">Chọn danh mục dịch vụ</option>
                                        @foreach ($service_categories as $service_category)
                                            <option value="{{ $service_category->id }}">{{ $service_category->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('service_category_id')
                                        <label class="text-danger mt-1">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">Trạng thái: <span class="text-danger">*</span></label>
                                <div>
                                    <select wire:model.live="isShip"
                                        class="form-control @error('isShip') is-invalid @enderror">
                                        <option value="">Chọn trạng thái</option>
                                        @foreach (\App\Enums\Deliver::cases() as $isShip)
                                            <option value="{{ $isShip->value }}">{{ $isShip->description() }}</option>
                                        @endforeach
                                    </select>
                                    @error('isShip')
                                        <label class="text-danger mt-1">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">Ảnh đại diện dịch vụ: <span
                                        class="text-danger">*</span></label>
                                <input wire:model.live="thumbnail" type="file"
                                    class="form-control @error('thumbnail') is-invalid @enderror">
                                @error('thumbnail')
                                    <label class="text-danger mt-1">{{ $message }}</label>
                                @enderror
                                <div class="mt-2">
                                    @if ($thumbnail)
                                        <img src="{{ $thumbnail->temporaryUrl() }}" alt="New thumbnail"
                                            class="img-thumbnail" width="150">
                                    @else
                                        <label class="text-danger mt-1">Chưa tải ảnh lên</label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">Ảnh bổ sung: <span class="text-danger">*</span></label>
                                <input wire:model.live="service_galleries" type="file" multiple
                                    class="form-control @error('service_galleries') is-invalid @enderror">
                                @error('service_galleries')
                                    <label class="text-danger mt-1">{{ $message }}</label>
                                @enderror
                                <div class="mt-2">
                                    @if ($service_galleries)
                                        @foreach ($service_galleries as $gallery)
                                            <img src="{{ $gallery->temporaryUrl() }}" alt="Uploaded image"
                                                class="img-thumbnail" width="150">
                                        @endforeach
                                    @else
                                        <label class="text-danger mt-1">Chưa tải ảnh lên</label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">Mô tả: <span class="text-danger">*</span></label>
                                <textarea wire:model.live="description" class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Nhập mô tả ..."></textarea>
                                @error('description')
                                    <label class="text-danger mt-1">{{ $message }}</label>
                                @enderror
                            </div>
                            <br><br>
                            <div class="modal-footer" style="border-top-color: #448b1f; border-top-width: 2px;">
                                <button type="button" wire:click="store" class="btn"
                                    style="background-color: #448b1f; color: #fff">
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
