<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header bold">
                <i class="ph-info"></i>
                Thông tin dịch vụ
            </div>

            <div class="card-body">
                <div class="form-group mt-2">
                    <label class="form-label">
                        Tên dịch vụ: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="name" type="text"
                            class="form-control  @error('name') is-invalid @enderror">
                        @error('name')
                            <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Tên chủ dịch vụ: <span class="text-danger">*</span>
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
                        Địa chỉ: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="location" type="text"
                            class="form-control  @error('location') is-invalid @enderror">
                        @error('location')
                            <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Số điện thoại: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="phone_number" type="text"
                            class="form-control  @error('phone_number') is-invalid @enderror">
                        @error('phone_number')
                            <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Ảnh đại diện dịch vụ: <span class="text-danger">*</span>
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
                        <input wire:model.live="service_galleries" type="file" multiple
                               class="form-control @error('service_galleries') is-invalid @enderror">

                        {{-- Hiển thị lỗi cho từng ảnh --}}
                        @if ($errors->has('service_galleries.*'))
                            @foreach ($service_galleries as $key => $gallery)
                                @if ($errors->has('service_galleries.' . $key))
                                    @foreach ($errors->get('service_galleries.' . $key) as $message)
                                        <label style="display: block" class="text-danger mt-1">Ảnh {{ $key + 1 }}: Dung lượng tập tin ảnh không được lớn hơn 1024 kB.</label>
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    </div>
                    <div class="mt-2">
                        @if ($service_galleries)
                            @foreach ($service_galleries as $gallery)
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
                        Danh mục dịch vụ: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <select wire:model="service_category_id"
                            class="form-control @error('service_category_id') is-invalid @enderror">
                            <option value="">Chọn danh mục dịch vụ</option>
                            @foreach ($service_categories as $service_category)
                                <option value="{{ $service_category->id }}">{{ $service_category->name }}</option>
                            @endforeach
                        </select>

                        @error('service_category_id')
                            <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Giao hàng: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <select wire:model.live="isShip" class="form-control @error('isShip') is-invalid @enderror">
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
                <a href="{{ route('admin.services.index') }}" type="button" class="btn btn-warning"><i
                        class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>
</div>
