<?php

namespace App\Livewire\Admin\Role;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Role;

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
            'name' => 'required',
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'Tên chức vụ không được để trống',
        ];
    }

}
