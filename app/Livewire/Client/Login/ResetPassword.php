<?php

declare(strict_types=1);

namespace App\Livewire\Client\Login;

use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ResetPassword extends Component
{
    public $token;
    public $student;
    #[Validate(as: 'mật khẩu')]
    public $password;
    #[Validate(as: 'xác nhận mật khẩu')]
    public $confirmPassword;

    public function render()
    {
        return view('livewire.client.login.reset-password', [
            'student_name' => $this->student->name,
        ]);
    }

    public function mount(): void
    {
        $student_reset = DB::table('reset_password')->where('token', $this->token)->first();
        $this->student = Student::query()->where('email', $student_reset->email)->first();
    }

    public function resetPassword()
    {
        $this->validate();
        $this->student->password = bcrypt($this->password);
        $this->student->save();

        DB::table('reset_password')->where('token', $this->token)->delete();

        session()->flash('resetSuccess', 'Mật khẩu đã được thay đổi thành công');

        return redirect()->route('student.login');
    }

    protected function rules()
    {
        return [
            'password' => 'required| min:8 | max:20',
            'confirmPassword' => 'required|same:password'
        ];
    }
}
