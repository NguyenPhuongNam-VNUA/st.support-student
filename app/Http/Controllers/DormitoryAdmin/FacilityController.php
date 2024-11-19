<?php

declare(strict_types=1);

namespace App\Http\Controllers\DormitoryAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index(Request $request)
    {
        $room_id = $request->room_id;
        return view('admin.pages.dormitory_admin.facility.index', [
            'room_id' => $room_id,
        ]);
    }

    public function create()
    {
        return view('admin.pages.dormitory_admin.facility.create');
    }

    public function edit()
    {
        return view('admin.pages.dormitory_admin.facility.edit');
    }
}
