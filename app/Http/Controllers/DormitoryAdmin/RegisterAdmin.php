<?php

declare(strict_types=1);

namespace App\Http\Controllers\DormitoryAdmin;

use App\Http\Controllers\Controller;

class RegisterAdmin extends Controller
{
    public function index()
    {
        return view('admin.pages.dormitory_admin.register.index');
    }

    public function showStudentSuccess()
    {
        return view('admin.pages.dormitory_admin.register.student_success_index');
    }
}
