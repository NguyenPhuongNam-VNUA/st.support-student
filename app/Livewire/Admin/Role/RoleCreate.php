<?php

namespace App\Livewire\Admin\Role;

use App\Models\Role;
use Livewire\Component;
use Livewire\Attributes\Validate;

class RoleCreate extends Component
{
    #[Validate(as: 'Tên chức vụ')]
    public $name;

    public function render()
    {
        return view('livewire.admin.role.role-create');
    }

    public function store()
    {
        $this->validate();

        Role::create([
            'name' => $this->name,
        ]);

        session()->flash('success', 'Thêm mới chức vụ thành công');

        return redirect()->route('admin.roles.index');
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
