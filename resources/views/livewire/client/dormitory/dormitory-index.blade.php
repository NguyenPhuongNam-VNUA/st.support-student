<div class="row">
    <!-- Sidebar -->
    <div class="col-md-3 col-lg-2 d-md-block sidebar collapse bg-dark">
        <div class="position-sticky pt-3">
            <div class="text-center mb-4">
                <h4 class="text-white">Ký túc xá VNUA</h4>
            </div>
            <ul class="nav flex-column nav-pills" role="tablist">
                @foreach($dormitories as $dormitory)
                    <li class="nav-item mt-2">
                        <a
                            class="nav-link text-start {{ $loop->first ? 'active' : '' }}"
                            id="tab-{{ $dormitory->id }}"
                            data-bs-toggle="pill"
                            data-bs-target="#content-{{ $dormitory->id }}"
                            role="tab"
                            aria-controls="content-{{ $dormitory->id }}"
                            aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                            {{ $dormitory->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
        <div class="tab-content" id="dormitory-tabContent">
            @foreach($dormitories as $dormitory)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                     id="content-{{ $dormitory->id }}"
                     role="tabpanel"
                     aria-labelledby="tab-{{ $dormitory->id }}">

                    <div class="dormitory-container">
                        <!-- Header Section -->
                        <div class="dorm-header mb-4" style="background-image: url('{{ asset('storage/' . $dormitory->thumbnail) }}')">
                            <div class="overlay p-4 text-white text-center" style="background: rgba(0,0,0,0.4);">
                                <h1 class="dorm-title text-white">{{ $dormitory->name }}</h1>
                                <p class="dorm-tagline">Nơi an toàn - Tiện nghi - Hiện đại</p>
                            </div>
                        </div>

                        <!-- Introduction Section -->
                        <section class="info-section mb-5">
                            <h2 class="section-title">
                                <i class="fas fa-info-circle text-primary me-2"></i> Giới thiệu chung
                            </h2>

                            <div class="row">
                                <div class="col-md-6">
                                    <p class="lead">{{ $dormitory->description }}</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="card bg-light p-3">
                                        <div class="stat-item mb-2">
                                            <i class="fas fa-building me-2 text-primary"></i><strong>Số tầng:</strong> {{ $dormitory->floor }}
                                        </div>
                                        <div class="stat-item mb-2">
                                            <i class="fas fa-door-open me-2 text-primary"></i><strong>Số phòng:</strong> {{ $dormitory->total_rooms }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Amenities Section -->
                        <section class="amenities-section mb-5">
                            <h2 class="section-title">
                                <i class="fas fa-star text-warning me-2"></i> Tiện ích nổi bật
                            </h2>

                            <div class="row row-cols-2 row-cols-md-4 g-4">
                                @php
                                    $amenities = [
                                        ['icon' => 'utensils', 'text' => 'Căn tin', 'note' => '6h - 22h', 'color' => '#FFC107', 'bg' => '#FFEEBA'],
                                        ['icon' => 'book', 'text' => 'Thư viện', 'note' => 'Mở đến 21h', 'color' => '#17A2B8', 'bg' => '#D1ECF1'],
                                        ['icon' => 'parking', 'text' => 'Bãi giữ xe', 'note' => 'Có mái che', 'color' => '#28A745', 'bg' => '#D4EDDA'],
                                        ['icon' => 'first-aid', 'text' => 'Phòng y tế', 'note' => 'Trực 24/7', 'color' => '#DC3545', 'bg' => '#F8D7DA'],
                                    ];
                                @endphp
                                @foreach($amenities as $a)
                                    <div class="col">
                                        <div class="amenity-card h-100 text-center p-3">
                                            <div class="amenity-icon mx-auto p-3 rounded-circle mb-3" style="background-color: {{ $a['bg'] }};">
                                                <i class="fas fa-{{ $a['icon'] }}" style="color: {{ $a['color'] }}; font-size: 1.5rem;"></i>
                                            </div>
                                            <h5 class="mb-2">{{ $a['text'] }}</h5>
                                            <p class="text-muted small mb-0">{{ $a['note'] }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>

                        <!-- Gallery -->
                        <section class="mb-5">
                            <h2 class="section-title">
                                <i class="fas fa-images text-success me-2"></i> Hình ảnh
                            </h2>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/' . $dormitory->thumbnail) }}" class="img-fluid rounded" alt="{{ $dormitory->name }}">
                                </div>
                            </div>
                        </section>

                        <!-- Contact Section -->
                        <section class="mb-5">
                            <div class="card bg-light p-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4><i class="fas fa-map-marker-alt text-danger me-2"></i>Địa chỉ</h4>
                                        @if ($dormitory->location)
                                            <p class="text-muted">{{ $dormitory->name }}, Học viện Nông nghiệp Việt Nam</p>
                                            <a href="{{ $dormitory->location }}" class="link-primary">{{ $dormitory->location }}</a>
                                        @else
                                            <p class="text-muted">Chưa có địa chỉ cụ thể</p>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <h4><i class="fas fa-phone-alt text-primary me-2"></i>Liên hệ</h4>
                                        <p><strong>Quản lý:</strong> {{ $dormitory->manager->value('name') }}</p>
                                        <p><i class="fas fa-phone me-2"></i>{{ $dormitory->manager->value('phone_number') }}</p>
                                        <p><i class="fas fa-envelope me-2"></i>{{ $dormitory->manager->value('email') }}</p>
                                        <p><i class="fas fa-clock me-2"></i>7h30 - 17h30 (T2-T6)</p>
                                        <button class="btn btn-primary mt-3">Đăng ký ở ngay</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</div>
