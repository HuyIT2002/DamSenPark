@extends('layouts.app')

@section('content')
<div class="white-background-3">
    <div class="container-3">
        <img class="centered-image" src="{{ asset('/public/images/image 466.png') }}" alt="Placeholder Image">
    </div>
    <div class="inner-container-ve">
        <div class="title-ve">vé trong công viên</div>
        <div class="line-ve"></div>
    </div>
    <div class="main-container">
        <div class="header-container-2">
            <div class="header-title">Mô tả</div>
        </div>
        <div class="description">Đầm Sen là điểm check-in được ưa chuộng của giới trẻ hiện nay.</div>
    </div>
    <div class="main-ticket">
        <div class="ticket green-border">
            <div class="gradient-background">
                <div class="ticket-title">VÉ THAM QUAN</div>
            </div>
            <div class="ticket-content">
                <div class="ticket-item">
                    <div class="checkbox">
                        <div class="checkmark">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="check">
                                    <path id="Icon" d="M4.5 12.6111L9.42308 17.5L20.5 6.5" stroke="#259E58" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="text-ticket">Tham quan trong ngày</div>
                </div>
                <div class="ticket-item">
                    <div class="checkbox">
                        <div class="checkmark red">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="xmark">
                                    <path id="Icon" d="M6.5 6L18.5 18M18.5 6L6.5 18" stroke="#FF0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="text-ticket light-ticket">
                        Bao gồm trò chơi
                    </div>

                </div>

                <div class="ticket-item">
                    <div class="checkbox">
                        <div class="checkmark red">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="xmark">
                                    <path id="Icon" d="M6.5 6L18.5 18M18.5 6L6.5 18" stroke="#FF0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="text-ticket light-ticket">Dịch vụ xe điện</div>
                </div>
                <div class="prices">
                    <span class="text-bold"> •&nbsp; Mua từ cổng:<br /></span>
                    <span class="text-normal">
                        + 120.000 VNĐ/người (>1.4m) <br />
                    </span>
                    <span class="text-normal">
                        + 80.000 VNĐ/trẻ em (
                        <1.4m) <br />
                    </span>
                    <span class="text-bold">•&nbsp; Mua từ cổng Công viên nước:<br /></span>
                    <span class="text-normal">
                        + 80.000 VNĐ/người (>1.4m)<br />
                    </span>
                    <span class="text-normal">
                        + 50.000 VNĐ/trẻ em (<1.4m) </span>
                </div>
            </div>
        </div>
        <div class="ticket pink-border">
            <div class="pink-background">
                <div class="ticket-title">VÉ TRỌN GÓI</div>
            </div>
            <div class="ticket-content">
                <div class="ticket-item">
                    <div class="checkbox">
                        <div class="checkmark">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="check">
                                    <path id="Icon" d="M4.5 12.6111L9.42308 17.5L20.5 6.5" stroke="#259E58" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="text-ticket">Tham quan trong ngày</div>
                </div>
                <div class="ticket-item">
                    <div class="checkbox">
                        <div class="checkmark red">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="check">
                                    <path id="Icon" d="M4.5 12.6111L9.42308 17.5L20.5 6.5" stroke="#259E58" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="text-ticket">Bao gồm trò chơi</div>
                </div>
                <div class="ticket-item">
                    <div class="checkbox">
                        <div class="checkmark red">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="xmark">
                                    <path id="Icon" d="M6.5 6L18.5 18M18.5 6L6.5 18" stroke="#FF0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="text-ticket light-ticket">Thủy cung</div>
                </div>
                <div class="ticket-item">
                    <div class="checkbox">
                        <div class="checkmark red">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="xw">
                                    <path id="Icon" d="M6.5 6L18.5 18M18.5 6L6.5 18" stroke="#FF0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="text-ticket light-ticket">Dịch vụ xe điện</div>
                </div>
                <div class="prices">
                    <span class="text-bold"> •&nbsp; Mua từ cổng:<br /></span>
                    <span class="text-normal">
                        + 260.000 VNĐ/người (>1.4m) <br />
                    </span>
                    <span class="text-normal">
                        + 180.000 VNĐ/trẻ em (
                        <1.4m) <br />
                    </span>
                    <span class="text-bold">•&nbsp; Mua từ cổng Công viên nước:<br /></span>
                    <span class="text-normal">
                        + 220.000 VNĐ/người (>1.4m)<br />
                    </span>
                    <span class="text-normal">
                        + 150.000 VNĐ/trẻ em (<1.4m) </span> <br />
                            <span class="text-bold">•&nbsp; Mua trong công viên:<br /></span>
                            <span class="text-normal">
                                + 150.000 VNĐ/người<br />
                            </span>

                </div>
            </div>
        </div>
        <div class="ticket blue-border">
            <div class="blue-background">
                <div class="ticket-title">VÉ SIRVER</div>
            </div>
            <div class="ticket-content">
                <div class="ticket-item">
                    <div class="checkbox">
                        <div class="checkmark">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="check">
                                    <path id="Icon" d="M4.5 12.6111L9.42308 17.5L20.5 6.5" stroke="#259E58" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="text-ticket">Tham quan trong ngày</div>
                </div>
                <div class="ticket-item">
                    <div class="checkbox">
                        <div class="checkmark red">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="check">
                                    <path id="Icon" d="M4.5 12.6111L9.42308 17.5L20.5 6.5" stroke="#259E58" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="text-ticket">Bao gồm trò chơi</div>
                </div>
                <div class="ticket-item">
                    <div class="checkbox">
                        <div class="checkmark red">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="check">
                                    <path id="Icon" d="M4.5 12.6111L9.42308 17.5L20.5 6.5" stroke="#259E58" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="text-ticket">Lối đi riêng</div>
                </div>
                <div class="ticket-item">
                    <div class="checkbox">
                        <div class="checkmark red">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="xmark">
                                    <path id="Icon" d="M6.5 6L18.5 18M18.5 6L6.5 18" stroke="#FF0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="text-ticket light-ticket">Thủy cung</div>
                </div>
                <div class="ticket-item">
                    <div class="checkbox">
                        <div class="checkmark red">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="xmark">
                                    <path id="Icon" d="M6.5 6L18.5 18M18.5 6L6.5 18" stroke="#FF0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="text-ticket light-ticket">Massage cá</div>
                </div>
                <div class="ticket-item">
                    <div class="checkbox">
                        <div class="checkmark red">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="xw">
                                    <path id="Icon" d="M6.5 6L18.5 18M18.5 6L6.5 18" stroke="#FF0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="text-ticket light-ticket">Dịch vụ xe điện</div>
                </div>
                <div class="prices">
                    <span class="text-bold"> •&nbsp; Mua từ cổng:<br /></span>
                    <span class="text-normal">
                        + 380.000 VNĐ/người (>1.4m) <br />
                    </span>
                    <span class="text-normal">
                        + 240.000 VNĐ/trẻ em (
                        <1.4m) <br />
                    </span>
                    <span class="text-bold">•&nbsp; Mua từ cổng Công viên nước:<br /></span>
                    <span class="text-normal">
                        + 340.000 VNĐ/người (>1.4m)<br />
                    </span>
                    <span class="text-normal">
                        + 220.000 VNĐ/trẻ em (<1.4m) </span> <br />
                            <span class="text-bold">•&nbsp; Mua trong công viên:<br /></span>
                            <span class="text-normal">
                                + 280.000 VNĐ/người<br />
                            </span>

                </div>
            </div>
        </div>
    </div>
    <div class="note-container">
        <div class="note-title">GHI CHÚ:</div>
        <div class="note-content">
            <span class="note-highlight">Giờ bán vé: </span><span class="note-normal">8 giờ 00 - 17 giờ 30<br /></span>
            <span class="note-highlight">Vé mua từ cổng: </span><span class="note-normal">là vé được bán tại 2 cổng
                chính
                số 1A Lạc Long Quân (hoặc số 3 Hòa Bình), cổng số 2 (nhà hàng Thủy Tạ).<br /></span>
            <span class="note-highlight">Vé mua trong công viên: </span><span class="note-normal">là loại vé được bán
                tại
                các quầy trong công viên. Đây là các loại vé trọn gói đã được trừ vé vào cổng của quý
                khách.<br /></span>
            <span class="note-highlight">Vé từ cổng Công viên nước: </span><span class="note-normal">là loại vé bán từ
                cổng liên thông phía công viên nước. Đây là vé dành cho các du khách vui chơi phía công viên nước, và
                muốn sang CVVH Đầm Sen.<br /></span>
            <span class="note-highlight">>1,4m: </span><span class="note-normal">người cao trên 1,4m<br /></span>
            <span class="note-highlight">
                <1,4m: </span><span class="note-normal">người cao dưới 1,4m<br /></span>
                    <span class="note-highlight">Trẻ em dưới 1m được miễn phí </span><span class="note-normal">(nhưng
                        phải đi cùng với người lớn).<br /></span>
                    <span class="note-highlight">Có vé mời, được giảm 50% vé trọn gói </span><span class="note-normal">(áp dụng mua từ cổng).</span>
        </div>
    </div>
    @include('layouts.partials.container')
</div>
@endsection