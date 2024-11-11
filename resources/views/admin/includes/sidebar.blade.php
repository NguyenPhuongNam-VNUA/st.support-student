<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Hệ thống quản lý</h5>

                <div>
                    <button type="button"
                        class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph-arrows-left-right"></i>
                    </button>

                    <button type="button"
                        class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                        <i class="ph-x"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /sidebar header -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header pt-0">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide"></div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>



                <!-- ======Super Admin================ -->
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}"
                        class="nav-link {{ request()->routeIs('admin.index') ? 'active' : '' }}"
                        style="display: flex; align-items: center;">
                        <i class="ph-house-simple me-3 fa"></i>
                        <span style="display: flex; align-items: center;">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.roles.index') }}"
                        class="nav-link {{ request()->routeIs('admin.roles.index') ? 'active' : '' }}"
                        style="display: flex; align-items: center;">
                        <i class="fas fa-users-cog me-3 fa"></i>
                        <span style="display: flex; align-items: center;">
                            Chức vụ
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}"
                        class="nav-link {{ request()->routeIs('admin.users.index') ? 'active' : '' }}"
                        style="display: flex; align-items: center;">
                        <i class="fas fa-users me-3 fa"></i>
                        <span style="display: flex; align-items: center;">Người dùng</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.students.index') }}"
                        class="nav-link {{ request()->routeIs('admin.students.index') ? 'active' : '' }}"
                        style="display: flex; align-items: center;">
                        <i class="fas fa-graduation-cap me-3 fa"></i>
                        <span>
                            Sinh viên trên hệ thống
                        </span>
                    </a>
                </li>



                <!-- ======Admin kí túc xá + trọ============ -->
                <li class="nav-item">
                    <a href="{{ route('admin.dormitories.index') }}"
                        class="nav-link {{ request()->routeIs('admin.dormitories.index') ? 'active' : '' }}"
                        style="display: flex; align-items: center;">
                        <i class="fas fa-building me-3 fa"></i>
                        <span>
                            Tòa nhà
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.dormitory.rooms.index') }}"
                        class="nav-link {{ request()->routeIs('admin.dormitory.rooms.index') ? 'active' : '' }}"
                        style="display: flex; align-items: center;">
                        <i class="fas fa-door-open me-3 fa"></i>
                        <span>
                            Phòng
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.dormitory-students.index') }}"
                        class="nav-link {{ request()->routeIs('admin.dormitory-students.index') ? 'active' : '' }}"
                        style="display: flex; align-items: center;">
                        <i class="fas fa-user-graduate me-3 fa"></i>
                        <span>
                            Sinh viên trong ký túc xá
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.dormitory.motel.index') }}"
                        class="nav-link {{ request()->routeIs('admin.dormitory.motel.index') ? 'active' : '' }}"
                        style="display: flex; align-items: center;">
                        <i class="fas fa-hotel me-3 fa"></i>
                        <span>
                            Nhà trọ
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.dormitory.managers.index') }}"
                        class="nav-link {{ request()->routeIs('admin.dormitory.managers.index') ? 'active' : '' }}"
                        style="display: flex; align-items: center;">
                        <i class="fas fa-user-tie me-3 fa"></i>
                        <span>
                            Cán bộ quản lý
                        </span>
                    </a>
                </li>




                <!-- ======Admin y tế============ -->

                <li class="nav-item">
                    <a href="{{ route('admin.medical.doctors.index') }}"
                        class="nav-link {{ request()->routeIs('admin.medical.doctors.index') ? 'active' : '' }}"
                        style="display: flex; align-items: center;">
                        <i class="fas fa-stethoscope me-3 fa"></i>
                        <span>
                            Cán bộ y tế
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.medical.doctor.roles.index') }}"
                        class="nav-link {{ request()->routeIs('admin.medical.doctor.roles.index') ? 'active' : '' }}"
                        style="display: flex; align-items: center;">
                        <i class="fas fa-briefcase-medical me-3 fa"></i>
                        <span>
                            Chuyên khoa
                        </span>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('admin.blogs.index') }}"
                        class="nav-link {{ request()->routeIs('admin.blogs.index') ? 'active' : '' }}"
                        style="display: flex; align-items: center;">
                        <i class="fas fa-newspaper me-3 fa"></i>
                        <span>
                            Bài viết
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.map.index') }}"
                        class="nav-link {{ request()->routeIs('admin.map.index') ? 'active' : '' }}"
                        style="display: flex; align-items: center;">
                        <i class="fas fa-map-marked-alt me-3 fa"></i>
                        <span>
                            Vnua Map
                        </span>
                    </a>
                </li>
                {{-- ==========Admin dịch vụ=============== --}}
                <li class="nav-item">
                    <a href="{{ route('admin.services.index') }}"
                        class="nav-link {{ request()->routeIs('admin.services.index') ? 'active' : '' }}"
                        style="display: flex; align-items: center;">
                        <i class="fas fa-rocket me-3 fa"></i>
                        <span>
                            Dịch vụ
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.service.service-category.index') }}"
                        class="nav-link {{ request()->routeIs('admin.service.service-category.index') ? 'active' : '' }}"
                        style="display: flex; align-items: center;">
                        <i class="fas fa-list me-3 fa"></i>
                        <span>
                            Danh mục dịch vụ
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->
