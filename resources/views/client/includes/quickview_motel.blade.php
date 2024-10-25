<!-- quick veiw start -->
<section class="quick-view">
    <div class="modal fade" id="motelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between">
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin nhà trọ</h5>
                    <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
                </div>
                <div class="quick-veiw-area">
                    <div class="quick-image">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="image-1">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="{{asset('assets/client/image/bunca.jpg')}}" class="img-fluid" alt="image">
                                </a>
                            </div>
                    
                        </div>
                        <ul class="nav nav-tabs quick-slider owl-carousel owl-theme">
                            <li class="nav-item items">
                                <a class="nav-link active" data-bs-toggle="tab" href="#image-1"><img src="{{asset('assets/client/image/bunca.jpg')}}" class="img-fluid" alt="image"></a>
                            </li>
                            <li class="nav-item items">
                                <a class="nav-link" data-bs-toggle="tab" href="#image-2"><img src="{{asset('assets/client/image/bunca.jpg')}}" class="img-fluid" alt="iamge"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="quick-caption">
                        <h4>Nhà 86, phố Thành Trung</h4>
                        <div class="quick-price">
                            <span class="new-price">Giá từ 100.000 đ</span>
                        </div>
                        <div class="quick-rating">
                            <i class="fa fa-star c-star"></i>
                            <i class="fa fa-star c-star"></i>
                            <i class="fa fa-star c-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="pro-description">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- quick veiw end -->