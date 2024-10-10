<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Hệ thống quản lý</h5>

                <div>
                    <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph-arrows-left-right"></i>
                    </button>

                    <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
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
                    <a href="{{ route('admin.roles.index') }}" 
                        class="nav-link {{ request()->routeIs('admin.roles.index') ?'active' : '' }}"
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
                        class="nav-link {{ request()->routeIs('admin.students.index') ?'active' : '' }}" 
                        style="display: flex; align-items: center;">
                        <i class="fas fa-graduation-cap me-3 fa"></i>
                        <span>
                            Sinh viên trên hệ thống
                        </span>
                    </a>
                </li>



<!-- ======Admin kí túc xá + trọ============ -->
                <li class="nav-item">
                    <a href="{{ route('dormitoryadmin.dormitories.index') }}" 
                        class="nav-link {{ request()->routeIs('dormitoryadmin.dormitories.index') ?'active' : '' }}" 
                        style="display: flex; align-items: center;">
                        <i class="fas fa-building me-3 fa"></i>
                        <span>
                            Tòa nhà
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dormitoryadmin.rooms.index') }}" 
                        class="nav-link {{ request()->routeIs('dormitoryadmin.rooms.index') ?'active' : '' }}" 
                        style="display: flex; align-items: center;">
                        <i class="fas fa-th-large me-3 fa"></i>
                        <span>
                            Phòng
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" 
                        class="nav-link" 
                        style="display: flex; align-items: center;">
                        <i class="fas fa-user-graduate me-3 fa"></i>
                        <span>
                            Sinh viên trong ký túc xá
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dormitoryadmin.managers.index')}}" 
                        class="nav-link {{ request()->routeIs('dormitoryadmin.managers.index') ?'active' : '' }}" 
                        style="display: flex; align-items: center;">
                        <i class="fas fa-user-tie me-3 fa"></i>
                        <span>
                            Cán bộ quản lý
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