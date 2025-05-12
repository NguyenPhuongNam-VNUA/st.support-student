<?php

declare(strict_types=1);

namespace App\Livewire\Client\Dormitory;

use App\Models\Dormitory\Dormitory;
use App\Models\Dormitory\Room;
use Livewire\Component;

class DormitoryIndex extends Component
{
    public $rooms;
    public $area = [];
    public $roomId;

    public function render()
    {
        return view('livewire.client.dormitory.dormitory-index', [
            //'rooms' => $this->rooms,
            'dormitories' => Dormitory::all(),
        ]);
    }

    //    public function mount(): void
    //    {
    //        $this->rooms = Room::with('dormitory')
    //            ->where('available', '>', 0)
    //            ->get()
    //            ->groupBy(fn ($room) => $room->dormitory->name)
    //            ->map(function ($rooms) {
    //                return $rooms->map(function ($room) {
    //                    return [
    //                        'id' => $room->id,
    //                        'name' => $room->name,
    //                        'description' => $room->description,
    //                        'thumbnail' => $room->thumbnail,
    //                        'available' => $room->available,
    //                        'capacity' => $room->capacity,
    //                    ];
    //                });
    //            });
    //    }



    public function handleShowRegisterModal($roomId): void
    {
        $this->dispatch('showRegisterModal', $roomId);
    }
}
