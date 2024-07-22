@extends('layouts.app')

@section('content')
<div class="banner">
    <div class="image-slider">
        @foreach($images as $image)
        <img src="{{ asset('/public/images/home/' . $image->image_path) }}" alt="Banner">
        @endforeach
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
                <img class="icon-22" src="{{ asset('/public/images/chevron-left-1.svg') }}" alt="Chevron Left Icon">
            </div>
        </div>
    </div>
    <a href="{{ route('main-2') }}" class="custom-link">
        <div class="custom-div">
            <div class="inner-content">
                KHÁM PHÁ NGAY
            </div>
        </div>
    </a>


    <div class="icons-wrapper">
    </div>
    @endsection