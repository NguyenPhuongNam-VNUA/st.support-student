<section class="section-tb-padding">
    <div class="container" style="border: 2px solid #007BFF; border-radius: 10px">
        <div class="row">
            <div class="col">
                <div class="our-tab">
                    <div class="section-title" style="border-bottom:2px solid #007BFF">
                        <h5 class="mt-4 mb-4">Y, BÁC SĨ CÔNG TÁC TẠI TRẠM Y TẾ HỌC VIỆN NÔNG NGHIỆP VIỆT NAM</h5>
                    </div>
                    <div class="tab-content tab-pro-slider mb-4">
                        <div class="tab-pane fade show active" id="home">
                            <div class="our-products-tab swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach ($doctors as $doctor)
                                        <div class="swiper-slide text-center">
                                            <div class="doctor-card">
                                                <div class="doctor-image">
                                                    <img src="{{ asset('storage/' . $doctor->thumbnail) }}"
                                                        alt="{{ $doctor->name }}" class="rounded-circle img-fluid">
                                                </div>
                                                <div class="doctor-info mt-3">
                                                    <h5 class="doctor-name fw-bold">{{ $doctor->name }}</h5>
                                                    <p class="doctor-title text-muted">{{ $doctor->email }}</p>
                                                    <p class="doctor-description text-muted">{{ \Illuminate\Support\Str::limit($doctor->description, 150) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


