<?php

declare(strict_types=1);

namespace App\Livewire\Client\Service;

use App\Models\Review\service\ServiceReview;
use Exception;
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
    public $hoverRating = 0;
    public $hasReviewed = false;

    protected $rules = [
        'rating' => 'required|integer|min:1|max:5',
        'comment' => 'required|string|max:500',
    ];


    public function mount($id): void
    {
        $this->serviceId = $id;
        $this->loadReviews();
        $this->checkUserReview();
    }

    public function loadReviews(): void
    {
        $this->reviews = ServiceReview::where('service_id', $this->serviceId)
            ->with('student')
            ->latest()
            ->get();
    }

    public function checkUserReview(): void
    {
        if (auth('students')->check()) {
            $this->hasReviewed = ServiceReview::where('service_id', $this->serviceId)
                ->where('student_id', auth('students')->id())
                ->exists();
        }
    }

    public function setHoverRating($value): void
    {
        $this->hoverRating = $value;
    }

    public function clearHoverRating(): void
    {
        $this->hoverRating = 0;
    }

    public function setRating($value): void
    {
        $this->rating = $value;
    }

    public function submit(): void
    {
        if (!auth('students')->check()) {
            session()->flash('error', 'Bạn phải đăng nhập để đánh giá.');
            return;
        }

        if ($this->hasReviewed) {
            session()->flash('error', 'Bạn đã đánh giá dịch vụ này rồi.');
            return;
        }

        $user = auth('students')->user();

        try {
            $this->validate();

            ServiceReview::create([
                'service_id' => $this->serviceId,
                'student_id' => $user->id,
                'rating' => $this->rating,
                'comment' => $this->comment,
            ]);

            $this->reset(['rating', 'comment', 'hoverRating']);
            $this->loadReviews();
            $this->checkUserReview();

            $this->dispatch('review-submitted');
            session()->flash('success', 'Đánh giá của bạn đã được gửi thành công!');

        } catch (Exception $e) {
            session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại sau.');
        }
    }

    public function getAverageRating()
    {
        return $this->reviews->avg('rating');
    }

    public function render()
    {
        return view('livewire.client.service.service-comment', [
            'reviews' => $this->reviews,
            'averageRating' => $this->getAverageRating(),
        ]);
    }
}
