@extends('layouts.app')

@section('content')
<div class="white-background-3">
    <div class="container-3">
        <img class="centered-image" src="{{ asset('/public/images/image 462.png') }}" alt="Placeholder Image">
    </div>
    <div class="inner-container-ve-td">
        <div class="title-ve">Vé tập thể</div>
        <div class="line-ve"></div>
    </div>
    <div class="main-container">
        <div class="header-container-2">
            <div class="header-title">Mô tả</div>
        </div>
        <div class="description">Đầm Sen là điểm check-in được ưa chuộng của giới trẻ hiện nay.</div>
    </div>
    <div class="container-td">
        <div class="content-td">
            <div class="text-block-td">
                <span class="normal-text-td">
                    Đối với các đoàn khách: Nhóm bạn, cơ quan đoàn thể, Trường học, công ty du lịch, công nhân, chúng
                    tôi có giá vé tập thể ưu đãi cho Quý cơ quan khi đến tham quan vui chơi tại CVVH Đầm Sen . Bên cạnh
                    đó, Quý cơ quan cũng có thể đặt yêu cầu hướng dẫn, tổ chức sự kiện, Team building chúng tôi cũng sẽ
                    đáp ứng đầy đủ.<br />
                    Để biết chi tiết về chính sách giá ưu đãi và thực đơn cơm tại CVVH Đầm Sen, Quý khách vui lòng liên
                    hệ với nhân viên phụ trách như sau:<br />
                </span>
                <span class="highlighted-text-td">1. Công ty Du Lịch/ giáo xứ/ nhóm bạn/ Cơ quan đoàn thể:<br /></span>
                <span class="normal-text-td">
                    <span class="bullet-point">Mrs. Minh: 0902 575 805</span><br />
                    <span class="bullet-point">Mr. Đăng Khánh: 0789 848 418</span><br />
                </span>
                <span class="highlighted-text-td">2. Trường học: </span>

                Mr. Hiếu Trung: 0989 967 129
                </span> <br>
                <span class="highlighted-text-td">3. Công nhân + sự kiện:<br /></span>
                <span class="normal-text-td">
                    <span class="bullet-point">Mrs. Minh: 0902 575 805</span><br />
                    <span class="bullet-point">Mr. Đăng Khánh: 0789 848 418</span><br />
                </span>
                <span class="highlighted-text-td">4. Hotline:</span>
                <span class="normal-text-td"> (028) 3963 3593 – 0902575805 (Mrs. Minh)</span>
            </div>
        </div>
    </div>
    <div class="container-td-2">
        <div class="header-text">ĐẶT TOUR – SỰ KIỆN – TIỆC</div>
        <div class="text-block-td">
            <span class="normal-text-td">Phòng Tiếp nhận Tour Đầm Sen <br /></span>
            <span class="highlighted-text-td"><span class="bullet-point">Địa chỉ:</span></span>
            <span class="normal-text-td"> Cổng 1A, Số 3, Hòa Bình, Phường 3, Quận 11, TP. HCM<br /></span>
            <span class="highlighted-text-td"><span class="bullet-point">ĐT:</span></span>
            <span class="normal-text-td"> (028) 3963.3593 – (028) 3858 8868</span>
        </div>
    </div>

    @include('layouts.partials.container')
</div>
@endsection