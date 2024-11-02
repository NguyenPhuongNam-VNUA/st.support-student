<?php

namespace App\Http\Controllers\ServiceAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
