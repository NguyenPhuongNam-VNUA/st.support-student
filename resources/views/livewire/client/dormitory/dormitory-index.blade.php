    <div class="row">
        <div class="col">
            <div class="order-history">
                <div class="profile sticky-container">
                    <div class="order-pro d-flex justify-content-center">
                        <div class="order-name">
                            <h4 class="text-success">Ký túc xá</h4>
                        </div>
                    </div>
                    <div class="order-his-page">
                        <ul class="profile-ul">
                            @foreach($rooms as $dormitoryName => $room)
                                <li class="profile-li">
                                    <a href="javascript:void(0)" onclick="showContent('{{ $dormitoryName }}')" class="nav-link">{{ $dormitoryName }}
                                        <span class="badge count-text">{{ count($room) }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="order-info border rounded p-4 mt-4">
                    @foreach($rooms as $dormitoryName => $room)
                        <div id="{{ $dormitoryName }}" class="content-div">
                            <h4>{{ $dormitoryName }}</h4>
                            <div class="list-product">
                                @foreach($room as $item)
                                    <div class="list-items">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="">
                                                    <img class="img-fluid" src="{{ asset('storage/' . $item['thumbnail']) }}" alt="pro-img">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="caption" style="text-align: left">
                                            <div class="d-flex justify-content-between">
                                                <h3><a href="">Phòng ký túc xá: {{ $item['name'] }}</a></h3>
                                                <div class="pro-icn" style="margin-top: 0">
                                                    <a onclick="showQuickView('{{ $item['id'] }}')" href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#quickviewDormitory"><i style="height: 29px; width: 29px" class="fa-solid fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start gap-5">
                                                <span class="badge rounded-pill bg-success"><i class="fa-solid fa-users-line"></i> {{ $item['count'] }} / {{ $item['capacity'] }}</span>
                                                @foreach($item['facilities'] as $facility)
                                                    <span class="badge rounded-pill bg-danger"><i class="fa-solid fa-warehouse"></i> {{ $facility['area'] }} m&#178;</span>
                                                    <span class="badge rounded-pill bg-secondary"><i class="fa-solid fa-bed"></i> {{ $facility['bed'] }}</span>
                                                    <span class="badge rounded-pill bg-secondary"><i class="fa-solid fa-wind"></i> {{ $facility['air_conditioner'] }}</span>
                                                    <span class="badge rounded-pill bg-secondary"><i class="fa-solid fa-tablet"></i> {{ $facility['wardrobe'] }}</span>
                                                @endforeach
                                            </div>
                                            <p class="list-description">{{ $item['description'] }}</p>
                                            <div class="pro-price d-flex justify-content-end">
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerDormitoryModal"
                                                    wire:click="handleShowRegisterModal('{{ $item['id'] }}')">Đăng ký</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        function showContent(toaId) {
            const allContentDivs = document.querySelectorAll('.content-div');
            allContentDivs.forEach(div => div.style.display = 'none');

            const targetDiv = document.getElementById(toaId);
            if (targetDiv) {
                targetDiv.style.display = 'block';
            }

            const tabs = document.querySelectorAll('.profile-ul li a');
            tabs.forEach(tab => tab.classList.remove('active'));

            const activeTab = document.querySelector(`a[onclick="showContent('${toaId}')"]`);
            if (activeTab) {
                activeTab.classList.add('active');
            }
        }

        // Hiển thị tab đầu tiên mặc định
        document.addEventListener('DOMContentLoaded', () => {
            const firstTab = document.querySelector('.profile-ul li a');
            if (firstTab) {
                firstTab.click();
            }
        });

        function showQuickView(roomId) {
            if (roomId) {
                Livewire.dispatch('showQuickView', [roomId]);
            } else {
                console.error('Room ID is invalid');
            }
        }
    </script>
