<?php

namespace App\Livewire\DormitoryAdmin\Dormitory;

use Livewire\Component;
use App\Models\Dormitory\Dormitory;
use App\Models\Dormitory\Manager;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;


class DormitoryEdit extends Component
{
    #[Validate(as: 'Tên tòa nhà')]
    public $name;

    #[Validate(as: 'Người quản lý')]
    public $manager_id;

    #[Validate(as: 'Số phòng')]
    public $total_rooms;

    #[Validate(as: 'Mô tả')]
    public $description;

    public $id;
    
    public function render()
    {
        $managers = Manager::all();

        return view('livewire.dormitory-admin.dormitory.dormitory-edit', [
            'managers' => $managers
        ]);
    }


    public function mount(): void
    {
        $this->id = request()->id;
        $dormitory = Dormitory::query()->find($this->id);
        $this->name = $dormitory->name;
        $this->manager_id = $dormitory->manager_id;
        $this->total_rooms = $dormitory->total_rooms;
        $this->description = $dormitory->description;
    }
    
    public function update()
    {
        $this->validate();

        Dormitory::where('id', $this->id)->update([
            'name' => $this->name,
            'manager_id' => $this->manager_id,
            'total_rooms' => $this->total_rooms,
            'description' => $this->description,
            'slug' => Str::slug($this->name) . '-' . $this->id,
        ]);
        return redirect()->route('dormitoryadmin.dormitories.index')->with('success', 'Cập nhật thông tin tòa nhà thành công');
    }

    protected function rules()
    {
        return [
            'name' => 'required|unique:dormitories,name,' . $this->id,
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
