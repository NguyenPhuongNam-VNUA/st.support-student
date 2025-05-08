<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class AdviceController extends Controller
{
    public function create()
    {
        return view('client.pages.advice');
    }

    public function index()
    {
        return view('admin.pages.advice.index');
    }

}
