@extends('layouts.app')

@section('content')
<div class="white-background-2">
    <div class="event-title">Sự kiện</div>
    <div class="slideshow-container">
        <div class="mySlides fade" id="slide1">
            <img src="{{ asset('/public/images/1.png') }}" class="slide-image">
        </div>
        <div class="mySlides fade" id="slide2">
            <div class="overlay-container">
                <img src="{{ asset('/public/images/2.jpg') }}" class="slide-image">
                <div class="overlay"></div>
            </div>
        </div>
        <div class="mySlides fade" id="slide3">
            <div class="overlay-container">
                <img src="{{ asset('/public/images/3.jpg') }}" class="slide-image">
                <div class="overlay"></div>
            </div>
        </div>
        <div class="mySlides fade" id="slide4">
            <div class="overlay-container">
                <img src="{{ asset('/public/images/4.jpg') }}" class="slide-image">
                <div class="overlay"></div>
            </div>
        </div>
        <div class="mySlides fade" id="slide5">
            <div class="overlay-container">
                <img src="{{ asset('/public/images/5.jpg') }}" class="slide-image">
                <div class="overlay"></div>
            </div>
        </div>
    </div>
    <div class="custom-container">
        <div class="custom-dot-left">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Arrow Left">
                    <path id="icon" fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.62155 10.5001H21.5002V13.5001H8.62155L13.5609 18.4395L11.4396 20.5608L2.87891 12.0001L11.4396 3.43945L13.5609 5.56077L8.62155 10.5001Z"
                        fill="#259E58" />
                </g>
            </svg>
        </div>
        <div class="custom-dots-container">
            <div class="custom-dot"></div>
            <div class="custom-dot"></div>
            <div class="custom-dot"></div>
            <div class="custom-dot"></div>
            <div class="custom-dot"></div>
        </div>
        <div class="custom-dot-right">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Arrow Right">
                    <path id="icon" fill-rule="evenodd" clip-rule="evenodd"
                        d="M15.9775 13.5563H3.42383V10.4423H15.9775L11.1628 5.31522L13.2306 3.11328L21.5752 11.9993L13.2306 20.8853L11.1628 18.6833L15.9775 13.5563Z"
                        fill="#259E58" />
                </g>
            </svg>
        </div>
    </div>
    <div class="events-wrapper">
        <div class="event-container">
            <h1>123</h1>
        </div>
        <div class="event-container">
            <h1>123</h1>
        </div>
        <div class="event-container">
            <h1>123</h1>
        </div>
        <div class="event-container">
            <h1>123</h1>
        </div>
        <div class="event-container">
            <h1>123</h1>
        </div>
        <div class="event-container">
            <h1>123</h1>
        </div>
        <div class="event-container">
            <h1>123</h1>
        </div>
        <div class="event-container">
            <h1>123</h1>
        </div>
    </div>
    <div class="unique-container">
        <div class="unique-item">

            <div class="custom-rotated-left">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="Arrow Left">
                        <path id="icon" fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.62155 10.5001H21.5002V13.5001H8.62155L13.5609 18.4395L11.4396 20.5608L2.87891 12.0001L11.4396 3.43945L13.5609 5.56077L8.62155 10.5001Z"
                            fill="#EC008C" />
                    </g>
                </svg>
            </div>
            <div class="custom-text-left">Phượng Hoàng Bay</div>
        </div>
        <div class="unique-item">
            <div class="custom-text-right">Tàu vượt thác</div>
            <div class="custom-rotated-right">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="Arrow Right">
                        <path id="icon" fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.9775 13.5563H3.42383V10.4423H15.9775L11.1628 5.31522L13.2306 3.11328L21.5752 11.9993L13.2306 20.8853L11.1628 18.6833L15.9775 13.5563Z"
                            fill="#EC008C" />
                    </g>
                </svg>

            </div>
        </div>
    </div>
    <div class="recommendation-container">
        <div class="recommendation-title">Có thể bạn thích</div>
        <div class="recommendation-items-container">
            <div class="recommendation-item">
                <img class="recommendation-item-image" src="https://via.placeholder.com/350x240" />
                <div class="recommendation-item-details">
                    <div class="recommendation-item-header">
                        <div class="recommendation-item-title">Roller Coaster</div>
                        <div class="recommendation-item-date">10/02/2020</div>
                    </div>
                    <div class="recommendation-item-footer">
                        <div class="recommendation-icon-container">
                            <div class="recommendation-icon-background"></div>
                            <div class="recommendation-icon-overlay"></div>
                        </div>
                        <div class="custom-icon-container">
                            <div class="custom-tag-icon">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.83 8.7L15.3 4.17C14.35 3.22 13.04 2.71 11.7 2.78L6.7 3.02C4.7 3.11 3.11 4.7 3.01 6.69L2.77 11.69C2.71 13.03 3.21 14.34 4.16 15.29L8.69 19.82C10.55 21.68 13.57 21.68 15.44 19.82L19.83 15.43C21.7 13.58 21.7 10.56 19.83 8.7ZM9.5 12.38C7.92 12.38 6.62 11.09 6.62 9.5C6.62 7.91 7.92 6.62 9.5 6.62C11.08 6.62 12.38 7.91 12.38 9.5C12.38 11.09 11.08 12.38 9.5 12.38ZM17.53 13.53L13.53 17.53C13.38 17.68 13.19 17.75 13 17.75C12.81 17.75 12.62 17.68 12.47 17.53C12.18 17.24 12.18 16.76 12.47 16.47L16.47 12.47C16.76 12.18 17.24 12.18 17.53 12.47C17.82 12.76 17.82 13.24 17.53 13.53Z"
                                        fill="#EC008C" />
                                </svg>
                            </div>
                            <div class="custom-text">
                                Cảm giác mạnh
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommendation-item">
                <img class="recommendation-item-image" src="https://via.placeholder.com/350x240" />
                <div class="recommendation-item-details">
                    <div class="recommendation-item-header">
                        <div class="recommendation-item-title">Roller Coaster</div>
                        <div class="recommendation-item-date">10/02/2020</div>
                    </div>
                    <div class="recommendation-item-footer">
                        <div class="recommendation-icon-container">
                            <div class="recommendation-icon-background"></div>
                            <div class="recommendation-icon-overlay"></div>
                        </div>
                        <div class="custom-icon-container">
                            <div class="custom-tag-icon">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.83 8.7L15.3 4.17C14.35 3.22 13.04 2.71 11.7 2.78L6.7 3.02C4.7 3.11 3.11 4.7 3.01 6.69L2.77 11.69C2.71 13.03 3.21 14.34 4.16 15.29L8.69 19.82C10.55 21.68 13.57 21.68 15.44 19.82L19.83 15.43C21.7 13.58 21.7 10.56 19.83 8.7ZM9.5 12.38C7.92 12.38 6.62 11.09 6.62 9.5C6.62 7.91 7.92 6.62 9.5 6.62C11.08 6.62 12.38 7.91 12.38 9.5C12.38 11.09 11.08 12.38 9.5 12.38ZM17.53 13.53L13.53 17.53C13.38 17.68 13.19 17.75 13 17.75C12.81 17.75 12.62 17.68 12.47 17.53C12.18 17.24 12.18 16.76 12.47 16.47L16.47 12.47C16.76 12.18 17.24 12.18 17.53 12.47C17.82 12.76 17.82 13.24 17.53 13.53Z"
                                        fill="#EC008C" />
                                </svg>
                            </div>
                            <div class="custom-text">
                                Cảm giác mạnh
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommendation-item">
                <img class="recommendation-item-image" src="https://via.placeholder.com/350x240" />
                <div class="recommendation-item-details">
                    <div class="recommendation-item-header">
                        <div class="recommendation-item-title">Roller Coaster</div>
                        <div class="recommendation-item-date">10/02/2020</div>
                    </div>
                    <div class="recommendation-item-footer">
                        <div class="recommendation-icon-container">
                            <div class="recommendation-icon-background"></div>
                            <div class="recommendation-icon-overlay"></div>
                        </div>
                        <div class="custom-icon-container">
                            <div class="custom-tag-icon">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.83 8.7L15.3 4.17C14.35 3.22 13.04 2.71 11.7 2.78L6.7 3.02C4.7 3.11 3.11 4.7 3.01 6.69L2.77 11.69C2.71 13.03 3.21 14.34 4.16 15.29L8.69 19.82C10.55 21.68 13.57 21.68 15.44 19.82L19.83 15.43C21.7 13.58 21.7 10.56 19.83 8.7ZM9.5 12.38C7.92 12.38 6.62 11.09 6.62 9.5C6.62 7.91 7.92 6.62 9.5 6.62C11.08 6.62 12.38 7.91 12.38 9.5C12.38 11.09 11.08 12.38 9.5 12.38ZM17.53 13.53L13.53 17.53C13.38 17.68 13.19 17.75 13 17.75C12.81 17.75 12.62 17.68 12.47 17.53C12.18 17.24 12.18 16.76 12.47 16.47L16.47 12.47C16.76 12.18 17.24 12.18 17.53 12.47C17.82 12.76 17.82 13.24 17.53 13.53Z"
                                        fill="#EC008C" />
                                </svg>
                            </div>
                            <div class="custom-text">
                                Cảm giác mạnh
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommendation-item">
                <img class="recommendation-item-image" src="https://via.placeholder.com/350x240" />
                <div class="recommendation-item-details">
                    <div class="recommendation-item-header">
                        <div class="recommendation-item-title">Roller Coaster</div>
                        <div class="recommendation-item-date">10/02/2020</div>
                    </div>
                    <div class="recommendation-item-footer">
                        <div class="recommendation-icon-container">
                            <div class="recommendation-icon-background"></div>
                            <div class="recommendation-icon-overlay"></div>
                        </div>
                        <div class="recommendation-item-category">Cảm giác mạnh</div>
                    </div>
                </div>
            </div>
            <div class="recommendation-item">
                <img class="recommendation-item-image" src="https://via.placeholder.com/350x240" />
                <div class="recommendation-item-details">
                    <div class="recommendation-item-header">
                        <div class="recommendation-item-title">Roller Coaster 5</div>
                        <div class="recommendation-item-date">10/02/2020</div>
                    </div>
                    <div class="recommendation-item-footer">
                        <div class="recommendation-icon-container">
                            <div class="recommendation-icon-background"></div>
                            <div class="recommendation-icon-overlay"></div>
                        </div>
                        <div class="custom-icon-container">
                            <div class="custom-tag-icon">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.83 8.7L15.3 4.17C14.35 3.22 13.04 2.71 11.7 2.78L6.7 3.02C4.7 3.11 3.11 4.7 3.01 6.69L2.77 11.69C2.71 13.03 3.21 14.34 4.16 15.29L8.69 19.82C10.55 21.68 13.57 21.68 15.44 19.82L19.83 15.43C21.7 13.58 21.7 10.56 19.83 8.7ZM9.5 12.38C7.92 12.38 6.62 11.09 6.62 9.5C6.62 7.91 7.92 6.62 9.5 6.62C11.08 6.62 12.38 7.91 12.38 9.5C12.38 11.09 11.08 12.38 9.5 12.38ZM17.53 13.53L13.53 17.53C13.38 17.68 13.19 17.75 13 17.75C12.81 17.75 12.62 17.68 12.47 17.53C12.18 17.24 12.18 16.76 12.47 16.47L16.47 12.47C16.76 12.18 17.24 12.18 17.53 12.47C17.82 12.76 17.82 13.24 17.53 13.53Z"
                                        fill="#EC008C" />
                                </svg>
                            </div>
                            <div class="custom-text">
                                Cảm giác mạnh
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommendation-item">
                <img class="recommendation-item-image" src="https://via.placeholder.com/350x240" />
                <div class="recommendation-item-details">
                    <div class="recommendation-item-header">
                        <div class="recommendation-item-title">Roller Coaster 6</div>
                        <div c lass="recommendation-item-date">10/02/2020</div>
                    </div>
                    <div class="recommendation-item-footer">
                        <div class="recommendation-icon-container">
                            <div class="recommendation-icon-background"></div>
                            <div class="recommendation-icon-overlay"></div>
                        </div>
                        <div class="custom-icon-container">
                            <div class="custom-tag-icon">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.83 8.7L15.3 4.17C14.35 3.22 13.04 2.71 11.7 2.78L6.7 3.02C4.7 3.11 3.11 4.7 3.01 6.69L2.77 11.69C2.71 13.03 3.21 14.34 4.16 15.29L8.69 19.82C10.55 21.68 13.57 21.68 15.44 19.82L19.83 15.43C21.7 13.58 21.7 10.56 19.83 8.7ZM9.5 12.38C7.92 12.38 6.62 11.09 6.62 9.5C6.62 7.91 7.92 6.62 9.5 6.62C11.08 6.62 12.38 7.91 12.38 9.5C12.38 11.09 11.08 12.38 9.5 12.38ZM17.53 13.53L13.53 17.53C13.38 17.68 13.19 17.75 13 17.75C12.81 17.75 12.62 17.68 12.47 17.53C12.18 17.24 12.18 16.76 12.47 16.47L16.47 12.47C16.76 12.18 17.24 12.18 17.53 12.47C17.82 12.76 17.82 13.24 17.53 13.53Z"
                                        fill="#EC008C" />
                                </svg>
                            </div>
                            <div class="custom-text">
                                Cảm giác mạnh
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="chevrons-container">
        <div class="custom-chevron-left">
            <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="chevron-left" opacity="0.6">
                    <rect width="64" height="64" rx="32" fill="white" />
                    <path id="Icon" d="M36.333 18.6641L24.333 31.9974L36.333 45.3307" stroke="#259E58" stroke-width="6"
                        stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
        </div>
        <div class="custom-chevron-right">
            <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="chevron-left" opacity="0.6">
                    <rect x="64" y="64" width="64" height="64" rx="32" transform="rotate(180 64 64)" fill="white" />
                    <path id="Icon" d="M27.667 45.3359L39.667 32.0026L27.667 18.6693" stroke="#259E58" stroke-width="6"
                        stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
        </div>
    </div>
    <div class="container-2">
        <div class="section-1">
            <div class="title">Trực thuộc</div>
            <div class="box-container">
                <div class="box">
                    <div class="blue-box"></div>
                    <div class="white-box-1"></div>
                    <div class="white-box-2"></div>
                    <div class="white-box-3"></div>
                </div>
                <div class="bar-1"></div>
                <div class="bar-2"></div>
            </div>
        </div>
        <div class="section-2">
            <div class="contact-title">
                <div class="title">Liên hệ</div>
                <div class="contact-item">
                    <div class="contact-info">
                        <div class="icon-container">
                            <div class="icon icon-inner-1"></div>
                            <div class="icon icon-inner-2"></div>
                        </div>
                        <div class="contact-text">03 Hòa Bình, Phường 3, Quận 11</div>
                    </div>
                    <div class="contact-info">
                        <div class="icon-container">
                            <div class="icon"
                                style="width: 19.97px; height: 20px; left: 2px; top: 2px; background: white"></div>
                        </div>
                        <div class="contact-text">0839 632 394</div>
                    </div>
                    <div class="contact-info">
                        <div class="icon-container">
                            <div class="icon"
                                style="width: 20px; height: 17px; left: 2px; top: 3.50px; background: white"></div>
                            <div class="icon"
                                style="width: 10px; height: 3.11px; left: 7px; top: 9px; border: 1.50px #57AF60 solid">
                            </div>
                        </div>
                        <div class="contact-text">phuthotouristquan11@gmail.com</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-3">
            <div class="system-title">Các đơn vị CÙNG hệ thống Phuthotourist</div>
            <div class="system-items">
                <div class="system-item">
                    <div class="system-dot"></div>
                    <div class="system-text-container">
                        <div class="system-text">Công ty CP DVDL Phú Thọ</div>
                    </div>
                </div>
                <div class="system-item">
                    <div class="system-dot"></div>
                    <div class="system-text-container">
                        <div class="system-text">Khu du lịch sinh thái Vàm Sát</div>
                    </div>
                </div>
                <div class="system-item">
                    <div class="system-dot"></div>
                    <div class="system-text-container">
                        <div class="system-text">Khách sạn Ngọc Lan</div>
                    </div>
                </div>
                <div class="system-item">
                    <div class="system-dot"></div>
                    <div class="system-text-container">
                        <div class="system-text">Khách sạn Phú Thọ</div>
                    </div>
                </div>
                <div class="system-item">
                    <div class="system-dot"></div>
                    <div class="system-text-container">
                        <div class="system-text">Trung tâm Du lịch Đầm Sen</div>
                    </div>
                </div>
                <div class="system-item">
                    <div class="system-dot"></div>
                    <div class="system-text-container">
                        <div class="system-text">Cà phê Vườn Đá</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-text">Copyright</div>
                <div class="footer-icon">
                    <div class="icon-wrapper">
                        <div class="icon-inner-1"></div>
                        <div class="icon-inner-2"></div>
                        <div class="icon-background"></div>
                    </div>
                </div>
                <div class="footer-text">Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Phuthotourist)</div>
            </div>
            <div class="footer-line"></div>
        </div>

    </div>


</div>
@endsection