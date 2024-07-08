@extends('layouts.app')

@section('content')
<div class="white-background-3">
    <div class="container-3">
        <img class="centered-image" src="{{ asset('/public/images/image 467.png') }}" alt="Placeholder Image">
    </div>
    <div class="inner-container-ve-td">
        <div class="title-ve">Vé dịch vụ</div>
        <div class="line-ve"></div>
    </div>
    <div class="main-container">
        <div class="header-container-2">
            <div class="header-title">Mô tả</div>
        </div>
        <div class="description">Đầm Sen là điểm check-in được ưa chuộng của giới trẻ hiện nay.</div>
    </div>
    <div class="additional-services">
        Bên cạnh các vé tham quan và chơi trò chơi tại Đầm Sen, chúng tôi còn có các vé dịch vụ cộng thêm dành cho du
        khách. Trong đó có các dịch vụ như xe điện, giữ đồ, cho thuê xe đẩy, xe nôi, xe lăn.
    </div>
    <div class="electric-vehicle-service">
        DỊCH VỤ XE ĐIỆN
    </div>
    <div class="icon-container-dv">
        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 11.5H9V5.5H11M11 15.5H9V13.5H11M10 0.5C8.68678 0.5 7.38642 0.758658 6.17317 1.2612C4.95991 1.76375 3.85752 2.50035 2.92893 3.42893C1.05357 5.3043 0 7.84784 0 10.5C0 13.1522 1.05357 15.6957 2.92893 17.5711C3.85752 18.4997 4.95991 19.2362 6.17317 19.7388C7.38642 20.2413 8.68678 20.5 10 20.5C12.6522 20.5 15.1957 19.4464 17.0711 17.5711C18.9464 15.6957 20 13.1522 20 10.5C20 9.18678 19.7413 7.88642 19.2388 6.67317C18.7362 5.45991 17.9997 4.35752 17.0711 3.42893C16.1425 2.50035 15.0401 1.76375 13.8268 1.2612C12.6136 0.758658 11.3132 0.5 10 0.5Z" fill="#DFA100" />
        </svg>
        <span>
            Lưu ý: Không áp dụng Vé trọn gói Đầm sen!
        </span>
    </div>
    <div class="text-container">
        <span>Bên cạnh việc tham quan Đầm Sen bằng “đoàn tàu cổ tích” (bao gồm trong </span>
        <span class="highlighted">vé trọn gói</span>
        <span>, và vé </span>
        <span class="highlighted">Silver</span>
        <span>, du khách có thể thưởng ngoạn bằng dịch vụ xe điện riêng của Đầm Sen. Tùy vào loại vé, hành trình xe điện
            sẽ đưa quý khách từ trạm đón (khu </span>
        <span class="highlighted">trò chơi cảm giác mạnh</span>
        <span> ở quảng trường Âu Lạc), đi quanh hồ Đầm Sen, tham quan vườn chim thú ở khu B, và về vườn Lan rừng để ngắm
            những loại hoa đẹp nhất tại Đầm Sen.</span>
    </div>
    <div class="container-column-dv">
        <div class="column">
            <div class="title-dv">Loại hình</div>
            <div class="content-dv">Happy car</div>
            <div class="content-dv">Family car</div>
            <div class="content-dv">Friendly car</div>
            <div class="content-dv">Family car</div>
            <div class="content-dv">Cung đường</div>
        </div>
        <div class="column">
            <div class="title-dv">Số người</div>
            <div class="content-dv">1-5</div>
            <div class="content-dv">6 – 7</div>
            <div class="content-dv">8 – 10</div>
            <div class="content-dv">11 – 12</div>
            <div class="content-dv">1 – 5</div>
        </div>
        <div class="column">
            <div class="title-dv">Số tiền</div>
            <div class="content-dv">150.000 đồng/30 phút</div>
            <div class="content-dv">200.000 đồng/30 phút</div>
            <div class="content-dv">250.00 đồng/30 phút</div>
            <div class="content-dv">300.000 đồng/30 phút</div>
            <div class="content-dv">50.000 đồng/chuyến</div>
        </div>
    </div>
    <div class="electric-vehicle-service-2">
        DỊCH VỤ CHO THUÊ
    </div>
    <div class="icon-container-dv-2">
        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 11.5H9V5.5H11M11 15.5H9V13.5H11M10 0.5C8.68678 0.5 7.38642 0.758658 6.17317 1.2612C4.95991 1.76375 3.85752 2.50035 2.92893 3.42893C1.05357 5.3043 0 7.84784 0 10.5C0 13.1522 1.05357 15.6957 2.92893 17.5711C3.85752 18.4997 4.95991 19.2362 6.17317 19.7388C7.38642 20.2413 8.68678 20.5 10 20.5C12.6522 20.5 15.1957 19.4464 17.0711 17.5711C18.9464 15.6957 20 13.1522 20 10.5C20 9.18678 19.7413 7.88642 19.2388 6.67317C18.7362 5.45991 17.9997 4.35752 17.0711 3.42893C16.1425 2.50035 15.0401 1.76375 13.8268 1.2612C12.6136 0.758658 11.3132 0.5 10 0.5Z" fill="#DFA100" />
        </svg>
        <span>
            Lưu ý: Tiền thế chân từ 300.000 đồng đến 500.000 đồng + CMND
        </span>
    </div>
    <table class="price-table">
        <thead>
            <tr>
                <th class="col-label">Cho thuê</th>
                <th class="col-price">Giá Xe</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="col-label">Xe đẩy</td>
                <td class="col-price">50.000 đồng/lần (Cỡ nhỏ)<br />80.000 đồng/lần (Cỡ lớn)</td>
            </tr>
            <tr>
                <td class="col-label">Xe nôi</td>
                <td class="col-price">80.000 đồng/lần (Cỡ nhỏ)<br />120.000 đồng/lần (Cỡ lớn)</td>
            </tr>
            <tr>
                <td class="col-label">Xe lăn</td>
                <td class="col-price">100.000 đồng/lần</td>
            </tr>
            <tr>
                <td class="col-label">Tủ giữ đồ</td>
                <td class="col-price">20.000 đồng/hộc tủ/lần</td>
            </tr>
        </tbody>
    </table>

    <div class="electric-vehicle-service-3">
        GHI CHÚ
    </div>
    <div class="text-container-2">
        <span>Vé dịch vụ này không bao gồm trong các loại vé cổng, hay vé trọn gói, cũng như Silver. Để biết thêm về
            những loại vé này, xin vui lòng xem</span> <span class="highlighted">tại đây</span>

    </div>
    @include('layouts.partials.container')
</div>
@endsection