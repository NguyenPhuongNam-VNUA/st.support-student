<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Service\Service;

class ClientServiceController extends Controller
{
    public function index()
    {
        return view('client.pages.service.index');
    }

    public function detail($slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('client.pages.service.detail', [
            'id' => $service->id,
            'service' => $service,
        ]);
    }
}
