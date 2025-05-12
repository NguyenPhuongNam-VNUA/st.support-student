<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Dormitory;

use App\Models\Dormitory\Dormitory;
use App\Models\Dormitory\Manager;
use App\Models\Map\IconPoint;
use App\Models\Map\Point;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;

class DormitoryCreate extends Component
{
    use \Livewire\WithFileUploads;

    #[Validate(as: 'Tên tòa nhà')]
    public $name;

    #[Validate(as: 'Người quản lý')]
    public $manager_id;

    #[Validate(as: 'Số phòng')]
    public $total_rooms;

    #[Validate(as: 'Mô tả')]
    public $description;

    #[Validate(as: 'Ảnh tòa nhà')]
    public $thumbnail;

    #[Validate(as: 'Số tầng')]
    public $floors;

    public $location;
    public $address = '';

    public function render()
    {
        $managers = Manager::all();
        $locations = Point::query()->where('icon_point_id', IconPoint::query()->where('name', 'dormitory')->first()->id)->get();
        return view('livewire.dormitory-admin.dormitory.dormitory-create', [
            'managers' => $managers,
            'locations' => $locations,
            'address' => $this->address,
        ]);
    }

    public function updatedLocation($value): void
    {
        $location = Point::find($value);
        if ($location) {
            $this->address = 'https://www.google.com/maps/dir/?api=1&destination=' . urlencode($location->latitude) . ',' . urlencode($location->longitude);
        }
    }

    public function store()
    {
        $this->validate();
        $thumbnailPath = $this->thumbnail->store('dormitoryThumbnails', 'public');

        $dormitory = Dormitory::create([
            'name' => $this->name,
            'manager_id' => $this->manager_id,
            'total_rooms' => $this->total_rooms,
            'available_rooms' => $this->total_rooms,
            'floor' => $this->floors,
            'thumbnail' => $thumbnailPath,
            'description' => $this->description,
            'location' => $this->address,
            'slug' => Str::slug($this->name),
        ]);

        $dormitory->update([
            'slug' => Str::slug($this->name) . '-' . $dormitory->id,
        ]);

        session()->flash('success', 'Thêm mới tòa nhà thành công');

        return redirect()->route('admin.dormitories.index');
    }

    protected function rules()
    {
        return [
            'name' => 'required|unique:dormitories,name',
            'manager_id' => 'required',
            'total_rooms' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'floors' => 'required|integer|min:1',
        ];
    }
}
