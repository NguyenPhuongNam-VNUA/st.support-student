<?php

declare(strict_types=1);

namespace App\Livewire\MedicalAdmin\Doctor;

use App\Models\Health\Doctor;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class DoctorEdit extends Component
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

    public $id;

    public $new_thumbnail;

    public function render()
    {
        return view('livewire.medical-admin.doctor.doctor-edit');
    }

    public function mount(): void
    {
        $this->id = request()->id;
        $doctor = Doctor::query()->find($this->id);
        $this->name = $doctor->name;
        $this->email = $doctor->email;
        $this->phone_number = $doctor->phone_number;
        $this->thumbnail = $doctor->thumbnail;
        $this->description = $doctor->description;
    }

    public function update()
    {
        $this->validate();

        $thumbnailPath = $this->thumbnail;

        if ($this->new_thumbnail) {
            $thumbnailPath = $this->new_thumbnail->store('doctorProfilePhotos', 'public');
        }

        Doctor::where('id', $this->id)->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'thumbnail' => $thumbnailPath,
            'description' => $this->description,
        ]);
        return redirect()->route('admin.medical.doctors.index')->with('success', 'Cập nhật thông tin cán bộ thành công');
    }


    protected function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:doctors,email, ' . $this->id,
            'phone_number' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{10}$/", $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                }
            ],
            'new_thumbnail' => 'nullable|image|max:2048',
        ];
    }
}
