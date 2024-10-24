<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Room;

use App\Models\Dormitory\Dormitory;
use App\Models\Dormitory\Room;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RoomCreate extends Component
{
    #[Validate(as: 'Tên phòng')]
    public $name;

    #[Validate(as: 'Tòa')]
    public $dormitory_id;

    #[Validate(as: 'Số sinh viên tối đa')]
    public $capacity;

    public function render()
    {
        $dormitories = Dormitory::all();
        return view('livewire.dormitory-admin.room.room-create', [
            'dormitories' => $dormitories
        ]);
    }

    public function store()
    {
        $this->validate();

        $room = Room::create([
            'name' => $this->name,
            'dormitory_id' => $this->dormitory_id,
            'capacity' => $this->capacity,
            'slug' => Str::slug($this->name),
            'status' => 'empty',
        ]);

        $room->update([
            'slug' => Str::slug($this->name) . '-' . $room->id,
        ]);

        session()->flash('success', 'Thêm mới phòng thành công');

        return redirect()->route('admin.dormitory.rooms.index');
    }

    protected function rules()
    {
        return [
            'name' => 'required|unique:rooms,name',
            'dormitory_id' => 'required',
            'capacity' => 'required',
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'Tên phòng không được để trống',
            'name.unique' => 'Tên phòng đã tồn tại',
            'capacity.required' => 'Số lượng phòng không được để trống',
            'capacity.integer' => 'Số lượng sinh viên không hợp lệ',
            'capacity.min' => 'Số lượng sinh viên không hợp lệ',
            'dormitory_id.required' => 'Tòa nhà phải được chọn',
            'dormitory_id.exists' => 'Tòa nhà không hợp lệ',
        ];
    }
}
