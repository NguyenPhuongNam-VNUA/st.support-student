<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header-style-pro">
                    @foreach ($motels as $motel)
                        <div class="header-pro">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="{{ route('client.motel-detail', ['slug' => $motel->slug]) }}">
                                        <img class="img-fluid" src="{{ asset('storage/' . $motel->thumbnail) }}"
                                            alt="pro-img1">
                                    </a>
                                </div>
                                <div class="Pro-lable">
                                    @if ($motel->isNew())
                                        <span class="p-text">New</span>
                                    @endif
                                </div>
                                <div class="pro-icn">
                                    <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                        data-bs-target="#motelModal" data-address="{{ $motel->address }}"
                                        data-description="{{ $motel->description }}"
                                        data-available="{{ $motel->available_rooms }}"
                                        data-thumbnail="{{ asset('storage/' . $motel->thumbnail) }}"
                                        data-rating="{{ round($motel->averageRating()) }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="caption">
                                <h3><a
                                        href="{{ route('client.motel-detail', ['slug' => $motel->slug]) }}">{{ $motel->address }}</a>
                                </h3>
                                <div class="rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i
                                            class="fa {{ $i <= round($motel->averageRating()) ? 'fa-star c-star' : 'fa-star-o' }}"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class = "mt-5">
        <span class="page-title">
            Hiển thị từ {{ $motels->firstItem() }} đến {{ $motels->lastItem() }} trong tổng số {{ $motels->total() }}
            kết quả
        </span>

        <div class="page-number style-1">
            @if ($motels->onFirstPage())
                <a href="javascript:void(0)" class="page-link disabled"><i class="fa fa-angle-double-left"></i></a>
            @else
                <a href="{{ $motels->previousPageUrl() }}" class="page-link"><i
                        class="fa fa-angle-double-left"></i></a>
            @endif

            @foreach ($motels->getUrlRange(1, $motels->lastPage()) as $page => $url)
                <a href="{{ $url }}"
                    class="page-link {{ $page == $motels->currentPage() ? 'active' : '' }}">{{ $page }}</a>
            @endforeach

            @if ($motels->hasMorePages())
                <a href="{{ $motels->nextPageUrl() }}" class="page-link"><i class="fa fa-angle-double-right"></i></a>
            @else
                <a href="javascript:void(0)" class="page-link disabled"><i class="fa fa-angle-double-right"></i></a>
            @endif
        </div>
    </div>
</section>
