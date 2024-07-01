@extends('layouts.app')

@section('content')
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
    @endsection