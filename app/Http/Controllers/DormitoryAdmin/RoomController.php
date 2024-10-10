<?php

namespace App\Http\Controllers\DormitoryAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
