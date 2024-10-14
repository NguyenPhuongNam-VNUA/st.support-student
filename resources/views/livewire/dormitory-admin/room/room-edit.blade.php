<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header bold">
                <i class="ph-info"></i>
                Phòng
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label class="form-label">
                        Tên phòng: <span class="text-danger">*</span>
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
                        Tòa: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <select wire:model="dormitory_id" class="form-control">
                            <option value="">Chọn tòa nhà kí túc xá</option>
                            @foreach($dormitories as $dormitory)
                            <option value="{{ $dormitory->id }}">{{ $dormitory->name }}</option>
                            @endforeach
                        </select>

                        @error('dormitory_id')
                        <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Số sinh viên tối đa: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="capacity" type="number" class="form-control">
                        @error('capacity')
                        <label class="text-danger">{{$message}}</label>
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
                <a href="{{ route('dormitoryadmin.rooms.index') }}" type="button" class="btn btn-warning"><i class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>
</div>