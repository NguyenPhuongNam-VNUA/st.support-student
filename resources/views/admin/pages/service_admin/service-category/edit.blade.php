@extends('admin.layouts.master')

@section('page-header')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Danh mục dịch vụ
                </h4>
            </div>

        </div>

        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{route('admin.service.service-category.index')}}" class="breadcrumb-item active">Danh mục dịch vụ</a>
                    <span class="breadcrumb-item active">Chỉnh sửa danh mục dịch vụ</span>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('page-content')
    <div class="content">
        <!-- Content -->
            <livewire:service-admin.service-category.service-category-edit/>

        <!-- /content -->
    </div>
@endsection
