<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Manager;

use App\Models\Dormitory\Manager;
use Livewire\Attributes\Validate;
use Livewire\Component;

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

        return redirect()->route('admin.dormitory.managers.index');
    }

    protected function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:managers,email',
            'phone_number' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (! preg_match('/^[0-9]{10}$/', $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                },
            ],
        ];
    }
}
