<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\Login\AuthController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\ClientBlogController;
use App\Http\Controllers\Client\ClientServiceController;
use App\Http\Controllers\Client\StudentLoginController;
use App\Http\Controllers\DormitoryAdmin\DormitoryController;
use App\Http\Controllers\DormitoryAdmin\DormitoryStudentController;
use App\Http\Controllers\DormitoryAdmin\ManagerController;
use App\Http\Controllers\DormitoryAdmin\MotelController;
use App\Http\Controllers\DormitoryAdmin\RoomController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\MedicalAdmin\DoctorController;
use App\Http\Controllers\MedicalAdmin\DoctorRoleController;
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

    Route::get('/giang-duong', fn () => view('client/pages/lecture-hall'))->name('client.lecture-hall');
    Route::get('/danh-sach-phong', fn () => view('client/pages/lecture-hall-detail'))->name('client.lecture-hall-detail');
    Route::get('/dich-vu', [ClientServiceController::class, 'index'])->name('client.service');
    Route::get('/dich-vu/{id}', [ClientServiceController::class, 'detail'])->name('client.service-detail');
    Route::get('/bai-viet', [ClientBlogController::class, 'index'])->name('client.blog');
    Route::get('/bai-viet/{id}', [ClientBlogController::class, 'detail'])->name('client.blog-detail');
    Route::get('/nha-tro', fn () => view('client/pages/motel'))->name('client.motel');
    Route::get('/chi-tiet-tro', fn () => view('client/pages/motel-detail'))->name('client.motel-detail');
    Route::get('/suc-khoe', fn () => view('client/pages/health/index'))->name('client.health');


    Route::prefix('dang-nhap')->group(function (): void {
        Route::get('/', [StudentLoginController::class, 'index'])->name('student.login');
        Route::get('/dang-ky', [StudentLoginController::class, 'register'])->name('student.register');
        Route::get('/xac-thuc/{token}', [StudentLoginController::class, 'verify'])->name('student.verify');
        Route::get('/dang-xuat', [StudentLoginController::class, 'logout'])->name('student.logout');
    });
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::get('/reset-password/{token}', [AuthController::class, 'resetPassword'])->name('reset-password');

