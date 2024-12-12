<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Room;

use App\Models\Dormitory\Dormitory;
use App\Models\Dormitory\Room;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class RoomEdit extends Component
{
    use WithFileUploads;

    #[Validate(as: 'tên phòng')]
    public $name;

    #[Validate(as: 'tòa')]
    public $dormitory_id;

    #[Validate(as: 'số sinh viên tối đa')]
    public $capacity;

    #[Validate(as: 'ảnh đại diện phòng')]
    public $thumbnail;

    #[Validate(as: 'ảnh bổ sung')]
    public $room_galleries = [];

    #[Validate(as: 'mô tả')]
    public $description;

    public $id;
    public $new_thumbnail;

    #[Validate(as: 'ảnh bổ sung')]
    public $new_room_galleries = [];


    public function render()
    {
        $dormitories = Dormitory::all();

        return view('livewire.dormitory-admin.room.room-edit', [
            'dormitories' => $dormitories
        ]);
    }

    public function mount(): void
    {
        $this->id = request()->id;
        $room = Room::with('roomGalleries')->find($this->id);
        $this->name = $room->name;
        $this->dormitory_id = $room->dormitory_id;
        $this->capacity = $room->capacity;
        $this->description = $room->description;
        $this->thumbnail = $room->thumbnail;
        $this->room_galleries = $room->roomGalleries;

        //        dd($this->thumbnail);
    }

    public function update()
    {
        $this->validate();

        $thumbnailPath = $this->thumbnail;

        if ($this->new_thumbnail) {
            $thumbnailPath = $this->new_thumbnail->store('roomThumbnails', 'public');
        }

        $room = Room::find($this->id);

        $room->update([
            'name' => $this->name,
            'dormitory_id' => $this->dormitory_id,
            'capacity' => $this->capacity,
            'thumbnail' => $thumbnailPath,
            'description' => $this->description,
            'available' => $this->capacity - $room->students->count(),
        ]);

        if ($this->new_room_galleries) {
            foreach ($room->roomGalleries as $oldGallery) {
                $oldImagePath = public_path('storage/' . $oldGallery->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
                $oldGallery->delete();
            }

            foreach ($this->new_room_galleries as $image) {
                $path = $image->store('service_images', 'public');
                $room->roomGalleries()->create([
                    'image' => $path,
                ]);
            }
        }
        return redirect()->route('admin.dormitory.rooms.index')->with('success', 'Cập nhật thông tin phòng thành công');
    }

    protected function rules()
    {
        return [
            'name' => 'required|unique:rooms,name,' . $this->id,
            'dormitory_id' => 'required',
            'capacity' => 'required',
            'new_thumbnail' => 'nullable|image|max:2048',
            'new_room_galleries.*' => 'nullable|image|max:2048',
        ];
    }
}
