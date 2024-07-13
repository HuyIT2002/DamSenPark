@extends('layouts.app')

@section('content')
<div class="white-background-3">
    <div class="container-3">
        <img class="centered-image" src="{{ asset('/public/images/canh-dep/canh-dep-08.png') }}" alt="Placeholder Image">
    </div>
    <div class="inner-container-ve-tc">
        <div class="title-ve-tc">Quảng trường vua Hùng</div>
        <div class="line-ve-tc"></div>
        <div class="features-container">
            <div class="feature">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.83 8.7L15.3 4.17C14.35 3.22 13.04 2.71 11.7 2.78L6.7 3.02C4.7 3.11 3.11 4.7 3.01 6.69L2.77 11.69C2.71 13.03 3.21 14.34 4.16 15.29L8.69 19.82C10.55 21.68 13.57 21.68 15.44 19.82L19.83 15.43C21.7 13.58 21.7 10.56 19.83 8.7ZM9.5 12.38C7.92 12.38 6.62 11.09 6.62 9.5C6.62 7.91 7.92 6.62 9.5 6.62C11.08 6.62 12.38 7.91 12.38 9.5C12.38 11.09 11.08 12.38 9.5 12.38ZM17.53 13.53L13.53 17.53C13.38 17.68 13.19 17.75 13 17.75C12.81 17.75 12.62 17.68 12.47 17.53C12.18 17.24 12.18 16.76 12.47 16.47L16.47 12.47C16.76 12.18 17.24 12.18 17.53 12.47C17.82 12.76 17.82 13.24 17.53 13.53Z" fill="#EC008C" />
                    </svg>
                </div>
                <div class="feature-text">Cảnh đẹp</div>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="icon">
                            <path id="Icon" d="M10 5.83333V10L12.0833 11.25M17.5 10C17.5 14.1421 14.1421 17.5 10 17.5C5.85786 17.5 2.5 14.1421 2.5 10C2.5 5.85786 5.85786 2.5 10 2.5C14.1421 2.5 17.5 5.85786 17.5 10Z" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                    </svg>
                </div>
                <div class="feature-text-gray">10/02/2020</div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="header-container-2">
            <div class="header-title">Mô tả</div>
        </div>
        <div class="description">Quảng trường Vua Hùng trong ngày giỗ quốc tổ</div>
    </div>
    <div class="container-beauty-scene">
        <div class="description-beauty-scene">
            Hàng ngàn du khách đã đến dâng hương trước tượng Hùng Vương tại Quảng trường vua Hùng trong ngày 14/4/2019.
            Đây là quảng trường thứ 3 của CVVH Đầm Sen đưa vào hoạt động. (Trước đó, Đầm Sen đã có quảng trường Âu Lạc
            và quảng trường La Mã chuyên phục vụ sự kiện). Đền thờ này được xem như một cúng phẩm dâng lên trong ngày
            giổ Quốc tổ.
        </div>
        <div class="section-beauty-scene">
            <div class="title-beauty-scene">Ra mắt Quảng trường vua Hùng</div>
            <div class="subsection-beauty-scene">
                <div class="sub-description-beauty-scene">
                    Quảng trường này có tổng diện tích gần 1000m2. Bao gồm sân hành lễ được lát đá Granite với hoa văn
                    mặt trời đặt ở chính giữa. Kế đến là thang rồng, tiết diện bề ngang 4,5 mét, đáp ứng đoàn khách 5
                    hàng. Trên cùng là khu vực dâng hương, được thiết kế 3 đền thờ. Chính giữa là chánh điện với tượng
                    vua Hùng cao 1,7 mét, được làm bằng chất liệu composite phủ đồng, đặt trên bệ đá cao 0,8m.
                </div>
            </div>
            <div class="image-section-beauty-scene">
                <div class="image-container-beauty-scene">
                    <img class="image-beauty-scene" src="{{ asset('/public/images/canh-dep/canh-dep-01.png') }}" />
                </div>
                <div class="caption-beauty-scene">Quảng trường vua Hùng trong ngày giỗ quốc tổ</div>
            </div>
        </div>
        <div class="section-beauty-scene">
            <div class="subsection-beauty-scene">
                <div class="sub-description-beauty-scene">
                    Bức tượng vua Hùng tại Đầm Sen đã được Thạc sĩ – Điêu khắc gia Phạm Văn Út thực hiện. Tác giả đã xây
                    dựng bố cục vua Hùng ngồi trên ngai, cách điệu từ hoa văn trống đồng. Mặt tượng nhìn thẳng thể hiện
                    sự tôn nghiêm. Tay phải nắm chùm bông lúa, ý muốn đề cao một nền văn hóa lúa nước của dân tộc Việt,
                    cho con cháu đời sau phải gìn giữ và tôn vinh. Tay trái để tự nhiên trong tư thế ngồi trao đổi với
                    các Lạc tướng, Lạc hầu. Các hoa văn trang trí trên bộ trang phục, được lấy cảm hứng từ đường nét của
                    nền văn hóa Đông Sơn. Đặc biệt là hoa văn trên trống đồng Ngọc Lũ.
                </div>
            </div>
            <div class="image-row-beauty-scene">
                <div class="left-image-container-beauty-scene">
                    <img class="left-image-beauty-scene" src="{{ asset('/public/images/canh-dep/canh-dep-02.png') }}">
                    <div class="caption-beauty-scene">Bức tượng vua Hùng mới được đặt tại Đầm Sen</div>
                </div>
                <div class="right-image-container-beauty-scene">
                    <img class="right-image-beauty-scene" src="{{ asset('/public/images/canh-dep/canh-dep-03.png') }}" />
                    <div class="caption-beauty-scene">Điêu khắc gia Phạm Văn Út</div>
                </div>
            </div>
            <div class="image-section-beauty-scene">
                <div class="image-container-beauty-scene">
                    <img class="image-beauty-scene" src="{{ asset('/public/images/canh-dep/canh-dep-04.png') }}" />
                </div>
                <div class="caption-beauty-scene">Chánh điện thờ vua Hùng trong ngày giỗ tổ</div>
            </div>
        </div>
        <div class="section-beauty-scene">
            <div class="subsection-beauty-scene">
                <div class="sub-description-beauty-scene">
                    Bên cạnh đó, chủ tịch Hồ Chí Minh từng nói: “Các vua Hùng đã có công dựng nước, Bác cháu ta phải
                    cùng nhau giữ lấy nước” (xem lịch sử câu nói tại đây). Thấu hiểu điều đó, Phuthotourist không chỉ
                    hướng ý thức của du khách đến viếng người có công dựng nước, mà còn muốn nhắc đến công giữ nước của
                    những danh tướng đã làm nên lịch sử. Đó là đền thờ Hưng Đạo Vương, vị vua từng đánh tan hai cuộc xâm
                    lược của quân Nguyên – Mông (năm 1285 và năm 1288). Hưng Đạo Vương còn lưu truyền thế hệ sau bằng
                    bài thơ “Hịch tướng sĩ”.
                </div>
            </div>
            <div class="image-section-beauty-scene">
                <div class="image-container-beauty-scene">
                    <img class="image-beauty-scene" src="{{ asset('/public/images/canh-dep/canh-dep-05.png') }}" />
                </div>
                <div class="caption-beauty-scene">Gian thờ Hưng Đạo Vương đặt bên phải, với bào thơ Hịch Tướng Sĩ</div>
            </div>
        </div>
        <div class="section-beauty-scene">
            <div class="subsection-beauty-scene">
                <div class="sub-description-beauty-scene">
                    Danh tướng thứ hai là Hai Bà Trưng (xem thông tin lịch sử tại đây). Hai nữ anh hùng dân tộc đầu tiên
                    của đất Việt, phất cờ khởi nghĩa. Và lập quốc gia với kinh đô tại Mê Linh. Bà Trưng Trắc lên ngôi Nữ
                    vương, trở thành vị vua nữ đầu tiên trong trong lịch sử Việt Nam. Với danh hiệu Trưng Nữ Vương. Cả
                    hai biểu tượng danh tướng đều được đặt hai bên chánh điện, trong khuôn viên của quảng trường vua
                    Hùng. (xem thêm về lễ khánh thành tượng Hai Bà Trưng tại đây)
                </div>
            </div>
            <div class="image-section-beauty-scene">
                <div class="image-container-beauty-scene">
                    <img class="image-beauty-scene" src="{{ asset('/public/images/canh-dep/canh-dep-06.png') }}" />
                </div>
                <div class="caption-beauty-scene">Tượng Hai Bà Trưng trên mình voi</div>
            </div>
        </div>
        <div class="line-beauty-scene"></div>
        <div class="section-beauty-scene">
            <div class="title-beauty-scene">Ra mắt Quảng trường vua Hùng</div>
            <div class="subsection-beauty-scene">
                <div class="sub-description-beauty-scene">
                    8 giờ sáng ngày 14/4/2019, Phuthotourist cùng UBND Quận 11, Mặt trận tổ quốc VN Quận 11, Viện Lịch
                    sử các dòng họ, đã tổ chức lễ dâng hương đầu tiên trước linh tượng vua Hùng. Và đây cũng là sự kiện
                    ra mắt quảng trường Hùng Vương tại Đầm Sen. Hàng ngàn người dân và du khách đã đem lễ vật đến đây để
                    dâng lên quốc tổ, cùng ôn lại lịch sử dân tộc ngàn năm.
                </div>
            </div>
        </div>
        <div class="container-fellow-vd">
            <div class="main-content-fellow-vd">
                <div class="images-wrapper-fellow-vd">
                    <div class="custom-chevron-left-fellow-vd">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="chevron-left" opacity="0.6">
                                <rect width="64" height="64" rx="32" fill="white" />
                                <path id="Icon" d="M36.333 18.6641L24.333 31.9974L36.333 45.3307" stroke="#005F33" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="image-column-fellow-vd">
                        <div class="image-container-fellow-vd">
                            <img class="image-fellow-vd" src="{{ asset('/public/images/canh-dep/canh-dep-001.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow-vd">Cảnh làm lễ giỗ quốc tổ tại quảng trường vua Hùng 2019
                            </div>
                        </div>
                        <div class="image-container-fellow-vd">
                            <img class="image-fellow-vd" src="{{ asset('/public/images/canh-dep/canh-dep-002.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow-vd">Xem phim Cinemax 8D tại CVVH Đầm Sen</div>
                        </div>
                        <div class="image-container-fellow-vd">
                            <img class="image-fellow-vd" src="{{ asset('/public/images/canh-dep/canh-dep-003.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow-vd"> Nhà hàng Thủy Tạ Đầm Sen</div>
                        </div>
                        <div class="image-container-fellow-vd">
                            <img class="image-fellow-vd" src="{{ asset('/public/images/canh-dep/canh-dep-004.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow-vd">Xem phim Cinemax 8D tại CVVH Đầm Sen</div>
                        </div>
                        <div class="image-container-fellow-vd">
                            <img class="image-fellow-vd" src="{{ asset('/public/images/canh-dep/canh-dep-005.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow-vd">Xem phim Cinemax 8D tại CVVH Đầm Sen</div>
                        </div>
                        <div class="image-container-fellow-vd">
                            <img class="image-fellow-vd" src="{{ asset('/public/images/canh-dep/canh-dep-006.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow-vd">Xem phim Cinemax 8D tại CVVH Đầm Sen </div>
                        </div>
                    </div>
                    <div class="custom-chevron-right-fellow-vd">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="chevron-left" opacity="0.6">
                                <rect x="64" y="64" width="64" height="64" rx="32" transform="rotate(180 64 64)" fill="white" />
                                <path id="Icon" d="M27.667 45.3359L39.667 32.0026L27.667 18.6693" stroke="#005F33" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="new-section-vd">
                    <div class="border-box-vd"></div>
                    <div class="image-row-vd">
                        <div class="image-column-vd">
                            <div class="image-container-column-fellow-vd">
                                <img class="image-colum-fellow-vd" src="{{ asset('/public/images/canh-dep/canh-dep-006.png') }}" />
                                <div class="image-overlay-vd"></div>
                            </div>
                        </div>
                        <div class="image-column-vd">
                            <div class="image-container-column-fellow-vd">
                                <img class="image-colum-fellow-vd" src="{{ asset('/public/images/canh-dep/canh-dep-005.png') }}" />
                                <div class="image-overlay-vd"></div>
                            </div>
                        </div>
                        <div class="image-column-vd">
                            <div class="image-container-column-fellow-vd">
                                <img class="image-colum-fellow-vd" src="{{ asset('/public/images/canh-dep/canh-dep-001.png') }}" />
                                <div class="image-overlay-vd"></div>
                            </div>
                        </div>
                        <div class="image-column-vd">
                            <div class="image-container-column-fellow-vd">
                                <img class="image-colum-fellow-vd" src="{{ asset('/public/images/canh-dep/canh-dep-002.png') }}" />
                                <div class="image-overlay-vd"></div>
                            </div>
                        </div>
                        <div class="image-column-vd">
                            <div class="image-container-column-fellow-vd">
                                <img class="image-colum-fellow-vd" src="{{ asset('/public/images/canh-dep/canh-dep-003.png') }}" />
                                <div class="image-overlay-vd"></div>
                            </div>
                        </div>
                        <div class="image-column-vd">
                            <div class="image-container-column-fellow-vd">
                                <img class="image-colum-fellow-vd" src="{{ asset('/public/images/canh-dep/canh-dep-004.png') }}" />
                                <div class="image-overlay-vd"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="section-beauty-scene">
            <div class="subsection-beauty-scene">
                <div class="sub-description-beauty-scene">
                    Bên cạnh đó, Đầm Sen cũng tổ chức thi nấu bánh chưng với sự tham gia của các đơn vị trong quận 11.
                    Tổng số bánh chưng 3000 chiếc đã được phát lộc cho du khách đến dâng hương tại quảng trường ngay
                    trong buổi sáng giỗ tổ.
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
                            <img class="image-fellow" src="{{ asset('/public/images/canh-dep/image-cd-2.jpg') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow">Quãng trường Vua Hùng
                            </div>
                        </div>
                        <div class="image-container-fellow">
                            <img class="image-fellow" src="{{ asset('/public/images/canh-dep/image-cd-2.jpg') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow">Xem phim Cinemax 8D tại CVVH Đầm Sen</div>
                        </div>
                        <div class="image-container-fellow">
                            <img class="image-fellow" src="{{ asset('/public/images/canh-dep/image-cd-30.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow"> Nhà hàng Thủy Tạ Đầm Sen</div>
                        </div>
                        <div class="image-container-fellow">
                            <img class="image-fellow" src="{{ asset('/public/images/canh-dep/image-cd-40.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow">Xem phim Cinemax 8D tại CVVH Đầm Sen</div>
                        </div>
                        <div class="image-container-fellow">
                            <img class="image-fellow" src="{{ asset('/public/images/canh-dep/image-cd-50.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow">Xem phim Cinemax 8D tại CVVH Đầm Sen</div>
                        </div>
                        <div class="image-container-fellow">
                            <img class="image-fellow" src="{{ asset('/public/images/canh-dep/image-cd-60.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow">Xem phim Cinemax 8D tại CVVH Đầm Sen </div>
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
                    <div class="border-box"></div>
                    <div class="image-row">
                        <div class="image-column">
                            <div class="image-container-column-fellow">
                                <img class="image-colum-fellow" src="{{ asset('/public/images/canh-dep/image-cd-6.jpg') }}" />
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                        <div class="image-column">
                            <div class="image-container-column-fellow">
                                <img class="image-colum-fellow" src="{{ asset('/public/images/canh-dep/image-cd-5.jpg') }}" />
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                        <div class="image-column">
                            <div class="image-container-column-fellow">
                                <img class="image-colum-fellow" src="{{ asset('/public/images/canh-dep/image-cd-2.jpg') }}" />
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                        <div class="image-column">
                            <div class="image-container-column-fellow">
                                <img class="image-colum-fellow" src="{{ asset('/public/images/canh-dep/image-cd-2.jpg') }}" />
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                        <div class="image-column">
                            <div class="image-container-column-fellow">
                                <img class="image-colum-fellow" src="{{ asset('/public/images/canh-dep/image-cd-2.jpg') }}" />
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                        <div class="image-column">
                            <div class="image-container-column-fellow">
                                <img class="image-colum-fellow" src="{{ asset('/public/images/canh-dep/image-cd-2.jpg') }}" />
                                <div class="image-overlay"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="section-beauty-scene">
            <div class="subsection-beauty-scene">
                <div class="sub-description-beauty-scene">
                    Trước đó, Đầm Sen cũng tổ chức lễ diễu hành đặc biệt vào chiều ngày 13/4/2019. Buổi diễn hành này
                    nhằm giới thiệu quảng trường vua Hùng với nhân dân trên địa bàn quận 11.
                </div>
            </div>
        </div>
        <div class="container-fellow-cde">
            <div class="main-content-fellow-cde">
                <div class="images-wrapper-fellow-cde">
                    <div class="custom-chevron-left-fellow-cde">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="chevron-left" opacity="0.6">
                                <rect width="64" height="64" rx="32" fill="white" />
                                <path id="Icon" d="M36.333 18.6641L24.333 31.9974L36.333 45.3307" stroke="#005F33" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="image-column-fellow-cde">
                        <div class="image-container-fellow-cde">
                            <img class="image-fellow" src="{{ asset('/public/images/canh-dep/image-cd-10.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow">Du khách đến dâng hương nhận lộc bánh chưng từ Đầm Sen
                            </div>
                        </div>
                        <div class="image-container-fellow-cde">
                            <img class="image-fellow" src="{{ asset('/public/images/canh-dep/image-cd-20.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow">Xem phim Cinemax 8D tại CVVH Đầm Sen</div>
                        </div>
                        <div class="image-container-fellow-cde">
                            <img class="image-fellow" src="{{ asset('/public/images/canh-dep/image-cd-30.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow"> Nhà hàng Thủy Tạ Đầm Sen</div>
                        </div>
                        <div class="image-container-fellow-cde">
                            <img class="image-fellow" src="{{ asset('/public/images/canh-dep/image-cd-40.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow">Xem phim Cinemax 8D tại CVVH Đầm Sen</div>
                        </div>
                        <div class="image-container-fellow-cde">
                            <img class="image-fellow" src="{{ asset('/public/images/canh-dep/image-cd-50.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow">Xem phim Cinemax 8D tại CVVH Đầm Sen</div>
                        </div>
                        <div class="image-container-fellow-cde">
                            <img class="image-fellow" src="{{ asset('/public/images/canh-dep/image-cd-60.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow">Xem phim Cinemax 8D tại CVVH Đầm Sen </div>
                        </div>
                    </div>
                    <div class="custom-chevron-right-fellow-cde">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="chevron-left" opacity="0.6">
                                <rect x="64" y="64" width="64" height="64" rx="32" transform="rotate(180 64 64)" fill="white" />
                                <path id="Icon" d="M27.667 45.3359L39.667 32.0026L27.667 18.6693" stroke="#005F33" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="new-section">
                    <div class="border-box"></div>
                    <div class="image-row">
                        <div class="image-column">
                            <div class="image-container-column-fellow">
                                <img class="image-colum-fellow" src="{{ asset('/public/images/canh-dep/image-cd-60.png') }}" />
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                        <div class="image-column">
                            <div class="image-container-column-fellow">
                                <img class="image-colum-fellow" src="{{ asset('/public/images/canh-dep/image-cd-50.png') }}" />
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                        <div class="image-column">
                            <div class="image-container-column-fellow">
                                <img class="image-colum-fellow" src="{{ asset('/public/images/canh-dep/image-cd-10.png') }}" />
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                        <div class="image-column">
                            <div class="image-container-column-fellow">
                                <img class="image-colum-fellow" src="{{ asset('/public/images/canh-dep/image-cd-20.png') }}" />
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                        <div class="image-column">
                            <div class="image-container-column-fellow">
                                <img class="image-colum-fellow" src="{{ asset('/public/images/canh-dep/image-cd-30.png') }}" />
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                        <div class="image-column">
                            <div class="image-container-column-fellow">
                                <img class="image-colum-fellow" src="{{ asset('/public/images/canh-dep/image-cd-40.png') }}" />
                                <div class="image-overlay"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="section-beauty-scene">
            <div class="title-beauty-scene">Từ chiếc bánh chưng khổng lồ</div>
            <div class="subsection-beauty-scene">
                <div class="sub-description-beauty-scene">
                    Trước 2007, Phuthotourist từng tự tổ chức ngày giổ tổ Hùng Vương tại Đầm Sen vào ngày 10/3 âm lịch.
                    Với mục đích ban đầu là tạo địa điểm để nhân viên Phuthotourist và những du khách tưởng nhớ tổ tiên
                    dân tộc. Số lượng khách tham dự lúc bấy giờ lên đến cả chục ngàn người, vượt xa dự tính ban đầu.
                </div>
            </div>
        </div>
        <div class="container-fellow-bc">
            <div class="main-content-fellow-bc">
                <div class="images-wrapper-fellow-bc">
                    <div class="custom-chevron-left-fellow-bc">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="chevron-left" opacity="0.6">
                                <rect width="64" height="64" rx="32" fill="white" />
                                <path id="Icon" d="M36.333 18.6641L24.333 31.9974L36.333 45.3307" stroke="#005F33" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="image-column-fellow-bc">
                        <div class="image-container-fellow-bc">
                            <img class="image-fellow" src="{{ asset('/public/images/canh-dep/image-bc-10.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow">Làm chiếc bánh chưng khổng lồ tại Đầm Sen năm 2016
                            </div>
                        </div>
                        <div class="image-container-fellow-bc">
                            <img class="image-fellow" src="{{ asset('/public/images/canh-dep/image-bc-50.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow">Xem phim Cinemax 8D tại CVVH Đầm Sen</div>
                        </div>
                        <div class="image-container-fellow-bc">
                            <img class="image-fellow" src="{{ asset('/public/images/canh-dep/image-bc-60.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow"> Nhà hàng Thủy Tạ Đầm Sen</div>
                        </div>
                        <div class="image-container-fellow-bc">
                            <img class="image-fellow" src="{{ asset('/public/images/canh-dep/image-bc-50.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow">Xem phim Cinemax 8D tại CVVH Đầm Sen</div>
                        </div>
                        <div class="image-container-fellow-bc">
                            <img class="image-fellow" src="{{ asset('/public/images/canh-dep/image-bc-60.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow">Xem phim Cinemax 8D tại CVVH Đầm Sen</div>
                        </div>
                        <div class="image-container-fellow-bc">
                            <img class="image-fellow" src="{{ asset('/public/images/canh-dep/image-bc-50.png') }}" alt="Placeholder Image">
                            <div class="image-caption-fellow">Xem phim Cinemax 8D tại CVVH Đầm Sen </div>
                        </div>
                    </div>
                    <div class="custom-chevron-right-fellow-bc">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="chevron-left" opacity="0.6">
                                <rect x="64" y="64" width="64" height="64" rx="32" transform="rotate(180 64 64)" fill="white" />
                                <path id="Icon" d="M27.667 45.3359L39.667 32.0026L27.667 18.6693" stroke="#005F33" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="new-section">
                    <div class="border-box"></div>
                    <div class="image-row">
                        <div class="image-column">
                            <div class="image-container-column-fellow">
                                <img class="image-colum-fellow" src="{{ asset('/public/images/canh-dep/image-bc-60.png') }}" />
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                        <div class="image-column">
                            <div class="image-container-column-fellow">
                                <img class="image-colum-fellow" src="{{ asset('/public/images/canh-dep/image-bc-50.png') }}" />
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                        <div class="image-column">
                            <div class="image-container-column-fellow">
                                <img class="image-colum-fellow" src="{{ asset('/public/images/canh-dep/image-bc-10.png') }}" />
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                        <div class="image-column">
                            <div class="image-container-column-fellow">
                                <img class="image-colum-fellow" src="{{ asset('/public/images/canh-dep/image-bc-50.png') }}" />
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                        <div class="image-column">
                            <div class="image-container-column-fellow">
                                <img class="image-colum-fellow" src="{{ asset('/public/images/canh-dep/image-bc-60.png') }}" />
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                        <div class="image-column">
                            <div class="image-container-column-fellow">
                                <img class="image-colum-fellow" src="{{ asset('/public/images/canh-dep/image-bc-50.png') }}" />
                                <div class="image-overlay"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="section-beauty-scene">
            <div class="subsection-beauty-scene">
                <div class="sub-description-beauty-scene">
                    Sau khi Quốc Hội quyết định công nhận ngày quốc tổ vào tháng 4/2007, Phuthotourist đã phối hợp với
                    UBMT Tổ Quốc Quận 11, tổ chức nhiều hoạt động lớn hơn. Tuy nhiên, Đầm Sen vẫn mong muốn làm được
                    cống vật gì xứng đáng. Và phải mang ý nghĩa góp công sức của tập thể. Vậy là ý tưởng về chiếc bánh
                    chưng khổng lồ ra đời từ những năm đầu 2010. Và đến năm 2016, Đầm Sen đã xác lập kỷ lục Guinness Thế
                    giới với chiếc bánh chưng khổng lồ nặng nhất: 2,5 Tấn. Để làm chiếc bánh chưng này, đã có hơn 50
                    người với nhiều công đoạn gói, nấu bánh khác thường. Sau đó luộc suốt 3 ngày liên tục để dâng cúng
                    Quốc tổ.
                </div>
            </div>
        </div>
        <div class="section-beauty-scene">
            <div class="title-beauty-scene">Đến nhu cầu cần một đền thờ vua Hùng</div>
            <div class="subsection-beauty-scene">
                <div class="sub-description-beauty-scene">
                    Từ những thành công đó, Phuthotourist lại tiếp tục suy nghĩ: Nếu như nhà thờ không thể thiếu tượng
                    chúa, Đình chùa không thể vắng tượng phật. Thì một nơi mà hàng ngàn người dân cùng hướng về tổ tiên
                    lại càng không thể thiếu một linh tượng.
                </div>
            </div>
            <div class="image-section-beauty-scene">
                <div class="image-container-beauty-scene">
                    <img class="image-beauty-scene" src="{{ asset('/public/images/canh-dep/canh-dep-010.png') }}" />
                </div>
                <div class="caption-beauty-scene">Các vị lãnh đạo và đại biểu lên dâng hương trước linh tượng vua Hùng
                    tại Đầm Sen</div>
            </div>
        </div>
        <div class="section-beauty-scene">
            <div class="subsection-beauty-scene">
                <div class="sub-description-beauty-scene">
                    Qua một khảo sát, cho thấy các địa điểm thờ phụng vua Hùng chỉ tập trung khách viếng vào ngày 10/3
                    âm lịch. Còn những ngày thường thì do mưu sinh cuộc sống, nên ít người lui tới. Thời gian rảnh rỗi
                    chủ yếu vui chơi để phục hồi sức khỏe làm việc. Vì vậy, việc xây dựng một đền thờ vua Hùng vào khu
                    vui chơi giải trí là việc nên làm. Khi du khách dạo chơi qua đây, sẽ dành vài phút tưởng nhớ đến các
                    bậc anh linh đất Việt. Và truyền dạy cho con trẻ về chân dung của những vị vua nhân ái của đất nước.
                </div>
            </div>
        </div>
        <div class="section-beauty-scene">
            <div class="title-beauty-scene">Những khó khăn khi thực hiện</div>
            <div class="subsection-beauty-scene">
                <div class="sub-description-beauty-scene">
                    Mặc dù đã lên phương án xây dựng một Quảng trường vua Hùng từ nhiều năm. Nhưng khó khăn nhất là vấn
                    đề chân dung của vua Hùng. Trong nhận thức của người Việt, một vị vua cha phải mang những nét anh
                    minh và đức độ; nghiêm khắc nhưng bao dung; hiền hậu nhưng quyết đoán. Để lột tả được những nét đặc
                    trưng đó, quả là điều không dễ. Điều này đã được bàn đi bàn lại, từ đường nét gương mặt; trang phục;
                    vóc dáng; tư thế; cho đến cả chất liệu sao cho dễ di chuyển.
                </div>
            </div>
            <div class="image-section-beauty-scene">
                <div class="image-container-beauty-scene">
                    <img class="image-beauty-scene" src="{{ asset('/public/images/canh-dep/canh-dep-07.png') }}" />
                </div>
                <div class="caption-beauty-scene">Sân hành lễ với sức chứa hàng ngàn người trong ngày đầu tiên ra mắt
                    quảng trường vua Hùng tại Đầm Sen</div>
            </div>
        </div>
        <div class="section-beauty-scene">
            <div class="subsection-beauty-scene">
                <div class="sub-description-beauty-scene">
                    Khó khăn kế tiếp là mặt bằng để xây dựng đền thờ. Với một nơi quy tụ mọi tầng lớp nhân dân đến vui
                    chơi như Đầm Sen, thì việc tìm vị trí xây dựng khu linh thiêng, trang trọng không phải dễ. Đặc biệt
                    là khi ý thức người dân về bảo vệ môi trường cảnh quan chưa cao. Việc xả rác bừa bãi, ăn nằm vạ vật
                    nơi linh thiêng, chưa kể việc khắc tên vẽ bậy vẫn thường diễn ra ở nhiều nơi tôn nghiêm khiến ban
                    lãnh đạo công ty phải suy nghĩ. </br>
                    Phuthotourist đã phối hợp với Viện nghiên cứu lịch sử, viện lịch sử dòng họ… để tìm giải pháp. Đồng
                    thời tìm kiếm những nhà điêu khắc có kinh nghiệm để cùng bàn bạc ý tưởng; phác họa nên một chân dung
                    vị vua Hùng dân tộc. Và cuối cùng, ngày 14/4/2019, Quảng trường vua Hùng chính thức ra mắt tại Đầm
                    Sen. Mở thêm một địa điểm mới để người dân đến đây dâng hương trong những ngày giỗ quốc tổ.
                </div>
            </div>
        </div>
        <div class="unique-container-fellow-vd">
            <div class="unique-item-fellow">
                <div class="custom-rotated-left-fellow">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Arrow Left">
                            <path id="icon" fill-rule="evenodd" clip-rule="evenodd" d="M8.62155 10.5001H21.5002V13.5001H8.62155L13.5609 18.4395L11.4396 20.5608L2.87891 12.0001L11.4396 3.43945L13.5609 5.56077L8.62155 10.5001Z" fill="#EC008C" />
                        </g>
                    </svg>
                </div>
                <div class="custom-text-left">Địa Điểm Sống Ảo</div>
            </div>
            <div class="unique-item-fellow">
                <div class="custom-text-right">Quảng Trường Âu Lạc</div>
                <div class="custom-rotated-right-fellow">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Arrow Right">
                            <path id="icon" fill-rule="evenodd" clip-rule="evenodd" d="M15.9775 13.5563H3.42383V10.4423H15.9775L11.1628 5.31522L13.2306 3.11328L21.5752 11.9993L13.2306 20.8853L11.1628 18.6833L15.9775 13.5563Z" fill="#EC008C" />
                        </g>
                    </svg>

                </div>
            </div>
        </div>
        <div class="recommendation-container-bc">
            <div class="recommendation-title">Có thể bạn thích</div>
            <div class="recommendation-items-container">
                <div class="recommendation-item">
                    <img class="recommendation-item-image" src="https://via.placeholder.com/350x240" />
                    <div class="recommendation-item-details">
                        <div class="recommendation-item-header">
                            <div class="recommendation-item-title">Roller Coaster</div>
                            <div class="recommendation-item-date">10/02/2020</div>
                        </div>
                        <div class="recommendation-item-footer">
                            <div class="recommendation-icon-container">
                                <div class="recommendation-icon-background"></div>
                                <div class="recommendation-icon-overlay"></div>
                            </div>
                            <div class="custom-icon-container">
                                <div class="custom-tag-icon">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.83 8.7L15.3 4.17C14.35 3.22 13.04 2.71 11.7 2.78L6.7 3.02C4.7 3.11 3.11 4.7 3.01 6.69L2.77 11.69C2.71 13.03 3.21 14.34 4.16 15.29L8.69 19.82C10.55 21.68 13.57 21.68 15.44 19.82L19.83 15.43C21.7 13.58 21.7 10.56 19.83 8.7ZM9.5 12.38C7.92 12.38 6.62 11.09 6.62 9.5C6.62 7.91 7.92 6.62 9.5 6.62C11.08 6.62 12.38 7.91 12.38 9.5C12.38 11.09 11.08 12.38 9.5 12.38ZM17.53 13.53L13.53 17.53C13.38 17.68 13.19 17.75 13 17.75C12.81 17.75 12.62 17.68 12.47 17.53C12.18 17.24 12.18 16.76 12.47 16.47L16.47 12.47C16.76 12.18 17.24 12.18 17.53 12.47C17.82 12.76 17.82 13.24 17.53 13.53Z" fill="#EC008C" />
                                    </svg>
                                </div>
                                <div class="custom-text">
                                    Cảnh đẹp
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="recommendation-item">
                    <img class="recommendation-item-image" src="https://via.placeholder.com/350x240" />
                    <div class="recommendation-item-details">
                        <div class="recommendation-item-header">
                            <div class="recommendation-item-title">Roller Coaster</div>
                            <div class="recommendation-item-date">10/02/2020</div>
                        </div>
                        <div class="recommendation-item-footer">
                            <div class="recommendation-icon-container">
                                <div class="recommendation-icon-background"></div>
                                <div class="recommendation-icon-overlay"></div>
                            </div>
                            <div class="custom-icon-container">
                                <div class="custom-tag-icon">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.83 8.7L15.3 4.17C14.35 3.22 13.04 2.71 11.7 2.78L6.7 3.02C4.7 3.11 3.11 4.7 3.01 6.69L2.77 11.69C2.71 13.03 3.21 14.34 4.16 15.29L8.69 19.82C10.55 21.68 13.57 21.68 15.44 19.82L19.83 15.43C21.7 13.58 21.7 10.56 19.83 8.7ZM9.5 12.38C7.92 12.38 6.62 11.09 6.62 9.5C6.62 7.91 7.92 6.62 9.5 6.62C11.08 6.62 12.38 7.91 12.38 9.5C12.38 11.09 11.08 12.38 9.5 12.38ZM17.53 13.53L13.53 17.53C13.38 17.68 13.19 17.75 13 17.75C12.81 17.75 12.62 17.68 12.47 17.53C12.18 17.24 12.18 16.76 12.47 16.47L16.47 12.47C16.76 12.18 17.24 12.18 17.53 12.47C17.82 12.76 17.82 13.24 17.53 13.53Z" fill="#EC008C" />
                                    </svg>
                                </div>
                                <div class="custom-text">
                                    Cảnh đẹp
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="recommendation-item">
                    <img class="recommendation-item-image" src="https://via.placeholder.com/350x240" />
                    <div class="recommendation-item-details">
                        <div class="recommendation-item-header">
                            <div class="recommendation-item-title">Roller Coaster</div>
                            <div class="recommendation-item-date">10/02/2020</div>
                        </div>
                        <div class="recommendation-item-footer">
                            <div class="recommendation-icon-container">
                                <div class="recommendation-icon-background"></div>
                                <div class="recommendation-icon-overlay"></div>
                            </div>
                            <div class="custom-icon-container">
                                <div class="custom-tag-icon">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.83 8.7L15.3 4.17C14.35 3.22 13.04 2.71 11.7 2.78L6.7 3.02C4.7 3.11 3.11 4.7 3.01 6.69L2.77 11.69C2.71 13.03 3.21 14.34 4.16 15.29L8.69 19.82C10.55 21.68 13.57 21.68 15.44 19.82L19.83 15.43C21.7 13.58 21.7 10.56 19.83 8.7ZM9.5 12.38C7.92 12.38 6.62 11.09 6.62 9.5C6.62 7.91 7.92 6.62 9.5 6.62C11.08 6.62 12.38 7.91 12.38 9.5C12.38 11.09 11.08 12.38 9.5 12.38ZM17.53 13.53L13.53 17.53C13.38 17.68 13.19 17.75 13 17.75C12.81 17.75 12.62 17.68 12.47 17.53C12.18 17.24 12.18 16.76 12.47 16.47L16.47 12.47C16.76 12.18 17.24 12.18 17.53 12.47C17.82 12.76 17.82 13.24 17.53 13.53Z" fill="#EC008C" />
                                    </svg>
                                </div>
                                <div class="custom-text">
                                    Cảnh đẹp
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="recommendation-item">
                    <img class="recommendation-item-image" src="https://via.placeholder.com/350x240" />
                    <div class="recommendation-item-details">
                        <div class="recommendation-item-header">
                            <div class="recommendation-item-title">Roller Coaster</div>
                            <div class="recommendation-item-date">10/02/2020</div>
                        </div>
                        <div class="recommendation-item-footer">
                            <div class="recommendation-icon-container">
                                <div class="recommendation-icon-background"></div>
                                <div class="recommendation-icon-overlay"></div>
                            </div>
                            <div class="recommendation-item-category">Cảm giác mạnh</div>
                        </div>
                    </div>
                </div>
                <div class="recommendation-item">
                    <img class="recommendation-item-image" src="https://via.placeholder.com/350x240" />
                    <div class="recommendation-item-details">
                        <div class="recommendation-item-header">
                            <div class="recommendation-item-title">Roller Coaster 5</div>
                            <div class="recommendation-item-date">10/02/2020</div>
                        </div>
                        <div class="recommendation-item-footer">
                            <div class="recommendation-icon-container">
                                <div class="recommendation-icon-background"></div>
                                <div class="recommendation-icon-overlay"></div>
                            </div>
                            <div class="custom-icon-container">
                                <div class="custom-tag-icon">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.83 8.7L15.3 4.17C14.35 3.22 13.04 2.71 11.7 2.78L6.7 3.02C4.7 3.11 3.11 4.7 3.01 6.69L2.77 11.69C2.71 13.03 3.21 14.34 4.16 15.29L8.69 19.82C10.55 21.68 13.57 21.68 15.44 19.82L19.83 15.43C21.7 13.58 21.7 10.56 19.83 8.7ZM9.5 12.38C7.92 12.38 6.62 11.09 6.62 9.5C6.62 7.91 7.92 6.62 9.5 6.62C11.08 6.62 12.38 7.91 12.38 9.5C12.38 11.09 11.08 12.38 9.5 12.38ZM17.53 13.53L13.53 17.53C13.38 17.68 13.19 17.75 13 17.75C12.81 17.75 12.62 17.68 12.47 17.53C12.18 17.24 12.18 16.76 12.47 16.47L16.47 12.47C16.76 12.18 17.24 12.18 17.53 12.47C17.82 12.76 17.82 13.24 17.53 13.53Z" fill="#EC008C" />
                                    </svg>
                                </div>
                                <div class="custom-text">
                                    Cảnh đẹp
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="recommendation-item">
                    <img class="recommendation-item-image" src="https://via.placeholder.com/350x240" />
                    <div class="recommendation-item-details">
                        <div class="recommendation-item-header">
                            <div class="recommendation-item-title">Roller Coaster 6</div>
                            <div c lass="recommendation-item-date">10/02/2020</div>
                        </div>
                        <div class="recommendation-item-footer">
                            <div class="recommendation-icon-container">
                                <div class="recommendation-icon-background"></div>
                                <div class="recommendation-icon-overlay"></div>
                            </div>
                            <div class="custom-icon-container">
                                <div class="custom-tag-icon">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.83 8.7L15.3 4.17C14.35 3.22 13.04 2.71 11.7 2.78L6.7 3.02C4.7 3.11 3.11 4.7 3.01 6.69L2.77 11.69C2.71 13.03 3.21 14.34 4.16 15.29L8.69 19.82C10.55 21.68 13.57 21.68 15.44 19.82L19.83 15.43C21.7 13.58 21.7 10.56 19.83 8.7ZM9.5 12.38C7.92 12.38 6.62 11.09 6.62 9.5C6.62 7.91 7.92 6.62 9.5 6.62C11.08 6.62 12.38 7.91 12.38 9.5C12.38 11.09 11.08 12.38 9.5 12.38ZM17.53 13.53L13.53 17.53C13.38 17.68 13.19 17.75 13 17.75C12.81 17.75 12.62 17.68 12.47 17.53C12.18 17.24 12.18 16.76 12.47 16.47L16.47 12.47C16.76 12.18 17.24 12.18 17.53 12.47C17.82 12.76 17.82 13.24 17.53 13.53Z" fill="#EC008C" />
                                    </svg>
                                </div>
                                <div class="custom-text">
                                    Cảnh đẹp
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="chevrons-container-bc">
            <div class="custom-chevron-left">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="chevron-left" opacity="0.6">
                        <rect width="64" height="64" rx="32" fill="white" />
                        <path id="Icon" d="M36.333 18.6641L24.333 31.9974L36.333 45.3307" stroke="#259E58" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
            </div>
            <div class="custom-chevron-right">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="chevron-left" opacity="0.6">
                        <rect x="64" y="64" width="64" height="64" rx="32" transform="rotate(180 64 64)" fill="white" />
                        <path id="Icon" d="M27.667 45.3359L39.667 32.0026L27.667 18.6693" stroke="#259E58" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
            </div>
        </div>
    </div>

    @include('layouts.partials.container')
</div>
@endsection