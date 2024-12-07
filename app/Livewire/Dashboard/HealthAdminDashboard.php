<?php

declare(strict_types=1);

namespace App\Livewire\Dashboard;

use App\Enums\HealthRequest as HealthRequestEnum;
use App\Models\Health\Doctor;
use App\Models\Health\HealthRequest;
use App\Models\Post\Post;
use Livewire\Component;

class HealthAdminDashboard extends Component
{
    public function render()
    {
        $doctorCount = Doctor::count();
        $healthRequestCount = HealthRequest::where('status', HealthRequestEnum::Pending->value)->count();
        $postCount = Post::where('category', auth()->user()->role->id)->count();
        return view('livewire.dashboard.health-admin-dashboard', [
            'doctorCount' => $doctorCount,
            'healthRequestCount' => $healthRequestCount,
            'postCount' => $postCount,
        ]);
    }
}
