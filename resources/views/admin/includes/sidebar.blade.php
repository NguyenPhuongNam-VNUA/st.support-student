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

                <li class="nav-item">
                    <a href="{{ route('admin.index') }}"
                        class="nav-link {{ request()->routeIs('admin.index') ? 'active' : '' }}"
                        style="display: flex; align-items: center;">
                        <i class="ph-house-simple me-3 fa"></i>
                        <span style="display: flex; align-items: center;">
                            Bảng điều khiền
                        </span>
                    </a>
                </li>
                @if(auth()->user()->role->permissions->where('name','Quản lý chức vụ')->first() || auth()->user()->role->permissions->where('name','Quản lý người dùng')->first())
                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Tài khoản</div>
                </li>
                @endif
                @if(auth()->user()->role->permissions->where('name','Quản lý chức vụ')->first())
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
                @endif
                @if(auth()->user()->role->permissions->where('name','Quản lý người dùng')->first())
                    <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}"
                           class="nav-link {{ request()->routeIs('admin.users.index') ? 'active' : '' }}"
                           style="display: flex; align-items: center;">
                            <i class="fas fa-users me-3 fa"></i>
                            <span style="display: flex; align-items: center;">Người dùng</span>
                        </a>
                    </li>
                @endif

                @if(auth()->user()->role->permissions->where('name','Quản lý sinh viên')->first())
                    <li class="nav-item-header">
                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Sinh viên</div>
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
                @endif
                @if(auth()->user()->role->permissions->where('name','Bản đồ')->first())
                    <li class="nav-item-header">
                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Bản đồ</div>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.map.index') }}"
                           class="nav-link {{ request()->routeIs('admin.map.index') ? 'active' : '' }}"
                           style="display: flex; align-items: center;">
                            <i class="fas fa-map-marked-alt me-3 fa"></i>
                            <span>
                                Bản đồ VNUA
                            </span>
                        </a>
                    </li>
                @endif

                @if(auth()->user()->role->permissions->where('name','Cán bộ quản lý')->first())
                    <li class="nav-item-header">
                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide mt-1"> Cán bộ </div>
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
                @endif

                @if(auth()->user()->role->permissions->where('name','Quản lý tòa nhà')->first() || auth()->user()->role->permissions->where('name','Quản lý phòng')->first() || auth()->user()->role->permissions->where('name','Quản lý cơ sở hạ tầng')->first() || auth()->user()->role->permissions->where('name','Quản lý sinh viên trong ký túc xá')->first())
                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide mt-1">Ký túc xá</div>
                </li>
                @endif
                @if(auth()->user()->role->permissions->where('name','Quản lý tòa nhà')->first())

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
                @endif

                @if(auth()->user()->role->permissions->where('name','Quản lý phòng')->first())
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
                @endif
                @if(auth()->user()->role->permissions->where('name','Quản lý cơ sở hạ tầng')->first())
                    <li class="nav-item">
                        <a href="{{ route('admin.dormitory.facilities.index') }}"
                           class="nav-link {{ request()->routeIs('admin.dormitory.facilities.index') ? 'active' : '' }}"
                           style="display: flex; align-items: center;">
                            <i class="fas fa-bed me-3 fa"></i>
                            <span>
                            Cơ sở hạ tầng
                        </span>
                        </a>
                    </li>
                @endif
                @if(auth()->user()->role->permissions->where('name','Quản lý sinh viên trong ký túc xá')->first())
                    <li class="nav-item">
                        <a href="{{ route('admin.dormitory-students.index') }}"
                           class="nav-link {{ request()->routeIs('admin.dormitory-students.index') ? 'active' : '' }}"
                           style="display: flex; align-items: center;">
                            <i class="fas fa-user-graduate me-3 fa"></i>
                            <span>
                            Sinh viên trong ký túc xá
                        </span>
                        </a>
                        <a href="{{ route('admin.dormitory.register.student-success') }}"
                           class="nav-link {{ request()->routeIs('admin.dormitory.register.student-success') ? 'active' : '' }}"
                           style="display: flex; align-items: center;">
                            <i class="ph-address-book me-3"></i>
                            <span>
                            Sinh viên đăng kí thành công
                        </span>
                        </a>
                    </li>
                @endif

                @if(auth()->user()->role->permissions->where('name','Quản lý nhà trọ')->first())
                    <li class="nav-item-header">
                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide mt-1"> Trọ </div>
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
                @endif

                @if(auth()->user()->role->permissions->where('name','Quản lý đơn đăng ký ký túc xá')->first())
                    <li class="nav-item-header">
                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide mt-1"> Yêu cầu đăng ký </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.dormitory.register.index') }}"
                           class="nav-link {{ request()->routeIs('admin.dormitory.register.index') ? 'active' : '' }}"
                           style="display: flex; align-items: center;">
                            <i class="far fa-clipboard me-3"></i>
                            <span>
                            Đơn đăng ký ký túc xá
                        </span>
                        </a>
                    </li>
                @endif

                @if(auth()->user()->role->permissions->where('name','Quản lý cán bộ y tế')->first() || auth()->user()->role->permissions->where('name','Quản lý chuyên khoa')->first() || auth()->user()->role->permissions->where('name','Yêu cầu tư vấn sức khoẻ')->first())
                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide mt-1"> Sức khỏe </div>
                </li>
                @endif
                @if(auth()->user()->role->permissions->where('name','Quản lý cán bộ y tế')->first())

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
                @endif
                @if(auth()->user()->role->permissions->where('name','Quản lý chuyên khoa')->first())
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
                @endif
                @if(auth()->user()->role->permissions->where('name','Yêu cầu tư vấn sức khoẻ')->first())
                    <li class="nav-item">
                        <a href="{{ route('admin.medical.healthRequest.index') }}"
                           class="nav-link {{ request()->routeIs('admin.medical.healthRequest.index') ? 'active' : '' }}"
                           style="display: flex; align-items: center;">
                            <i class="far fa-comments me-3 fa"></i>
                            <span>
                            Yêu cầu tư vấn sức khỏe
                        </span>
                        </a>
                    </li>
                @endif

                @if(auth()->user()->role->permissions->where('name','Quản lý danh mục dịch vụ')->first() || auth()->user()->role->permissions->where('name','Quản lý dịch vụ')->first())
                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide mt-1"> Dịch vụ </div>
                </li>
                @endif
                @if(auth()->user()->role->permissions->where('name','Quản lý danh mục dịch vụ')->first())
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
                @endif
                @if(auth()->user()->role->permissions->where('name','Quản lý dịch vụ')->first())
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
                @endif

                @if(auth()->user()->role->permissions->where('name','Quản lý bài viết')->first())
                    <li class="nav-item-header">
                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Bài viết</div>
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
                @endif

