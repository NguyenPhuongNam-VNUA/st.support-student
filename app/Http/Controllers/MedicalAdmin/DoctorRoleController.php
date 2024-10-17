<?php

namespace App\Http\Controllers\MedicalAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorRoleController extends Controller
{
    public function index()
    {
        return view('admin.pages.medical_admin.doctor_role.index');
    }

    public function create()
    {
        return view('admin.pages.medical_admin.doctor_role.create');
    }

    public function edit($id)
    {
        return view('admin.pages.medical_admin.doctor_role.edit');
    }
}
