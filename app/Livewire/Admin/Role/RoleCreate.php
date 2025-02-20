<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Role;

use App\Models\Role;
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Permission;

class RoleCreate extends Component
{
    #[Validate(as: 'Tên chức vụ')]
    public $name;
    #[Validate(as: 'Quyền hạn')]
    public $permission_ids = [];

    public function render()
    {
        $permissions = Permission::all();
        return view('livewire.admin.role.role-create',
            [
                'permissions' => $permissions
            ]);
    }

    public function store()
    {
        $this->validate();

        Role::create([
            'name' => $this->name,
        ])->permissions()->sync($this->permission_ids);


        session()->flash('success', 'Thêm mới chức vụ thành công');

        return redirect()->route('admin.roles.index');
    }

    protected function rules()
    {
        return [
            'name' => 'required|unique:roles',
            'permission_ids' => 'required|array',
        ];
    }
}
