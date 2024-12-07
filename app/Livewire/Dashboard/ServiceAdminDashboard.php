<?php

declare(strict_types=1);

namespace App\Livewire\Dashboard;

use App\Models\Post\Post;
use App\Models\Service\Service;
use App\Models\Service\ServiceCategory;
use Livewire\Component;

class ServiceAdminDashboard extends Component
{
    public function render()
    {
        $serviceCount = Service::count();
        $categoryCount = ServiceCategory::count();
        $postCount = Post::where('category', auth()->user()->role->id)->count();
        return view('livewire.dashboard.service-admin-dashboard', [
            'serviceCount' => $serviceCount,
            'categoryCount' => $categoryCount,
            'postCount' => $postCount,
        ]);
    }
}
