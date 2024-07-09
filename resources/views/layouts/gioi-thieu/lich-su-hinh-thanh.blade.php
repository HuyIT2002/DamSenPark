@extends('layouts.app')

@section('content')
<div class="white-background-3">
    <div class="container-3">
        <img class="centered-image" src="{{ asset('/public/images/Rectangle 1499.png') }}" alt="Placeholder Image">
    </div>
    <div class="inner-container-ve">
        <div class="title-ve">Lịch sử hình thành</div>
        <div class="line-ve"></div>
    </div>
    <div class="main-container">
        <div class="header-container-2">
            <div class="header-title">Mô tả</div>
        </div>
        <div class="description">Đầm Sen là điểm check-in được ưa chuộng của giới trẻ hiện nay.</div>
    </div>
    <div class="history-content">
        Lịch sử hình thành CVVH Đầm Sen bắt đầu sau ngày đất nước thống nhất. Lúc bấy giờ, Đầm Sen còn là một khu ruộng
        hoang đầm lầy. Nơi đó chỉ toàn những đụn rau muống, rau ngổ, cây cỏ rậm rịt. Đồng thời đây cũng là nơi chứa các
        tệ nạn xã hội.<br>
        Ngày 15/2/1976, Thành ủy – UBND TP.HCM ra lời kêu gọi “Hãy xây dựng cho thành phố 3 công viên văn hóa lớn, một
        tại Bình Tiên, một tại Tân Bình và một tại Đầm Sen”. Hàng triệu công nhân lao động đã tham gia. Công viên Đầm
        Sen được khởi công như thế trên diện tích 55ha. Từ một đầm lầy hôm nào, đã sớm trở thành một hồ nước sạch, với
        cảnh quan thoáng mát cho người dân thành phố.
    </div>
    <div class="electric-vehicle-history">
        các mốc son phát triền
    </div>
    <div class="history-content-2">
        <p>Năm 1977 – 1983: Đầm Sen do Thành Phố quản lý. Sau đó, 8/9/1983 Thành Phố giao cho Quận 11 quản lý (55ha,
            theo quyết định 325/QĐ-UB).</p>
        <p>Quyết định 215/QĐ-UB ngày 25/5/1984 giao Đầm Sen về các đơn vị: Ban xây dựng nhà đất và công trình quận 11,
            Xí nghiệp quốc doanh nuôi trồng thủy sản và Công ty ăn uống và dịch vụ tổng hợp quận 11. Do khó khăn chung
            và thiếu vốn xây dựng. Đầm Sen chỉ đáp ứng được nhu cầu kinh tế là hồ nuôi cá thịt với một số cây rất ít,
            chưa hình thành là một công viên.</p>
        <p>Năm 1985: Quận 11 ra quyết định 108/QĐ-UB thống nhất giao Đầm Sen cho Công ty Dịch vụ Văn hóa Tổng hợp quận
            11 và có đại diện Xí nghiệp nuôi trồng thủy sản để thành lập ban quản lý Đầm Sen.</p>
        <p>Năm 1989: Công ty du lịch quận 11, tức Công ty Dịch vụ Du lịch Phú Thọ ngày nay được giao quản lý Đầm Sen, xí
            nghiệp nuôi trồng thủy sản giải thể do làm ăn thua lỗ.</p>
        <p>Từ đó CÔNG VIÊN VĂN HÓA ĐẦM SEN, một đơn vị trực thuộc công ty Du lịch Dịch vụ Phú Thọ Quận 11, từ khi đi vào
            hoạt động là một khu vui chơi giải trí tới nay, đã có những bước phát triễn mạnh mẽ, trở thành một công viên
            rộng lớn và hiện đại bậc nhất hiện nay ở TP. HCM, trở thành một công viên văn hóa và du lịch đi đầu và thành
            công nhất trong cả nước. Từ đầu năm 2003, Công Viên Văn Hóa Đầm Sen chính thức là thành viên của Tổng Công
            Ty Du Lịch Sài Gòn (Saigontourist). Đó là nhờ sự quan tâm tập trung đầu tư và năng động của ban giám đốc
            công ty Du lịch Phú Thọ, sự quản lý sang suốt của BGĐ và tập thể cán bộ – công nhân viên có tinh thần trách
            nhiệm và dày dạn kinh nghiệm làm việc.</p>
    </div>
    <div class="container-3">
        <img class="centered-image" src="{{ asset('/public/images/cau-cuu-khuc-damsenpark-damsen 1.png') }}" alt="Placeholder Image">
    </div>
    <div class="bordered-div"></div>
    <div class="container-history">
        <div class="history-services-title">Những loại hình dịch vụ trọng tâm</div>
        <div class="row-history">
            <div class="box-history">
                <img src="{{ asset('/public/images/Rectangle 1506.png') }}" alt="Placeholder image">
                <div class="info-history">
                    <div class="game-title">Trò chơi<span class="separator-history"></span></div>
                    <div class="history-description">Lịch sử hình thành CVVH gắn liền với sự phát triển hơn 50 trò chơi.
                        Từ thư giãn đến cảm giác mạnh, phân bổ đều khắp khuôn viên Đầm Sen.</div>

                </div>
            </div>
            <div class="box-history">
                <img src="{{ asset('/public/images/Rectangle 1506 (1).png') }}" alt="Placeholder image">
                <div class="info-history">
                    <div class="sk-title">Sự kiện<span class="sk-separator-history"></span></div>
                    <div class="history-description">Là nơi tổ chức nhiều kỷ lục Việt Nam như kỷ lục bánh tét, bánh
                        chưng, bánh Noel… Các sự kiện văn hóa lớn như lễ hội: bắn pháo hoa, Cosplay, khinh khí cầu, xe
                        cổ…</div>
                </div>
            </div>
            <div class="box-history">
                <img src="{{ asset('/public/images/Rectangle 1506 (1).png') }}" alt="Placeholder image">
                <div class="info-history">
                    <div class="ct-title">cảnh Trí<span class="ct-separator-history"></span></div>
                    <div class="history-description">Với đủ loại cây xanh, từ bon sai kiểng cổ đến nhiều loài kì hoa dị
                        thảo với các khu vườn xanh mát: Vườn Nam Tú thượng Uyển, Đảo Lan Rừng, Vườn Xương Rồng, Vườn Hoa
                        Châu Âu…</div>
                </div>
            </div>
        </div>
        <div class="row-history">
            <div class="box-history">
                <img src="{{ asset('/public/images/Rectangle 1506 (1).png') }}" alt="Placeholder image">
                <div class="info-history">
                    <div class="cth-title">chim thú<span class="cth-separator-history"></span></div>
                    <div class="history-description">Hơn 100 chủng loại, bao gồm động vật nuôi trồng, động vật hoang dã
                        và động vật quý hiếm: đười ươi, voi, trăng, cá sấu, đà điểu, hưu sao, giang sen…</div>
                </div>
            </div>
            <div class="box-history">
                <img src="{{ asset('/public/images/Rectangle 1506 (1).png') }}" alt="Placeholder image">
                <div class="info-history">
                    <div class="at-title">ẩm thực<span class="at-separator-history"></span></div>
                    <div class="history-description">Được biết đến với nhà hàng Thủy Tạ, và cà phê Vườn Đá. Chuyên phục
                        vụ các món ăn Hoa – Việt, với đội ngũ đầu Bếp kinh nghiệm lâu năm trong ngành.</div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.partials.container')
</div>
@endsection