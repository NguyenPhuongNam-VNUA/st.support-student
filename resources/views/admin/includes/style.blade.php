<!-- Global stylesheets -->
<link href="{{ asset('assets/admin/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/admin/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/admin/css/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/admin/css/noty/noty.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
{{--@vite(['resources/css/app.scss'])--}}
<!-- /global stylesheets -->


{{--<!-- Css custom -->--}}
@yield('style_custom')
{{--<!-- /Css custom  -->--}}

<style>
    .swal2-icon-content {
        font-size: 1.2em !important;
    }
    .swal2-success-line-tip{
        height: 0 !important;
    }
</style>


@livewireStyles