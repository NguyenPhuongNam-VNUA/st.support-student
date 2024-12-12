    <div class="row">
        <div class="col">
            <div class="order-history">
                <div class="profile sticky-container" style="background-color: #f8f9fa">
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

                <div class="order-info border rounded p-4">
                    @foreach($rooms as $dormitoryName => $room)
                        <div id="{{ $dormitoryName }}" class="content-div">
                            @php
                                $rooms = array_chunk($room->toArray(), 2);
                            @endphp
                            @foreach($rooms as $items)
                                <div class="row">
                                    @foreach($items as $item)
                                        <div class="col-xl-6 mb-2">
                                            <div class="card blog-horizontal">
                                                <div class="card-body">
                                                    <div class="card-img-actions me-sm-3 mb-3 mb-sm-0">
                                                        <a onclick="showQuickView('{{ $item['id'] }}')" class="d-inline-block position-relative" data-bs-toggle="modal" data-bs-target="#quickviewDormitory">
                                                            <img class="img-fluid card-img" src="{{ asset('storage/' . $item['thumbnail']) }}" alt="pro-img">
                                                        </a>
                                                    </div>

                                                    <div class="mb-3">
                                                        <h5 class="d-flex flex-nowrap my-1">
                                                            <a href="#" class="me-2 text-primary">{{ $item['name'] }}</a>
                                                            <span class="text-success ms-auto">{{ $item['capacity'] - $item['available'] }} / {{ $item['capacity'] }}</span>
                                                        </h5>
                                                    </div>

                                                    <p>{{ $item['description'] }}</p>
                                                </div>

                                                <div class="card-footer d-sm-flex justify-content-end">
                                                    <div class="mt-2 mt-sm-0">
                                                        <a wire:click="handleShowRegisterModal('{{ $item['id'] }}')" class=" link-success" data-bs-toggle="modal" data-bs-target="#registerDormitoryModal" style="cursor: pointer">
                                                            Đăng ký
                                                            <i class="fa-solid fa-arrow-right ms-2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
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
