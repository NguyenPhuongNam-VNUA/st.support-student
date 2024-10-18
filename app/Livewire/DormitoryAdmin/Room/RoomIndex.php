<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Room;

use App\Models\Dormitory\Room;
use Livewire\Component;

class RoomIndex extends Component
{
    public $roomId;
    public $search;

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];

    public function render()
    {
        $rooms = Room::query()
            ->search($this->search)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('livewire.dormitory-admin.room.room-index', [
            'rooms' => $rooms
        ]);
    }


    public function openDeleteModel($id): void
    {
        $this->roomId = $id;
        $this->dispatch('openDeleteModel');
    }

    public function confirmDelete(): void
    {
        Room::destroy($this->roomId);
    }
}
