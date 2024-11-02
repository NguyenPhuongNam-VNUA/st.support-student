<?php

namespace App\Http\Controllers\ServiceAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        return view('admin.pages.service_admin.service-category.index');
    }

    public function create()
    {
        return view('admin.pages.service_admin.service-category.create');
    }

    public function edit($id)
    {
        return view('admin.pages.service_admin.service-category.edit');
    }
}
