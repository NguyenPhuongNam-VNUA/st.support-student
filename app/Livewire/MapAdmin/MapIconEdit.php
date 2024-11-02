<?php

namespace App\Livewire\MapAdmin;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Map\IconPoint;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

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
        return view('livewire.map-admin.map-icon-edit',);
    }

    public function mount()
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
            'name' => 'required',
            'newThumbnail' => 'nullable|image|max:2048',
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'Tên icon không được để trống',
            'newThumbnail.image' => 'Ảnh hồ sơ phải là định dạng ảnh',
            'newThumbnail.max' => 'Ảnh hồ sơ không được quá 2MB',
        ];
    }

}
