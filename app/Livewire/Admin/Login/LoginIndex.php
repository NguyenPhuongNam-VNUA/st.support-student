<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Login;

use Livewire\Attributes\Validate;
use Livewire\Component;

class LoginIndex extends Component
{
    #[Validate(as: 'tài khoàn')]
    public $username;

    #[Validate(as: 'mật khẩu')]
    public $password;

    public function render()
    {
        return view('livewire.admin.login.login-index');
    }

    public function rules()
    {
        return [
            'username' => 'required',
            'password' => 'required',
        ];
    }

    public function login()
    {
        $this->validate();

        if (!auth()->attempt(['user_name' => $this->username, 'password' => $this->password])) {
            return redirect()->back()->with('error-login', 'Tên đăng nhập hoặc mật khẩu không đúng');
        }

        return redirect()->route('admin.index');
    }
}
