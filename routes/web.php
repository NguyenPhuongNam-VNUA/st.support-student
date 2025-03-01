<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\Login\AuthController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\ClientBlogController;
use App\Http\Controllers\Client\ClientHealthController;
use App\Http\Controllers\Client\ClientManageAccount;
use App\Http\Controllers\Client\ClientMotelController;
use App\Http\Controllers\Client\ClientServiceController;
use App\Http\Controllers\Client\StudentLoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\DormitoryAdmin\DormitoryController;
use App\Http\Controllers\DormitoryAdmin\DormitoryStudentController;
use App\Http\Controllers\DormitoryAdmin\FacilityController;
use App\Http\Controllers\DormitoryAdmin\ManagerController;
use App\Http\Controllers\DormitoryAdmin\MotelController;
use App\Http\Controllers\DormitoryAdmin\RegisterAdmin;
use App\Http\Controllers\DormitoryAdmin\RoomController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\MedicalAdmin\DoctorController;
use App\Http\Controllers\MedicalAdmin\DoctorRoleController;
use App\Http\Controllers\MedicalAdmin\HealthRequestController;
use App\Http\Controllers\ServiceAdmin\ServiceCategoryController;
use App\Http\Controllers\ServiceAdmin\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->group(function (): void {
    Route::get('/', [MapController::class, 'ShowMap'])->name('client.index');
    Route::prefix('ky-tuc-xa')->group(function (): void {
        Route::get('/', fn () => view('client/pages/dormitory/index'))->name('client.dormitory.index');
    });

    Route::get('/dich-vu', [ClientServiceController::class, 'index'])->name('client.service');
    Route::get('/dich-vu/{slug}', [ClientServiceController::class, 'detail'])->name('client.service-detail');
    Route::get('/bai-viet', [ClientBlogController::class, 'index'])->name('client.blog');
    Route::get('/bai-viet/{slug}', [ClientBlogController::class, 'detail'])->name('client.blog-detail');
    Route::get('/nha-tro', [ClientMotelController::class, 'index'])->name('client.motel');
    Route::get('/nha-tro/{slug}', [ClientMotelController::class, 'detail'])->name('client.motel-detail');
    Route::get('/suc-khoe', [ClientHealthController::class, 'index'])->name('client.health');

    Route::prefix('dang-nhap')->group(function (): void {
        Route::get('/', [StudentLoginController::class, 'index'])->name('student.login');
        Route::get('/dang-ky', [StudentLoginController::class, 'register'])->name('student.register');
        Route::get('/xac-thuc/{token}', [StudentLoginController::class, 'verify'])->name('student.verify');
        Route::get('/dang-xuat', [StudentLoginController::class, 'logout'])->name('student.logout');
    });

    Route::get('/quen-mat-khau', [StudentLoginController::class, 'forgotPassword'])->name('student.forgot-password');
    Route::get('/nhap-lai-mat-khau/{token}', [StudentLoginController::class, 'resetPassword'])->name('student.reset-password');
    Route::get('/tai-khoan', [ClientManageAccount::class, 'index'])->name('student.account')->middleware('auth.student');

});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::get('/reset-password/{token}', [AuthController::class, 'resetPassword'])->name('reset-password');

