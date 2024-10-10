<?php

namespace App\Livewire\DormitoryAdmin\Dormitory;

use Livewire\Component;
use App\Models\Dormitory\Dormitory;
use App\Models\Dormitory\Manager;
use Illuminate\Support\Str;

use Livewire\Attributes\Validate;
class DormitoryCreate extends Component
{
    #[Validate(as: 'Tên tòa nhà')]
    public $name;

    #[Validate(as: 'Người quản lý')]
    public $manager_id;

    #[Validate(as: 'Số phòng')]
    public $total_rooms;

    #[Validate(as: 'Mô tả')]
    public $description;

    public function render()
    {
        $managers = Manager::all();

        return view('livewire.dormitory-admin.dormitory.dormitory-create', [
            'managers' => $managers
        ]);
    }

    public function store()
    {
        $this->validate();

        $dormitory = Dormitory::create([
            'name' => $this->name,
            'manager_id' => $this->manager_id,
            'total_rooms' => $this->total_rooms,
            'available_rooms' => $this->total_rooms,
            'description' => $this->description,
            'slug' => Str::slug($this->name)
        ]);

        $dormitory->update([
            'slug' => Str::slug($this->name) . '-' . $dormitory->id,
        ]);

        session()->flash('success', 'Thêm mới tòa nhà thành công');

        return redirect()->route('dormitoryadmin.dormitories.index');
    }

    protected function rules()
    {
        return [
            'name' => 'required|unique:dormitories,name',
            'manager_id' => 'required',
            'total_rooms' => 'required',
            'description' => 'required',
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'Tên tòa nhà không được để trống',
            'name.unique' => 'Tên tòa nhà đã tồn tại',
            'manager_id' => 'Người quản lý phải được chọn',
            'manager_id.exists' => 'Người quản lý không hợp lệ',
            'total_rooms.required' => 'Số lượng phòng không được để trống',
            'total_rooms.integer' => 'Số lượng phòng phải là số nguyên',
            'total_rooms.min' => 'Số lượng phòng phải lớn hơn 0',
            'description' => 'Mô tả không được để trống',
        ];
    }
}
