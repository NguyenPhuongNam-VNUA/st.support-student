<?php

declare(strict_types=1);

namespace App\Livewire\MedicalAdmin\Doctor;

use App\Models\Health\Doctor;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class DoctorCreate extends Component
{
    use WithFileUploads;

    #[Validate(as: 'Tên cán bộ')]
    public $name;

    #[Validate(as: 'Email')]
    public $email;

    #[Validate(as: 'Số điện thoại ')]
    public $phone_number;

    #[Validate(as: 'Ảnh hồ sơ')]
    public $thumbnail;

    #[Validate(as: 'Mô tả')]
    public $description;

    public function render()
    {
        return view('livewire.medical-admin.doctor.doctor-create');
    }

    public function store()
    {
        $this->validate();
        $thumbnailPath = $this->thumbnail->store('doctorProfilePhotos', 'public');

        Doctor::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'thumbnail' => $thumbnailPath,
            'description' => $this->description,
        ]);

        session()->flash('success', 'Thêm mới cán bộ thành công');

        return redirect()->route('medicaladmin.doctors.index');
    }

    protected function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:doctors,email',
            'phone_number' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{10}$/", $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                }
            ],
            'thumbnail' => 'required|image|max:2048',
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'Tên cán bộ không được để trống',
            'email.unique' => 'Email đã tồn tại',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'phone_number.required' => 'Số điện thoại không được để trống',
            'thumbnail.required' => 'Ảnh hồ sơ không được để trống',
            'thumbnail.image' => 'Ảnh hồ sơ phải là định dạng ảnh',
            'thumbnail.max' => 'Ảnh hồ sơ không được quá 2MB',
        ];
    }
}