Route::prefix('/admin')->middleware('auth')->group(function (): void {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');

    Route::prefix('/blog')->group(function (): void {
        Route::get('/', [BlogController::class, 'index'])->name('admin.blogs.index')->middleware('permission:Quản lý bài viết');
        Route::get('/create', [BlogController::class, 'create'])->name('admin.blogs.create')->middleware('permission:Quản lý bài viết');
        Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('admin.blogs.edit')->middleware('permission:Quản lý bài viết');
        Route::get('{id}/detail', [BlogController::class, 'detail'])->name('admin.blogs.detail')->middleware('permission:Quản lý bài viết');
        Route::post('/upload', [BlogController::class, 'upload'])->name('admin.blog.upload')->middleware('permission:Quản lý bài viết');
    });

    Route::prefix('/role')->group(function (): void {
        Route::get('/', [RoleController::class, 'index'])->name('admin.roles.index')->middleware('permission:Quản lý chức vụ');
        Route::get('/create', [RoleController::class, 'create'])->name('admin.roles.create')->middleware('permission:Quản lý chức vụ');
        Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('admin.roles.edit')->middleware('permission:Quản lý chức vụ');
    });

    Route::prefix('/user')->group(function (): void {
        Route::get('/', [UserController::class, 'index'])->name('admin.users.index')->middleware('permission:Quản lý người dùng');
        Route::get('/create', [UserController::class, 'create'])->name('admin.users.create')->middleware('permission:Quản lý người dùng');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit')->middleware('permission:Quản lý người dùng');
        Route::get('/reset-password/{id}', [UserController::class, 'resetPassword'])->name('admin.users.reset-password')->middleware('permission:Quản lý người dùng');
    });

    Route::prefix('/student')->group(function (): void {
        Route::get('/', [StudentController::class, 'index'])->name('admin.students.index')->middleware('permission:Quản lý sinh viên');
        Route::get('/create', [StudentController::class, 'create'])->name('admin.students.create')->middleware('permission:Quản lý sinh viên');
        Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('admin.students.edit')->middleware('permission:Quản lý sinh viên');
    });

    //dormitory
    Route::prefix('/dormitory')->group(function (): void {
        Route::get('/', [DormitoryController::class, 'index'])->name('admin.dormitories.index')->middleware('permission:Quản lý tòa nhà');
        Route::get('/create', [DormitoryController::class, 'create'])->name('admin.dormitories.create')->middleware('permission:Quản lý tòa nhà');
        Route::get('/edit/{id}', [DormitoryController::class, 'edit'])->name('admin.dormitories.edit')->middleware('permission:Quản lý tòa nhà');

        Route::prefix('/room')->group(function (): void {
            Route::get('/', [RoomController::class, 'index'])->name('admin.dormitory.rooms.index')->middleware('permission:Quản lý phòng');
            Route::get('/create', [RoomController::class, 'create'])->name('admin.dormitory.rooms.create')->middleware('permission:Quản lý phòng');
            Route::get('/edit/{id}', [RoomController::class, 'edit'])->name('admin.dormitory.rooms.edit')->middleware('permission:Quản lý phòng');
        });

        Route::prefix('/facility')->group(function (): void {
            Route::get('/', [FacilityController::class, 'index'])->name('admin.dormitory.facilities.index')->middleware('permission:Quản lý cơ sở hạ tầng');
            Route::get('/create', [FacilityController::class, 'create'])->name('admin.dormitory.facilities.create')->middleware('permission:Quản lý cơ sở hạ tầng');
            Route::get('/edit/{id}', [FacilityController::class, 'edit'])->name('admin.dormitory.facilities.edit')->middleware('permission:Quản lý cơ sở hạ tầng');
        });

        Route::prefix('/manager')->group(function (): void {
            Route::get('/', [ManagerController::class, 'index'])->name('admin.dormitory.managers.index')->middleware('permission:Cán bộ quản lý');
            Route::get('/create', [ManagerController::class, 'create'])->name('admin.dormitory.managers.create')->middleware('permission:Cán bộ quản lý');
            Route::get('/edit/{id}', [ManagerController::class, 'edit'])->name('admin.dormitory.managers.edit')->middleware('permission:Cán bộ quản lý');
        });

        Route::prefix('/dormitory-student')->group(function (): void {
            Route::get('/', [DormitoryStudentController::class, 'index'])->name('admin.dormitory-students.index')->middleware('permission:Quản lý sinh viên trong ký túc xá');
            Route::get('/create', [DormitoryStudentController::class, 'create'])->name('admin.dormitory-students.create')->middleware('permission:Quản lý sinh viên trong ký túc xá');
            Route::get('/edit/{id}', [DormitoryStudentController::class, 'edit'])->name('admin.dormitory-students.edit')->middleware('permission:Quản lý sinh viên trong ký túc xá');
            Route::get('{id}/detail', [DormitoryStudentController::class, 'detail'])->name('admin.dormitory-students.detail')->middleware('permission:Quản lý sinh viên trong ký túc xá');
        });

        Route::prefix('/register')->group(function (): void {
            Route::get('/', [RegisterAdmin::class, 'index'])->name('admin.dormitory.register.index')->middleware('permission:Quản lý đơn đăng ký ký túc xá');
            Route::get('/student-success', [RegisterAdmin::class, 'showStudentSuccess'])->name('admin.dormitory.register.student-success')->middleware('permission:Quản lý sinh viên trong ký túc xá');
        });
    });

    //service
    Route::prefix('service')->group(function (): void {
        Route::get('/', [ServiceController::class, 'index'])->name('admin.services.index')->middleware('permission:Quản lý dịch vụ');
        Route::get('/create', [ServiceController::class, 'create'])->name('admin.services.create')->middleware('permission:Quản lý dịch vụ');
        Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('admin.services.edit')->middleware('permission:Quản lý dịch vụ');
        Route::get('{id}/detail', [ServiceController::class, 'detail'])->name('admin.services.detail')->middleware('permission:Quản lý dịch vụ');

        Route::prefix('/service-category')->group(function (): void {
            Route::get('/', [ServiceCategoryController::class, 'index'])->name('admin.service.service-category.index')->middleware('permission:Quản lý danh mục dịch vụ');
            Route::get('/create', [ServiceCategoryController::class, 'create'])->name('admin.service.service-category.create')->middleware('permission:Quản lý danh mục dịch vụ');
            Route::get('/edit/{id}', [ServiceCategoryController::class, 'edit'])->name('admin.service.service-category.edit')->middleware('permission:Quản lý danh mục dịch vụ');
        });
    });

    //medical
    Route::prefix('medical')->group(function (): void {
        Route::prefix('/doctor')->group(function (): void {
            Route::get('/', [DoctorController::class, 'index'])->name('admin.medical.doctors.index')->middleware('permission:Quản lý cán bộ y tế');
            Route::get('/create', [DoctorController::class, 'create'])->name('admin.medical.doctors.create')->middleware('permission:Quản lý cán bộ y tế');
            Route::get('/edit/{id}', [DoctorController::class, 'edit'])->name('admin.medical.doctors.edit')->middleware('permission:Quản lý cán bộ y tế');
            Route::get('{id}/detail', [DoctorController::class, 'detail'])->name('admin.medical.doctors.detail')->middleware('permission:Quản lý cán bộ y tế');
        });

        Route::prefix('/doctorRole')->group(function (): void {
            Route::get('/', [DoctorRoleController::class, 'index'])->name('admin.medical.doctor.roles.index')->middleware('permission:Quản lý chuyên khoa');
            Route::get('/create', [DoctorRoleController::class, 'create'])->name('admin.medical.doctor.roles.create')->middleware('permission:Quản lý chuyên khoa');
            Route::get('/edit/{id}', [DoctorRoleController::class, 'edit'])->name('admin.medical.doctor.roles.edit')->middleware('permission:Quản lý chuyên khoa');
        });
        Route::prefix('/healthRequest')->group(function (): void {
            Route::get('/', [HealthRequestController::class, 'index'])->name('admin.medical.healthRequest.index')->middleware('permission:Yêu cầu tư vấn sức khoẻ');
            Route::get('{id}/detail', [HealthRequestController::class, 'detail'])->name('admin.medical.healthRequest.detail')->middleware('permission:Yêu cầu tư vấn sức khoẻ');
        });
    });

    Route::prefix('map')->group(function (): void {
        Route::get('/', [MapController::class, 'index'])->name('admin.map.index')->middleware('permission:Bản đồ VNUA');
        Route::get('/create-icon', [MapController::class, 'CreateIcon'])->name('admin.map.create_icon')->middleware('permission:Bản đồ VNUA');
        Route::get('/edit-icon/{id}', [MapController::class, 'EditIcon'])->name('admin.map.edit_icon')->middleware('permission:Bản đồ VNUA');
        Route::get('/create-point', [MapController::class, 'CreatePoint'])->name('admin.map.create_point')->middleware('permission:Bản đồ VNUA');
        Route::get('/edit-point/{id}', [MapController::class, 'EditPoint'])->name('admin.map.edit_point')->middleware('permission:Bản đồ VNUA');
    });

    //motel
    Route::prefix('/motel')->group(function (): void {
        Route::get('/', [MotelController::class, 'index'])->name('admin.dormitory.motel.index')->middleware('permission:Quản lý nhà trọ');
        Route::get('/create', [MotelController::class, 'create'])->name('admin.dormitory.motel.create')->middleware('permission:Quản lý nhà trọ');
        Route::get('/edit/{id}', [MotelController::class, 'edit'])->name('admin.dormitory.motel.edit')->middleware('permission:Quản lý nhà trọ');
        Route::get('{id}/detail', [MotelController::class, 'detail'])->name('admin.dormitory.motel.detail')->middleware('permission:Quản lý nhà trọ');
    });
});
