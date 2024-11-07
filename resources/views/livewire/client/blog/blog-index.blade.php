
<!-- blog start -->
<section class="section-tb-padding blog-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                <div class="left-column style-1">
                    <div class="blog-title">
                        <h4>Bài viết gần đây</h4>
                    </div>
                    
                    <div class="left-blog">
                        @foreach ($recentPosts as $recentPost)
                        <div class="blog-item d-block">
                            <div class="l-blog-image">
                                <a href="{{ route('client.blog-detail', ['id' => $recentPost->id]) }}">
                                    <img src="{{ asset('storage/' . $recentPost->thumbnail) }}" class="img-fluid" alt="{{ $recentPost->title }}">
                                </a>
                            </div>
                            <div class="l-blog-caption">
                                <h4><a href="{{ route('client.blog-detail', ['id' => $recentPost->id]) }}">{{ $recentPost->title }}</a></h4>
                                <span class="date">{{ \Carbon\Carbon::parse($recentPost->created_at)->format('d-m-Y') }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            
            <div class="col-xl-9 col-lg-8 col-md-7 col-12">
                <div class="blog-style-1-left-list-blog">
                    @foreach ($posts as $post)
                    <div class="blog-start">
                        <div class="blog-post">
                            <div class="blog-image">
                                <a href="{{ route('client.blog-detail', ['id' => $post->id]) }}">
                                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="blog-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="">
                                    <h6><a href="{{ route('client.blog-detail', ['id' => $post->id]) }}">{{ $post->title }}</a></h6>
                                </div>
                                <div class="date-comm-adit">
                                    <span class="blog-date"><i class="ti-calendar"></i>{{ \Carbon\Carbon::parse($post->created_at)->isoFormat('D MMMM YYYY') }}</span>
                                    <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 1 Comment</a>
                                    <span class="blog-admin"><i class="ti-user"></i> By <span class="blog-editor">{{ $post->user->name }}</span></span>
                                </div>
                                <p class="blog-description">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                                <a href="{{ route('client.blog-detail', ['id' => $post->id]) }}" class="read-link">
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
