@extends('admin.layouts.master')

@section('page-header')
<div class="page-header page-header-light shadow">
    <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                Bài viết
            </h4>
        </div>

    </div>

    <div class="page-header-content d-lg-flex border-top">
        <div class="d-flex">
            <div class="breadcrumb py-2">
                <a href="" class="breadcrumb-item"><i class="ph-house"></i></a>
                <a href="{{route('admin.blogs.index')}}" class="breadcrumb-item active">Bài viết</a>

            </div>
        </div>

    </div>
</div>
@endsection

@section('page-content')
@if (session('success'))
<script>
    new Noty({
        type: 'success',
        layout: 'topRight',
        text: "{{ session('success') }}",
        timeout: 2000,
        progressBar: true,
        callbacks: {
            onTemplate: function() {
                this.barDom.innerHTML = '<div class="noty_body" style="background: #188251; color: #ffffff;">' + this.options.text + '</div>';
                this.barDom.style.backgroundColor = 'transparent';
            }
        }
    }).show();
    sessionStorage.removeItem('selectedFile');
    sessionStorage.removeItem('selectedGalleries');
</script>
@endif

@section('script_custom')
<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('openDeleteModel', (event) => {
            Swal.fire({
                title: "Bạn có chắc muốn xóa bài viết này không?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Có, xóa!",
                cancelButtonText: "Không!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('confirmDelete');
                    Swal.fire({
                        title: "Xóa bài viết thành công!",
                        icon: "success"
                    });
                }
            });
        });
    });
</script>
@endsection
<div class="content">
    <!-- Content -->
    <livewire:admin.blog.blog-index />
    <!-- /content -->
</div>
@endsection