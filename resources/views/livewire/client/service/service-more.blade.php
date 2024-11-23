<section class="section-b-padding pro-releted">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Xem thêm</h2>
                </div>
                <div class="releted-products owl-carousel owl-theme" id="related-services">
                    @foreach ($services as $service)
                        <div class="items">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="{{ route('client.service-detail', $service->slug) }}">
                                        <img class="img-fluid" src="{{ asset('storage/' . $service->thumbnail) }}"
                                            alt="{{ $service->name }}">
                                    </a>
                                </div>
                                <div class="Pro-lable">
                                    @if ($service->isNew())
                                        <span class="p-text">New</span>
                                    @endif
                                </div>
                            </div>
                            <div class="caption">
                                <h3><a
                                        href="{{ route('client.service-detail', $service->slug) }}">{{ $service->name }}</a>
                                </h3>
                                <div class="rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i
                                            class="fa {{ $i <= round($service->averageRating()) ? 'fa-star c-star' : 'fa-star-o' }}"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
