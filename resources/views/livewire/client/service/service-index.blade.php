<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="all-filter">
                    <div class="categories-page-filter">
                        <h4 class="filter-title">Danh mục</h4>
                        <a href="#category-filter" data-bs-toggle="collapse" class="filter-link"><span>Danh mục</span><i
                                class="fa fa-angle-down"></i></a>
                        <ul class="all-option collapse" id="category-filter">
                            @foreach ($serviceCategories as $category)
                                <li class="grid-list-option">
                                    <input type="checkbox" wire:model.live="selectedCategories" value="{{ $category->id }}">
                                    <a href="javascript:void(0)">
                                        {{ $category->name }}
                                        <span class="grid-items">({{ $category->services->count() }})</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                    <div class="col">
                        <div class="header-style-pro">
                            @foreach ($services as $service)
                                <div class="header-pro">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{ route('client.service-detail', ['id' => $service->id]) }}">
                                                <img class="img-fluid"
                                                    src="{{ asset('storage/' . $service->thumbnail) }}"
                                                    alt="{{ $service->name }}">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            @if ($service->isNew())
                                                <span class="p-text">New</span>
                                            @endif
                                        </div>
                                        <div class="pro-icn">
                                            <a href="javascript:void(0)" class="w-c-q-icn quick-view-btn"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                data-name="{{ $service->name }}"
                                                data-rating="{{ $service->rating }}"
                                                data-description="{{ $service->description }}"
                                                data-ship="{{ $service->isShip }}"
                                                data-thumbnail="{{ asset('storage/' . $service->thumbnail) }}">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a
                                                href="{{ route('client.service-detail', ['id' => $service->id]) }}">{{ $service->name }}</a>
                                        </h3>
                                        <div class="rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i
                                                    class="fa {{ $i <= $service->rating ? 'fa-star c-star' : 'fa-star-o' }}"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class = "mt-5">
            <span class="page-title">
                Hiển thị từ {{ $services->firstItem() }} đến {{ $services->lastItem() }} trong tổng số {{ $services->total() }} kết quả
            </span>
            
            <div class="page-number style-1">
                @if ($services->onFirstPage())
                    <a href="javascript:void(0)" class="page-link disabled"><i class="fa fa-angle-double-left"></i></a>
                @else
                    <a href="{{ $services->previousPageUrl() }}" class="page-link"><i class="fa fa-angle-double-left"></i></a>
                @endif
        
                @foreach ($services->getUrlRange(1, $services->lastPage()) as $page => $url)
                    <a href="{{ $url }}" class="page-link {{ $page == $services->currentPage() ? 'active' : '' }}">{{ $page }}</a>
                @endforeach
        
                @if ($services->hasMorePages())
                    <a href="{{ $services->nextPageUrl() }}" class="page-link"><i class="fa fa-angle-double-right"></i></a>
                @else
                    <a href="javascript:void(0)" class="page-link disabled"><i class="fa fa-angle-double-right"></i></a>
                @endif
            </div>
        </div>
    </div>
</section>