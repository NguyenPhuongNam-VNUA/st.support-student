<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header bold">
                <i class="ph-info"></i>
                Thông tin cán bộ
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label class="form-label">
                        Tên cán bộ: <span class="text-danger">*</span>
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
                        Email: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="email" type="text" class="form-control">
                        @error('email')
                        <label class="text-danger">{{$message}}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Số điện thoại: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="phone_number" type="text" class="form-control">
                        @error('phone_number')
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
                <button wire:click="store" class="btn btn-primary" type="submit"><i class="ph-floppy-disk"></i>Tạo mới</button>
                <a href="{{ route('dormitoryadmin.managers.index') }}" type="button" class="btn btn-warning"><i class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>
</div>