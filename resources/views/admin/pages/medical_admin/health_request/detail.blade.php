@extends('admin.layouts.master')

@section('page-header')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Chi tiết yêu cầu tư vấn từ sinh viên
                </h4>
            </div>

        </div>

        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{route('admin.medical.healthRequest.index')}}" class="breadcrumb-item active">Yêu cầu tư vấn từ sinh viên</a>
                    <span class="breadcrumb-item active">Chi tiết yêu cầu tư vấn từ sinh viên</span>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('page-content')
    <div class="content">
        <!-- Content -->
        <livewire:medical-admin.health_request.health-request-detail :id="$id" />

        <!-- /content -->
    </div>
@endsection

