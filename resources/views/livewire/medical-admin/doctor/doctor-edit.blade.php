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
                        <input wire:model.live="name" type="text" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Email: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="email" type="text" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <label class="text-danger mt-1">{{$message}}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Số điện thoại: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror">
                        @error('phone_number')
                        <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Ảnh hồ sơ: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="new_thumbnail" type="file" class="form-control @error('thumbnail') is-invalid @enderror">
                        @error('new_thumbnail')
                        <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>

                    <div class="mt-2">
                        @if ($new_thumbnail)
                        <img src="{{ $new_thumbnail->temporaryUrl() }}" alt="New thumbnail" class="img-thumbnail" width="150">
                        @elseif ($thumbnail)
                        <img src="{{ asset('storage/' . $thumbnail) }}" alt="{{ $name }}" class="img-thumbnail" width="150">
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
                <button wire:click="update" class="btn btn-primary" type="submit"><i class="ph-floppy-disk"></i>Chỉnh sửa</button>
                <a href="{{ route('admin.medical.doctors.index') }}" type="button" class="btn btn-warning"><i class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>
</div>
