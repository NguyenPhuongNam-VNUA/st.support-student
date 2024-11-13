<section class="section-tb-padding pro-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-12 col-md-12 col-xs-12 pro-image">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 larg-image">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="large-image-container">
                                <a href="javascript:void(0)" class="long-img">
                                    <figure class="zoom" id="figure-zoom" onmousemove="zoom(event)"
                                        style="background-image: url({{ asset('storage/' . $motel->thumbnail) }})">
                                        <img id="large-image" src="{{ asset('storage/' . $motel->thumbnail) }}"
                                            class="img-fluid" alt="image">
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <ul class="nav nav-tabs pro-page-slider owl-carousel owl-theme">
                            <li class="nav-item items">
                                <a class="nav-link active"
                                    onclick="changeImage('{{ asset('storage/' . $motel->thumbnail) }}')">
                                    <img src="{{ asset('storage/' . $motel->thumbnail) }}" class="img-fluid"
                                        alt="thumbnail">
                                </a>
                            </li>
                            @if ($motel->motelGalleries->isNotEmpty())
                                @foreach ($motel->motelGalleries as $index => $gallery)
                                    <li class="nav-item items">
                                        <a class="nav-link"
                                            onclick="changeImage('{{ asset('storage/' . $gallery->image) }}')">
                                            <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid"
                                                alt="image-{{ $index }}">
                                        </a>
                                    </li>
                                @endforeach
                            @else
                                <li class="nav-item items">
                                    <a class="nav-link active"
                                        onclick="changeImage('{{ asset('storage/' . $motel->thumbnail) }}')">
                                        <img src="{{ asset('storage/' . $motel->thumbnail) }}" class="img-fluid"
                                            alt="thumbnail">
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-md-6 col-12 pro-info">
                        <h4>{{ $motel->address }}</h4>
                        <div class="rating mb-3">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fa {{ $i <= $motel->rating ? 'fa-star c-star' : 'fa-star-o' }}"></i>
                            @endfor
                        </div>
                    
                        <div class="row mb-3 align-items-center">
                            <div class="col-1 text-end">
                                <i class="fas fa-crown text-muted"></i>
                            </div>
                            <div class="col-4 fw-bold text-muted">Tên chủ trọ:</div>
                            <div class="col">{{ $motel->owner_name }}</div>
                        </div>
                    
                        <div class="row mb-3 align-items-center">
                            <div class="col-1 text-end">
                                <i class="fas fa-phone-volume text-muted"></i>
                            </div>
                            <div class="col-4 fw-bold text-muted">Số điện thoại:</div>
                            <div class="col">{{ $motel->owner_phoneNumber }}</div>
                        </div>
                    
                        <div class="row mb-3 align-items-center">
                            <div class="col-1 text-end">
                                <i class="fas fa-door-open text-muted"></i>
                            </div>
                            <div class="col-4 fw-bold text-muted">Số phòng:</div>
                            <div class="col">{{ $motel->total_rooms }}</div>
                        </div>
                    
                        <div class="row mb-3 align-items-center">
                            <div class="col-1 text-end">
                                <i class="fas fa-thumbs-up text-muted"></i>
                            </div>
                            <div class="col-4 fw-bold text-muted">Số phòng trống:</div>
                            <div class="col">{{ $motel->available_rooms }}</div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <div class="col-1 text-end">
                                <i class="fas fa-sticky-note text-muted"></i>
                            </div>
                            <div class="col-4 fw-bold text-muted">Mô tả:</div>
                        </div>
                    
                        <div class="">
                            <div class="col">   
                                <p>{{ $motel->description }}</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-xs-12 pro-shipping">
                <div class="product-service">
                    <div class="icon-title">
                        <span><i class="fas fa-history"></i></span>
                        <h4>THÔNG TIN CẬP NHẬT THƯƠNG XUYÊN</h4>
                    </div>
                    <p>
                        Thông tin được cập nhật thường xuyên để đảm bảo sinh viên luôn
                        nhận được thông tin mới nhất.
                    </p>
                </div>
                <div class="product-service">
                    <div class="icon-title">
                        <span><i class="fa-regular fa-star"></i></i></span>
                        <h4>CHẤT LƯỢNG ĐƯỢC KIỂM CHỨNG</h4>
                    </div>
                    <p>
                        Chất lượng được kiểm chứng bởi Hội Sinh viên VNUA giúp sinh viên
                        an tâm về chất lượng phòng trọ.
                    </p>
                </div>
                <div class="product-service">
                    <div class="icon-title">
                        <span><i class="fa-regular fa-comment"></i></span>
                        <h4>ĐÁNH GIÁ KHÁCH QUAN</h4>
                    </div>
                    <p>
                        Bình luận công khai, đánh giá chất lượng phòng trọ giúp sinh viên
                        có cái nhìn tổng quan về chất lượng phòng trọ.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
