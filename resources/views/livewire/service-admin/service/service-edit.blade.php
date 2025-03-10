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
                            <img src="{{ asset('storage/' . $thumbnail) }}" alt="{{ $name }}"
                                class="img-thumbnail" width="150">
                        @else
                            <label class="text-danger mt-1">Chưa tải ảnh lên</label>
                        @endif
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">Hình ảnh bổ sung: <span class="text-danger">*</span></label>
                    <div>
                        <input wire:model.live="new_service_galleries" type="file" multiple
                               class="form-control @error('new_service_galleries') is-invalid @enderror">
                
                        @if ($errors->has('new_service_galleries.*'))
                            @foreach ($errors->get('new_service_galleries.*') as $message)
                                <label class="text-danger mt-1">{{ $message }}</label>
                            @endforeach
                        @endif
                    </div>
                    <div class="mt-2">
                        @if ($new_service_galleries && count($new_service_galleries) > 0)
                            {{-- Chỉ hiển thị ảnh mới khi có upload --}}
                            @foreach ($new_service_galleries as $newGallery)
                                <img src="{{ $newGallery->temporaryUrl() }}" alt="New gallery image" class="img-thumbnail" width="150">
                            @endforeach
                        @elseif ($service_galleries && count($service_galleries) > 0)
                            {{-- Hiển thị ảnh cũ chỉ khi không có ảnh mới --}}
                            @foreach ($service_galleries as $gallery)
                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gallery image" class="img-thumbnail" width="150">
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
                <button wire:click="update" class="btn btn-primary" type="submit"><i class="ph-floppy-disk"></i>Chỉnh
                    sửa</button>
                <a href="{{ route('admin.services.index') }}" type="button" class="btn btn-warning"><i
                        class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>
</div>
