<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Map\IconPoint;
use App\Models\Map\Point;

class MapController extends Controller
{
    public function ShowMap()
    {
        $icons = IconPoint::all();
        $points = Point::all();

        $points->transform(function ($point) {
            return [
                'id' => $point->id,
                'name' => $point->name,
                'thumbnail' => $point->thumbnail,
                'description' => null !== $point->description ? $point->description : '',
                'longitude' => $point->longitude,
                'latitude' => $point->latitude,
                'icon_name' => $point->iconPoint->name, // Thêm tên của icon vào đây
            ];
        });
        return view('client/pages/index', compact('icons', 'points'));
    }

    public function index()
    {
        return view('admin/pages/map/index');
    }

    public function CreateIcon()
    {
        return view('admin/pages/map/create_icon');
    }

    public function EditIcon()
    {
        return view('admin/pages/map/edit_icon');
    }

    public function CreatePoint()
    {
        return view('admin/pages/map/create_point');
    }

    public function EditPoint()
    {
        return view('admin/pages/map/edit_point');
    }
}
