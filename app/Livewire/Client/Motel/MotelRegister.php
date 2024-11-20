<?php

declare(strict_types=1);

namespace App\Livewire\Client\Motel;

use App\Models\Dormitory\Motel;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class MotelRegister extends Component
{
    use WithFileUploads;

    #[Validate(as: 'Tên chủ trọ')]
    public $owner_name;

    #[Validate(as: 'Địa chỉ')]
    public $address;

    #[Validate(as: 'Số điện thoại')]
    public $owner_phoneNumber;

    #[Validate(as: 'Mô tả')]
    public $description;

    #[Validate(as: 'Ảnh đại diện nhà trọ')]
    public $thumbnail;

    #[Validate(as: 'Số lượng phòng')]
    public $total_rooms;

    #[Validate(as: 'Số phòng trống')]
    public $available_rooms;

    #[Validate(as: 'Ảnh bổ sung')]
    public $motel_galleries = [];

    public function render()
    {
        return view('livewire.client.motel.motel-register');
    }

    public function store(): void
    {
        $this->validate();
        $thumbnailPath = $this->thumbnail->store('motelThumbnails', 'public');

        $motel = Motel::create([
            'owner_name' => $this->owner_name,
            'address' => $this->address,
            'owner_phoneNumber' => $this->owner_phoneNumber,
            'description' => $this->description,
            'thumbnail' => $thumbnailPath,
            'total_rooms' => $this->total_rooms,
            'available_rooms' => $this->available_rooms,
            'slug' => Str::slug($this->address),
            'status' => \App\Enums\StatusRequest::Pending->value,
        ]);

        $motel->update([
            'slug' => Str::slug($this->address) . '-' . $motel->id,
        ]);

        if ($this->motel_galleries) {
            foreach ($this->motel_galleries as $motel_gallery) {
                $path = $motel_gallery->store('motelGalleries', 'public');
                $motel->motelGalleries()->create([
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
            'address' => 'required|string',
            'owner_phoneNumber' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{10}$/", $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                }
            ],
            'description' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'total_rooms' => 'required|integer',
            'available_rooms' => 'required|integer',
            'motel_galleries.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }
}
