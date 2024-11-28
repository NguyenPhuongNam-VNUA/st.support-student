<?php

declare(strict_types=1);

namespace App\Livewire\Client\Component\Dormitory;

use App\Models\Dormitory\Room;
use Livewire\Component;

class QuickView extends Component
{
    public $roomId;
    public $room;
    public $images;

    protected $listeners = [
        'showQuickView' => 'showQuickView',
    ];

    public function render()
    {
        return view('livewire.client.component.dormitory.quick-view', [
            'room' => $this->room,
        ]);
    }

    public function showQuickView($roomId): void
    {
        $this->roomId = $roomId;
        $this->room = Room::with(['roomGalleries', 'facilities'])->find($this->roomId);
        if ($this->room) {
            $this->images = $this->room->roomGalleries->pluck('image')->toArray();
        } else {
            $this->images = [];
        }
    }
}
