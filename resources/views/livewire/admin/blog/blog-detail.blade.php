<div class="card">
    <div class="card-header bg-secondary text-white border-bottom-0">
        <div class="row">
            <div class="col-md-6">
                <i class="ph-newspaper fa-2x" style="vertical-align: middle; margin-right: 8px;"></i>
                <span style="font-size: 20px">Chi tiết bài viết</span>

            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">
                    <i class="ph-arrow-bend-down-left"></i>&nbsp;Danh sách bài viết
                </a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('storage/' . $blog->thumbnail) }}"
                    class="img-fluid rounded mb-4"
                    style="height:auto">

                <div class="row mb-4">
                    <div class="col-1 text-end text-muted">
                        <i class="ph-note"></i>
                    </div>
                    <div class="col-10 fw-bold text-muted">&nbsp;Tiêu đề :</div>
                    <div class="col-10">{{ $blog->title }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-1 text-end text-muted">
                        <i class="ph-stack"></i>
                    </div>
                    <div class="col-10 fw-bold text-muted">&nbsp;Danh mục :</div>
                    <div class="col-10">{{ $blog->user->role->name}}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-1 text-end text-muted">
                        <i class="ph-user-circle"></i>
                    </div>
                    <div class="col-10 fw-bold text-muted">&nbsp;Người đăng :</div>
                    <div class="col-10">{{ $blog->user->name }}</div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="mt-1">
                    <div class="row mb-3">
                        <div class="col" style="overflow-x: hidden;max-width: 100%;">{!! $blog->content !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>