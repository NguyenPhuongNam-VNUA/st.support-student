<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Dormitory;

use App\Models\Dormitory\Dormitory;
use App\Models\Dormitory\Manager;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;

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
            'managers' => $managers,
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

        $dormitory = Dormitory::query()->where('id', $this->id)->first();
        $dormitory->update([
            'name' => $this->name,
            'manager_id' => $this->manager_id,
            'total_rooms' => $this->total_rooms,
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
        ];
    }
}
