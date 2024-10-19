<div class="row">
    <div class="col-md-9">
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
                        <input wire:model.live="name" type="text" class="form-control">
                        @error('name')
                        <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Người quản lý: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <select wire:model="manager_id" class="form-control">
                            <option value="">Chọn người quản lý</option>
                            @foreach($managers as $manager)
                            <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                            @endforeach
                        </select>

                        @error('manager_id')
                        <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Số phòng: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="total_rooms" type="number" class="form-control">
                        @error('total_rooms')
                        <label class="text-danger">{{$message}}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Mô tả: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="description" type="text" class="form-control">
                        @error('description')
                        <label class="text-danger">{{ $message }}</label>
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
                <button wire:click="update" class="btn btn-primary" type="submit"><i class="ph-floppy-disk"></i>Chỉnh sửa</button>
                <a href="{{ route('admin.dormitories.index') }}" type="button" class="btn btn-warning"><i class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>
</div>
