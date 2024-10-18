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
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Tài khoản không được để trống',
            'password.required' => 'Mật khẩu không được để trống'
        ];
    }

    public function login()
    {
        $this->validate();

        if (auth()->attempt(['user_name' => $this->username, 'password' => $this->password])) {
            return redirect()->route('admin.roles.index');
        }
        $this->addError('error-login', 'Tài khoản hoặc mật khẩu không đúng');
        return redirect()->back();

    }
}
