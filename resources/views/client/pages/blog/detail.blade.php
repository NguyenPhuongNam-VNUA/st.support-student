@extends('client.layouts.master')

@section('content')
<!-- breadcrumb start -->
<section class="about-breadcrumb">
    <div class="about-back section-tb-padding" style="background-image: url({{ asset('assets/client/image/lecture-hall-image/toanhaTT.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-l">
                        {{-- <ul class="about-link">
                            <li class="go-home"><a href="index1.html">Home</a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
<livewire:client.blog.blog-detail :id="$id" />
@endsection