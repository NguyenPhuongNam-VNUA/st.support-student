<?php

declare(strict_types=1);

namespace App\Http\Controllers\DormitoryAdmin;

use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function index()
    {
        return view('admin.pages.dormitory_admin.room.index');
    }

    public function create()
    {
        return view('admin.pages.dormitory_admin.room.create');
    }

    public function edit($id)
    {
        return view('admin.pages.dormitory_admin.room.edit');
    }
}
