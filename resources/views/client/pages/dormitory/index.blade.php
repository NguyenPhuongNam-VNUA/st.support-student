@extends('client.layouts.master')

@section('title')
    Ký túc xá
@endsection

@section('content')
    <!-- breadcrumb start -->
    <section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url({{ asset('assets/client/image/dormitory/dormitory.jpg') }}); background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link d-flex gap-2" style="font-size: 1rem">
                                <li class="text-muted"><a href="#">Trang chủ</a> / </li>
                                <li class="text-muted"><span>Ký túc xá</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <section class="order-histry-area section-tb-padding" style="background-color: #3333331a">
        <div class="container">
{{--            <section class="quick-view">--}}
{{--                <div class="modal fade" id="quickviewDormitory" tabindex="-1" aria-labelledby="quickviewDormitoryLabel" aria-hidden="true">--}}
{{--                    <livewire:client.component.dormitory.quick-view />--}}
{{--                </div>--}}
{{--            </section>--}}
            <div class="modal fade" id="quickviewDormitory" tabindex="-1">
                <livewire:client.component.dormitory.quick-view />
            </div>
            <button class="btn btn-success d-md-none mb-3" id="sidebarToggle">
                <i class="fas fa-bars"></i> Danh mục
            </button>
            <!-- Mobile Sidebar Overlay -->
            <div class="sidebar-overlay d-md-none"></div>
            <livewire:client.dormitory.dormitory-index />
        </div>
    </section>
@endsection

@section('styles-custom')
    <style>
        .sidebar {
            background: linear-gradient(135deg, #3a502c, #34db37);
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            height: 100vh;
            overflow-y: auto;
            padding: 20px 10px;
            position: relative;
            z-index: 1;
            transition: transform 0.3s ease;
        }

        .sidebar .nav-link {
            border-radius: 8px;
            margin: 5px 0;
            padding: 10px 15px;
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.9);
            transition: all 0.3s;
        }

        .sidebar .nav-link:hover {
            color: white;
            background-color: rgba(255, 255, 255, 0.15);
        }

        .sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.2);
            font-weight: bold;
            color: white;
        }

        /* Mobile: fixed & overlay */
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                top: 0;
                left: 0;
                width: 240px;
                height: 100%;
                z-index: 1050;
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .sidebar-overlay {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0, 0, 0, 0.4);
                z-index: 1049;
                display: none;
            }

            body.sidebar-open .sidebar-overlay {
                display: block;
            }

            body.sidebar-open {
                overflow: hidden;
            }
        }


        .main-content {
            padding: 20px;
        }
        .building-header {
            transition: all 0.5s;
        }
        .building-header:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .amenity-icon {
            transition: all 0.3s;
            display: inline-block;
        }
        .amenity-icon:hover {
            transform: scale(1.2) rotate(5deg);
            color: #e74c3c;
        }
        .gallery-img {
            margin-bottom: 15px;
            cursor: pointer;
            transition: transform 0.3s;
        }
        .gallery-img:hover {
            transform: scale(1.02);
        }

        /* Tổng thể */
        .dormitory-container {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header */
        .dorm-header {
            height: 300px;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            position: relative;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .overlay {
            background: rgba(0,0,0,0.4);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }

        .dorm-title {
            font-size: 3rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .dorm-tagline {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        .rating-badge {
            background: rgba(255,255,255,0.9);
            color: #333;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: bold;
        }

        /* Sections */
        .section-title {
            color: #2C3E50;
            border-bottom: 2px solid #3498DB;
            padding-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title i {
            font-size: 1.5rem;
        }

        /* Info Grid */
        .info-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-top: 20px;
        }

        .stats-card {
            background: #F8F9FA;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .stat-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        .stat-item i {
            width: 40px;
            height: 40px;
            background: #E3F2FD;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: #3498DB;
        }

        .stat-value {
            font-weight: bold;
        }

        /* Amenities */
        .amenities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .amenity-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid #EEE;
        }

        .amenity-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .amenity-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 1.8rem;
        }

        .badge {
            display: inline-block;
            background: #E3F2FD;
            color: #1976D2;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-top: 10px;
        }

        .amenity-card {
            background: white;
            border-radius: 10px;
            transition: all 0.3s;
            border: 1px solid #f0f0f0;
        }

        .amenity-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .amenity-icon {
                width: 50px !important;
                height: 50px !important;
                padding: 12px !important;
            }

            .amenity-card h5 {
                font-size: 1rem;
            }

            .amenity-card p {
                font-size: 0.8rem;
            }
        }

        @media (max-width: 576px) {
            .row-cols-2 > * {
                flex: 0 0 auto;
                width: 50%;
            }

            .amenity-card {
                padding: 15px 5px !important;
            }
        }
    </style>
@endsection

@section('scripts-custom')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.querySelector('.sidebar');
        const overlay = document.querySelector('.sidebar-overlay');

        function toggleSidebar(show) {
            sidebar.classList.toggle('show', show);
            document.body.classList.toggle('sidebar-open', show);
        }

        sidebarToggle.addEventListener('click', () => {
            toggleSidebar(true);
        });

        overlay.addEventListener('click', () => {
            toggleSidebar(false);
        });

        // ESC key closes sidebar
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') toggleSidebar(false);
        });
    </script>

@endsection

