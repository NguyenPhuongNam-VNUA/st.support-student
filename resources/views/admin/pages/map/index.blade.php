@section('style_custom')
    <!-- mapbox -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.js'></script>
    <style>
        /*map popup*/
        .fixed-popup {
            width: 200px; /* Đặt chiều rộng cố định */
            height: auto; /* Đặt chiều cao cố định */
            /*overflow: auto; !* Thêm thanh cuộn nếu nội dung lớn hơn popup *!*/
        }

        .modal {
            display: none; /* Ẩn modal theo mặc định */
            position: fixed; /* Ở trên cùng */
            z-index: 1000; /* Đảm bảo modal nằm trên các phần tử khác */
            left: 0;
            top: 0;
            width: 100%; /* Toàn bộ màn hình */
            height: 100%; /* Toàn bộ màn hình */
            /*overflow: auto; !* Nếu cần, thêm thanh cuộn *!*/
            background-color: rgba(0, 0, 0, 0.8); /* Nền tối với độ trong suốt */
        }

        .modal-content {
            margin: auto;
            display: block;
            width: auto;
            max-width: 90%;
        }

        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: white;
            font-size: 25px;
            font-weight: bold;
            cursor: pointer;
        }
        #toggleView{
            position: absolute;
            padding: 5px 10px;
            font-size: 16px;
            font-weight: 700;
            background-color: #066140;
            color: #fff;
            top:15px;
            right: 9%;
            z-index: 999;
        }

        .mapbox{
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 28px;
            background-color: #fff;
            margin: auto;
            z-index: 999;
        }
    </style>
@endsection
@extends('admin.layouts.master')

@section('page-header')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Vnua Map
                </h4>
            </div>

        </div>

        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{route('admin.medical.doctor.roles.index')}}" class="breadcrumb-item active">Vnua map</a>
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

    @section('script_custom')
        <script>
            document.addEventListener('livewire:init', () => {
                Livewire.on('openDeleteModelPoint', (event) => {
                    Swal.fire({
                        title: "Bạn có chắc muốn xóa điểm này không này không?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Có, xóa!",
                        cancelButtonText: "Không!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Livewire.dispatch('confirmDeletePoint');
                            Swal.fire({
                                title: "Xóa điểm thành công!",
                                icon: "success"
                            }).then(() => {
                                //tải lại trang sau khi xóa
                                location.reload();
                            });
                        }else if (result.isDismissed) {
                            // Tải lại hoặc thiết lập lại bản đồ sau khi xác nhận xóa
                            var src = "{{ asset('assets/admin/js/map.js') }}";
                            reloadScript(src);
                        }
                    });
                });

                Livewire.on('openDeleteModelIcon', (event) => {
                    Swal.fire({
                        title: "Bạn có chắc muốn xóa icon này không này không?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Có, xóa!",
                        cancelButtonText: "Không!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Livewire.dispatch('confirmDeleteIcon');
                            Swal.fire({
                                title: "Xóa icon thành công!",
                                icon: "success"
                            }).then(() => {
                                //tải lại trang sau khi xóa
                                location.reload();
                            });
                        }else if (result.isDismissed) {
                            // Tải lại hoặc thiết lập lại bản đồ sau khi xác nhận xóa
                            var src = "{{ asset('assets/admin/js/map.js') }}";
                            reloadScript(src);
                        }
                    });
                });
            });
            function reloadScript(src){
                // Tìm và xóa thẻ script cũ nếu tồn tại
                let oldScript = document.querySelector(`script[src="${src}"]`);
                if (oldScript) {
                    oldScript.remove(); // Xóa script cũ
                }

                // Tạo thẻ script mới
                let newScript = document.createElement("script");
                newScript.src = src + '?v=' + new Date().getTime(); // Thêm timestamp để tránh cache
                newScript.onload = () => {
                    console.log(`${src} đã được tải lại thành công.`);
                };

                // Thêm thẻ script mới vào cuối thẻ <body>
                document.body.appendChild(newScript);
            }
        </script>
    @endsection
    <div class="content">
        <livewire:map-admin.map-index />
        <script src="{{asset('assets/admin/js/map.js')}}"></script>
    </div>
@endsection

