<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class ClientServiceController extends Controller
{
    public function index()
    {
        return view('client.pages.service.index');
    }

    public function detail($id)
    {
        return view('client.pages.service.detail')->with('id', $id);
    }
}
