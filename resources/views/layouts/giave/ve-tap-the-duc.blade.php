@extends('layouts.app')

@section('content')
<div class="white-background-3">
    <div class="container-3">
        <img class="centered-image" src="{{ asset('/public/images/image 468.png') }}" alt="Placeholder Image">
    </div>
    <div class="inner-container-ve">
        <div class="title-ve">vé tập thể dục</div>
        <div class="line-ve"></div>
    </div>
    <div class="main-container">
        <div class="header-container-2">
            <div class="header-title">Mô tả</div>
        </div>
        <div class="description">Đầm Sen là điểm check-in được ưa chuộng của giới trẻ hiện nay.</div>
    </div>
    <div class="main-ticket">
        <div class="ticket green-border-td">
            <div class="gradient-background-td">
                <svg width="99" height="99" viewBox="0 0 99 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="clock-five" clip-path="url(#clip0_2202_38483)">
                        <path id="Icon" d="M47.5761 84.7892C28.3567 84.7892 13.0938 70.0644 13.0938 49.7387C13.0938 29.4129 29.5711 12.9355 49.8969 12.9355C70.2227 12.9355 86.7 29.4129 86.7 49.7387C86.7 52.7374 86.291 54.6457 85.8821 56.2814M49.8969 29.2925V49.7387L39.6313 42.3302" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                        <path id="Icon_2" d="M49.8965 96.3562L72.3873 96.356V61.8109C72.3873 58.6718 72.3873 57.1022 71.812 56.0143C71.3077 55.0604 70.514 54.3438 69.5773 53.9965C68.509 53.6005 67.1477 53.941 64.4252 54.6219L59.1092 55.9516C57.281 56.4089 56.367 56.6375 55.6847 57.1908C55.0828 57.6788 54.6103 58.3419 54.3176 59.109C53.9857 59.9787 53.9857 61.0327 53.9857 63.1406V96.3562M74.4319 59.5345H76.0676C78.3578 59.5345 79.5029 59.5345 80.3776 60.0361C81.147 60.4774 81.7726 61.1815 82.1647 62.0476C82.6104 63.0322 82.6104 64.321 82.6104 66.8988V96.3562H86.6996M66.2534 75.644H66.2739" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_2202_38483">
                            <rect width="98.1416" height="98.1416" fill="white" transform="translate(0.416016 0.667969)" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="custom-td-text-container">
                <div class="custom-td-text">GIỜ MỞ CỬA</div>
                <div class="custom-td-sub-text">4h00 - 8h00<br />(mỗi ngày)</div>
            </div>
        </div>
        <div class="ticket pink-border-td">
            <div class="pink-background-td">
                <svg width="99" height="99" viewBox="0 0 99 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="clock-five" clip-path="url(#clip0_2202_38493)">
                        <path id="Icon" d="M58.1473 80.9655H10.96C8.06502 80.9655 6.61754 80.9655 5.51182 80.3982C4.53919 79.8993 3.74843 79.1031 3.25285 78.1238C2.68945 77.0105 2.68945 75.5531 2.68945 72.6383V64.4646C8.71242 62.3212 13.0276 56.5378 13.0276 49.7396C13.0276 42.9414 8.71242 37.158 2.68945 35.0146V26.8389C2.68945 23.9241 2.68945 22.4667 3.25285 21.3534C3.74843 20.3741 4.53919 19.5779 5.51182 19.079C6.61754 18.5117 8.06502 18.5117 10.96 18.5117H87.4623C90.3572 18.5117 91.8047 18.5117 92.9104 19.079C93.8831 19.5779 94.6738 20.3741 95.1694 21.3534C95.7328 22.4667 95.7328 23.9241 95.7328 26.8389V35.0136" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                        <path id="Icon_2" d="M95.7325 50.7652V50.3831C95.7325 45.5298 91.5854 41.5954 86.4697 41.5954H72.2592C66.9211 41.5954 62.5938 45.7008 62.5938 50.7652C62.5938 55.8295 66.9211 59.9349 72.2592 59.9349H86.067C91.4051 59.9349 95.7325 64.0404 95.7325 69.1047C95.7325 74.1691 91.4051 78.2745 86.067 78.2745H72.0579C66.831 78.2745 62.5938 74.2546 62.5938 69.2958V69.1047M79.1631 36.3555V83.5144" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                        <line id="Line 30" x1="31.5" y1="21.5" x2="31.5" y2="78.5" stroke="white" stroke-width="5" stroke-linecap="round" stroke-dasharray="10 10" />
                    </g>
                    <defs>
                        <clipPath id="clip0_2202_38493">
                            <rect width="98.1416" height="98.1416" fill="white" transform="translate(0.140625 0.667969)" />
                        </clipPath>
                    </defs>
                </svg>

            </div>
            <div class="custom-td-pink-text-container">
                <div class="custom-td-pink-text">GIÁ VÉ</div>
                <div class="custom-td-sub-text"> 5.000 đồng/lượt</div>
            </div>
        </div>
        <div class="ticket blue-border-td">
            <div class="blue-background-td">
                <svg width="99" height="99" viewBox="0 0 99 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="clock-five" clip-path="url(#clip0_2202_38483)">
                        <path id="Icon" d="M47.5761 84.7892C28.3567 84.7892 13.0938 70.0644 13.0938 49.7387C13.0938 29.4129 29.5711 12.9355 49.8969 12.9355C70.2227 12.9355 86.7 29.4129 86.7 49.7387C86.7 52.7374 86.291 54.6457 85.8821 56.2814M49.8969 29.2925V49.7387L39.6313 42.3302" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                        <path id="Icon_2" d="M49.8965 96.3562L72.3873 96.356V61.8109C72.3873 58.6718 72.3873 57.1022 71.812 56.0143C71.3077 55.0604 70.514 54.3438 69.5773 53.9965C68.509 53.6005 67.1477 53.941 64.4252 54.6219L59.1092 55.9516C57.281 56.4089 56.367 56.6375 55.6847 57.1908C55.0828 57.6788 54.6103 58.3419 54.3176 59.109C53.9857 59.9787 53.9857 61.0327 53.9857 63.1406V96.3562M74.4319 59.5345H76.0676C78.3578 59.5345 79.5029 59.5345 80.3776 60.0361C81.147 60.4774 81.7726 61.1815 82.1647 62.0476C82.6104 63.0322 82.6104 64.321 82.6104 66.8988V96.3562H86.6996M66.2534 75.644H66.2739" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_2202_38483">
                            <rect width="98.1416" height="98.1416" fill="white" transform="translate(0.416016 0.667969)" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="custom-td-blue-text-container">
                <div class="custom-td-blue-text">VÉ THÁNG</div>
                <div class="custom-td-sub-text">Chưa áp dụng</div>
            </div>
        </div>
    </div>
    @include('layouts.partials.container')
</div>
@endsection