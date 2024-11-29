<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Register;

use App\Models\Dormitory\DormitoryRequest;
use App\Models\Dormitory\Room;
use Livewire\Component;

class RegisterIndex extends Component
{
    public $roomId;

    protected $listeners = [
        'changeRoom' => 'updatedRoom',
    ];

    public function render()
    {
        $dormitoryRequests = DormitoryRequest::query()
            ->filter($this->roomId)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        $rooms = Room::with('dormitory')
            ->get()
            ->groupBy('dormitory.name')
            ->toArray();

        return view('livewire.dormitory-admin.register.register-index', [
            'dormitoryRequests' => $dormitoryRequests,
            'rooms' => $rooms,
        ]);
    }

    public function updatedRoom($roomId): void
    {
        $this->roomId = $roomId;
    }

    public function resetFilter(): void
    {
        $this->roomId = '';
        $this->dispatch('resetFilter');
    }
}