{{--                <!-- ======Super Admin================ -->--}}
{{--                @if (auth()->user()->role->id == App\Models\Role::where('name', 'Admin')->first()->id)--}}
{{--                    <li class="nav-item-header">--}}
{{--                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Tài khoản</div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('admin.roles.index') }}"--}}
{{--                            class="nav-link {{ request()->routeIs('admin.roles.index') ? 'active' : '' }}"--}}
{{--                            style="display: flex; align-items: center;">--}}
{{--                            <i class="fas fa-users-cog me-3 fa"></i>--}}
{{--                            <span style="display: flex; align-items: center;">--}}
{{--                                Chức vụ--}}
{{--                            </span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('admin.users.index') }}"--}}
{{--                            class="nav-link {{ request()->routeIs('admin.users.index') ? 'active' : '' }}"--}}
{{--                            style="display: flex; align-items: center;">--}}
{{--                            <i class="fas fa-users me-3 fa"></i>--}}
{{--                            <span style="display: flex; align-items: center;">Người dùng</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item-header">--}}
{{--                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Sinh viên</div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('admin.students.index') }}"--}}
{{--                            class="nav-link {{ request()->routeIs('admin.students.index') ? 'active' : '' }}"--}}
{{--                            style="display: flex; align-items: center;">--}}
{{--                            <i class="fas fa-graduation-cap me-3 fa"></i>--}}
{{--                            <span>--}}
{{--                                Sinh viên trên hệ thống--}}
{{--                            </span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item-header">--}}
{{--                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Bản đồ</div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('admin.map.index') }}"--}}
{{--                            class="nav-link {{ request()->routeIs('admin.map.index') ? 'active' : '' }}"--}}
{{--                            style="display: flex; align-items: center;">--}}
{{--                            <i class="fas fa-map-marked-alt me-3 fa"></i>--}}
{{--                            <span>--}}
{{--                                Bản đồ VNUA--}}
{{--                            </span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                @endif--}}




{{--                <!-- ======Admin kí túc xá + trọ============ -->--}}
{{--                @if (auth()->user()->role->id == App\Models\Role::where('name', 'Ký túc xá và trọ')->first()->id)--}}
{{--                    <li class="nav-item-header">--}}
{{--                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide mt-1"> Cán bộ </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('admin.dormitory.managers.index') }}"--}}
{{--                           class="nav-link {{ request()->routeIs('admin.dormitory.managers.index') ? 'active' : '' }}"--}}
{{--                           style="display: flex; align-items: center;">--}}
{{--                            <i class="fas fa-user-tie me-3 fa"></i>--}}
{{--                            <span>--}}
{{--                            Cán bộ quản lý--}}
{{--                        </span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item-header">--}}
{{--                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide mt-1">Ký túc xá</div>--}}
{{--                    </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('admin.dormitories.index') }}"--}}
{{--                        class="nav-link {{ request()->routeIs('admin.dormitories.index') ? 'active' : '' }}"--}}
{{--                        style="display: flex; align-items: center;">--}}
{{--                        <i class="fas fa-building me-3 fa"></i>--}}
{{--                        <span>--}}
{{--                            Tòa nhà--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('admin.dormitory.rooms.index') }}"--}}
{{--                        class="nav-link {{ request()->routeIs('admin.dormitory.rooms.index') ? 'active' : '' }}"--}}
{{--                        style="display: flex; align-items: center;">--}}
{{--                        <i class="fas fa-door-open me-3 fa"></i>--}}
{{--                        <span>--}}
{{--                            Phòng--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('admin.dormitory.facilities.index') }}"--}}
{{--                        class="nav-link {{ request()->routeIs('admin.dormitory.facilities.index') ? 'active' : '' }}"--}}
{{--                        style="display: flex; align-items: center;">--}}
{{--                        <i class="fas fa-bed me-3 fa"></i>--}}
{{--                        <span>--}}
{{--                            Cơ sở hạ tầng--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                    <li class="nav-item-header">--}}
{{--                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide m-1">Sinh viên</div>--}}
{{--                    </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('admin.dormitory-students.index') }}"--}}
{{--                        class="nav-link {{ request()->routeIs('admin.dormitory-students.index') ? 'active' : '' }}"--}}
{{--                        style="display: flex; align-items: center;">--}}
{{--                        <i class="fas fa-user-graduate me-3 fa"></i>--}}
{{--                        <span>--}}
{{--                            Sinh viên trong ký túc xá--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                    <a href="{{ route('admin.dormitory.register.student-success') }}"--}}
{{--                       class="nav-link {{ request()->routeIs('admin.dormitory.register.student-success') ? 'active' : '' }}"--}}
{{--                       style="display: flex; align-items: center;">--}}
{{--                        <i class="ph-address-book me-3"></i>--}}
{{--                        <span>--}}
{{--                            Sinh viên đăng kí thành công--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                    <li class="nav-item-header">--}}
{{--                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide mt-1"> Trọ </div>--}}
{{--                    </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('admin.dormitory.motel.index') }}"--}}
{{--                        class="nav-link {{ request()->routeIs('admin.dormitory.motel.index') ? 'active' : '' }}"--}}
{{--                        style="display: flex; align-items: center;">--}}
{{--                        <i class="fas fa-hotel me-3 fa"></i>--}}
{{--                        <span>--}}
{{--                            Nhà trọ--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                    <li class="nav-item-header">--}}
{{--                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide mt-1"> Yêu cầu đăng ký </div>--}}
{{--                    </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('admin.dormitory.register.index') }}"--}}
{{--                        class="nav-link {{ request()->routeIs('admin.dormitory.register.index') ? 'active' : '' }}"--}}
{{--                        style="display: flex; align-items: center;">--}}
{{--                        <i class="far fa-clipboard me-3"></i>--}}
{{--                        <span>--}}
{{--                            Đơn đăng ký ký túc xá--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                @endif--}}
{{--                <!-- ======Admin sức khỏe============ -->--}}
{{--                @if (auth()->user()->role->id == App\Models\Role::where('name', 'Sức khỏe')->first()->id)--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('admin.medical.doctors.index') }}"--}}
{{--                        class="nav-link {{ request()->routeIs('admin.medical.doctors.index') ? 'active' : '' }}"--}}
{{--                        style="display: flex; align-items: center;">--}}
{{--                        <i class="fas fa-stethoscope me-3 fa"></i>--}}
{{--                        <span>--}}
{{--                            Cán bộ y tế--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('admin.medical.doctor.roles.index') }}"--}}
{{--                        class="nav-link {{ request()->routeIs('admin.medical.doctor.roles.index') ? 'active' : '' }}"--}}
{{--                        style="display: flex; align-items: center;">--}}
{{--                        <i class="fas fa-briefcase-medical me-3 fa"></i>--}}
{{--                        <span>--}}
{{--                            Chuyên khoa--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('admin.medical.healthRequest.index') }}"--}}
{{--                        class="nav-link {{ request()->routeIs('admin.medical.healthRequest.index') ? 'active' : '' }}"--}}
{{--                        style="display: flex; align-items: center;">--}}
{{--                        <i class="far fa-comments me-3 fa"></i>--}}
{{--                        <span>--}}
{{--                            Yêu cầu tư vấn sức khỏe--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                @endif--}}



{{--                --}}{{-- ==========Admin dịch vụ=============== --}}
{{--                @if (auth()->user()->role->id == App\Models\Role::where('name', 'Dịch vụ')->first()->id)--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('admin.services.index') }}"--}}
{{--                        class="nav-link {{ request()->routeIs('admin.services.index') ? 'active' : '' }}"--}}
{{--                        style="display: flex; align-items: center;">--}}
{{--                        <i class="fas fa-rocket me-3 fa"></i>--}}
{{--                        <span>--}}
{{--                            Dịch vụ--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('admin.service.service-category.index') }}"--}}
{{--                        class="nav-link {{ request()->routeIs('admin.service.service-category.index') ? 'active' : '' }}"--}}
{{--                        style="display: flex; align-items: center;">--}}
{{--                        <i class="fas fa-list me-3 fa"></i>--}}
{{--                        <span>--}}
{{--                            Danh mục dịch vụ--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                @endif--}}

{{--                <li class="nav-item-header">--}}
{{--                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Bài viết</div>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('admin.blogs.index') }}"--}}
{{--                        class="nav-link {{ request()->routeIs('admin.blogs.index') ? 'active' : '' }}"--}}
{{--                        style="display: flex; align-items: center;">--}}
{{--                        <i class="fas fa-newspaper me-3 fa"></i>--}}
{{--                        <span>--}}
{{--                            Bài viết--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->
