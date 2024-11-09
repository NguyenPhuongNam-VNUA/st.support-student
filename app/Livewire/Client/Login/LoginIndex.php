<?php

declare(strict_types=1);

namespace App\Livewire\Client\Login;

use Livewire\Attributes\Validate;
use Livewire\Component;

class LoginIndex extends Component
{
    #[Validate(as: 'tên đăng nhập')]
    public $username;

    #[Validate(as: 'mật khẩu')]
    public $password;

    public function render()
    {
        return view('livewire.client.login.login-index');
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

        if (auth('students')->attempt(['username' => $this->username, 'password' => $this->password])) {
            if (0 === auth('students')->user()->email_verified) {
                $this->dispatch('notification', message: 'Tài khoản chưa được xác thực');
                return redirect()->back();
            }
            return redirect()->route('client.index');
        }
        $this->addError('error', 'Tên đăng nhập hoặc mật khẩu không đúng');
        return redirect()->back();

    }
}
