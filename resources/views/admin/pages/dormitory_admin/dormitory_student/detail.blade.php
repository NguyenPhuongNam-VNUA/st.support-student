@extends('admin.layouts.master')

@section('page-header')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Sinh viên trong ký túc xá
                </h4>
            </div>

        </div>

        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{route('admin.dormitory-students.index')}}" class="breadcrumb-item active">Sinh viên trong kí túc xá</a>
                    <span class="breadcrumb-item active">Chi tiết thông tin sinh viên</span>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('page-content')
    <div class="content">
        <!-- Content -->
        <livewire:dormitory-admin.dormitory-student.dormitory-student-detail :id="$id" />
        <!-- /content -->
    </div>
@endsection

