"use strict";

$(window).on("load", function () {
    /*------------------
       keyframe  phone
    --------------------*/

    $(document).ready(function () {
        let element = $("#phoneFlip");
        let isAnimating = false;

        function startAnimation() {
            if (!isAnimating) {
                isAnimating = true;
                element.addClass("sway-animation");

                setTimeout(function () {
                    element.removeClass("sway-animation");
                    isAnimating = false;
                }, 1500); // 1.5s là thời gian của một chu kỳ (2 lần lắc)
            }
        }

        setInterval(startAnimation, 3500); // Lặp lại sau mỗi 3.5 giây (1.5s lắc + 2s dừng)
    });

$(document).ready(function() {
    var timeout;

    $('.menu-item').hover(
        function() {
            clearTimeout(timeout);
            $('.submenu-container').hide();

            $(this).find('.submenu-container').css('display', 'block').css('opacity', 1);
        },
        function() {
            timeout = setTimeout(() => {
                $(this).find('.submenu-container').css('display', 'none').css('opacity', 0);
            }, 200);
        }
    );
    $('.submenu-container').hover(
        function() {
            clearTimeout(timeout);
            $(this).css('display', 'block').css('opacity', 1);
        },
        function() {
            $(this).css('display', 'none').css('opacity', 0);
        }
    );
});
$(document).ready(function() {
    $('.menu-title').click(function() {
        $('.menu-title').removeClass('active');
        $('.arrow-icon').removeClass('active');
        $(this).addClass('active');
        $(this).siblings('.arrow-icon').addClass('active');
    });
});

    /*------------------
      chuyển ảnh
    --------------------*/
$(document).ready(function() {
    var currentIndex = 0; // Biến để lưu trữ vị trí hiện tại của ảnh đầu tiên

    // Ẩn tất cả các ảnh ngoại trừ ảnh đầu tiên ban đầu
    $('.image-slider img').not(':first-child').css('display', 'none');

    // Lấy số lượng ảnh trong slider và tạo biểu tượng container tương ứng
    var numImages = $('.image-slider img').length;
    for (var i = 0; i < numImages; i++) {
        $('.icons-wrapper').append('<div class="icon-container"></div>');
    }

    // Cập nhật màu sắc của biểu tượng và hiển thị ảnh khi click vào biểu tượng
    $('.icon-container').eq(currentIndex).addClass('active'); // Hiển thị màu cho ảnh đầu tiên ban đầu
    $('.icon-container').click(function() {
        var index = $(this).index();

        // Kiểm tra nếu đang click vào biểu tượng của ảnh hiện tại thì không làm gì
        if (index === currentIndex) {
            return;
        }

        // Ẩn ảnh hiện tại
        $('.image-slider img').eq(currentIndex).css('display', 'none');
        // Bỏ class active khỏi biểu tượng hiện tại
        $('.icon-container').eq(currentIndex).removeClass('active');

        // Cập nhật vị trí hiện tại và hiển thị ảnh mới
        currentIndex = index;
        $('.image-slider img').eq(currentIndex).css('display', 'block');
        // Thêm class active cho biểu tượng mới
        $('.icon-container').eq(currentIndex).addClass('active');

        // Đặt lại màu fill của tất cả các biểu tượng về màu trắng
        $('.icon-container').not($('.icon-container').eq(currentIndex)).removeClass('active');
    });

    // Xử lý khi click vào mũi tên chevron trái
    $('.triangle').click(function() {
        // Ẩn ảnh hiện tại
        $('.image-slider img').eq(currentIndex).css('display', 'none');
        // Bỏ class active khỏi biểu tượng hiện tại
        $('.icon-container').eq(currentIndex).removeClass('active');

        // Giảm vị trí hiện tại xuống 1, nếu nhỏ hơn 0 thì quay lại ảnh cuối cùng
        currentIndex = (currentIndex === 0) ? numImages - 1 : currentIndex - 1;

        // Hiển thị ảnh mới
        $('.image-slider img').eq(currentIndex).css('display', 'block');
        // Thêm class active cho biểu tượng mới
        $('.icon-container').eq(currentIndex).addClass('active');

        // Đặt lại màu fill của tất cả các biểu tượng về màu trắng
        $('.icon-container').not($('.icon-container').eq(currentIndex)).removeClass('active');
    });

    // Xử lý khi click vào mũi tên chevron phải
    $('.triangle-2').click(function() {
        // Ẩn ảnh hiện tại
        $('.image-slider img').eq(currentIndex).css('display', 'none');
        // Bỏ class active khỏi biểu tượng hiện tại
        $('.icon-container').eq(currentIndex).removeClass('active');

        // Tăng vị trí hiện tại lên 1, nếu lớn hơn số lượng ảnh thì quay lại ảnh đầu tiên
        currentIndex = (currentIndex === numImages - 1) ? 0 : currentIndex + 1;

        // Hiển thị ảnh mới
        $('.image-slider img').eq(currentIndex).css('display', 'block');
        // Thêm class active cho biểu tượng mới
        $('.icon-container').eq(currentIndex).addClass('active');

        // Đặt lại màu fill của tất cả các biểu tượng về màu trắng
        $('.icon-container').not($('.icon-container').eq(currentIndex)).removeClass('active');
    });
});




});
