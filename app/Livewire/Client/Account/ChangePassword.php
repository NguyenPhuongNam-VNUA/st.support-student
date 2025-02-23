<?php

declare(strict_types=1);

namespace App\Livewire\Client\Account;

use Livewire\Attributes\Validate;
use Livewire\Component;

class ChangePassword extends Component
{
    #[Validate(as: 'Mật khẩu cũ')]
    public $oldPassword;

    #[Validate(as: 'Mật khẩu mới')]
    public $newPassword;

    #[Validate(as: 'Xác nhận mật khẩu')]
    public $confirmNewPassword;


    public function render()
    {
        return view('livewire.client.account.change-password');
    }

    public function changePassword(): void
    {
        $this->validate();

        if (!auth('students')->attempt(['code' => auth('students')->user()->code, 'password' => $this->oldPassword])) {
            $this->dispatch('notifyError', message: 'Mật khẩu cũ không chính xác');
            return;
        }

        $student = auth('students')->user();
        $student->password = bcrypt($this->newPassword);
        $student->save();

        $this->dispatch('notifySuccess', message: 'Đổi mật khẩu thành công');
        $this->reset();
    }

    protected function rules()
    {
        return [
            'oldPassword' => 'required',
            'newPassword' => 'required|min:8|max:20',
            'confirmNewPassword' => 'required|same:newPassword',
        ];
    }
}
