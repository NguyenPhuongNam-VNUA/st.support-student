<?php

declare(strict_types=1);

namespace App\Livewire\Admin\User;

use App\Models\Role;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UserEdit extends Component
{
    #[Validate(as: 'Họ và tên')]
    public $name;

    #[Validate(as: 'Email')]
    public $email;

    #[Validate(as: 'Số điện thoại')]
    public $phone_number;

    #[Validate(as: 'Chức vụ')]
    public $role_id;

    #[Validate(as: 'Tên người dùng')]
    public $user_name;

    public $id;

    public function render()
    {
        $roles = Role::all();

        return view('livewire.admin.user.user-edit', [
            'roles' => $roles
        ]);
    }

    public function mount(): void
    {
        $this->id = request()->id;
        $user = User::query()->find($this->id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone_number = $user->phone_number;
        $this->role_id = $user->role_id;
        $this->user_name = $user->user_name;
    }

    public function update()
    {
        $this->validate();

        User::where('id', $this->id)->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'role_id' => $this->role_id,
            'user_name' => $this->user_name,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Cập nhật thông tin người dùng thành công');
    }

    protected function rules()
    {
        return [
            'name' => 'required',
            'email' => [
                'required',
                'email',
                'unique:users,email,' . $this->id,
            ],
            'phone_number' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{10}$/", $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                }
            ],
            'user_name' => 'required',
            'role_id' => 'required|exists:roles,id',
        ];
    }

}
