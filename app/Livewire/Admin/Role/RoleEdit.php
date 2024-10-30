<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Role;

use App\Models\Role;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RoleEdit extends Component
{
    #[Validate(as: 'Tên chức vụ')]
    public $name;
    public $id;

    public function render()
    {
        return view('livewire.admin.role.role-edit');
    }

    public function mount(): void
    {
        $this->id = request()->id;
        $role = Role::query()->find($this->id);
        $this->name = $role->name;
    }

    public function update()
    {
        $this->validate();

        Role::where('id', $this->id)->update([
            'name' => $this->name,
        ]);

        return redirect()->route('admin.roles.index')->with('success', 'Cập nhật thông tin người dùng thành công');
    }

    protected function rules()
    {
        return [
            'name' => 'required|unique:roles,name, ' . $this -> id,
        ];
    }
}
