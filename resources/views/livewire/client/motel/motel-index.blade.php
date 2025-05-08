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
                                @php
                                    function renderStarsDetail($rating) {
                                        $fullStars = floor($rating);
                                        $hasHalfStar = ($rating - $fullStars) >= 0.5;
                                        $emptyStars = 5 - $fullStars - ($hasHalfStar ? 1 : 0);

                                        $output = '';

                                        for ($i = 0; $i < $fullStars; $i++) {
                                            $output .= '<i class="fa fa-star e-star" style="color: #448b1f;"></i>';
                                        }

                                        if ($hasHalfStar) {
                                            $output .= '<i class="fa fa-star-half-o e-star" style="color: #448b1f;"></i>';
                                        }

                                        for ($i = 0; $i < $emptyStars; $i++) {
                                            $output .= '<i class="fa fa-star-o" style="color: #ccc;"></i>';
                                        }

                                        return $output;
                                    }
                                @endphp
                                <div class="rating">
                                    {!! renderStarsDetail($motel->averageRating()) !!}
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
