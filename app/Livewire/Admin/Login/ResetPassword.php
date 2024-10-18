<?php

namespace App\Livewire\Admin\Login;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ResetPassword extends Component
{
    public $token;
    public $user;

    #[Validate(as: 'mật khẩu')]
    public $password;

    #[Validate(as: 'xác nhận mật khẩu')]
    public $confirmPassword;

    public function render()
    {
        return view('livewire.admin.login.reset-password');
    }

    public function mount()
    {
        $email = DB::table('reset_password')->where('token', $this->token)->first();
        $this->user = User::query()->where('email', $email->email)->first();
    }

    public function resetPassword()
    {
        $this->validate();

        $this->user->update([
            'password' => bcrypt($this->password)
        ]);

        DB::table('reset_password')->where('token', $this->token)->delete();

        session()->flash('success', 'Mật khẩu đã được thay đổi');
        return redirect()->route('login');
    }

    public function rules()
    {
        return [
            'password' => 'required',
            'confirmPassword' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Mật khẩu không được để trống',
            'confirmPassword.required' => 'Xác nhận mật khẩu không được để trống',
            'confirmPassword.same' => 'Xác nhận mật khẩu không khớp'
        ];
    }
}

