<?php

declare(strict_types=1);

namespace App\Livewire\Client\Service;

use App\Models\Service\Service;
use App\Models\Service\ServiceCategory;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServiceRegister extends Component
{
    use WithFileUploads;

    #[Validate(as: 'Tên dịch vụ')]
    public $service_name;

    #[Validate(as: 'Tên chủ dịch vụ')]
    public $owner_name;

    #[Validate(as: 'Địa chỉ')]
    public $address;

    #[Validate(as: 'Số điện thoại')]
    public $phone;

    #[Validate(as: 'Mô tả')]
    public $description;

    #[Validate(as: 'Ảnh đại diện nhà trọ')]
    public $thumbnail;

    #[Validate(as: 'Ảnh bổ sung')]
    public $service_galleries = [];

    #[Validate(as: 'Tên danh mục dịch vụ')]
    public $service_category_id;

    #[Validate(as: 'Giao hàng')]
    public $isShip;

    public function render()
    {
        $service_categories = ServiceCategory::all();
        return view('livewire.client.service.service-register', [
            'service_categories' => $service_categories
        ]);
    }

    public function store(): void
    {
        $this->validate();
        $thumbnailPath = $this->thumbnail->store('serviceThumbnails', 'public');

        $service = Service::create([
            'name' => $this->service_name,
            'owner_name' => $this->owner_name,
            'location' => $this->address,
            'phone_number' => $this->phone,
            'description' => $this->description,
            'thumbnail' => $thumbnailPath,
            'slug' => Str::slug($this->address),
            'isShip' => $this->isShip,
            'service_category_id' => $this->service_category_id,
            'status' => \App\Enums\StatusRequest::Pending->value,
        ]);

        $service->update([
            'slug' => Str::slug($this->address) . '-' . $service->id,
        ]);

        if ($this->service_galleries) {
            foreach ($this->service_galleries as $service_gallery) {
                $path = $service_gallery->store('serviceGalleries', 'public');
                $service->serviceGalleries()->create([
                    'image' => $path,
                ]);
            }
        }

        $this->reset();
        $this->dispatch('registration-success');
    }

    protected function rules()
    {
        return [
            'owner_name' => 'required|string',
            'service_name' => 'required|string',
            'address' => 'required|string',
            'phone' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{10}$/", $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                }
            ],
            'description' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'service_galleries.*' => 'image|max:1024',
            'service_category_id' => 'required',
        ];
    }
}
