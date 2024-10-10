<?php

namespace App\Livewire\DormitoryAdmin\Manager;

use Livewire\Component;
use App\Models\Dormitory\Manager;
use Livewire\Attributes\Validate;

class ManagerEdit extends Component
{
    #[Validate(as: 'Tên cán bộ')]
    public $name;

    #[Validate(as: 'Email')]
    public $email;

    #[Validate(as: 'Số điện thoại ')]
    public $phone_number;

    public $id;

    public function render()
    {
        return view('livewire.dormitory-admin.manager.manager-edit');
    }

    public function mount(): void
    {
        $this->id = request()->id;
        $manager = Manager::query()->find($this->id);
        $this->name = $manager->name;
        $this->email = $manager->email;
        $this->phone_number = $manager->phone_number;
    }

    public function update()
    {
        $this->validate();

        Manager::where('id', $this->id)->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
        ]);
        return redirect()->route('dormitoryadmin.managers.index')->with('success', 'Cập nhật thông tin cán bộ thành công');
    }

    protected function rules()
    {
        return [
            'name' => 'required',
            'email' => [
                'required',
                'email',
                'unique:managers,email,' . $this->id,
            ],
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
