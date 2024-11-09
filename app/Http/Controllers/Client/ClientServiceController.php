<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
