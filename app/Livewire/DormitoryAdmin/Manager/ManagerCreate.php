<?php

namespace App\Livewire\DormitoryAdmin\Manager;

use Livewire\Component;
use App\Models\Dormitory\Manager;
use Livewire\Attributes\Validate;

class ManagerCreate extends Component
{
    #[Validate(as: 'Tên cán bộ')]
    public $name;

    #[Validate(as: 'Email')]
    public $email;

    #[Validate(as: 'Số điện thoại ')]
    public $phone_number;

    public function render()
    {
        return view('livewire.dormitory-admin.manager.manager-create');
    }

    public function store()
    {
        $this->validate();

        Manager::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
        ]);

        session()->flash('success', 'Thêm mới cán bộ thành công');

        return redirect()->route('dormitoryadmin.managers.index');
    }

    protected function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:managers,email',
            'phone_number' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{10}$/", $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                }
            ],
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'Tên cán bộ không được để trống',
            'email.unique' => 'Email đã tồn tại',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'phone_number.required' => 'Số điện thoại không được để trống',
        ];
    }
}