<?php

declare(strict_types=1);

namespace App\Http\Controllers\ServiceAdmin;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.pages.service_admin.service.index');
    }

    public function create()
    {
        return view('admin.pages.service_admin.service.create');
    }

    public function edit($id)
    {
        return view('admin.pages.service_admin.service.edit');
    }

    public function detail($id)
    {
        return view('admin.pages.service_admin.service.detail')->with('id', $id);
    }
}
