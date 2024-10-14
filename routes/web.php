<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DormitoryAdmin\DormitoryController;
use App\Http\Controllers\DormitoryAdmin\RoomController;
use App\Http\Controllers\DormitoryAdmin\ManagerController;
use App\Http\Controllers\DormitoryAdmin\DormitoryStudentController;




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