Route::prefix('/admin')->middleware('auth')->group(function (): void {
    Route::get('/', fn () => view('admin/pages/dashboard/index'))->name('admin.index');

    Route::prefix('/blog')->group(function (): void {
        Route::get('/', [BlogController::class, 'index'])->name('admin.blogs.index');
        Route::get('/create', [BlogController::class, 'create'])->name('admin.blogs.create');
        Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('admin.blogs.edit');
        Route::get('{id}/detail', [BlogController::class, 'detail'])->name('admin.blogs.detail');
        Route::post('/upload', [BlogController::class, 'upload'])->name('admin.blog.upload');
    });

    Route::prefix('/role')->group(function (): void {
        Route::get('/', [RoleController::class, 'index'])->name('admin.roles.index');
        Route::get('/create', [RoleController::class, 'create'])->name('admin.roles.create');
        Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('admin.roles.edit');
    });

    Route::prefix('/user')->group(function (): void {
        Route::get('/', [UserController::class, 'index'])->name('admin.users.index');
        Route::get('/create', [UserController::class, 'create'])->name('admin.users.create');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
        Route::get('/reset-password/{id}', [UserController::class, 'resetPassword'])->name('admin.users.reset-password');
    });

    Route::prefix('/student')->group(function (): void {
        Route::get('/', [StudentController::class, 'index'])->name('admin.students.index');
        Route::get('/create', [StudentController::class, 'create'])->name('admin.students.create');
        Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('admin.students.edit');
    });

    //dormitory
    Route::prefix('/dormitory')->group(function (): void {
        Route::get('/', [DormitoryController::class, 'index'])->name('admin.dormitories.index');
        Route::get('/create', [DormitoryController::class, 'create'])->name('admin.dormitories.create');
        Route::get('/edit/{id}', [DormitoryController::class, 'edit'])->name('admin.dormitories.edit');

        Route::prefix('/room')->group(function (): void {
            Route::get('/', [RoomController::class, 'index'])->name('admin.dormitory.rooms.index');
            Route::get('/create', [RoomController::class, 'create'])->name('admin.dormitory.rooms.create');
            Route::get('/edit/{id}', [RoomController::class, 'edit'])->name('admin.dormitory.rooms.edit');
        });

        Route::prefix('/manager')->group(function (): void {
            Route::get('/', [ManagerController::class, 'index'])->name('admin.dormitory.managers.index');
            Route::get('/create', [ManagerController::class, 'create'])->name('admin.dormitory.managers.create');
            Route::get('/edit/{id}', [ManagerController::class, 'edit'])->name('admin.dormitory.managers.edit');
        });

        Route::prefix('/dormitory-student')->group(function (): void {
            Route::get('/', [DormitoryStudentController::class, 'index'])->name('admin.dormitory-students.index');
            Route::get('/create', [DormitoryStudentController::class, 'create'])->name('admin.dormitory-students.create');
            Route::get('/edit/{id}', [DormitoryStudentController::class, 'edit'])->name('admin.dormitory-students.edit');
            Route::get('{id}/detail', [DormitoryStudentController::class, 'detail'])->name('admin.dormitory-students.detail');
        });
    });

    //service
    Route::prefix('service')->group(function (): void {
        Route::get('/', [ServiceController::class, 'index'])->name('admin.services.index');
        Route::get('/create', [ServiceController::class, 'create'])->name('admin.services.create');
        Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('admin.services.edit');
        Route::get('{id}/detail', [ServiceController::class, 'detail'])->name('admin.services.detail');

        Route::prefix('/service-category')->group(function (): void {
            Route::get('/', [ServiceCategoryController::class, 'index'])->name('admin.service.service-category.index');
            Route::get('/create', [ServiceCategoryController::class, 'create'])->name('admin.service.service-category.create');
            Route::get('/edit/{id}', [ServiceCategoryController::class, 'edit'])->name('admin.service.service-category.edit');
        });
    });

    //medical
    Route::prefix('medical')->group(function (): void {
        Route::prefix('/doctor')->group(function (): void {
            Route::get('/', [DoctorController::class, 'index'])->name('admin.medical.doctors.index');
            Route::get('/create', [DoctorController::class, 'create'])->name('admin.medical.doctors.create');
            Route::get('/edit/{id}', [DoctorController::class, 'edit'])->name('admin.medical.doctors.edit');
            Route::get('{id}/detail', [DoctorController::class, 'detail'])->name('admin.medical.doctors.detail');
        });

        Route::prefix('/doctorRole')->group(function (): void {
            Route::get('/', [DoctorRoleController::class, 'index'])->name('admin.medical.doctor.roles.index');
            Route::get('/create', [DoctorRoleController::class, 'create'])->name('admin.medical.doctor.roles.create');
            Route::get('/edit/{id}', [DoctorRoleController::class, 'edit'])->name('admin.medical.doctor.roles.edit');
        });
    });

    Route::prefix('map')->group(function (): void {
        Route::get('/', [MapController::class, 'index'])->name('admin.map.index');
        Route::get('/create-icon', [MapController::class, 'CreateIcon'])->name('admin.map.create_icon');
        Route::get('/edit-icon/{id}', [MapController::class, 'EditIcon'])->name('admin.map.edit_icon');
        Route::get('/create-point', [MapController::class, 'CreatePoint'])->name('admin.map.create_point');
        Route::get('/edit-point/{id}', [MapController::class, 'EditPoint'])->name('admin.map.edit_point');
    });

    //motel
    Route::prefix('/motel')->group(function (): void {
        Route::get('/', [MotelController::class, 'index'])->name('admin.dormitory.motel.index');
        Route::get('/create', [MotelController::class, 'create'])->name('admin.dormitory.motel.create');
        Route::get('/edit/{id}', [MotelController::class, 'edit'])->name('admin.dormitory.motel.edit');
        Route::get('{id}/detail', [MotelController::class, 'detail'])->name('admin.dormitory.motel.detail');
    });
});
