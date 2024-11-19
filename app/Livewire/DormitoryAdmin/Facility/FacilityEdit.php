<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Facility;

use App\Models\Dormitory\Facility;
use App\Models\Dormitory\Room;
use Livewire\Attributes\Validate;
use Livewire\Component;

class FacilityEdit extends Component
{
    #[Validate(as: 'phòng')]
    public $roomId;

    #[Validate(as: 'số lượng giường')]
    public $bed;

    #[Validate(as: 'số lượng tủ đồ')]
    public $wardrobe;

    #[Validate(as: 'số lượng điều hòa')]
    public $air_conditioner;

    #[Validate(as: 'diện tích')]
    public $area;

    public $facilityId;

    public function render()
    {
        $rooms = Room::with('dormitory')
            ->get()
            ->groupBy('dormitory.name')
            ->toArray();
        return view('livewire.dormitory-admin.facility.facility-edit', [
            'rooms' => $rooms,
        ]);
    }

    public function mount(): void
    {
        $this->facilityId = request()->id;
        $facility = Facility::query()->find($this->facilityId);
        $this->bed = $facility->bed;
        $this->wardrobe = $facility->wardrobe;
        $this->air_conditioner = $facility->air_conditioner;
        $this->area = $facility->area;
        $this->roomId = $facility->room_id;
        $this->dispatch('reloadData', room: Room::query()->find($this->roomId));
    }
}
