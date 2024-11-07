@section('title')
{{ $post->title }}
@endsection
<section class="section-tb-padding blog-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-12 col-12">
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
            <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                <div class="blog-style-1-left-details">
                    <div class="single-image">
                        <a href="">
                            <img src="{{ asset('storage/' . $post->thumbnail) }}" class="img-fluid"
                                alt="image">
                        </a>
                    </div>
                    <div class="single-blog-content">
                        <div class="single-b-title">
                            <h4>{{ $post->title }}</h4>
                        </div>
                        <div class="date-edit-comments">
                            <div class="blog-info-wrap">
                                <span class="blog-data date">
                                    <i class="icon-clock"></i>
                                    <span class="blog-d-n-c">{{ \Carbon\Carbon::parse($post->created_at)->isoFormat('D MMMM YYYY') }}</span>
                                </span>
                                <span class="blog-data blog-edit">
                                    <i class="icon-user"></i>
                                    <span class="blog-d-n-c">By <span class="editor">{{ $post->user->name }}</span></span>
                                </span>
                                <span class="blog-data comments">
                                    <i class="icon-bubble"></i>
                                    <span class="blog-d-n-c">4 <span class="add-comments">comments</span></span>
                                </span>
                            </div>
                        </div>

                        <div class="blog-description" style="overflow-x: hidden;max-width: 100%;">
                            {!! $post->content !!}
                        </div>
                        <div class="blog-info">
                            <i class="fa fa-quote-left"></i>
                            <h6>{{ $post->user->name }}</h6>
                        </div>
                        <div class="blog-comments">
                            <h4><span>5</span> Bình luận</h4>
                            <div class="blog-comment-info">
                                <ul class="comments-arae">
                                    <li class="comments-man">NA</li>
                                    <li class="comments-content">
                                        <span class="comments-result">
                                            Bài viết rất hay và ý nghĩa
                                        </span>
                                        <span class="comment-name">
                                            <i>từ <span class="comments-title">
                                                Nguyễn Văn A
                                            </span>
                                            </i></span>
                                        <span class="comments-result c-date">7 tháng 11 2024<a href="javascript:void(0)"
                                                class="Reply">Trả lời</a></span>
                                    </li>
                                </ul>
                                <ul class="comments-arae comment-reply">
                                    <li class="comments-man">NB</li>
                                    <li class="comments-content">
                                        <span class="comments-result">
                                            Đồng ý, bài viết rất hay
                                        </span>
                                        <span class="comment-name"><i>từ<span
                                                    class="comments-title">Nguyễn Thị B</span></i></span>
                                        <span class="comments-result c-date">7 tháng 11 2024<a href="javascript:void(0)"
                                                class="Reply">Trả lời</a></span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="comments-form">
                            <h4>Hãy để lại bình luận của bạn</h4>
                            <form>
                                <label>Tên*</label>
                                <input type="text" name="name" placeholder="Tên ...">
                                <label>Email*</label>
                                <input type="text" name="email" placeholder="Email ...">
                                <label>Bình luận*</label>
                                <textarea placeholder="Nhập vào ý kiến của bạn ..."></textarea>
                            </form>
                            <a href="blog-style-1-3-grid.html" class="btn-style1">Bình luận</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


