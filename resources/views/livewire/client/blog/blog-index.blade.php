
<!-- blog start -->
<section class="section-tb-padding blog-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="left-column style-1 mb-4">
                    <div class="blog-search">
                        <h4> Tìm kiếm</h4>
                        <form action="" wire:submit.prevent="searchPost" class="search-form">
                            <input type="input" class="text-black" wire:model.live="search" placeholder="Tìm kiếm bài viết">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="all-filter">
                    <div class="categories-page-filter">
                        <h4 class="filter-title">Danh mục bài viết</h4>
                        <a href="#category-filter" data-bs-toggle="collapse" class="filter-link"><span>Danh mục</span><i
                                class="fa fa-angle-down"></i></a>
                        <ul class="all-option collapse" id="category-filter">
                            @foreach ($categories as $category)
                                <li class="grid-list-option">
                                    <input type="checkbox" wire:model.live="selectedCategories" value="{{ $category->id }}">
                                    <a href="javascript:void(0)">
                                        {{ $category->name }}
                                        <span class="grid-items">({{ $category->getCountPost($category->id) }})</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="left-column style-1">
                    <div class="blog-title">
                        <h4>Bài viết gần đây</h4>
                    </div>

                    <div class="left-blog">
                        @foreach ($recentPosts as $recentPost)
                        <div class="blog-item">
                            <div class="l-blog-image" style="width: 30%;">
                                <a href="{{ route('client.blog-detail', ['slug' => $recentPost->slug]) }}">
                                    <img src="{{ asset('storage/' . $recentPost->thumbnail) }}" class="img-fluid" alt="{{ $recentPost->title }}">
                                </a>
                            </div>
                            <div class="l-blog-caption" style="width: 67%;">
                                <h4><a href="{{ route('client.blog-detail', ['slug' => $recentPost->slug]) }}" style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2; overflow: hidden;text-overflow: ellipsis;">{{ $recentPost->title }}</a></h4>
                                <span class="date">{{ \Carbon\Carbon::parse($recentPost->created_at)->format('d-m-Y') }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


            <div class="col-xl-9 col-lg-8 col-md-7 col-12">
                <div class="blog-style-1-left-list-blog">
                    @if($posts->isEmpty())
                        <div class="text-center" style="width: 100%">
                            <img src="{{ asset('assets/client/image/empty.jpg') }}" alt="Không tìm thấy kết quả" style="width: 400px;" />
                            <h6 class="mt-3">Không tìm thấy bài viết nào</h6>
                        </div>
                    @endif
                    @foreach ($posts as $post)
                    <div class="blog-start">
                        <div class="blog-post">
                            <div class="blog-image">
                                <a href="{{ route('client.blog-detail', ['slug' => $post->slug]) }}">
                                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="blog-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="">
                                    <h6><a href="{{ route('client.blog-detail', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h6>
                                </div>
                                <div class="date-comm-adit">
                                    <span class="blog-date"><i class="ti-calendar"></i>{{ \Carbon\Carbon::parse($post->created_at)->isoFormat('D MMMM YYYY') }}</span>
                                    {{-- <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 1 Comment</a> --}}
                                    <span class="blog-admin"><i class="ti-user"></i> By <span class="blog-editor">{{ $post->user->name }}</span></span>
                                </div>
                                <p class="blog-description">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                                <a href="{{ route('client.blog-detail', ['slug' => $post->slug]) }}" class="read-link">
                                    <span>Xem bài viết</span>
                                    <i class="ti-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class = "mt-5">
            <span class="page-title">
                Hiển thị từ {{ $posts->firstItem() }} đến {{ $posts->lastItem() }} trong tổng số {{ $posts->total() }} kết quả
            </span>

            <div class="page-number style-1">
                @if ($posts->onFirstPage())
                    <a href="javascript:void(0)" class="page-link disabled"><i class="fa fa-angle-double-left"></i></a>
                @else
                    <a href="{{ $posts->previousPageUrl() }}" class="page-link"><i class="fa fa-angle-double-left"></i></a>
                @endif

                @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                    <a href="{{ $url }}" class="page-link {{ $page == $posts->currentPage() ? 'active' : '' }}">{{ $page }}</a>
                @endforeach

                @if ($posts->hasMorePages())
                    <a href="{{ $posts->nextPageUrl() }}" class="page-link"><i class="fa fa-angle-double-right"></i></a>
                @else
                    <a href="javascript:void(0)" class="page-link disabled"><i class="fa fa-angle-double-right"></i></a>
                @endif
            </div>
        </div>
    </div>
</section>
