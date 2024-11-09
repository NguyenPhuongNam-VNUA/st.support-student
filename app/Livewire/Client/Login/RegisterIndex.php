<?php

declare(strict_types=1);

namespace App\Livewire\Client\Login;

use App\Mail\RegisterSuccess;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RegisterIndex extends Component
{
    #[Validate(as: 'họ và tên')]
    public $name;

    public $email;
    public $password;
    public $username;

    #[Validate(as: 'số điện thoại')]
    public $phone_number;

    #[Validate(as: 'mã sinh viên')]
    public $code;

    #[Validate(as: 'ngày sinh')]
    public $bod;

    public function render()
    {
        session()->flash('success', 'Đăng ký thành công! Vui lòng kiểm tra email để xác nhận tài khoản');
        return view('livewire.client.login.register-index');
    }

    public function register(): void
    {
        //        sleep(2);
        $this->validate();
        $this->password = $this->generatePassword();
        $student = $this->createStudent();

        $this->dispatch('notification', message: 'Đăng ký thành công! Vui lòng kiểm tra email để xác nhận tài khoản');
        $token = Str::random(60);
        $this->sendEmail($token);

        $this->reset();
    }

    public function updatedCode($value): void
    {
        $this->email = $value . '@sv.vnua.edu.vn';
        $this->username = 'SV' . $value;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'code' => 'required|unique:students,code',
            'phone_number' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{10}$/", $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                }
            ],
            'bod' => [
                'required',
                function ($attribute, $value, $fail) {
                    // Chuyển đổi định dạng từ yyyy-mm-dd sang dd/mm/yyyy nếu input là yyyy-mm-dd
                    if (preg_match("/^\d{4}-\d{2}-\d{2}$/", $value)) {
                        $dateParts = explode('-', $value);
                        $value = $dateParts[2] . '/' . $dateParts[1] . '/' . $dateParts[0];
                    }

                    // Kiểm tra định dạng dd/mm/yyyy
                    if (!preg_match("/^\d{2}\/\d{2}\/\d{4}$/", $value)) {
                        return $fail('Ngày sinh phải có định dạng dd/mm/yyyy');
                    }

                    // Giới hạn năm từ 1900 đến năm hiện tại
                    $year = (int) mb_substr($value, 6, 4);
                    if ($year < 1900 || $year > (int) date('Y')) {
                        return $fail('Năm sinh không hợp lệ');
                    }
                }
            ],
        ];
    }

    private function generatePassword()
    {
        return Str::random(8);
    }

    private function createStudent()
    {
        $student = new Student();
        $student->name = $this->name;
        $student->email = $this->email;
        $student->password = bcrypt($this->password);
        $student->username = $this->username;
        $student->phone_number = $this->phone_number;
        $student->code = $this->code;
        $student->bod = $this->bod;
        $student->email_verified = false;

        $student->save();

        return $student;
    }

    private function sendEmail($token): void
    {
        DB::table('emails_verified')->insert([
            'email' => $this->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::to($this->email)->send(new RegisterSuccess($token, $this->name, $this->username, $this->password));
    }
}
