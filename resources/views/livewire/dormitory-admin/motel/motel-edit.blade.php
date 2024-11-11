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
                        <input wire:model.live="new_thumbnail" type="file"
                            class="form-control @error('thumbnail') is-invalid @enderror">
                        @error('new_thumbnail')
                            <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>

                    <div class="mt-2">
                        @if ($new_thumbnail)
                            <img src="{{ $new_thumbnail->temporaryUrl() }}" alt="New thumbnail" class="img-thumbnail"
                                width="150">
                        @elseif ($thumbnail)
                            <img src="{{ asset('storage/' . $thumbnail) }}" alt=""
                                class="img-thumbnail" width="150">
                        @else
                            <label class="text-danger mt-1">Chưa tải ảnh lên</label>
                        @endif
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">Hình ảnh bổ sung: <span class="text-danger">*</span></label>
                    <div>
                        <input wire:model="new_motel_galleries" type="file" multiple
                            class="form-control @error('new_motel_galleries') is-invalid @enderror">
                        @error('new_motel_galleries')
                            <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="mt-2">
                        @if ($new_motel_galleries && count($new_motel_galleries) > 0)
                            @foreach ($new_motel_galleries as $newGallery)
                                <img src="{{ $newGallery->temporaryUrl() }}" alt="New gallery image" class="img-thumbnail" width="150">
                            @endforeach
                        @elseif ($motel_galleries && count($motel_galleries) > 0)
                            @foreach ($motel_galleries as $motel_gallery)
                                <img src="{{ asset('storage/' . $motel_gallery->image) }}" alt="Gallery image" class="img-thumbnail" width="150">
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
                <button wire:click="update" class="btn btn-primary" type="submit"><i class="ph-floppy-disk"></i>Cập nhật</button>
                <a href="{{ route('admin.dormitory.motel.index') }}" type="button" class="btn btn-warning"><i
                        class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>
</div>

