@extends('admin.layouts.master')

@section('page-header')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Phòng
                </h4>
            </div>

        </div>

        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <span class="breadcrumb-item active">Cơ sở vật chất </span>
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

    <div class="content">
        <!-- Content -->
        <livewire:dormitory-admin.facility.facility-index :room_facility_id="$room_id" />
        <!-- /content -->
    </div>
@endsection
