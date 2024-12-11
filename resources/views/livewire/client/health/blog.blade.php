<section class="news-section">
    <div class="container-5">
        <h2 class="section-title">Tin tức & Sự kiện</h2>
        <div class="row">
            <div class="col-md-11">
                <div class="tab-content tab-pro-slider mb-4">
                    <div class="tab-pane fade show active" id="home">
                        <div class="our-products-tab swiper-container">
                            <div class="swiper-wrapper">
                                @foreach($posts as $post)
                                <div class="swiper-slide text-center">
                                    <div class="news-box">
                                        <img src="{{ asset('storage/' . $post->thumbnail) }}" class="img-fluid"
                                            alt="news-image">
                                        <h4>{{$post->title}}</h4>
                                        <p>{!! Str::limit(strip_tags($post->content), 100, '...') !!}</p>
                                        <a href="{{route('client.blog-detail', $post->slug)}}" class="btn btn-news">Đọc thêm</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
