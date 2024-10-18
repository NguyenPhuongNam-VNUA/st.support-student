<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quên mật khẩu</title>
    @include('admin.includes.head')
    <style>
        .custom-alert {
            position: fixed;
            top: 20px;
            right: 20px;
            width: auto;
            z-index: 1050;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
    </style>
</head>
<body>
<div class="page-content">
    @if(session('success'))
        <div class="alert bg-success text-white alert-dismissible fade show custom-alert">
            <div class="d-flex">
                <i class="ph-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @elseif(session('error-token'))
        <div class="alert bg-danger text-white alert-dismissible fade show custom-alert">
            <div class="d-flex">
                <i class="ph-x-circle me-2"></i>
                {{ session('error-token') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">
                <livewire:admin.login.forgot-password/>
            </div>
            <!-- /content area -->
        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->

</div>
</body>
</html>
