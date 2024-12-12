<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header bold">
                <i class="ph-info"></i>
                Thông tin cơ sở hạ tầng
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
            <div class="card-header">
                Phòng: <span class="text-danger">*</span>
            </div>
            <div class="card-body">
                <div wire:ignore>
                <select id="room" wire:model.live="roomId" class="form-control @error('roomId') is-invalid @enderror">
                    <option value=""></option>
                    @foreach($rooms as $dormitoryName => $room)
                        @if (!empty($room))
                            <optgroup class="text-primary" label="{{ $dormitoryName }}">
                                @foreach($room as $item)
                                    <option class="text-muted" value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                @endforeach
                            </optgroup>
                        @endif
                    @endforeach
                </select>
                </div>
                @error('roomId')
                <label class="text-danger mt-1">{{ $message }}</label>
                @enderror
            </div>
        </div>
        <div class="card">
            <div class="card-header bold">
                <i class="ph-gear-six"></i>
                Hành động
            </div>
            <div class="card-body d-flex justify-content-around gap-1">
                <button wire:click="store" class="btn btn-primary" type="submit"><i class="ph-floppy-disk"></i>Tạo mới</button>
                <a href="{{ route('admin.dormitory.facilities.index') }}" type="button" class="btn btn-warning"><i class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>

    <script>
        $('#room').select2({
            placeholder: 'Chọn phòng',
            multiple: true,
        }).change(function() {
            Livewire.dispatch('choseRoom', [$(this).val()]);
            console.log($(this).val());
        });
    </script>
</div>
