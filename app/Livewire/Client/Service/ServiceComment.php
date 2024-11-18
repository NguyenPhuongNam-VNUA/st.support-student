<?php

declare(strict_types=1);

namespace App\Livewire\Client\Service;

use App\Models\Review\service\ServiceReview;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ServiceComment extends Component
{
    #[Validate(as: 'Điểm đánh giá')]
    public $rating = 0;

    #[Validate(as: 'Bình luận')]
    public $comment;

    public $reviews;

    public $serviceId;

    protected $rules = [
        'rating' => 'required|integer|min:1|max:5',
        'comment' => 'required|string|max:500',
    ];

    public function mount($id): void
    {
        $this->serviceId = $id;
        $this->loadReviews();
    }

    public function loadReviews(): void
    {
        $this->reviews = ServiceReview::where('service_id', $this->serviceId)
            ->with('student')
            ->latest()
            ->get();
    }

    public function submit(): void
    {
        if (!auth('students')->check()) {
            session()->flash('error', 'Bạn phải đăng nhập để đánh giá.');
            return;
        }

        $user = auth('students')->user();



        $this->validate();

        ServiceReview::create([
            'service_id' => $this->serviceId,
            'student_id' => $user->id,
            'rating' => $this->rating,
            'comment' => $this->comment,
        ]);

        $this->reset(['rating', 'comment']);
        $this->loadReviews();
        session()->flash('success', 'Đánh giá của bạn đã được gửi!');
    }



    public function render()
    {
        return view('livewire.client.service.service-comment', [
            'reviews' => $this->reviews,
        ]);
    }
}
