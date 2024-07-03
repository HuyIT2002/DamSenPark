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
</div>
@endsection