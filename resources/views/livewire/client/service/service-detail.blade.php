<section class="section-tb-padding pro-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-12 col-md-12 col-xs-12 pro-image">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 larg-image">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="large-image-container">
                                <a href="javascript:void(0)" class="long-img">
                                    <figure class="zoom" id="figure-zoom" onmousemove="zoom(event)" style="background-image: url({{ asset('storage/' . $service->thumbnail) }})">
                                        <img id="large-image" src="{{ asset('storage/' . $service->thumbnail) }}" class="img-fluid" alt="image">
                                    </figure>
                                </a>
                            </div>
                        </div>
                    
                        <ul class="nav nav-tabs pro-page-slider owl-carousel owl-theme">
                            <!-- Hiển thị ảnh thumbnail trước tiên -->
                            <li class="nav-item items">
                                <a class="nav-link active" onclick="changeImage('{{ asset('storage/' . $service->thumbnail) }}')">
                                    <img src="{{ asset('storage/' . $service->thumbnail) }}" class="img-fluid" alt="thumbnail">
                                </a>
                            </li>
                            @if ($service->serviceGalleries->isNotEmpty())
                                @foreach ($service->serviceGalleries as $index => $gallery)
                                    <li class="nav-item items">
                                        <a class="nav-link" onclick="changeImage('{{ asset('storage/' . $gallery->image) }}')">
                                            <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid" alt="image-{{ $index }}">
                                        </a>
                                    </li>
                                @endforeach
                            @else
                            <li class="nav-item items">
                                <a class="nav-link active" onclick="changeImage('{{ asset('storage/' . $service->thumbnail) }}')">
                                    <img src="{{ asset('storage/' . $service->thumbnail) }}" class="img-fluid" alt="thumbnail">
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 pro-info">
                        <h4>{{ $service->name }}</h4>
                        <div class="rating">
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="pro-availabale">
                            <i class="fa-solid fa-truck-fast"></i>
                            <span class="available">
                                @if ($service->isShip === \App\Enums\Deliver::Yes->value)
                                        {{ \App\Enums\Deliver::Yes->description() }}
\                                @elseif($service->isShip === \App\Enums\Deliver::No->value)
                                        {{ \App\Enums\Deliver::No->description() }}
                                @endif
                            </span>
                        </div>
                        <span class="pro-details">Địa chỉ: {{ $service->location }}</span>
                        <div>
                            <span class="pro-details">Số điện thoại: {{ $service->phone_number }}</span>
                        </div>

                        <p>
                            {{ $service->description }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-xs-12 pro-shipping">
                <div class="product-service">
                    <div class="icon-title">
                        <span><i class="fa-regular fa-hourglass"></i></span>
                        <h4>NHANH CHÓNG & KỊP THỜI</h4>
                    </div>
                    <p>
                        Luôn cố gắng đem tới cho sinh viên những trải nghiệm tốt nhất,
                        hiệu quả nhất với thời gian tối ưu nhất
                    </p>
                </div>
                <div class="product-service">
                    <div class="icon-title">
                        <span><i class="fa-regular fa-star"></i></i></span>
                        <h4>UY TÍN TẠO LÊN CHẤT LƯỢNG</h4>
                    </div>
                    <p>
                        Chất lượng được kiểm chứng giúp sinh viên an tâm tin tưởng
                    </p>
                </div>
                <div class="product-service">
                    <div class="icon-title">
                        <span><i class="fa-regular fa-comment"></i></span>
                        <h4>ĐÁNH GIÁ KHÁCH QUAN</h4>
                    </div>
                    <p>
                        Hệ thống bình luận, phản hồi giúp sinh viên nêu cảm nhận cá nhân đồng
                        thời có cái nhìn khách quan nhất về dịch vụ đang quan tâm
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
