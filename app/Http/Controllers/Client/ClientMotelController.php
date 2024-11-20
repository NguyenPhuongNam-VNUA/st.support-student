<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Dormitory\Motel;

class ClientMotelController extends Controller
{
    public function index()
    {
        return view('client.pages.motel.index');
    }

    public function detail($slug)
    {
        $motel = Motel::where('slug', $slug)->first();
        return view('client.pages.motel.detail', [
            'id' => $motel->id,
            'motel' => $motel,
        ]);
    }
}
