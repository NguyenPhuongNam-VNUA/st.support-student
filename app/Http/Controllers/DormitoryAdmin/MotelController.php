<?php

declare(strict_types=1);

namespace App\Http\Controllers\DormitoryAdmin;

use App\Http\Controllers\Controller;

class MotelController extends Controller
{
    public function index()
    {
        return view('admin.pages.dormitory_admin.motel.index');
    }

    public function create()
    {
        return view('admin.pages.dormitory_admin.motel.create');
    }

    public function edit($id)
    {
        return view('admin.pages.dormitory_admin.motel.edit');
    }

    public function detail($id)
    {
        return view('admin.pages.dormitory_admin.motel.detail', compact('id'));
    }
}
