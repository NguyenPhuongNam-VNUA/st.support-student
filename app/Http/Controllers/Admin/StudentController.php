<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('admin.pages.super_admin.students.index');
    }

    public function create()
    {
        return view('admin.pages.super_admin.students.create');
    }

    public function edit($id)
    {
        return view('admin.pages.super_admin.students.edit');
    }
}
