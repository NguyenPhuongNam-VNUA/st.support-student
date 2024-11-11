<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header bold">
                <i class="ph-info"></i>
                Thông tin nhà trọ
            </div>

            <div class="card-body">
                <div class="form-group mt-2">
                    <label class="form-label">
                        Tên chủ trọ: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="owner_name" type="text"
                            class="form-control  @error('owner_name') is-invalid @enderror">
                        @error('owner_name')
                            <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Số điện thoại: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="owner_phoneNumber" type="text"
                            class="form-control  @error('owner_phoneNumber') is-invalid @enderror">
                        @error('owner_phoneNumber')
                            <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label class="form-label">
                        Địa chỉ: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="address" type="text"
                            class="form-control  @error('address') is-invalid @enderror">
                        @error('address')
                            <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Số phòng: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="total_rooms" type="number"
                            class="form-control  @error('total_rooms') is-invalid @enderror">
                        @error('total_rooms')
                            <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Số phòng trống: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="available_rooms" type="number"
                            class="form-control  @error('available_rooms') is-invalid @enderror">
                        @error('available_rooms')
                            <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Ảnh đại diện nhà trọ: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="thumbnail" type="file"
                            class="form-control @error('thumbnail') is-invalid @enderror">
                        @error('thumbnail')
                            <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="mt-2">
                        @if ($thumbnail)
                            <img src="{{ $thumbnail->temporaryUrl() }}" alt="New thumbnail" class="img-thumbnail"
                                width="150">
                        @else
                            <label class="text-danger mt-1">Chưa tải ảnh lên</label>
                        @endif
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Ảnh bổ sung: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="motel_galleries" type="file" multiple
                            class="form-control @error('motel_galleries') is-invalid @enderror">
                        @error('motel_galleries')
                            <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="mt-2">
                        @if ($motel_galleries)
                            @foreach ($motel_galleries as $gallery)
                                <img src="{{ $gallery->temporaryUrl() }}" alt="Uploaded image" class="img-thumbnail"
                                    width="150">
                            @endforeach
                        @else
                            <label class="text-danger mt-1">Chưa tải ảnh lên</label>
                        @endif
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Mô tả: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <textarea wire:model.live="description" class="form-control @error('description') is-invalid @enderror"></textarea>
                        @error('description')
                            <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header bold">
                <i class="ph-gear-six"></i>
                Hành động
            </div>
            <div class="card-body d-flex align-items-center gap-1">
                <button wire:click="store" class="btn btn-primary" type="submit"><i class="ph-floppy-disk"></i>Tạo
                    mới</button>
                <a href="{{ route('admin.dormitory.motel.index') }}" type="button" class="btn btn-warning"><i
                        class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>
</div>

