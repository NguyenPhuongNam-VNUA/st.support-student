<?php

declare(strict_types=1);

namespace App\Livewire\MapAdmin;

use App\Models\Map\IconPoint;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class MapIconEdit extends Component
{
    use WithFileUploads;

    #[Validate(as: 'Tên icon')]
    public $name;

    #[Validate(as: 'Ảnh icon')]
    public $thumbnail;

    public $id;

    #[Validate(as: 'Ảnh mới')]
    public $newThumbnail;

    public function render()
    {
        return view('livewire.map-admin.map-icon-edit', );
    }

    public function mount(): void
    {
        $this->id = request()->id;
        $icon = IconPoint::query()->find($this->id);
        $this->name = $icon->name;
        $this->thumbnail = $icon->thumbnail;
    }

    public function update()
    {
        $this->validate();
        $thumbnailPath = $this->thumbnail;

        if ($this->newThumbnail) {
            Storage::disk('public')->delete($this->thumbnail);
            $thumbnailPath = $this->newThumbnail->store('mapIconPointPhotos', 'public');
        }

        IconPoint::where('id', $this->id)->update([
            'name' => $this->name,
            'thumbnail' => $thumbnailPath,
        ]);

        session()->flash('success', 'Cập nhật icon thành công');
        return redirect()->route('admin.map.index');
    }

    protected function rules()
    {
        return [
            'name' => 'required|regex:/^[a-zA-Z]+$/',
            'newThumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=32,height=32',
        ];

    }

    protected function messages()
    {
        return [
            'name.required' => 'Tên icon không được để trống',
            'name.regex' => 'Tên icon phải viết liền không dấu',
            'newThumbnail.image' => 'Ảnh icon phải là định dạng ảnh',
            'newThumbnail.max' => 'Ảnh hồ sơ không được quá 2MB',
            'newThumbnail.mimes' => 'Ảnh hồ sơ phải có định dạng jpeg, png, jpg',
            'newThumbnail.dimensions' => 'Ảnh icon phải có kích thước 32 x 32px',
        ];
    }

}
