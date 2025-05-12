<div class="row">
    <div class="col-md-9" style="width: 73%">
        <div class="card">
            <div class="card-header bold">
                <i class="ph-info"></i>
                Ký túc xá
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label class="form-label">
                        Tên tòa nhà: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="name" type="text" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="d-flex justify-content-between gap-3">
                    <div class="form-group mt-2 flex-fill">
                        <label class="form-label">
                            Người quản lý: <span class="text-danger">*</span>
                        </label>
                        <div>
                            <select wire:model="manager_id" class="form-select @error('manager_id') is-invalid @enderror">
                                <option value="">Chọn người quản lý</option>
                                @foreach($managers as $manager)
                                    <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                                @endforeach
                            </select>

                            @error('manager_id')
                            <label class="text-danger mt-1">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label">
                            Số tầng: <span class="text-danger">*</span>
                        </label>
                        <div>
                            <input wire:model.live="floors" type="number" class="form-control @error('floors') is-invalid @enderror">
                            @error('floors')
                            <label class="text-danger mt-1">{{$message}}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label">
                            Số phòng: <span class="text-danger">*</span>
                        </label>
                        <div>
                            <input wire:model.live="total_rooms" type="number" class="form-control @error('total_rooms') is-invalid @enderror">
                            @error('total_rooms')
                            <label class="text-danger mt-1">{{$message}}</label>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label class="form-label">
                        Ảnh toà nhà: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="new_thumbnail" type="file" class="form-control @error('new_thumbnail') is-invalid @enderror">
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
                        @endif
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label class="form-label">
                        Mô tả: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="description" type="text" class="form-control @error('description') is-invalid @enderror">
                        @error('description')
                        <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label class="form-label">
                        Địa chỉ:
                    </label>
                    <div>
                        <select wire:model.live="location" class="form-select">
                            <option value="">Chọn địa chỉ</option>
                            @foreach($locations as $location)
                                <option value="{{ $location->id }}">{{ $location->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @if($address)
                    <div class="form-group mt-2">
                        <span class="form-label">
                            Địa chỉ cụ thể: <a href="{{ $address }}" class="link-primary">{{ $address }}</a>
                        </span>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-3" style="width: 27%">
        <div class="card">
            <div class="card-header bold">
                <i class="ph-gear-six"></i>
                Hành động
            </div>
            <div class="card-body d-flex justify-content-between gap-3">
                <button wire:click="update" class="btn btn-primary flex-fill" type="submit"><i class="ph-floppy-disk"></i>Chỉnh sửa</button>
                <a href="{{ route('admin.dormitories.index') }}" type="button" class="btn btn-warning flex-fill"><i class="ph-arrow-counter-clockwise"></i>Trở lại</a>
            </div>
        </div>
    </div>
</div>
