<?php

declare(strict_types=1);

namespace App\Livewire\Dashboard;

use App\Models\Post\Post;
use App\Models\Role;
use App\Models\Student;
use App\Models\User;
use Livewire\Component;

class SuperAdminDashboard extends Component
{
    public function render()
    {
        $userCount = User::count();
        $roleCount = Role::count();
        $studentCount = Student::count();
        $postCount = Post::where('category', auth()->user()->role->id)->count();
        return view('livewire.dashboard.super-admin-dashboard', [
            'userCount' => $userCount,
            'roleCount' => $roleCount,
            'studentCount' => $studentCount,
            'postCount' => $postCount,
        ]);
    }
}
