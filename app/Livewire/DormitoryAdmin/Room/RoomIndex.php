<?php

namespace App\Livewire\DormitoryAdmin\Room;

use Livewire\Component;
use App\Models\Dormitory\Room;

class RoomIndex extends Component
{
    public $roomId;
    public $search;

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

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];


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
