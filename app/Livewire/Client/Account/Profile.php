<?php

declare(strict_types=1);

namespace App\Livewire\Client\Account;

use App\Models\Student;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Profile extends Component
{
    public $code;

    #[Validate(as: 'Họ và tên')]
    public $name = "";

    public $email;
    public $bod;

    #[Validate(as: 'Số điện thoại')]
    public $phone_number;

    #[Validate(as:'Mật khẩu')]
    public $password;

    public function render()
    {
        return view('livewire.client.account.profile');
    }

    public function mount(): void
    {
        $this->code = auth('students')->user()->code;
        $student = Student::where('code', $this->code)->first();
        $this->name = $student->name;
        $this->email = $student->email;
        $this->bod = $student->bod;
        $this->phone_number = $student->phone_number;
        $this->password = '';
    }

    public function editProfile(): void
    {
        $this->validate();

        if (!auth('students')->attempt(['code' => $this->code, 'password' => $this->password])) {
            $this->dispatch('notifyError', message: 'Mật khẩu không chính xác');
            $this->password = '';
            return;
        }

        $student = Student::where('code', $this->code)->first();
        $student->update([
            'name' => $this->name,
            'phone_number' => $this->phone_number,
        ]);
        $this->dispatch('notifySuccess', message: 'Cập nhật thông tin thành công');
        $this->dispatch('refreshProfile');
        $this->mount();
    }

    protected function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'phone_number' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{10}$/", $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                }
            ],
            'password' => 'required',
        ];
    }

    private function emit(string $string): void
    {
    }
}
