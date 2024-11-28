<?php

declare(strict_types=1);

namespace App\Livewire\Client\Dormitory;

use App\Enums\StatusRoom;
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
            'rooms' => $this->rooms,
        ]);
    }

    public function mount(): void
    {
        $this->rooms = Room::with(['dormitory', 'facilities'])
            ->where('status', StatusRoom::Empty->value)
            ->get()
            ->groupBy(fn ($room) => $room->dormitory->name)
            ->map(function ($rooms) {
                return $rooms->map(function ($room) {
                    return [
                        'id' => $room->id,
                        'name' => $room->name,
                        'description' => $room->description,
                        'thumbnail' => $room->thumbnail,
                        'facilities' => $room->facilities->map(function ($facility) {
                            return [
                                'area' => $facility->area,
                                'bed' => $facility->bed,
                                'wardrobe' => $facility->wardrobe,
                                'air_conditioner' => $facility->air_conditioner,
                            ];
                        }),
                        'count' => $room->students->count(),
                        'capacity' => $room->capacity,
                    ];
                });
            });
    }

    public function handleShowRegisterModal($roomId): void
    {
        $this->dispatch('showRegisterModal', $roomId);
    }
}
