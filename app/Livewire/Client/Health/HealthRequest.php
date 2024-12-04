<?php

declare(strict_types=1);

namespace App\Livewire\Client\Health;

use App\Models\Health\HealthRequest as HealthRequestModel;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class HealthRequest extends Component
{
    use WithFileUploads;

    #[Validate(as: 'Tên sinh viên')]
    public $name;

    #[Validate(as: 'Mã sinh viên')]
    public $code;

    #[Validate(as: 'Số điện thoại')]
    public $phone;

    #[Validate(as: 'Vấn đề sức khỏe')]
    public $issue_description;

    #[Validate(as: 'Ảnh mô tả')]
    public $health_galleries = [];

    public function render()
    {
        return view('livewire.client.health.health-request');
    }

    public function request(): void
    {
        $this->validate();

        $healthRequest = HealthRequestModel::create([
            'name' => $this->name,
            'code' => $this->code,
            'phone' => $this->phone,
            'issue_description' => $this->issue_description,
            'status' => \App\Enums\HealthRequest::Pending->value,
        ]);

        if ($this->health_galleries) {
            foreach ($this->health_galleries as $gallery) {
                $path = $gallery->store('healthRequestGalleries', 'public');
                $healthRequest->healthRequestGalleries()->create([
                    'image' => $path,
                ]);
            }
        }

        $this->reset();
        $this->dispatch('request-success');
    }

    public function mount(): void
    {
        if (auth()->guard('students')->check()) {
            $student = auth()->guard('students')->user();
            $this->name = $student->name;
            $this->code = $student->code;
        }
    }

    protected function rules()
    {
        return [
            'name' => 'required|string',
            'code' => 'required|string',
            'phone' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{10}$/", $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                }
            ],
            'issue_description' => 'required|string',
            'health_galleries.*' => 'image|max:2048',
        ];
    }
}
