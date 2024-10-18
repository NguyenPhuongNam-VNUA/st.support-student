<?php

use App\Http\Controllers\Admin\Login\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DormitoryAdmin\DormitoryController;
use App\Http\Controllers\DormitoryAdmin\RoomController;
use App\Http\Controllers\DormitoryAdmin\ManagerController;
use App\Http\Controllers\DormitoryAdmin\DormitoryStudentController;
use App\Http\Controllers\MedicalAdmin\DoctorController;
use App\Http\Controllers\MedicalAdmin\DoctorRoleController;





use Illuminate\Foundation\Auth\User;

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

Route::get('/home', function () {
    return view('client/pages/index');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::get('/reset-password/{token}', [AuthController::class, 'resetPassword'])->name('reset-password');

Route::prefix('/admin')->group(function (): void {

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

});

Route::prefix('/dormitoryadmin')->group(function (): void {

    Route::prefix('/dormitory')->group(function (): void {
        Route::get('/', [DormitoryController::class, 'index'])->name('dormitoryadmin.dormitories.index');
        Route::get('/create', [DormitoryController::class, 'create'])->name('dormitoryadmin.dormitories.create');
        Route::get('/edit/{id}', [DormitoryController::class, 'edit'])->name('dormitoryadmin.dormitories.edit');
    });

    Route::prefix('/room')->group(function (): void {
        Route::get('/', [RoomController::class, 'index'])->name('dormitoryadmin.rooms.index');
        Route::get('/create', [RoomController::class, 'create'])->name('dormitoryadmin.rooms.create');
        Route::get('/edit/{id}', [RoomController::class, 'edit'])->name('dormitoryadmin.rooms.edit');
    });

    Route::prefix('/manager')->group(function (): void {
        Route::get('/', [ManagerController::class, 'index'])->name('dormitoryadmin.managers.index');
        Route::get('/create', [ManagerController::class, 'create'])->name('dormitoryadmin.managers.create');
        Route::get('/edit/{id}', [ManagerController::class, 'edit'])->name('dormitoryadmin.managers.edit');
    });

    Route::prefix('/dormitory-student')->group(function (): void {
        Route::get('/', [DormitoryStudentController::class, 'index'])->name('dormitoryadmin.dormitory-students.index');
        Route::get('/create', [DormitoryStudentController::class, 'create'])->name('dormitoryadmin.dormitory-students.create');
        Route::get('/edit/{id}', [DormitoryStudentController::class, 'edit'])->name('dormitoryadmin.dormitory-students.edit');
        Route::get('{id}/detail', [DormitoryStudentController::class, 'detail'])->name('dormitoryadmin.dormitory-students.detail');
    });

});

Route::prefix('/medicaladmin')->group(function (): void {

    Route::prefix('/doctor')->group(function (): void {
        Route::get('/', [DoctorController::class, 'index'])->name('medicaladmin.doctors.index');
        Route::get('/create', [DoctorController::class, 'create'])->name('medicaladmin.doctors.create');
        Route::get('/edit/{id}', [DoctorController::class, 'edit'])->name('medicaladmin.doctors.edit');
        Route::get('{id}/detail', [DoctorController::class, 'detail'])->name('medicaladmin.doctors.detail');
    });

    Route::prefix('/doctorRole')->group(function (): void {
        Route::get('/', [DoctorRoleController::class, 'index'])->name('medicaladmin.doctorroles.index');
        Route::get('/create', [DoctorRoleController::class, 'create'])->name('medicaladmin.doctorroles.create');
        Route::get('/edit/{id}', [DoctorRoleController::class, 'edit'])->name('medicaladmin.doctorroles.edit');
    });

});
