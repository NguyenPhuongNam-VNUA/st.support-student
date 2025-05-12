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
use Livewire\WithFileUploads;

class DormitoryEdit extends Component
{
    use WithFileUploads;

    #[Validate(as: 'Tên tòa nhà')]
    public $name;

    #[Validate(as: 'Người quản lý')]
    public $manager_id;

    #[Validate(as: 'Số phòng')]
    public $total_rooms;

    #[Validate(as: 'Mô tả')]
    public $description;

    public $id;

    #[Validate(as: 'Ảnh tòa nhà')]
    public $thumbnail;

    #[Validate(as: 'Số tầng')]
    public $floors;

    public $new_thumbnail;
    public $location;
    public $address = '';

    public function render()
    {
        $managers = Manager::all();
        $locations = Point::query()->where('icon_point_id', IconPoint::query()->where('name', 'dormitory')->first()->id)->get();

        return view('livewire.dormitory-admin.dormitory.dormitory-edit', [
            'managers' => $managers,
            'locations' => $locations,
            'address' => $this->address,
        ]);
    }

    public function mount(): void
    {
        $this->id = request()->id;
        $dormitory = Dormitory::query()->find($this->id);
        $this->name = $dormitory->name;
        $this->manager_id = $dormitory->manager_id;
        $this->thumbnail = $dormitory->thumbnail;
        $this->total_rooms = $dormitory->total_rooms;
        $this->description = $dormitory->description;
        $this->floors = $dormitory->floor;
        $this->address = $dormitory->location;

        // Match lại location id nếu có trong danh sách
        if ($dormitory->location) {
            $url = parse_url($dormitory->location);
            parse_str($url['query'] ?? '', $query);
            $latLng = $query['destination'] ?? null;

            if ($latLng) {
                [$lat, $lng] = explode(',', $latLng);
                $point = Point::query()->where('latitude', $lat)->where('longitude', $lng)->first();
                if ($point) {
                    $this->location = $point->id;
                }
            }
        }
    }

    public function updatedLocation($value): void
    {
        $location = Point::find($value);
        if ($location) {
            $this->address = 'https://www.google.com/maps/dir/?api=1&destination=' . urlencode($location->latitude) . ',' . urlencode($location->longitude);
        }
    }

    public function update()
    {
        $this->validate();

        $dormitory = Dormitory::query()->where('id', $this->id)->first();

        $thumbnailPath = $this->thumbnail;
        if ($this->new_thumbnail) {
            $thumbnailPath = $this->new_thumbnail->store('dormitoryThumbnails', 'public');
        }
        $dormitory->update([
            'name' => $this->name,
            'manager_id' => $this->manager_id,
            'total_rooms' => $this->total_rooms,
            'thumbnail' => $thumbnailPath,
            'floor' => $this->floors,
            'location' => $this->address,
            'description' => $this->description,
            'available_rooms' => $this->total_rooms - $dormitory->rooms->count(),
            'slug' => Str::slug($this->name) . '-' . $this->id,
        ]);
        return redirect()->route('admin.dormitories.index')->with('success', 'Cập nhật thông tin tòa nhà thành công');
    }

    protected function rules()
    {
        return [
            'name' => 'required|unique:dormitories,name,' . $this->id,
            'manager_id' => 'required',
            'total_rooms' => [
                'required',
                function ($attribute, $value, $fail): void {
                    if ($value < Dormitory::query()->find($this->id)->rooms->count()) {
                        $fail('Số phòng không được nhỏ hơn số phòng đã tạo');
                    }
                },
            ],
            'description' => 'required',
            'floors' => 'required|integer',
            'new_thumbnail' => 'nullable|image|max:1024',
        ];
    }
}
