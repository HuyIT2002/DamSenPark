@extends('layouts.app')

@section('content')
<div class="white-background-2">
    <div class="event-title">Sự kiện</div>
    <div class="slideshow-container">
        <div class="section">
            <div class="section-inner">
                <img id="slide-5" src="{{ asset('/public/images/5.jpg') }}" alt="Slide 1">

            </div>
        </div>
        <div class="section">
            <div class="section-inner">
                <img id="slide-4" src="{{ asset('/public/images/4.jpg') }}" alt="Slide 2">
            </div>
        </div>
        <div class="section">
            <div class="section-inner">
                <img id="slide-3" src="{{ asset('/public/images/3.jpg') }}" alt="Slide 3">
            </div>
        </div>
        <div class="section">
            <div class="section-inner">
                <img id="slide-2" src="{{ asset('/public/images/2.jpg') }}" alt="Slide 4">
            </div>
        </div>
        <div class="section">
            <div class="section-inner">
                <img id="slide-1" src="{{ asset('/public/images/1.png') }}" alt="Slide 5">
                <div class="cta-section-inner">
                    <a href="" class="cta-button-education-card">
                        <div class="cta-text-education-card">Xem thêm</div>
                        <div class="arrow-icon-introduce">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="arrow-narrow-up">
                                    <path id="Icon" d="M20.625 15L15.625 10M20.625 15L15.625 20M20.625 15L6.5625 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>


    </div>
    <div class="highlight-container">

    </div>


    <div class="custom-container">
        <div class="custom-dot-left">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Arrow Left">
                    <path id="icon" fill-rule="evenodd" clip-rule="evenodd" d="M8.62155 10.5001H21.5002V13.5001H8.62155L13.5609 18.4395L11.4396 20.5608L2.87891 12.0001L11.4396 3.43945L13.5609 5.56077L8.62155 10.5001Z" fill="#259E58" />
                </g>
            </svg>
        </div>
        <div class="custom-dots-container">
            <div class="custom-dot"></div>
        </div>
        <div class="custom-dot-right">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Arrow Right">
                    <path id="icon" fill-rule="evenodd" clip-rule="evenodd" d="M15.9775 13.5563H3.42383V10.4423H15.9775L11.1628 5.31522L13.2306 3.11328L21.5752 11.9993L13.2306 20.8853L11.1628 18.6833L15.9775 13.5563Z" fill="#259E58" />
                </g>
            </svg>
        </div>
    </div>

    <div class="education-box-2">
        @foreach($events as $event)
        <div class="education-item">
            <div class="education-card">
                <img src="{{ asset('/public/images/su-kien/'. $event->image_url) }}" alt="Placeholder image">
                <div class="info-section-education-card">
                    <div class="info-row-education-card">
                        <div class="icon-education-card">
                            <div class="icon-inner-education-card">
                                <div class="icon-background-education-card">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.83 8.7L15.3 4.17C14.35 3.22 13.04 2.71 11.7 2.78L6.7 3.02C4.7 3.11 3.11 4.7 3.01 6.69L2.77 11.69C2.71 13.03 3.21 14.34 4.16 15.29L8.69 19.82C10.55 21.68 13.57 21.68 15.44 19.82L19.83 15.43C21.7 13.58 21.7 10.56 19.83 8.7ZM9.5 12.38C7.92 12.38 6.62 11.09 6.62 9.5C6.62 7.91 7.92 6.62 9.5 6.62C11.08 6.62 12.38 7.91 12.38 9.5C12.38 11.09 11.08 12.38 9.5 12.38ZM17.53 13.53L13.53 17.53C13.38 17.68 13.19 17.75 13 17.75C12.81 17.75 12.62 17.68 12.47 17.53C12.18 17.24 12.18 16.76 12.47 16.47L16.47 12.47C16.76 12.18 17.24 12.18 17.53 12.47C17.82 12.76 17.82 13.24 17.53 13.53Z" fill="#EC008C" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="category-education-card">
                            {{ $event->sticker_name }}
                        </div>
                    </div>
                    <div class="info-row-education-card">
                        <div class="icon-education-card">
                            <div class="icon-inner-education-card">
                                <div class="icon-border-education-card">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="icon">
                                            <path id="Icon" d="M10 5.83333V10L12.0833 11.25M17.5 10C17.5 14.1421 14.1421 17.5 10 17.5C5.85786 17.5 2.5 14.1421 2.5 10C2.5 5.85786 5.85786 2.5 10 2.5C14.1421 2.5 17.5 5.85786 17.5 10Z" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="date-education-card">
                            {{ \Carbon\Carbon::parse($event->show_time)->format('d/m/Y') }}
                        </div>
                    </div>
                </div>
                <div class="cta-section-education-card">
                    <a href="" class="cta-button-education-card">
                        <div class="cta-text-education-card">Xem thêm</div>
                        <div class="arrow-icon-introduce">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="arrow-narrow-up">
                                    <path id="Icon" d="M20.625 15L15.625 10M20.625 15L15.625 20M20.625 15L6.5625 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div>
                    </a>
                </div>



                <div class="description-section-education-card">
                    <div class="title-education-card">
                        {{ $event->events_name	 }}
                    </div>
                    <div class="description-education-card">
                        {{ $event->content }}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>



    <div class="unique-container">
        <div class="unique-item">

            <div class="custom-rotated-left">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="Arrow Left">
                        <path id="icon" fill-rule="evenodd" clip-rule="evenodd" d="M8.62155 10.5001H21.5002V13.5001H8.62155L13.5609 18.4395L11.4396 20.5608L2.87891 12.0001L11.4396 3.43945L13.5609 5.56077L8.62155 10.5001Z" fill="#EC008C" />
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
                        <path id="icon" fill-rule="evenodd" clip-rule="evenodd" d="M15.9775 13.5563H3.42383V10.4423H15.9775L11.1628 5.31522L13.2306 3.11328L21.5752 11.9993L13.2306 20.8853L11.1628 18.6833L15.9775 13.5563Z" fill="#EC008C" />
                    </g>
                </svg>

            </div>
        </div>
    </div>


    <div class="recommendation-container">
        <div class="recommendation-title">Có thể bạn thích</div>
        <div class="recommendation-items-container">
            @foreach($postsWithParentId3 as $post)
            <div class="recommendation-item">
                <img class="recommendation-item-image" src="{{ asset('/public/images/tro-choi/cam-giac-manh/' . $post->image_url) }}" />
                <div class="recommendation-item-details">
                    <div class="recommendation-item-header">
                        <div class="recommendation-item-title">
                            {{ $post->categoriesChild ? $post->categoriesChild->name : 'N/A' }}
                        </div>
                        <div class="recommendation-item-date">
                            {{ $post->categoriesChild ? \Carbon\Carbon::parse($post->categoriesChild->created_at)->format('d/m/Y') : 'N/A' }}
                        </div>
                    </div>
                    <div class="recommendation-item-footer">
                        <div class="recommendation-icon-container">
                            <div class="recommendation-icon-background"></div>
                            <div class="recommendation-icon-overlay"></div>
                        </div>
                        <div class="custom-icon-container">
                            <div class="custom-tag-icon">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.83 8.7L15.3 4.17C14.35 3.22 13.04 2.71 11.7 2.78L6.7 3.02C4.7 3.11 3.11 4.7 3.01 6.69L2.77 11.69C2.71 13.03 3.21 14.34 4.16 15.29L8.69 19.82C10.55 21.68 13.57 21.68 15.44 19.82L19.83 15.43C21.7 13.58 21.7 10.56 19.83 8.7ZM9.5 12.38C7.92 12.38 6.62 11.09 6.62 9.5C6.62 7.91 7.92 6.62 9.5 6.62C11.08 6.62 12.38 7.91 12.38 9.5C12.38 11.09 11.08 12.38 9.5 12.38ZM17.53 13.53L13.53 17.53C13.38 17.68 13.19 17.75 13 17.75C12.81 17.75 12.62 17.68 12.47 17.53C12.18 17.24 12.18 16.76 12.47 16.47L16.47 12.47C16.76 12.18 17.24 12.18 17.53 12.47C17.82 12.76 17.82 13.24 17.53 13.53Z" fill="#EC008C" />
                                </svg>
                            </div>
                            <div class="custom-text">
                                {{ $post->parent ? $post->category->category_name : 'N/A' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <div class="chevrons-container">
        <div class="custom-chevron-left">
            <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="chevron-left" opacity="0.6">
                    <rect width="64" height="64" rx="32" fill="white" />
                    <path id="Icon" d="M36.333 18.6641L24.333 31.9974L36.333 45.3307" stroke="#259E58" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
        </div>
        <div class="custom-chevron-right">
            <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="chevron-left" opacity="0.6">
                    <rect x="64" y="64" width="64" height="64" rx="32" transform="rotate(180 64 64)" fill="white" />
                    <path id="Icon" d="M27.667 45.3359L39.667 32.0026L27.667 18.6693" stroke="#259E58" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>
        </div>
    </div>

    @include('layouts.partials.container')

</div>
@endsection