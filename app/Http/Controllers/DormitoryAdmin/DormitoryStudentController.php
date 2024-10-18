<?php

declare(strict_types=1);

namespace App\Http\Controllers\DormitoryAdmin;

use App\Http\Controllers\Controller;

class DormitoryStudentController extends Controller
{
    public function index()
    {
        return view('admin.pages.dormitory_admin.dormitory_student.index');
    }

    public function create()
    {
        return view('admin.pages.dormitory_admin.dormitory_student.create');
    }

    public function edit($id)
    {
        return view('admin.pages.dormitory_admin.dormitory_student.edit');
    }

    public function detail($id)
    {
        return view('admin.pages.dormitory_admin.dormitory_student.detail')->with('id', $id);
    }

}
