@extends('admin.layouts.master')

@section('page-header')
<div class="page-header page-header-light shadow">
    <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                Chuyên khoa
            </h4>
        </div>

    </div>

    <div class="page-header-content d-lg-flex border-top">
        <div class="d-flex">
            <div class="breadcrumb py-2">
                <a href="" class="breadcrumb-item"><i class="ph-house"></i></a>
                <a href="{{route('admin.medical.doctors.index')}}" class="breadcrumb-item active">Chuyên khoa</a>
                <span class="breadcrumb-item active">Cập nhật chuyên khoa</span>
            </div>
        </div>

    </div>
</div>
@endsection

@section('page-content')
<div class="content">
    <!-- Content -->
    <livewire:medical-admin.doctor-role.doctor-role-edit />
    <!-- /content -->
</div>
@endsection
