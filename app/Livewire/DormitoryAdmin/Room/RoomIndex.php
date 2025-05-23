<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Room;

use App\Enums\StatusRoom;
use App\Models\Dormitory\Dormitory;
use App\Models\Dormitory\Room;
use Livewire\Component;

class RoomIndex extends Component
{
    public $roomId;
    public $search;
    public $dormitoryId;
    public $status;

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
        'changeDormitory' => 'updatedDormitory',
        'changeStatus' => 'updatedStatus',
    ];

    public function render()
    {
        $rooms = Room::query()
            ->with('students')
            ->search($this->search)
            ->filter($this->dormitoryId)
            ->empty($this->status)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        foreach ($rooms as $room) {
            $available = $room->capacity - $room->students->count();

            $room->update([
                'available' => $available,
                'status' => $available > 0 ? StatusRoom::Empty : StatusRoom::Full, // Sửa điều kiện
            ]);
        }

        $dormitories = Dormitory::all();
        return view('livewire.dormitory-admin.room.room-index', [
            'rooms' => $rooms,
            'dormitories' => $dormitories,
        ]);
    }

    public function updatedDormitory($dormitoryId): void
    {
        $this->dormitoryId = $dormitoryId;
    }

    public function updatedStatus($status): void
    {
        $this->status = $status;
    }

    public function resetFilter(): void
    {
        $this->dormitoryId = '';
        $this->status = '';

        $this->dispatch('resetFilter');
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
