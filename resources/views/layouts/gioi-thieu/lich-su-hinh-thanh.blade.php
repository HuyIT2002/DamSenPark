@extends('layouts.app')

@section('content')
<div class="white-background-3">
    <div class="container-3">
        <img class="centered-image" src="{{ asset('/public/images/lich-su-hinh-thanh/' . $banner_image_path) }}" alt="Placeholder Image">
    </div>
    <div class="inner-container-ve">
        <div class="title-ve">Lịch sử hình thành</div>
        <div class="line-ve"></div>
    </div>
    <div class="main-container">
        <div class="header-container-2">
            <div class="header-title">Mô tả</div>
        </div>
        <div class="description">{{ $title }}</div>
    </div>
    <div class="history-content">
        {!! nl2br(e($description)) !!}
    </div>
    <div class="electric-vehicle-history">
        các mốc son phát triền
    </div>
    <div class="history-content-2">
        @foreach(explode("\n", $introduction_title) as $line)
        <p>{{ $line }}</p>
        @endforeach
    </div>

    <div class="container-3">
        <img class="centered-image" src="{{ asset('/public/images/lich-su-hinh-thanh/' . $large_image_path) }}" alt="Placeholder Image">
    </div>


    <div class="bordered-div"></div>

    <div class="container-history">
        <div class="history-services-title">Những loại hình dịch vụ trọng tâm</div>
        @foreach($services->chunk(3) as $row)
        <div class="row-history">
            @foreach($row as $service)
            <div class="box-history">
                <img src="{{ asset('/public/images/services/' . $service->image_path) }}" alt="Placeholder image">
                <div class="info-history">
                    <div class="{{ $service->color_class }}">
                        {{ $service->title }}<span class="separator-history"></span>
                    </div>
                    <div class="history-description">
                        {{ $service->description }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
    @include('layouts.partials.container')
</div>
@endsection