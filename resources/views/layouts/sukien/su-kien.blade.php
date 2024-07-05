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
                        <div class="recommendation-item-category">Cảm giác mạnh</div>
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
                        <div class="recommendation-item-category">Cảm giác mạnh</div>
                    </div>
                </div>
            </div>
            <div class="recommendation-item">
                <img class="recommendation-item-image" src="https://via.placeholder.com/350x240" />
                <div class="recommendation-item-details">
                    <div class="recommendation-item-header">
                        <div class="recommendation-item-title">Roller Coaster 6</div>
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
</div>
@endsection