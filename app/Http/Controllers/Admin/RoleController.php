<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return view('admin.pages.roles.index');
    }

    public function create()
    {
        return view('admin.pages.roles.create');
    }

    public function edit($id)
    {
        return view('admin.pages.roles.edit');
    }




}
