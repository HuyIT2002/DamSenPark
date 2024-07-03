        <div class="sidebar">
            <div class="menu-group">
                <div class="menu-item {{ request()->is('main') ? 'active' : '' }}">
                    <div class="menu-content">
                        <a href="{{ route('main') }}" class="menu-title">Trang chủ</a>
                    </div>
                </div>

                <div class="menu-item {{ request()->is('main-2') ? 'active' : '' }}">
                    <div class="menu-content">
                        <a href="{{ route('main-2') }}" class="menu-title">Khám phá</a>
                    </div>
                </div>
                <div class="menu-item">
                    <div class="menu-content">
                        <div class="menu-title">Giới thiệu</div>
                        <div class="arrow-icon">
                            <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="arrow">
                                    <path id="Icon" d="M13 10L19 16L13 22" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div>
                        <div class="submenu-container">
                            <div class="submenu">
                                <div class="submenu-item">
                                    <div class="submenu-title">Lịch sử hình thành</div>
                                </div>
                                <div class="submenu-divider"></div>
                                <div class="submenu-item">
                                    <div class="submenu-title">Thành viên</div>
                                </div>
                                <div class="submenu-divider"></div>
                                <div class="submenu-item">
                                    <div class="submenu-title">Chính sách bảo mật</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="menu-item">
                    <div class="menu-content">
                        <div class="menu-title">Giá vé</div>
                        <div class="arrow-icon">
                            <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="arrow">
                                    <path id="Icon" d="M13 10L19 16L13 22" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="submenu-container">
                        <div class="submenu">
                            <div class="submenu-item">
                                <div class="submenu-title">Vé trong công viên</div>
                            </div>
                            <div class="submenu-divider"></div>
                            <div class="submenu-item">
                                <div class="submenu-title">Vé tập thể</div>
                            </div>
                            <div class="submenu-divider"></div>
                            <div class="submenu-item">
                                <div class="submenu-title">Vé dịch vụ</div>
                            </div>
                            <div class="submenu-divider"></div>
                            <div class="submenu-item">
                                <div class="submenu-title">Vé thể dục</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-item {{ request()->is('su-kien') ? 'active' : '' }}">
                    <div class="menu-content">
                        <a href="{{ route('su-kien') }}" class="menu-title">sự kiện</a>
                    </div>
                </div>
            </div>
            <div class="header-container">
                <div class="line"></div>
                <div class="social-icons">
                    <a href="#" class="social-icon square">
                        <img src="{{ asset('/public/images/facebook.svg') }}" alt="Facebook">
                    </a>
                    <a href="#" class="social-icon">
                        <img src="{{ asset('/public/images/youtube.svg') }}" alt="YouTube">
                    </a>
                    <a href="#" class="social-icon">
                        <img src="{{ asset('/public/images/instagram.svg') }}" alt="Instagram">
                    </a>
                </div>

                <div class="svg-container-3">
                    <img src="{{ asset('/public/images/Frame.svg') }}" alt="Frame SVG">
                </div>

                <div class="svg-container-4">
                    <img src="{{ asset('/public/images/Frame-1.svg') }}" alt="Frame SVG">
                </div>
            </div>
            <div class="menu">
                <a href="{{ route('main-3') }}" id="menu-link-1" class="menu-link">
                    <div class="image-container" id="icon-container-1">
                        <svg class="current-icon" width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="default-xmark-large">
                                <path id="default-Icon" d="M2.5 12H23.5M2.5 4.5H23.5M2.5 19.5H13" stroke="#EC008C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                        <svg class="alternate-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <g id="xmark-large">
                                <path id="Icon" d="M4 4L20 20M20 4L4 20" stroke="#EC008C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </div>
                </a>
            </div>


        </div>