<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header bold d-flex justify-content-between">
                <div>
                    <i class="ph-info"></i>
                    Thông tin cơ sở hạ tầng
                </div>
                <div>
                    <i class="ph-door"></i>
                    Phòng: &nbsp <span class="text-primary">{{ $room }}</span>
                </div>
            </div>

            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">
                                Diện tích phòng: <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <input wire:model.live="area" type="text" class="form-control @error('area') is-invalid @enderror">
                                <span class="input-group-text">m&#178;</span>
                            </div>
                            @error('area')
                            <label class="text-danger mt-1">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">
                                Số lượng giường: <span class="text-danger">*</span>
                            </label>
                            <input wire:model.live="bed" type="number" class="form-control @error('bed') is-invalid @enderror">
                            @error('bed')
                            <label class="text-danger mt-1">{{$message}}</label>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Dòng thứ hai -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">
                                Số lượng tủ đồ: <span class="text-danger">*</span>
                            </label>
                            <input wire:model.live="wardrobe" type="number" class="form-control @error('wardrobe') is-invalid @enderror">
                            @error('wardrobe')
                            <label class="text-danger mt-1">{{$message}}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">
                                Số lượng điều hòa: <span class="text-danger">*</span>
                            </label>
                            <input wire:model.live="air_conditioner" type="number" class="form-control @error('air_conditioner') is-invalid @enderror">
                            @error('air_conditioner')
                            <label class="text-danger mt-1">{{$message}}</label>
                            @enderror
                        </div>
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
                <button wire:click="update" class="btn btn-primary" type="submit"><i class="ph-floppy-disk"></i>Chỉnh sửa</button>
                <a href="{{ route('admin.dormitory.facilities.index') }}" type="button" class="btn btn-warning"><i class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>
</div>
