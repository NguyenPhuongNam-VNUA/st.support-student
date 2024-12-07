@extends('admin.layouts.master')
@section('page-header')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Bảng điều khiển
                </h4>
            </div>
        </div>

        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="#" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <span class="breadcrumb-item active">Bảng điều khiển</span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-content')
    <style>
        .card {
            overflow: hidden;
        }

        .darker-bg {
            background-color: rgba(0, 0, 0, 0.1);
            padding: 10px;
            margin-left: -1rem;
            margin-right: -1rem;
            margin-bottom: -1rem;
        }

        .darker-bg a {
            text-decoration: none;
        }
    </style>
    <div class="content">
        @if (auth()->user()->role->id == App\Models\Role::where('name', 'Admin')->first()->id)
            <livewire:dashboard.super-admin-dashboard />
        @elseif (auth()->user()->role->id == App\Models\Role::where('name', 'Ký túc xá và trọ')->first()->id)
            <livewire:dashboard.dormitory-admin-dashboard />
        @elseif (auth()->user()->role->id == App\Models\Role::where('name', 'Sức khỏe')->first()->id)
            <livewire:dashboard.health-admin-dashboard />
        @elseif (auth()->user()->role->id == App\Models\Role::where('name', 'Dịch vụ')->first()->id)
            <livewire:dashboard.service-admin-dashboard />
        @endif

        <div class="col-lg-12">
            <div class="card text-center shadow-lg border-0"
                style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); color: white; border-radius: 15px;">
                <div class="card-header border-0 py-4">
                    <h2 class="fw-bold">👋 Xin chào, {{ auth()->user()->name }}</h2>
                </div>
                <div class="card-body">
                    <p class="mb-4" style="font-size: 18px;">Chúc bạn một ngày tràn đầy năng lượng và thành công! 🌟</p>
                    <img src="{{ asset('assets/admin/images/logo_vnua.png') }}" alt="User Avatar"
                        class="rounded-circle shadow" style="width: 120px; height: 120px; border: 4px solid white;">
                </div>
                <div class="card-footer border-0" style="background: transparent;">
                    <small>💼 Học Viện Nông Nghiệp Việt Nam</small>
                </div>
            </div>
        </div>
    </div>
@endsection
