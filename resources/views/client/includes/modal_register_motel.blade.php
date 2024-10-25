<!-- quick veiw start -->
<section class="quick-view">
    <div class="modal fade" id="registerMotelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between">
                    <h5 class="modal-title" id="exampleModalLabel">Điền thông tin phòng trọ</h5>
                    <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
                </div>
                <div class="quick-veiw-area">
                    <form action="" method="POST" style="width: 100%;">
                        <div class="modal-body" style="width: 100%;">
                            <div class="mb-5">
                                <label for="ownerName" class="form-label">Tên chủ trọ</label>
                                <input type="text" name="ownerName" class="form-control" id="ownerName" placeholder="Nhập tên chủ trọ" required style="border-color: #066140; width: 100%; box-sizing: border-box;">
                            </div>
                            <div class="mb-5">
                                <label for="phoneNumber" class="form-label">Số điện thoại</label>
                                <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" placeholder="Nhập số điện thoại" required style="border-color: #066140; width: 100%; box-sizing: border-box;">
                            </div>
                            <div class="mb-5">
                                <label for="address" class="form-label">Địa chỉ</label>
                                <input type="text" name="address" class="form-control" id="address" placeholder="Nhập địa chỉ" required style="border-color: #066140; width: 100%; box-sizing: border-box;">
                            </div>
                        </div>
                        <div class="modal-footer" style="border-top-color: #066140; border-top-width: 2px;">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-paper-plane"></i>
                                Gửi yêu cầu
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
<!-- quick veiw end -->