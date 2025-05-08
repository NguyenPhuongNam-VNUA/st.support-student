<section class="section-b-padding pro-page-content">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="pro-page-tab">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#tab-1">Đánh giá</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-1">
                            <h4 class="reviews-title">Đánh giá từ sinh viên</h4>

                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session()->has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @php
                                function renderStars($rating) {
                                    $fullStars = floor($rating);
                                    $hasHalfStar = ($rating - $fullStars) >= 0.5;
                                    $emptyStars = 5 - $fullStars - ($hasHalfStar ? 1 : 0);

                                    $output = '';

                                    for ($i = 0; $i < $fullStars; $i++) {
                                        $output .= '<i class="fa fa-star e-star" style="color: #FFD700;"></i>';
                                    }

                                    if ($hasHalfStar) {
                                        $output .= '<i class="fa fa-star-half-o e-star" style="color: #FFD700;"></i>';
                                    }

                                    for ($i = 0; $i < $emptyStars; $i++) {
                                        $output .= '<i class="fa fa-star-o" style="color: #ccc;"></i>';
                                    }

                                    return $output;
                                }
                            @endphp

                            <div class="customer-reviews t-desk-2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="review-desck mb-0">Dựa trên đánh giá của {{ count($reviews) }} sinh viên</p>
                                        @if($averageRating)
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="p-rating">
                                                    {!! renderStars($averageRating) !!}
                                                </div>
                                                <span>({{ number_format($averageRating, 1) }})</span>
                                            </div>
                                        @endif
                                    </div>
                                    @if(!$hasReviewed)
                                        <a href="#add-review" data-bs-toggle="collapse" class="btn btn-outline">
                                            Viết đánh giá
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="review-form collapse" id="add-review" wire:ignore.self>
                                <h4>Đánh giá của bạn</h4>
                                <form wire:submit="submit">
                                    <label>Điểm đánh giá</label>

                                    <div class="star-rating mb-3">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i class="fa {{ $i <= ($hoverRating ?: $rating) ? 'fa-star e-star' : 'fa-star-o' }}"
                                               style="cursor: pointer;
                                                      font-size: 20px;
                                                      color: {{ $i <= ($hoverRating ?: $rating) ? '#FFD700' : '#ccc' }};
                                                      transition: color 0.2s ease;"
                                               wire:mouseover="setHoverRating({{ $i }})"
                                               wire:mouseout="clearHoverRating"
                                               wire:click="setRating({{ $i }})"></i>
                                        @endfor
                                    </div>

                                    @script
                                    <script>
                                    document.addEventListener('livewire:initialized', () => {
                                        const stars = document.querySelectorAll('.star-rating i');

                                        stars.forEach((star, index) => {
                                            star.addEventListener('click', () => {
                                                stars.forEach((s, i) => {
                                                    if (i <= index) {
                                                        s.classList.remove('fa-star-o');
                                                        s.classList.add('fa-star', 'e-star');
                                                        s.style.color = '#FFD700';
                                                    } else {
                                                        s.classList.remove('fa-star', 'e-star');
                                                        s.classList.add('fa-star-o');
                                                        s.style.color = '#ccc';
                                                    }
                                                });
                                            });
                                        });
                                    });
                                    </script>
                                    @endscript

                                    @error('rating')
                                        <p class="text-danger mt-1">{{ $message }}</p>
                                    @enderror

                                    <label>Nội dung đánh giá</label>
                                    <textarea wire:model.live="comment"
                                              class="form-control"
                                              rows="4"
                                              placeholder="Viết đánh giá của bạn..."></textarea>
                                    <div class="d-flex justify-content-between align-items-center mt-1">
                                        <div>
                                            @error('comment')
                                                <p class="text-danger mb-0">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <small class="text-muted">{{ strlen($comment ?? '') }}/500</small>
                                    </div>

                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-success" wire:loading.attr="disabled">
                                            <span wire:loading.remove wire:target="submit">Gửi đánh giá</span>
                                        </button>

                                        <div wire:loading wire:target="submit" class="text-muted">
                                            <i class="fa fa-spinner fa-spin me-1"></i>
                                            Đang gửi...
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="reviews-list mt-4">
                                @forelse ($reviews as $review)
                                    <div class="customer-reviews {{ !$loop->last ? 'border-bottom pb-4 mb-4' : '' }}">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div>
                                                <h4 class="review-head mb-1">{{ $review->student->name ?? 'Ẩn danh' }}</h4>
                                                <div class="p-rating">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <i class="fa {{ $i <= $review->rating ? 'fa-star e-star' : 'fa-star-o' }}"
                                                           style="color: {{ $i <= $review->rating ? '#FFD700' : '#ccc' }};"></i>
                                                    @endfor
                                                </div>
                                            </div>
                                            <span class="text-muted">
                                                {{ $review->created_at->format('d/m/Y H:i') }}
                                            </span>
                                        </div>
                                        <p class="r-description mt-2 mb-0">{{ $review->comment }}</p>
                                    </div>
                                @empty
                                    <div class="text-center text-muted py-4">
                                        <i class="fa fa-comment-o fa-2x mb-2"></i>
                                        <p>Chưa có đánh giá nào. Hãy là người đầu tiên đánh giá!</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @script
    <script>
        Livewire.on('review-submitted', () => {
            bootstrap.Collapse.getInstance(document.getElementById('add-review')).hide();
        });
    </script>
    @endscript
</section>
