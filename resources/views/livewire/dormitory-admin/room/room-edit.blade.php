<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header bold">
                <i class="ph-info"></i>
                Thông tin phòng
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label class="form-label">
                        Tên phòng: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="name" type="text" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Tòa: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <select wire:model.live="dormitory_id" class="form-control @error('dormitory_id') is-invalid @enderror">
                            <option value="">Chọn tòa nhà kí túc xá</option>
                            @foreach($dormitories as $dormitory)
                                <option value="{{ $dormitory->id }}">{{ $dormitory->name }}</option>
                            @endforeach
                        </select>

                        @error('dormitory_id')
                        <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Số sinh viên tối đa: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="capacity" type="number" class="form-control @error('capacity') is-invalid @enderror">
                        @error('capacity')
                        <label class="text-danger mt-1">{{$message}}</label>
                        @enderror
                    </div>
                </div>

                <div class="form-group mt-3">
                    <label class="form-label">
                        Ảnh đại diện phòng: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="new_thumbnail" type="file"
                               class="form-control @error('new_thumbnail') is-invalid @enderror">
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
                        @endif
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label class="form-label">
                        Ảnh bổ sung: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="new_room_galleries" type="file" multiple
                               class="form-control @error('new_room_galleries') is-invalid @enderror">

                        {{-- Hiển thị lỗi validation --}}
                        @error('new_room_galleries')
                            <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror

                        {{-- Hiển thị lỗi cho từng file --}}
                        @if ($errors->has('new_room_galleries.*'))
                            @foreach ($errors->get('new_room_galleries.*') as $error)
                                <label class="text-danger mt-1">{{ is_array($error) ? implode(', ', $error) : $error }}</label>
                            @endforeach
                        @endif
                    </div>
                    <div class="mt-2">
                        @if ($new_room_galleries && count($new_room_galleries) > 0)
                            {{-- Hiển thị ảnh mới upload --}}
                            @foreach ($new_room_galleries as $newGallery)
                                <img src="{{ $newGallery->temporaryUrl() }}" alt="New gallery image" class="img-thumbnail" width="150">
                            @endforeach
                        @elseif ($room_galleries && count($room_galleries) > 0)
                            {{-- Hiển thị ảnh hiện tại --}}
                            @foreach ($room_galleries as $gallery)
                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gallery image" class="img-thumbnail" width="150">
                            @endforeach
                        @else
                            <label class="text-danger mt-1">Chưa tải ảnh lên</label>
                        @endif
                    </div>
                </div>

                <div class="form-group mt-3">
                    <label class="form-label">
                        Mô tả tổng quan: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <textarea wire:model.live="description" class="form-control @error('description') is-invalid @enderror"></textarea>
                        @error('description')
                        <label class="text-danger mt-1">{{$message}}</label>
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
            <div class="card-body d-flex justify-content-around gap-1">
                <button wire:click="update" class="btn btn-primary" type="submit"><i class="ph-floppy-disk"></i>Chỉnh sửa </button>
                <a href="{{ route('admin.dormitory.rooms.index') }}" type="button" class="btn btn-warning"><i class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>
</div>
