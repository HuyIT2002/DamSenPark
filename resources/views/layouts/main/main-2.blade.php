@extends('layouts.app')

@section('content')
<div class="white-background">
    <div class="content-container" id="container">
        @foreach ($groupedData as $parentId => $parentData)
        <div class="item-title-kp" data-item="{{ $parentId }}">
            <div class="text-selected" id="highlighted-text">{{ $parentData['parent_name'] }}</div>
            @foreach ($parentData['categories'] as $categoryId => $category)
            @if ($parentId == 1)
            <div class="additional-info yet-another-special-layout">
                @foreach ($parentData['categories'] as $categoryId => $category)
                <div class="info-item">
                    <p>{{ $category['category_name'] }}</p>
                    <ul>
                        @foreach ($category['category_child_names'] as $child)
                        @php
                        $exists = DB::table('posts')->where('categories_child_id',
                        $child['categories_child_id'])->exists();
                        @endphp
                        <li data-categories-child-id="{{ $child['categories_child_id'] }}">
                            <a href="{{ $exists ? route('thuc-vat', ['post_id' => $child['categories_child_id']]) : url('/404') }}" class="info-link">
                                <div class="icon-container-2">
                                    <div class="icon-2">
                                        <div class="number">{{ $child['stt'] }}</div>
                                    </div>
                                    <div class="title">
                                        <div class="title-text">{{ $child['name'] }}</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </div>
                @endforeach
            </div>
            @else



            <div class="additional-info @if ($parentId == 3) special-layout @elseif ($parentId == 2) another-special-layout @endif">
                <div class="info-item">
                    <p>{{ $category['category_name'] }}</p>
                    <ul>
                        @foreach ($category['category_child_names'] as $child)
                        @php
                        $exists = DB::table('posts')->where('categories_child_id',
                        $child['categories_child_id'])->exists();
                        @endphp
                        <li data-categories-child-id="{{ $child['categories_child_id'] }}">
                            <a href="{{ $child['categories_child_id'] == 21 ? route('canh-dep') : route('thuc-vat', ['post_id' => $child['categories_child_id']]) }}" class="info-link">
                                <div class="icon-container-2">
                                    <div class="icon-2">
                                        <div class="number">{{ $child['stt'] }}</div>
                                    </div>
                                    <div class="title">
                                        <div class="title-text">{{ $child['name'] }}</div>
                                    </div>
                                </div>
                            </a>

                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            @endforeach



        </div>
        @endforeach


        <div class="scroll-line"></div>
    </div>
</div>
@endsection