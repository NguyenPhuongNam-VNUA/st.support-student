<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class ClientMotelController extends Controller
{
    public function index()
    {
        return view('client.pages.motel.index');
    }

    public function detail($id)
    {
        return view('client.pages.motel.detail')->with('id', $id);
    }
}
