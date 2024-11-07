<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class ClientBlogController extends Controller
{
    public function index()
    {
        return view('client.pages.blog.index');
    }

    public function detail($id)
    {
        return view('client.pages.blog.detail')->with('id', $id);
    }
}
