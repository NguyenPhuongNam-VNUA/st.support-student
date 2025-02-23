<?php

declare(strict_types=1);

namespace App\Livewire\Client\Login;

use App\Mail\client\ForgotPassword as ForgotPasswordMail;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ForgotPassword extends Component
{
    #[Validate(as: 'mã sinh viên')]
    public $code;

    #[Validate(as: 'số điện thoại')]
    public $phone_number;

    public function render()
    {
        return view('livewire.client.login.forgot-password');
    }

    public function forgotPassword(): void
    {
        $this->validate();
        $token = Str::random(60);
        $student = Student::where(['code' => $this->code, 'phone_number' => $this->phone_number])->first();

        DB::table('reset_password')->insert([
            'email' => $student->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::to($student->email)->send(new ForgotPasswordMail($student, $token));

        $this->dispatch('notification', message: 'Một yêu cầu xác nhận thay đổi mật khẩu đã được gửi đến email của bạn');

        $this->reset();


    }

    public function rules()
    {
        return [
            'code' => 'required|exists:students,code',
            'phone_number' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{10}$/", $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                },
                'exists:students,phone_number',
                Rule::exists('students', 'phone_number')->where(function ($query): void {
                    $query->where('code', $this->code);
                }),
            ],
        ];
    }


}
