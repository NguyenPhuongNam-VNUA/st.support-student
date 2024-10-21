<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\Login\AuthController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DormitoryAdmin\DormitoryController;
use App\Http\Controllers\DormitoryAdmin\DormitoryStudentController;
use App\Http\Controllers\DormitoryAdmin\ManagerController;
use App\Http\Controllers\DormitoryAdmin\RoomController;
use App\Http\Controllers\MedicalAdmin\DoctorController;
use App\Http\Controllers\MedicalAdmin\DoctorRoleController;
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
    Route::get('/', fn () => view('client/pages/index'))->name('client.index');
    Route::get('/giang-duong', fn () => view('client/pages/lecture-hall'))->name('client.lecture-hall');
    Route::get('/danh-sach-phong', fn () => view('client/pages/lecture-hall-detail'))->name('client.lecture-hall-detail');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::get('/reset-password/{token}', [AuthController::class, 'resetPassword'])->name('reset-password');

Route::prefix('/admin')->middleware('auth')->group(function (): void {
    Route::get('/', fn () => view('admin/pages/dashboard/index'))->name('admin.index');
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
});
