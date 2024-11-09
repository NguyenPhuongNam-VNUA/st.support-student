<section class="quick-view">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between">
                <h5 class="modal-title" id="exampleModalLabel">Thông tin dịch vụ</h5>
                <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
            </div>
            <div class="quick-veiw-area">
                <div class="quick-image">
                    <a href="javascript:void(0)" class="long-img">
                        <img src="" class="img-fluid" alt="Service Image">
                    </a>
                </div>
                <div class="quick-caption">
                    <h4 class="modal-title"></h4>
                    <div class="pro-available">
                        <i class="fa-solid fa-truck-fast"></i>
                        <div class="quick-shipping"></div>
                    </div>                     
                    <div class="quick-rating"></div>
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
    const modal = document.getElementById('exampleModal');
    const nameEl = modal.querySelector('.modal-title');
    const priceEl = modal.querySelector('.new-price');
    const descriptionEl = modal.querySelector('.pro-description p');
    const imageEl = modal.querySelector('.quick-image .long-img img');
    const ratingEl = modal.querySelector('.quick-rating');
    const shippingEl = modal.querySelector('.quick-shipping');

    document.querySelectorAll('.quick-view-btn').forEach(button => {
        button.addEventListener('click', function() {
            const name = this.getAttribute('data-name');
            const description = this.getAttribute('data-description');
            const thumbnail = this.getAttribute('data-thumbnail');
            const rating = parseInt(this.getAttribute('data-rating'));
            const shipStatus = this.getAttribute('data-ship');

            nameEl.textContent = name;
            descriptionEl.textContent = description;
            imageEl.src = thumbnail;

            if (shipStatus === "{{ \App\Enums\Deliver::Yes->value }}") {
                shippingEl.textContent = "{{ \App\Enums\Deliver::Yes->description() }}";
            } else if (shipStatus === "{{ \App\Enums\Deliver::No->value }}") {
                shippingEl.textContent = "{{ \App\Enums\Deliver::No->description() }}";
            }

            ratingEl.innerHTML = '';    
            for (let i = 1; i <= 5; i++) {
                const star = document.createElement('i');
                star.className = `fa ${i <= rating ? 'fa-star c-star' : 'fa-star-o'}`;
                ratingEl.appendChild(star);
            }
        });
    });
});

</script>
<style>
    .pro-available {
    display: flex; 
    align-items: center;
    gap: 5px;
}
</style>
<!-- quick veiw end -->