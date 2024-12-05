<?php

declare(strict_types=1);

namespace App\Http\Controllers\MedicalAdmin;

use App\Http\Controllers\Controller;

class HealthRequestController extends Controller
{
    public function index()
    {
        return view('admin.pages.medical_admin.health_request.index');
    }

    public function detail($id)
    {
        return view('admin.pages.medical_admin.health_request.detail')->with('id', $id);
    }
}
