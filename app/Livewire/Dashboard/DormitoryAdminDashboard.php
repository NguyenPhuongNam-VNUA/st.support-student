<?php

declare(strict_types=1);

namespace App\Livewire\Dashboard;

use App\Enums\StatusRequest;
use App\Enums\StatusRoom;
use App\Models\Dormitory\DormitoryRequest;
use App\Models\Dormitory\Motel;
use App\Models\Dormitory\Room;
use Livewire\Component;

class DormitoryAdminDashboard extends Component
{
    public function render()
    {
        $motelCount = Motel::where('status', StatusRequest::Pending->value)->count();
        $roomCount = Room::where('status', StatusRoom::Empty->value)->count();
        $requestCount = DormitoryRequest::where('status', StatusRequest::Pending->value)->count();
        $successCount = DormitoryRequest::where('status', StatusRequest::Completed->value)->count();
        return view('livewire.dashboard.dormitory-admin-dashboard', [
            'motelCount' => $motelCount,
            'roomCount' => $roomCount,
            'requestCount' => $requestCount,
            'successCount' => $successCount
        ]);
    }
}
