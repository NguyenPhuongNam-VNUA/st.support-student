<?php

declare(strict_types=1);

namespace App\Livewire\Admin\User;

use App\Models\Role;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UserCreate extends Component
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

    #[Validate(as: 'Mật khẩu')]
    public $password;

    public function render()
    {
        $roles = Role::all();

        return view('livewire.admin.user.user-create', [
            'roles' => $roles,
        ]);
    }

    public function store()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'password' => bcrypt($this->password),
            'role_id' => $this->role_id,
            'user_name' => $this->user_name,
        ]);

        session()->flash('success', 'Thêm mới người dùng thành công');

        return redirect()->route('admin.users.index');
    }

    protected function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone_number' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (! preg_match('/^[0-9]{10}$/', $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                },
            ],
            'password' => 'required',
            'user_name' => 'required',
            'role_id' => 'required|exists:roles,id',
        ];
    }
}
