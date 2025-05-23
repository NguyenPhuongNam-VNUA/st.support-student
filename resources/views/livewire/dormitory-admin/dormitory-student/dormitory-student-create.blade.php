<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header bold">
                <i class="ph-info"></i>
                Thông tin sinh viên
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label class="form-label">
                        Tên sinh viên: <span class="text-danger">*</span>
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
                        Mã sinh viên: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="code" type="text" class="form-control @error('code') is-invalid @enderror">
                        @error('code')
                        <label class="text-danger mt-1">{{$message}}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Căn cước công dân: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="citizen_id" type="text" class="form-control @error('citizen_id') is-invalid @enderror">
                        @error('citizen_id')
                        <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Giới tính: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <select wire:model.live="gender" class="form-control @error('gender') is-invalid @enderror">
                            <option value="">Chọn giới tính</option>
                            @foreach (\App\Enums\Gender::cases() as $gender)
                            <option value="{{ $gender->value }}">{{ $gender->description() }}</option>
                            @endforeach
                        </select>
                        @error('gender')
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
                        <label class="text-danger mt-1">{{ $message }}</label>
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
                        Ngày sinh: <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="ph-calendar"></i></span>
                        <input wire:model.live="bod" type="date" class="form-control @error('bod') is-invalid @enderror">
                    </div>
                    @error('bod')
                    <label class="text-danger mt-1" style="display: block;">{{ $message }}</label>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                Phòng
            </div>
            <div class="card-body">
                <select wire:model="room_id" class="form-control @error('room_id') is-invalid @enderror">
                    <option value="">Chọn phòng</option>
                    @foreach($rooms as $dormitoryName => $room)
                        <optgroup class="text-primary" id="optgroup" label="{{ $dormitoryName }}">
                            @foreach($room as $item)
                                <option class="text-muted" value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>

                @error('room_id')
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
                <a href="{{ route('admin.dormitory-students.index') }}" type="button" class="btn btn-warning"><i class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>
</div>
