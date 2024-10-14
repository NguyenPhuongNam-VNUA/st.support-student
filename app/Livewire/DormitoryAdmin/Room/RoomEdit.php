<?php

namespace App\Livewire\DormitoryAdmin\Room;

use Livewire\Component;
use App\Models\Dormitory\Room;
use App\Models\Dormitory\Dormitory;
use Livewire\Attributes\Validate;
use Illuminate\Support\Str;

class RoomEdit extends Component
{
    #[Validate(as: 'Tên phòng')]
    public $name;

    #[Validate(as: 'Tòa')]
    public $dormitory_id;

    #[Validate(as: 'Số sinh viên tối đa')]
    public $capacity;

    public $id;

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
        $room = Room::query()->find($this->id);
        $this->name = $room->name;
        $this->dormitory_id = $room->dormitory_id;
        $this->capacity = $room->capacity;
    }

    public function update()
    {
        $this->validate();

        Room::where('id', $this->id)->update([
            'name' => $this->name,
            'dormitory_id' => $this->dormitory_id,
            'capacity' => $this->capacity,
        ]);
        return redirect()->route('dormitoryadmin.rooms.index')->with('success', 'Cập nhật thông tin phòng thành công');
    }

    protected function rules()
    {
        return [
            'name' => 'required|unique:rooms,name,'. $this->id,
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
