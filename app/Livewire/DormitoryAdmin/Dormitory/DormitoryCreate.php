<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Dormitory;

use App\Models\Dormitory\Dormitory;
use App\Models\Dormitory\Manager;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;

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
            'managers' => $managers,
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
        ];
    }
}
