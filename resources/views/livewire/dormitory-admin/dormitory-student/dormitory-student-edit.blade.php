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
                        <input wire:model.live="name" type="text" class="form-control">
                        @error('name')
                        <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Mã sinh viên: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="code" type="text" class="form-control">
                        @error('code')
                        <label class="text-danger">{{$message}}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Căn cước công dân: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="citizen_id" type="text" class="form-control">
                        @error('citizen_id')
                        <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Giới tính: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <select wire:model.live="gender" class="form-control">
                            <option value="">Chọn giới tính</option>
                            @foreach (\App\Enums\Gender::cases() as $gender)
                            <option value="{{ $gender->value }}">{{ $gender->description() }}</option>
                            @endforeach
                        </select>
                        @error('gender')
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
                        <label class="text-danger">{{ $message }}</label>
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
                <div class="form-group mt-2">
                    <label class="form-label">
                        Ngày sinh: <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="ph-calendar"></i></span>
                        <input wire:model.live="bod" type="date" class="form-control">
                    </div>
                    @error('bod')
                    <label class="text-danger" style="display: block;">{{ $message }}</label>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label class="form-label">
                        Phòng: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <select wire:model="room_id" class="form-control">
                            <option value="">Chọn phòng</option>
                            @foreach($rooms as $room)
                            <option value="{{ $room->id }}">{{ $room->name }}</option>
                            @endforeach
                        </select>

                        @error('room_id')
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
                <a href="{{ route('admin.dormitory-students.index') }}" type="button" class="btn btn-warning"><i class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>
</div>
