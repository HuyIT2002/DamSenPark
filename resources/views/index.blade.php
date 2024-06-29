<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đầm Sen Park</title>

    <head>
        <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
        <link rel="stylesheet" href="{{ asset('/public/css/style.css') }}">
        <!-- Bootstrap Icons CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    </head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="menu-group">
                <div class="menu-item">
                    <div class="menu-content">
                        <div class="menu-title">Trang chủ</div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="menu-content">
                        <div class="menu-title">Khám phá</div>
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

                <div class="menu-item">
                    <div class="menu-content">
                        <div class="menu-title">Sự kiện</div>
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
                <div class="image-container">
                    <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="xmark-large">
                            <path id="Icon" d="M2.5 12H23.5M2.5 4.5H23.5M2.5 19.5H13" stroke="#EC008C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                    </svg>
                </div>
            </div>

        </div>
        <div class="content">
            <div class="banner">
                <div class="image-slider">
                    <img src="{{ asset('/public/images/banner1.png') }}" alt="Banner">
                    <img src="{{ asset('/public/images/Rectangle-1526.png') }}" alt="Banner">
                </div>
                <div class="svg-container">
                    <img src="{{ asset('/public/images/Frame.svg') }}" alt="Frame SVG" class="frame-img">
                </div>
                <div class="svg-container-2">
                    <img src="{{ asset('/public/images/Frame-1.svg') }}" alt="Frame SVG">
                </div>

                <div class="outer-container">
                    <div class="inner-container">
                        <div class="triangle">
                            <img class="icon" src="{{ asset('/public/images/chevron-left.svg') }}" alt="Chevron Left Icon">
                        </div>
                    </div>
                </div>

                <div class="outer-container-2">
                    <div class="inner-container-2">
                        <div class="triangle-2">
                            <img class="icon-2" src="{{ asset('/public/images/chevron-left-1.svg') }}" alt="Chevron Left Icon">
                        </div>
                    </div>
                </div>
                <div class="custom-div">
                    <div class="inner-content">
                        KHÁM PHÁ NGAY
                    </div>
                </div>
                <div class="icons-wrapper">
                </div>
                <div class="contact-section">
                    <div class="circle">
                        <img id="phoneFlip" src="{{ asset('/public/images/phone-flip.svg') }}" alt="Phone Flip">
                    </div>
                    <div class="circle">
                        <img src="{{ asset('/public/images/Messenger-Outline-1.svg') }}" alt="Messenger Outline 1">
                    </div>
                </div>


            </div>
        </div>
    </div>
    <script src="{{ asset('/public/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('/public/js/jbootstrap.min.js') }}"></script>
    <script src="{{ asset('/public/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('/public/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/public/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/public/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('/public/js/style.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>


</html>