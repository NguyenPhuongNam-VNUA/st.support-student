<!-- Quick View Start -->
<section class="quick-view">
    <div class="modal fade" id="motelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between">
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin nhà trọ</h5>
                    <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ion-close-round"></i>
                    </a>
                </div>
                <div class="quick-veiw-area">
                    <div class="quick-image">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="image-1">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="" class="img-fluid" alt="image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="quick-caption">
                        <h4></h4>
                        <div class="quick-price">
                            <span class="new-price"></span>
                        </div>
                        <div class="quick-rating">
                        </div>
                        <div class="pro-description">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const motelModal = document.getElementById('motelModal');

        motelModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const address = button.getAttribute('data-address');
            const rating = button.getAttribute('data-rating');
            const description = button.getAttribute('data-description');
            const available = button.getAttribute('data-available');
            const thumbnail = button.getAttribute('data-thumbnail');

            motelModal.querySelector('.modal-title').textContent = "Thông tin nhà trọ";
            motelModal.querySelector('.quick-caption h4').textContent = address;
            motelModal.querySelector('.quick-price .new-price').textContent = `Còn ${available} phòng`;
            motelModal.querySelector('.quick-rating').innerHTML = renderRating(rating);
            motelModal.querySelector('.pro-description p').textContent = description;
            motelModal.querySelector('.quick-image img').src = thumbnail;
        });

        function renderRating(rating) {
            let stars = '';
            for (let i = 1; i <= 5; i++) {
                stars += `<i class="fa ${i <= rating ? 'fa-star c-star' : 'fa-star-o'}"></i>`;
            }
            return stars;
        }
    });
</script>
<!-- Quick View End -->
