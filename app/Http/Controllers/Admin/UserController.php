<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.pages.super_admin.users.index');
    }

    public function create()
    {
        return view('admin.pages.super_admin.users.create');
    }

    public function edit($id)
    {
        return view('admin.pages.super_admin.users.edit');
    }

    public function resetPassword($id)
    {

        return view('admin.pages.super_admin.users.reset-password');

    }
}
