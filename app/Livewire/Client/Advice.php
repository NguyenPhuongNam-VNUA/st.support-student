<?php

declare(strict_types=1);

namespace App\Livewire\Client;

use App\Models\Advice as AdviceModel;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Advice extends Component
{
    use WithFileUploads;

    #[Validate(as: 'hình ảnh góp ý')]
    public $thumbnail;

    #[Validate(as: 'số điện thoại')]
    public $phone;

    #[Validate(as: 'email')]
    public $email;

    #[Validate(as: 'nội dung góp ý')]
    public $content;



    public function render()
    {
        return view('livewire.client.advice');
    }

    public function removeThumbnail(): void
    {
        $this->thumbnail = null;
    }

    public function Advice(): void
    {
        $this->validate();
        $thumbnail = null;

        if ($this->thumbnail) {
            $thumbnail = $this->thumbnail->store('advice', 'public');
        }
        $advice = AdviceModel::create([
            'thumbnail' => $thumbnail,
            'phone' => $this->phone,
            'email' => $this->email,
            'content' => $this->content,
        ]);
        if ($advice) {
            $this->dispatch('notification', message: 'Góp ý của bạn đã gửi thành công. Cảm ơn bạn đã gửi góp ý cho chúng tôi');
            $this->reset();
        } else {
            $this->dispatch('notification', message: 'Có lỗi xảy ra, vui lòng thử lại sau');
        }
    }

    protected function rules()
    {
        return [
            'thumbnail' => '|image|mimes:jpeg,png,jpg|max:2048|nullable',
            'phone' => 'required|regex:/^0[0-9]{9,14}$/',
            'email' => 'required|email',
            'content' => 'required|max:3000',
        ];
    }
}
