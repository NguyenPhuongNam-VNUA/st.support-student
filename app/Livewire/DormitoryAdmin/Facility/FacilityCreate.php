<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Facility;

use App\Models\Dormitory\Facility;
use App\Models\Dormitory\Room;
use Livewire\Attributes\Validate;
use Livewire\Component;

class FacilityCreate extends Component
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

    protected $listeners = [
        'choseRoom' => 'updatedRoom',
    ];

    public function render()
    {
        $rooms = Room::with('dormitory')
            ->get()
            ->groupBy('dormitory.name')
            ->toArray();
        return view('livewire.dormitory-admin.facility.facility-create', [
            'rooms' => $rooms,
        ]);
    }

    public function updatedRoom($roomId): void
    {
        $this->roomId = $roomId;
    }

    public function store()
    {
        $this->validate();

        $facility = Facility::create([
            'room_id' => $this->roomId,
            'bed' => $this->bed,
            'wardrobe' => $this->wardrobe,
            'air_conditioner' => $this->air_conditioner,
            'area' => $this->area,
        ]);

        session()->flash('success', 'Thêm mới cơ sở vật chất thành công');

        return redirect()->route('admin.dormitory.facilities.index');
    }

    public function rules()
    {
        return [
            'roomId' => 'required',
            'bed' => 'required',
            'wardrobe' => 'required',
            'air_conditioner' => 'required',
            'area' => 'required',
        ];
    }
}
