<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index()
    {
        return view('admin.pages.super_admin.roles.index');
    }

    public function create()
    {
        return view('admin.pages.super_admin.roles.create');
    }

    public function edit($id)
    {
        return view('admin.pages.super_admin.roles.edit');
    }




}
