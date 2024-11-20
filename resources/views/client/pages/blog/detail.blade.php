@extends('client.layouts.master')

@section('content')
<!-- breadcrumb start -->
<section class="about-breadcrumb">
    <div class="about-back section-tb-padding" style="background-image: url({{ asset('assets/client/image/lecture-hall-image/ClientBreadcrumb.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-l">
                        <ul class="about-link d-flex gap-2" style="font-size: 1rem">
                            <li class="text-muted"><a href="{{route('client.index')}}">Trang chủ</a> / </li>
                            <li class="text-muted"><a href="{{route('client.blog')}}">Bài viết</a> / </li>
                            <li class="text-muted"><span>{{ \Illuminate\Support\Str::limit($post->title, 20) }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
<livewire:client.blog.blog-detail :id="$id" />
@endsection