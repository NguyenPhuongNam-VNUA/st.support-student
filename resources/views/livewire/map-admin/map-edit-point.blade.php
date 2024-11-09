<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header bold">
                <i class="ph-info"></i>
                Thông tin điểm
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="form-label">
                        Tên điểm: <span class="text-danger">*</span>
                        <br>
                    </label>
                    <div>
                        <input  type="text" class="form-control" wire:model.live="name" >
                        @error('name')
                        <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Icon: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <select wire:model="icon_id" class="form-control">
                            <option value="">Chọn icon cho điểm</option>
                            @foreach($icons as $icon)
                                <option value="{{ $icon->id }}">{{ $icon->name }}</option>
                            @endforeach
                        </select>

                        @error('icon_id')
                        <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Mô tả: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <textarea wire:model.live="description" class="form-control"></textarea>
                        @error('description')
                        <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Hình ảnh: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input type="file" class="form-control" wire:model.live="newThumbnail">
                        @error('newThumbnail')
                        <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="mt-2">
                        @if ($newThumbnail && !$errors->has('newThumbnail'))
                            <img src="{{ $newThumbnail->temporaryUrl() }}" alt="New thumbnail" class="img-thumbnail" width="150">
                        @else
                            <p>No image uploaded</p>
                        @endif
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
                <button wire:click="update" class="btn btn-primary" type="submit"><i class="ph-floppy-disk"></i>Lưu</button>
                <a href="{{ route('admin.map.index') }}" type="button" class="btn btn-warning"><i class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>
</div>
