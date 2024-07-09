@extends('layouts.app')

@section('content')
<div class="white-background-3">
    <div class="container-3">
        <img class="centered-image" src="{{ asset('/public/images/Rectangle 5.png') }}" alt="Placeholder Image">
    </div>
    <div class="inner-container-ve-td">
        <div class="title-ve">Thành viên</div>
        <div class="line-ve"></div>
    </div>
    <div class="main-container">
        <div class="header-container-2">
            <div class="header-title">Mô tả</div>
        </div>
        <div class="description">Đầm Sen là điểm check-in được ưa chuộng của giới trẻ hiện nay.</div>
    </div>

    <div class="electric-vehicle-fellow">
        Nhà hàng thủy tạ
    </div>
    <div class="history-fellow-container">
        <div class="history-fellow-content">
            <p>Đơn vị thành viên đầu tiên của Đầm Sen là Nhà hàng Thủy tạ nằm ở cổng số 2 của CVVH Đầm Sen. Địa chỉ số 3
                Hòa Bình, Quận 11, TP.HCM. Ra đời từ năm 1985, nằm trong lòng CVVH Đầm Sen (thuộc Công ty cổ phần Dịch
                vụ & Du lịch Phú Thọ quản lý), nhà hàng Thủy Tạ đã định hình thương hiệu và không ngừng phát triển. Hàng
                năm, đội ngũ nhân viên của nhà hàng đều được đào tạo nâng cao về nghiệp vụ cũng như thái độ phục vụ để
                đáp ứng mọi yêu cầu của thực khách. Chính vì vậy, suốt nghiều năm qua, nhà hàng Thủy Tạ Đầm Sen vẫn là
                cái tên được lựa chọn hàng đầu của các cá nhân và cơ quan đơn vị khi đặt tiệc tổ chức sự kiện.</p>
        </div>
        <div class="history-fellow-logo">
            <img class="logo-image" src="{{ asset('/public/images/Rectangle 1500.png') }}" alt="Placeholder Image">
        </div>
    </div>
    <div class="button-container">
        <div class="button-text">Xem thêm</div>
        <div class="arrow-icon">
            <div class="arrow-line"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="arrow-narrow-up">
                        <path id="Icon" d="M20.625 15L15.625 10M20.625 15L15.625 20M20.625 15L6.5625 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
            </div>
        </div>
    </div>
    <div class="container-fellow">
        <div class="main-content-fellow">
            <div class="images-wrapper-fellow">
                <div class="custom-chevron-left-fellow">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="chevron-left" opacity="0.6">
                            <rect width="64" height="64" rx="32" fill="white" />
                            <path id="Icon" d="M36.333 18.6641L24.333 31.9974L36.333 45.3307" stroke="#005F33" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                    </svg>
                </div>
                <div class="image-column-fellow">
                    <div class="image-container-fellow">
                        <img class="image-fellow" src="{{ asset('/public/images/Image 01.png') }}" alt="Placeholder Image">
                        <div class="image-caption-fellow">Vua đầu bếp “Jan Can Cook” từng đến giao lưu với đội ngũ bếp
                            của nhà hàng Thủy Tạ Đầm Sen</div>
                    </div>
                    <div class="image-container-fellow">
                        <img class="image-fellow" src="{{ asset('/public/images/Image 01.png') }}" alt="Placeholder Image">
                        <div class="image-caption-fellow">Vua đầu bếp “Jan Can Cook” từng đến giao lưu với đội ngũ bếp
                            của nhà hàng Thủy Tạ Đầm Sen</div>
                    </div>
                </div>
                <div class="custom-chevron-right-fellow">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="chevron-left" opacity="0.6">
                            <rect x="64" y="64" width="64" height="64" rx="32" transform="rotate(180 64 64)" fill="white" />
                            <path id="Icon" d="M27.667 45.3359L39.667 32.0026L27.667 18.6693" stroke="#005F33" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                    </svg>
                </div>
            </div>
            <div class="new-section">
                <div class="image-row">
                    <div class="image-column">
                        <img class="image" src="https://via.placeholder.com/238x156" />
                    </div>
                    <div class="image-column">
                        <img class="image" src="https://via.placeholder.com/238x156" />
                    </div>
                    <div class="image-column">
                        <img class="image" src="{{ asset('/public/images/Image 01.png') }}" />
                    </div>
                    <div class="image-column">
                        <img class="image" src="https://via.placeholder.com/238x156" />
                    </div>
                    <div class="image-column">
                        <img class="image" src="https://via.placeholder.com/238x156" />
                    </div>
                    <div class="image-column">
                        <img class="image" src="https://via.placeholder.com/238x156" />
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.partials.container')
</div>
@endsection