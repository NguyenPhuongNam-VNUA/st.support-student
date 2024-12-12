<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Facility;

use App\Models\Dormitory\Facility;
use Livewire\Attributes\Validate;
use Livewire\Component;

class FacilityEdit extends Component
{
    public $room;
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
        return view('livewire.dormitory-admin.facility.facility-edit');
    }

    public function mount(): void
    {
        $this->facilityId = request()->id;
        $facility = Facility::query()->find($this->facilityId);
        $this->bed = $facility->bed;
        $this->wardrobe = $facility->wardrobe;
        $this->air_conditioner = $facility->air_conditioner;
        $this->area = $facility->area;
        $this->room = $facility->room->name;
    }

    public function update()
    {
        $this->validate();
        Facility::find($this->facilityId)->update([
            'bed' => $this->bed,
            'wardrobe' => $this->wardrobe,
            'air_conditioner' => $this->air_conditioner,
            'area' => $this->area,
        ]);

        session()->flash('success', 'Chỉnh sửa cơ sở vật chất thành công');

        return redirect()->route('admin.dormitory.facilities.index');
    }

    public function rules()
    {
        return [
            'bed' => 'required|numeric',
            'wardrobe' => 'required|numeric',
            'air_conditioner' => 'required|numeric',
            'area' => 'required|numeric',
        ];
    }
}
