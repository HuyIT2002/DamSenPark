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
            <div class="header-container">
                <div class="header-title">TRANG CHỦ</div>
                <div class="header-title-2">KHÁM PHÁ</div>
                <div class="header-title-2">GIỚI THIỆU</div>
                <div class="header-title-2">GIÁ VÉ</div>
                <div class="header-title-2">SỰ KIỆN</div>
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
                            <path id="Icon" d="M2.5 12H23.5M2.5 4.5H23.5M2.5 19.5H13" stroke="#EC008C" stroke-width="4"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                    </svg>
                </div>
            </div>

        </div>
        <div class="content">
            <div class="banner">
                <img src="{{ asset('/public/images/banner1.png') }}" alt="Banner">
                <div class="svg-container">
                    <img src="{{ asset('/public/images/Frame.svg') }}" alt="Frame SVG">
                </div>
                <div class="svg-container-2">
                    <img src="{{ asset('/public/images/Frame-1.svg') }}" alt="Frame SVG">
                </div>
                <div class="outer-container">
                    <div class="inner-container">
                        <div class="triangle">
                            <img class="icon" src="{{ asset('/public/images/chevron-left.svg') }}"
                                alt="Chevron Left Icon">
                        </div>
                    </div>
                </div>

                <div class="outer-container-2">
                    <div class="inner-container-2">
                        <div class="triangle-2">
                            <img class="icon-2" src="{{ asset('/public/images/chevron-left-1.svg') }}"
                                alt="Chevron Left Icon">
                        </div>
                    </div>
                </div>
                <div class="custom-div">
                    <div class="inner-content">
                        KHÁM PHÁ NGAY
                    </div>
                </div>
                <div class="icons-wrapper">
                    <div class="icon-container">
                        <img src="{{ asset('/public/images/04.svg') }}" alt="Icon 4">
                    </div>
                    <div class="icon-container">
                        <img src="{{ asset('/public/images/03.svg') }}" alt="Icon 3">
                    </div>
                    <div class="icon-container">
                        <img src="{{ asset('/public/images/02.svg') }}" alt="Icon 2">
                    </div>
                    <div class="icon-container">
                        <img src="{{ asset('/public/images/01.svg') }}" alt="Icon 1">
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-section">
        </div>
    </div>

</body>
<script src="{{ asset('/public/js/main.js') }}"></script>

</html>