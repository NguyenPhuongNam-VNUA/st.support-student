<?php

namespace App\Livewire\MedicalAdmin\DoctorRole;

use Livewire\Component;
use App\Models\Health\DoctorRole;
use Livewire\Attributes\Validate;

class DoctorRoleCreate extends Component
{
    #[Validate(as: 'Tên chuyên khoa')]
    public $name;

    public function render()
    {
        return view('livewire.medical-admin.doctor-role.doctor-role-create');
    }

    public function store()
    {
        $this->validate();

        DoctorRole::create([
            'name' => $this->name,
        ]);

        session()->flash('success', 'Thêm mới chuyên khoa thành công');

        return redirect()->route('medicaladmin.doctorroles.index');
    }

    protected function rules()
    {
        return [
            'name' => 'required|unique:doctor_roles,name',
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'Tên chuyên khoa không được để trống',
            'name.unique' => 'Chuyên khoa đã tồn tại',
        ];
    }

}