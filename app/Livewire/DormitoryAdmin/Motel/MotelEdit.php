<?php

declare(strict_types=1);

namespace App\Livewire\DormitoryAdmin\Motel;

use App\Models\Dormitory\Motel;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class MotelEdit extends Component
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

    public $motel_galleries = [];

    public $id;

    public $new_thumbnail;

    public $new_motel_galleries = [];

    public function mount(): void
    {
        $this->id = request()->id;
        $motel = Motel::with('motelGalleries')->find($this->id);

        $this->owner_name = $motel->owner_name;
        $this->address = $motel->address;
        $this->owner_phoneNumber = $motel->owner_phoneNumber;
        $this->description = $motel->description;
        $this->total_rooms = $motel->total_rooms;
        $this->available_rooms = $motel->available_rooms;
        $this->thumbnail = $motel->thumbnail;

        $this->motel_galleries = $motel->motelGalleries;
    }

    public function render()
    {
        return view('livewire.dormitory-admin.motel.motel-edit');
    }

    public function update()
    {
        $this->validate();
        $thumbnailPath = $this->thumbnail;
        if ($this->new_thumbnail) {
            $thumbnailPath = $this->new_thumbnail->store('motelThumbnails', 'public');
        }
        $motel = Motel::find($this->id);

        $motel -> update([
            'owner_name' => $this->owner_name,
            'address' => $this->address,
            'owner_phoneNumber' => $this->owner_phoneNumber,
            'description' => $this->description,
            'thumbnail' => $thumbnailPath,
            'total_rooms' => $this->total_rooms,
            'available_rooms' => $this->available_rooms,
            'slug' => Str::slug($this->address),
        ]);

        if ($this->new_motel_galleries) {
            foreach ($this->motel_galleries as $oldGallery) {
                $oldImagePath = public_path('storage/' . $oldGallery->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
                $oldGallery->delete();
            }

            foreach ($this->new_motel_galleries as $image) {
                $path = $image->store('motelGalleries', 'public');
                $motel->motelGalleries()->create([
                    'image' => $path,
                ]);
            }
        }
        session()->flash('success', 'Cập nhật nhà trọ thành công');
        return redirect()->route('admin.dormitory.motel.index');
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
            'total_rooms' => 'required|integer',
            'available_rooms' => 'required|integer',
            'new_thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'new_motel_galleries.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'new_motel_galleries' => 'nullable|array',

        ];
    }



}
