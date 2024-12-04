@php
 if (!auth()->guard('students')->check()) {
    $this->dispatch('request-denied');
}   
@endphp

<section class="quick-view">
    <div class="modal fade" id="healthRequestModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between">
                    <h5 class="modal-title" id="exampleModalLabel">Điền thông tin để nhận tư vấn sức khỏe</h5>
                    <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
                </div>
                <div class="quick-view-area">
                    <div class="modal-body d-flex flex-row flex-wrap" style="max-height: 70vh; overflow-y: auto; width: 100%;">
                        <div class="me-4 pe-4" style="width: 100%;">
                            {{-- <div class="form-group mt-2">
                                <label class="form-label">Tên sinh viên: <span class="text-danger">*</span></label>
                                <input wire:model.live="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="" readonly>
                                @error('name') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">Mã sinh viên: <span class="text-danger">*</span></label>
                                <input wire:model.live="code" type="text" class="form-control @error('code') is-invalid @enderror" placeholder="" readonly>
                                @error('code') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                            </div> --}}

                            <div class="form-group mt-2">
                                <label class="form-label">Số điện thoại: <span class="text-danger">*</span></label>
                                <input wire:model.live="phone" type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Nhập số điện thoại...">
                                @error('phone') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">Vấn đề sức khỏe: <span class="text-danger">*</span></label>
                                <textarea wire:model.live="issue_description" class="form-control @error('issue_description') is-invalid @enderror" placeholder="Nhập mô tả ..."></textarea>
                                @error('issue_description') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label class="form-label">Ảnh mô tả: <span class="text-danger">*</span></label>
                                <input wire:model.live="health_galleries" type="file" multiple class="form-control @error('health_galleries') is-invalid @enderror">
                                @error('health_galleries') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                                <div class="mt-2">
                                    @if ($health_galleries)
                                        @foreach ($health_galleries as $gallery)
                                            <img src="{{ $gallery->temporaryUrl() }}" alt="Uploaded image" class="img-thumbnail" width="150">
                                        @endforeach
                                    @else
                                        <label class="text-danger mt-1">Chưa tải ảnh lên</label>
                                    @endif
                                </div>
                            </div>
                            <br><br>
                            <div class="modal-footer" style="border-top-color: #448b1f; border-top-width: 2px;">
                                <button type="button" wire:click="request" class="btn" style="background-color: #448b1f; color: #fff">
                                    <i class="fas fa-paper-plane"></i> Gửi yêu cầu
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

