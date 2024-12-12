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
                        @endif
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label class="form-label">
                        Ảnh bổ sung: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="room_galleries" type="file" multiple
                               class="form-control @error('room_galleries') is-invalid @enderror">

                        {{-- Hiển thị lỗi cho từng ảnh --}}
                        @if ($errors->has('room_galleries.*'))
                            @foreach ($room_galleries as $key => $gallery)
                                @if ($errors->has('room_galleries.' . $key))
                                    @foreach ($errors->get('room_galleries.' . $key) as $message)
                                        <label style="display: block" class="text-danger mt-1">Ảnh {{ $key + 1 }}: Dung lượng tập tin ảnh không được lớn hơn 1024 kB.</label>
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    </div>
                    <div class="mt-2">
                        @if ($room_galleries)
                            @foreach ($room_galleries as $gallery)
                                <img src="{{ $gallery->temporaryUrl() }}" alt="Uploaded image" class="img-thumbnail" width="150">
                            @endforeach
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
                <button wire:click="store" class="btn btn-primary" type="submit"><i class="ph-floppy-disk"></i>Tạo mới</button>
                <a href="{{ route('admin.dormitory.rooms.index') }}" type="button" class="btn btn-warning"><i class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>
</div>
