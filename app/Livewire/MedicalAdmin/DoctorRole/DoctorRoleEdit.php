<?php

declare(strict_types=1);

namespace App\Livewire\MedicalAdmin\DoctorRole;

use App\Models\Health\DoctorRole;
use Livewire\Attributes\Validate;
use Livewire\Component;

class DoctorRoleEdit extends Component
{
    #[Validate(as: 'Tên chuyên khoa')]
    public $name;

    public $id;

    public function render()
    {
        return view('livewire.medical-admin.doctor-role.doctor-role-edit');
    }

    public function mount(): void
    {
        $this->id = request()->id;
        $doctor_role = DoctorRole::query()->find($this->id);
        $this->name = $doctor_role->name;
    }

    public function update()
    {
        $this->validate();

        DoctorRole::where('id', $this->id)->update([
            'name' => $this->name,
        ]);
        return redirect()->route('admin.medical.doctor.roles.index')->with('success', 'Cập nhật chuyên khoa thành công');
    }

    protected function rules()
    {
        return [
            'name' => 'required|unique:doctor_roles,name, ' . $this->id,
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
