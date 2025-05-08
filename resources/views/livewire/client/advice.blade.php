<section class="section-tb-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="register-area">
                    <div class="register-box" style="background-color: rgba(64,64,64,0.07); border-radius: 12px; width: 90%">
                        <h1 class="text-success">Góp ý với chúng tôi</h1>
                        <p class="text-muted">Vui lòng nhập thông tin góp ý bên dưới bên dưới</p>
                        <form wire:submit="Advice">
                            <div class="mt-3">
                                <label class="form-label">Số điện thoại: </label>
                                <div class="input-group">
                                    <input wire:model.live="phone" type="text" class="form-control" placeholder="Nhập số điện thoại">
                                </div>
                                @error('phone') <span class="text-danger mt-1">{{ $message }}</span> @enderror
                            </div>
                            <div class="mt-4">
                                <label class="form-label">Email:</label>
                                <div class="input-group">
                                    <input wire:model.live="email" class="form-control" placeholder="Nhập email">
                                </div>
                                @error('email') <span class="text-danger bold">{{ $message }}</span> @enderror
                            </div>
                            <div class="mt-4">
                                <label class="form-label"> Nội dung góp ý :</label>
                                <div class="input-group">
                                    <textarea wire:model.live="content" class="form-control" rows="5" placeholder="Nhập nội dung góp ý "></textarea>
                                </div>
                                @error('content') <span class="text-danger bold">{{ $message }}</span> @enderror
                            </div>
                            <div class="mt-4">
                                <div class="">
                                    <label class="form-label"> Hình ảnh góp ý :</label>
                                    <div class="actions">
                                        <label for="file" class="button upload-btn">Chọn hình ảnh
                                            <input hidden="" wire:model="thumbnail" type="file" id="file">
                                        </label>
                                    </div>
                                    <div wire:loading wire:target="thumbnail">Đang tải lên...</div>
                                    @if($thumbnail)
                                        @if (Str::startsWith($thumbnail->getMimeType(), 'image/'))
                                            <div class="result">
                                                <div class="file-uploaded">
                                                    <img src="{{ $thumbnail->temporaryUrl() }}" alt="">
                                                </div>
                                                <div class="remove" wire:click="removeThumbnail">X</div>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </div>
                            @error('thumbnail') <span class="text-danger bold">{{ $message }}</span> @enderror

                            <div  class="text-center mt-3">
                                <div wire:loading wire:target="login">
                                    <span ><h6 class="text-success">Đang kiểm tra...</h6></span>
                                </div>
                                <button wire:loading.remove wire:target="login" id="register-button" class="btn-style1 w-50">
                                    Gửi góp ý
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('notification', event => {
            toastr.success(event.detail.message, {
                timeOut: 5000,
            });
        });
    </script>

    @if(session('resetSuccess'))
        <script>
            window.addEventListener('DOMContentLoaded', event => {
                toastr.success("{{ session('resetSuccess') }}" , {
                    timeOut: 5000,
                });
            });
        </script>
    @endif
</section>
