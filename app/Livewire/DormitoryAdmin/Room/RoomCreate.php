<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Room;

use App\Models\Dormitory\Dormitory;
use App\Models\Dormitory\Room;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class RoomCreate extends Component
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

    public function render()
    {
        $dormitories = Dormitory::query()
            ->where('available_rooms', '>', 0)
            ->get();
        return view('livewire.dormitory-admin.room.room-create', [
            'dormitories' => $dormitories
        ]);
    }

    public function store()
    {
        //        try {
        //            $this->validate();
        //        } catch (c) {
        //            dd($e->errors());
        //        }
        $this->validate();
        $thumbnailPath = $this->thumbnail ? $this->thumbnail->store('roomThumbnails', 'public') : null;
        $room = Room::create([
            'name' => $this->name,
            'dormitory_id' => $this->dormitory_id,
            'thumbnail' => $thumbnailPath,
            'capacity' => $this->capacity,
            'slug' => Str::slug($this->name),
            'status' => 'empty',
            'description' => $this->description,
        ]);

        $room->update([
            'slug' => Str::slug($this->name) . '-' . $room->id,
        ]);

        if ($this->room_galleries) {
            foreach ($this->room_galleries as $image) {
                $path = $image->store('room_images', 'public');
                $room->roomGalleries()->create([
                    'image' => $path,
                ]);
            }
        }

        session()->flash('success', 'Thêm mới phòng thành công');

        return redirect()->route('admin.dormitory.rooms.index');
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:rooms,name',
            'dormitory_id' => 'required',
            'capacity' => 'required',
            'thumbnail' => 'required|image|max:2048',
            'room_galleries.*' => 'nullable|image|max:1024',
            'description' => 'required',
        ];
    }
}
