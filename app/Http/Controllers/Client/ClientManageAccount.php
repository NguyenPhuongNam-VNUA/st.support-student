<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class ClientManageAccount extends Controller
{
    public function index()
    {
        return view('client.pages.account.index');
    }


}
