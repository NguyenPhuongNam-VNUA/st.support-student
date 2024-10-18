<?php

declare(strict_types=1);

namespace App\Http\Controllers\MedicalAdmin;

use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function index()
    {
        return view('admin.pages.medical_admin.doctor.index');
    }

    public function create()
    {
        return view('admin.pages.medical_admin.doctor.create');
    }

    public function edit($id)
    {
        return view('admin.pages.medical_admin.doctor.edit');
    }

    public function detail($id)
    {
        return view('admin.pages.medical_admin.doctor.detail')->with('id', $id);
    }
}
