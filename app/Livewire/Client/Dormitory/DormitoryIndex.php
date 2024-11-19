<?php

declare(strict_types=1);

namespace App\Livewire\Client\Dormitory;

use App\Enums\StatusRoom;
use App\Models\Dormitory\Room;
use Livewire\Component;

class DormitoryIndex extends Component
{
    public $rooms;

    public function render()
    {
        return view('livewire.client.dormitory.dormitory-index', [
            'rooms' => $this->rooms,
        ]);
    }

    public function mount(): void
    {
        $this->rooms = Room::with('dormitory')
            ->where('status', StatusRoom::Empty->value)
            ->get()
            ->groupBy('dormitory.name')
            ->toArray();

        //        dd($this->rooms);
    }
}
