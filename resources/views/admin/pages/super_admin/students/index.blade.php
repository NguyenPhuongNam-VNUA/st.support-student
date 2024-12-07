@extends('admin.layouts.master')

@section('page-header')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Sinh viên
                </h4>
            </div>

        </div>

        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{route('admin.students.index')}}" class="breadcrumb-item active">Sinh viên</a>
                
                </div>
            </div>

        </div>
    </div>
@endsection

@section('page-content')
    <div class="content">
        <!-- Content -->
        <livewire:admin.student.student-index />
        <!-- /content -->
    </div>
@endsection

@section('script_custom')
<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('openDeleteModel', (event) => {
            Swal.fire({
                title: "Bạn có chắc xóa sinh viên này không?",
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
                        title: "Xóa sinh viên thành công!",
                        icon: "success"
                    });
                }
            });
        });
    });
</script>
@endsection

