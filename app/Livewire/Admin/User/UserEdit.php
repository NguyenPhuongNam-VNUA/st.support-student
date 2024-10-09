<?php

namespace App\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;
use Livewire\Attributes\Validate;

class UserEdit extends Component
{
    #[Validate(as: 'Họ và tên')]
    public $name;

    #[Validate(as: 'Email')]
    public $email;

    #[Validate(as: 'Số điện thoại')]
    public $phone_number;

    #[Validate(as: 'Chức vụ')]
    public $role_id;

    #[Validate(as: 'Tên người dùng')]
    public $user_name;

    public $id;

    public function render()
    {
        $roles = Role::all();

        return view('livewire.admin.user.user-edit', [
            'roles' => $roles
        ]);
    }

    public function mount(): void
    {
        $this->id = request()->id;
        $user = User::query()->find($this->id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone_number = $user->phone_number;
        $this->role_id = $user->role_id;
        $this->user_name = $user->user_name;
    }
    
    public function update()
    {
        $this->validate();

        User::where('id', $this->id)->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'role_id' => $this->role_id,
            'user_name' => $this->user_name,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Cập nhật thông tin người dùng thành công');
    }

    protected function rules()
    {
        return [
            'name' => 'required',
            //'email' => 'required|email|unique:users,email' . $this->id,
            'email' => [
                'required',
                'email',
                'unique:users,email,' . $this->id,
            ],
            'phone_number' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{10}$/", $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                }
            ],
            'user_name' => 'required',
            'role_id' => 'required|exists:roles,id',
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'Họ và tên không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'phone_number.required' => 'Số điện thoại không được để trống',
            'user_name.required' => 'Tên người dùng không được để trống',
            'role_id.required' => 'Chức vụ phải được chọn',
            'role_id.exists' => 'Chức vụ không hợp lệ',
        ];
    }

    
}
