<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Facility;

use App\Models\Dormitory\Facility;
use App\Models\Dormitory\Room;
use Livewire\Component;

class FacilityIndex extends Component
{
    public $roomId;
    public $facilityId;

    public $room_facility_id;


    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
        'changeRoom' => 'updatedRoom',
    ];

    public function render()
    {
        $facilities = Facility::query()
            ->filter($this->roomId)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        $rooms = Room::with('dormitory')
            ->get()
            ->groupBy('dormitory.name')
            ->toArray();

        return view('livewire.dormitory-admin.facility.facility-index', [
            'facilities' => $facilities,
            'rooms' => $rooms,
        ]);
    }

    public function mount(): void
    {
        if ($this->room_facility_id) {
            $room = Room::find($this->room_facility_id);
            if ($room) {
                $this->roomId = $room->id;
            }
        }
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

    public function openDeleteModel($id): void
    {
        $this->facilityId = $id;
        $this->dispatch('openDeleteModel');
    }

    public function confirmDelete(): void
    {
        Facility::find($this->facilityId)->delete();
    }
}
