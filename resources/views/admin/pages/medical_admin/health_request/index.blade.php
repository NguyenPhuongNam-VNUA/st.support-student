@extends('admin.layouts.master')

@section('page-header')
<div class="page-header page-header-light shadow">
    <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                Yêu cầu tư vấn sức khỏe từ sinh viên
            </h4>
        </div>

    </div>

    <div class="page-header-content d-lg-flex border-top">
        <div class="d-flex">
            <div class="breadcrumb py-2">
                <a href="" class="breadcrumb-item"><i class="ph-house"></i></a>
                <a href="{{route('admin.medical.healthRequest.index')}}" class="breadcrumb-item active">Yêu cầu tư vấn sức khỏe từ sinh viên</a>
            </div>
        </div>

    </div>
</div>
@endsection

@section('page-content')
@section('script_custom')
<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('openDeleteModel', (event) => {
            Swal.fire({
                title: "Bạn có chắc muốn xóa yêu cầu này không?",
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
                        title: "Xóa yêu cầu thành công!",
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
    <livewire:medical-admin.health_request.health-request-index />
    <!-- /content -->
</div>
@endsection
