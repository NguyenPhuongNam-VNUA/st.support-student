<!-- quick veiw start -->
<section class="quick-view">
    <div class="modal fade" id="registerDormitoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 700px">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between">
                    <h5 class="modal-title" id="exampleModalLabel">Điền thông đăng ký ký túc xá</h5>
                    <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
                </div>
                <div class="quick-veiw-area">
                    <form action="" method="POST" style="width: 100%;">
                        <div class="modal-body d-flex flex-row" style="width: 100%;">
                            <div class="me-4 pe-4" style="width: 59%;">
                                <div class="mb-3">
                                    <label for="ownerName" class="form-label">Họ tên </label>
                                    <input type="text" name="ownerName" class="form-control" id="" placeholder="Nhập tên họ tên" required style="border-color: #066140; width: 100%; box-sizing: border-box;">
                                </div>
                                <div class="mb-3">
                                    <label for="phoneNumber" class="form-label">Số điện thoại</label>
                                    <input type="text" name="phoneNumber" class="form-control" id="" placeholder="Nhập số điện thoại" required style="border-color: #066140; width: 100%; box-sizing: border-box;">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" id="" placeholder="Nhập email" required style="border-color: #066140; width: 100%; box-sizing: border-box;">
                                </div>
                                <div class="mb-3">
                                    <label for="bod" class="form-label">Ngày sinh</label>
                                    <input type="date" name="bod" class="form-control" id=""  required style="border-color: #066140; width: 100%; box-sizing: border-box;">
                                </div>
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Giới tính</label>
                                    <select class="form-control" style="border-color: #066140;">
                                        <option>Chọn giới tính</option>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="0">Khác</option>
                                    </select>
                                </div>
                            </div>
                            <div style="width: 49%">
                                <div class="mb-3" >
                                    <label for="nameDormitory" class="form-label">Tòa ký túc xá</label>
                                    <select class="form-control" style="border-color: #066140;">
                                        <option>Chọn tòa ký túc xá</option>
                                        <option value="0">Tòa A</option>
                                        <option value="1">Tòa B</option>
                                        <option value="2">Tòa C</option>
                                        <option value="3">...</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nameDormitory" class="form-label">Tầng</label>
                                    <select class="form-control" style="border-color: #066140;">
                                        <option>Chọn Tầng</option>
                                        <option value="0">Tầng 1</option>
                                        <option value="1">Tầng 2</option>
                                        <option value="2">Tầng 3</option>
                                        <option value="3">Tầng 4</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nameDormitory" class="form-label">Phòng</label>
                                    <select class="form-control" style="border-color: #066140;">
                                        <option>Chọn phòng</option>
                                        <option value="0">P01</option>
                                        <option value="1">P02</option>
                                        <option value="2">P03</option>
                                        <option value="3">...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="border-top-color: #066140; border-top-width: 2px;">
                            <button type="submit" class="btn" style="background-color: #448b1f; color: #fff">
                                <i class="fas fa-paper-plane"></i>
                                Gửi yêu cầu
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- quick veiw end -->
