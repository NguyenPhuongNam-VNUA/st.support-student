<?php

namespace App\Livewire\Admin\Login;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use App\Mail\ForgotPasswordMail;
use Livewire\Component;

class ForgotPassword extends Component
{
    #[Validate(as: 'email')]
    public $email;

    public function render()
    {
        return view('livewire.admin.login.forgot-password');
    }

    public function forgotPassword()
    {
        $this->validate();

        $user = User::where('email', $this->email)->first();
        $token = Str::random(60);

        DB::table('reset_password')->insert([
            'email' => $this->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::to($this->email)->send(new ForgotPasswordMail($user, $token));

        session()->flash('success', 'Một yêu cầu xác nhận thay đổi mật khẩu đã được gửi đến email của bạn');
        return redirect()->route('forgot-password');
    }

    public function rules()
    {
        return [
            'email' => 'required|email|exists:users,email'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.exists' => 'Email không tồn tại'
        ];
    }
}
