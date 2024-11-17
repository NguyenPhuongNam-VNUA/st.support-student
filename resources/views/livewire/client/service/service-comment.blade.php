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
                            
                            @foreach ($reviews as $review)
                                <div class="customer-reviews">
                                    <span class="p-rating">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i class="fa {{ $i <= $review->rating ? 'fa-star e-star' : 'fa-star-o' }}"></i>
                                        @endfor
                                    </span>
                                    <h4 class="review-head">{{ $review->student->name ?? 'Ẩn danh' }}</h4>
                                    <span class="reviews-editor">
                                        {{ \Carbon\Carbon::parse($review->created_at)->format('d-m-Y') }}
                                    </span>
                                    <p class="r-description">{{ $review->comment }}</p>
                                </div>
                            @endforeach

                            <div class="customer-reviews t-desk-2">
                                <p class="review-desck">Dựa trên đánh giá của {{ count($reviews) }} sinh viên</p>
                                <a href="#add-review" data-bs-toggle="collapse">Viết đánh giá</a>
                            </div>
                            <div class="review-form collapse" id="add-review" wire:ignore.self>
                                <h4>Đánh giá của bạn</h4>
                                <form wire:submit.prevent="submit">
                                    <label>Điểm đánh giá</label>
                                    <span>
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i class="fa {{ $i <= $rating ? 'fa-star e-star' : 'fa-star-o' }}"
                                               style="cursor: pointer; font-size: 20px; color: {{ $i <= $rating ? '#FFD700' : '#ccc' }};"
                                               wire:click="$set('rating', {{ $i }})"></i>
                                        @endfor
                                    </span>                                    
                                    @error('rating') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                                    
                                    <label>Nội dung đánh giá</label>
                                    <textarea wire:model.live="comment" placeholder="Viết đánh giá của bạn..."></textarea>
                                    @error('comment') <label class="text-danger mt-1">{{ $message }}</label> @enderror
                                    <br>
                                    <button type="submit" class="btn btn-success">Gửi đánh giá</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
