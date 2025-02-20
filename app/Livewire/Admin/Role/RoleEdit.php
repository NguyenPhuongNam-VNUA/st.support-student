<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Role;

use App\Models\Role;
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Permission;

class RoleEdit extends Component
{
    #[Validate(as: 'Tên chức vụ')]
    public $name;
    public $id;
    #[Validate(as: 'Quyền hạn')]
    public $permission_ids = [];

    public function render()
    {
        $permissions = Permission::all();
        return view('livewire.admin.role.role-edit', [
            'permissions' => $permissions,
            'role_id'=> $this->id
        ]);
    }

    public function mount(): void
    {
        $this->id = request()->id;
        $role = Role::query()->find($this->id);
        $this->name = $role->name;
        $this->permission_ids = $role->permissions->pluck('id')->toArray();

    }

    public function update()
    {
        $this->validate();
        Role::where('id', $this->id)->update([
            'name' => $this->name,
        ]);
        $role = Role::query()->find($this->id);
        $role->permissions()->sync($this->permission_ids);

        return redirect()->route('admin.roles.index')->with('success', 'Cập nhật thông tin người dùng thành công');
    }

    protected function rules()
    {
        return [
            'name' => 'required|unique:roles,name, ' . $this -> id,
            'permission_ids' => 'required|array',
        ];
    }
}
