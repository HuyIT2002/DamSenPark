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
$(document).ready(function() {
   var firstItemLeftPosition = $('.item:first').position().left;
    var scrollLineWidth = $('.item:first').outerWidth() * 0.9; // 30% của chiều rộng .item

      $('.item[data-item="1"]').addClass('selected');
    $('.scroll-line').css({
        left: firstItemLeftPosition + 1 + 'px',
        width: scrollLineWidth + 'px',
        background: '#EC008C'
    });
    $('#highlighted-text').css('color', '#EC008C');
    // Bắt sự kiện click trên bất kỳ .item nào
    $('.item').on('click', function() {
        // Xóa màu hồng của các phần tử có ID là highlighted-text khi click vào .item
        $('#highlighted-text').css('color', '');
    });


    // Khi click vào một .item
    $('.item').on('click', function() {
        // Xóa lớp 'selected' khỏi tất cả các .item
        $('.item').removeClass('selected');
        
        // Thêm lớp 'selected' cho .item hiện tại
        $(this).addClass('selected');
        
        // Lấy vị trí left của .item hiện tại
        var leftPosition = $(this).position().left;
        
        // Lấy chiều rộng của .item hiện tại
        var itemWidth = $(this).outerWidth();

        // Cập nhật vị trí và chiều dài của .scroll-line
        var scrollLineWidth = itemWidth * 0.9; // 30% của chiều rộng .item
        $('.scroll-line').css({
            left: leftPosition + 1 + 'px', // Thêm 25px để căn giữa đúng với .item::after
            width: scrollLineWidth + 'px'
        });

        // Cuộn tới .item hiện tại nếu nó vượt ra ngoài phạm vi hiện tại của .content-container
        var containerWidth = $('.content-container').outerWidth();
        var scrollLeft = $('.content-container').scrollLeft();
        
        if (leftPosition < scrollLeft || leftPosition + itemWidth > scrollLeft + containerWidth) {
            $('.content-container').scrollLeft(leftPosition);
        }
    });
});
$(document).ready(function() {
    const maxVisible = 1; // Số lượng tối đa các image-container-fellow hiển thị

    // Ẩn các image-container-fellow thừa
    $(".image-container-fellow:gt(" + (maxVisible - 1) + ")").hide();
});
/**/
$(document).ready(function() {
    var $imageRow = $('.image-row');
    var $borderBox = $('.border-box');
    
    // Hàm kiểm tra và hiển thị overlay
    function checkAndShowOverlay() {
        // Lấy vị trí của border-box
        var boxLeft = $borderBox.offset().left;
        var boxRight = boxLeft + $borderBox.outerWidth();

        // Duyệt qua từng image-container để kiểm tra vị trí và hiển thị overlay tương ứng
        $('.image-container-column-fellow').each(function(index, element) {
            var $imageContainer = $(element);
            var $overlay = $imageContainer.find('.image-overlay');
            
            // Kiểm tra vị trí của image-container
            var imageLeft = $imageContainer.offset().left;
            var imageRight = imageLeft + $imageContainer.outerWidth();

            // Kiểm tra xem ảnh có nằm ngoài vùng hiển thị của border-box hay không
            if (imageRight < boxLeft || imageLeft > boxRight) {
                $overlay.fadeIn('fast'); // Hiển thị overlay
            } else {
                $overlay.fadeOut('fast'); // Ẩn overlay khi nằm trong vùng hiển thị
            }
        });
    }

    // Xử lý sự kiện cuộn khi sử dụng chuột hoặc phím mũi tên
    $imageRow.scroll(checkAndShowOverlay);

    // Xử lý sự kiện click cho mũi tên chuyển đổi trái
    $('.custom-chevron-left-fellow').click(function() {
        $imageRow.animate({
            scrollLeft: $imageRow.scrollLeft() - 273 // Độ lệch bạn muốn cuộn
        }, 'slow', checkAndShowOverlay);
    });

    // Xử lý sự kiện click cho mũi tên chuyển đổi phải
    $('.custom-chevron-right-fellow').click(function() {
        $imageRow.animate({
            scrollLeft: $imageRow.scrollLeft() + 270 // Độ lệch bạn muốn cuộn
        }, 'slow', checkAndShowOverlay);
    });

    // Gọi hàm checkAndShowOverlay ban đầu để khởi tạo
    checkAndShowOverlay();
});

 $(document).ready(function () {
        let currentIndex = 0; // Index của ảnh hiện tại
        const imageContainers = $(".image-container-fellow");
        const totalImages = imageContainers.length;

        // Ẩn tất cả các ảnh trừ ảnh đầu tiên
        imageContainers.hide();
        imageContainers.eq(currentIndex).show();

        // Chuyển ảnh khi bấm nút trái
        $(".custom-chevron-left-fellow").click(function () {
            imageContainers.eq(currentIndex).hide();
            currentIndex = (currentIndex - 1 + totalImages) % totalImages; // Lùi về ảnh trước, vòng lại ảnh cuối nếu đã ở ảnh đầu
            imageContainers.eq(currentIndex).show();
        });

        // Chuyển ảnh khi bấm nút phải
        $(".custom-chevron-right-fellow").click(function () {
            imageContainers.eq(currentIndex).hide();
            currentIndex = (currentIndex + 1) % totalImages; // Tiến tới ảnh tiếp theo, vòng lại ảnh đầu nếu đã ở ảnh cuối
            imageContainers.eq(currentIndex).show();
        });
    });


$(document).ready(function() {
    const maxVisible = 1; 
    $(".image-container-fellow-vd:gt(" + (maxVisible - 1) + ")").hide();
});
    
 $(document).ready(function () {
        let currentIndex = 0; // Index của ảnh hiện tại
        const imageContainers = $(".image-container-fellow-vd");
        const totalImages = imageContainers.length;

        // Ẩn tất cả các ảnh trừ ảnh đầu tiên
        imageContainers.hide();
        imageContainers.eq(currentIndex).show();

        // Chuyển ảnh khi bấm nút trái
        $(".custom-chevron-left-fellow-vd").click(function () {
            imageContainers.eq(currentIndex).hide();
            currentIndex = (currentIndex - 1 + totalImages) % totalImages; // Lùi về ảnh trước, vòng lại ảnh cuối nếu đã ở ảnh đầu
            imageContainers.eq(currentIndex).show();
        });

        // Chuyển ảnh khi bấm nút phải
        $(".custom-chevron-right-fellow-vd").click(function () {
            imageContainers.eq(currentIndex).hide();
            currentIndex = (currentIndex + 1) % totalImages; // Tiến tới ảnh tiếp theo, vòng lại ảnh đầu nếu đã ở ảnh cuối
            imageContainers.eq(currentIndex).show();
        });
    });
    $(document).ready(function() {
    var $imageRow = $('.image-row-vd');
    var $borderBox = $('.border-box-vd');
    
    // Hàm kiểm tra và hiển thị overlay
    function checkAndShowOverlay() {
        // Lấy vị trí của border-box
        var boxLeft = $borderBox.offset().left;
        var boxRight = boxLeft + $borderBox.outerWidth();

        // Duyệt qua từng image-container để kiểm tra vị trí và hiển thị overlay tương ứng
        $('.image-container-column-fellow-vd').each(function(index, element) {
            var $imageContainer = $(element);
            var $overlay = $imageContainer.find('.image-overlay-vd');
            
            // Kiểm tra vị trí của image-container
            var imageLeft = $imageContainer.offset().left;
            var imageRight = imageLeft + $imageContainer.outerWidth();

            // Kiểm tra xem ảnh có nằm ngoài vùng hiển thị của border-box hay không
            if (imageRight < boxLeft || imageLeft > boxRight) {
                $overlay.fadeIn('fast'); // Hiển thị overlay
            } else {
                $overlay.fadeOut('fast'); // Ẩn overlay khi nằm trong vùng hiển thị
            }
        });
    }

    // Xử lý sự kiện cuộn khi sử dụng chuột hoặc phím mũi tên
    $imageRow.scroll(checkAndShowOverlay);

    // Xử lý sự kiện click cho mũi tên chuyển đổi trái
    $('.custom-chevron-left-fellow-vd').click(function() {
        $imageRow.animate({
            scrollLeft: $imageRow.scrollLeft() - 273 // Độ lệch bạn muốn cuộn
        }, 'slow', checkAndShowOverlay);
    });

    // Xử lý sự kiện click cho mũi tên chuyển đổi phải
    $('.custom-chevron-right-fellow-vd').click(function() {
        $imageRow.animate({
            scrollLeft: $imageRow.scrollLeft() + 270 // Độ lệch bạn muốn cuộn
        }, 'slow', checkAndShowOverlay);
    });

    // Gọi hàm checkAndShowOverlay ban đầu để khởi tạo
    checkAndShowOverlay();
});

 $(document).ready(function() {
            var $title = $('.title-ve-tc');
            var $line = $('.line-ve-tc');
            $line.css('width', $title.outerWidth());
        });
$(document).ready(function() {
    const maxVisible = 1; // Số lượng tối đa các image-container-fellow hiển thị

    // Ẩn các image-container-fellow thừa
    $(".image-container-fellow-cde:gt(" + (maxVisible - 1) + ")").hide();
});


 $(document).ready(function () {
        let currentIndex = 0; // Index của ảnh hiện tại
        const imageContainers = $(".image-container-fellow-cde");
        const totalImages = imageContainers.length;

        // Ẩn tất cả các ảnh trừ ảnh đầu tiên
        imageContainers.hide();
        imageContainers.eq(currentIndex).show();

        // Chuyển ảnh khi bấm nút trái
        $(".custom-chevron-left-fellow-cde").click(function () {
            imageContainers.eq(currentIndex).hide();
            currentIndex = (currentIndex - 1 + totalImages) % totalImages; // Lùi về ảnh trước, vòng lại ảnh cuối nếu đã ở ảnh đầu
            imageContainers.eq(currentIndex).show();
        });

        // Chuyển ảnh khi bấm nút phải
        $(".custom-chevron-right-fellow-cde").click(function () {
            imageContainers.eq(currentIndex).hide();
            currentIndex = (currentIndex + 1) % totalImages; // Tiến tới ảnh tiếp theo, vòng lại ảnh đầu nếu đã ở ảnh cuối
            imageContainers.eq(currentIndex).show();
        });
    });
$(document).ready(function() {
    var $imageRow = $('.image-row');
    var $borderBox = $('.border-box');
    
    // Hàm kiểm tra và hiển thị overlay
    function checkAndShowOverlay() {
        // Lấy vị trí của border-box
        var boxLeft = $borderBox.offset().left;
        var boxRight = boxLeft + $borderBox.outerWidth();

        // Duyệt qua từng image-container để kiểm tra vị trí và hiển thị overlay tương ứng
        $('.image-container-column-fellow').each(function(index, element) {
            var $imageContainer = $(element);
            var $overlay = $imageContainer.find('.image-overlay');
            
            // Kiểm tra vị trí của image-container
            var imageLeft = $imageContainer.offset().left;
            var imageRight = imageLeft + $imageContainer.outerWidth();

            // Kiểm tra xem ảnh có nằm ngoài vùng hiển thị của border-box hay không
            if (imageRight < boxLeft || imageLeft > boxRight) {
                $overlay.fadeIn('fast'); // Hiển thị overlay
            } else {
                $overlay.fadeOut('fast'); // Ẩn overlay khi nằm trong vùng hiển thị
            }
        });
    }

    // Xử lý sự kiện cuộn khi sử dụng chuột hoặc phím mũi tên
    $imageRow.scroll(checkAndShowOverlay);

    // Xử lý sự kiện click cho mũi tên chuyển đổi trái
    $('.custom-chevron-left-fellow-cde').click(function() {
        $imageRow.animate({
            scrollLeft: $imageRow.scrollLeft() - 273 // Độ lệch bạn muốn cuộn
        }, 'slow', checkAndShowOverlay);
    });

    // Xử lý sự kiện click cho mũi tên chuyển đổi phải
    $('.custom-chevron-right-fellow-cde').click(function() {
        $imageRow.animate({
            scrollLeft: $imageRow.scrollLeft() + 270 // Độ lệch bạn muốn cuộn
        }, 'slow', checkAndShowOverlay);
    });

    // Gọi hàm checkAndShowOverlay ban đầu để khởi tạo
    checkAndShowOverlay();
});
$(document).ready(function() {
    const maxVisible = 1; // Số lượng tối đa các image-container-fellow hiển thị

    // Ẩn các image-container-fellow thừa
    $(".image-container-fellow-bc:gt(" + (maxVisible - 1) + ")").hide();
});


 $(document).ready(function () {
        let currentIndex = 0; // Index của ảnh hiện tại
        const imageContainers = $(".image-container-fellow-bc");
        const totalImages = imageContainers.length;

        // Ẩn tất cả các ảnh trừ ảnh đầu tiên
        imageContainers.hide();
        imageContainers.eq(currentIndex).show();

        // Chuyển ảnh khi bấm nút trái
        $(".custom-chevron-left-fellow-bc").click(function () {
            imageContainers.eq(currentIndex).hide();
            currentIndex = (currentIndex - 1 + totalImages) % totalImages; // Lùi về ảnh trước, vòng lại ảnh cuối nếu đã ở ảnh đầu
            imageContainers.eq(currentIndex).show();
        });

        // Chuyển ảnh khi bấm nút phải
        $(".custom-chevron-right-fellow-bc").click(function () {
            imageContainers.eq(currentIndex).hide();
            currentIndex = (currentIndex + 1) % totalImages; // Tiến tới ảnh tiếp theo, vòng lại ảnh đầu nếu đã ở ảnh cuối
            imageContainers.eq(currentIndex).show();
        });
    });
$(document).ready(function() {
    var $imageRow = $('.image-row');
    var $borderBox = $('.border-box');
    
    // Hàm kiểm tra và hiển thị overlay
    function checkAndShowOverlay() {
        // Lấy vị trí của border-box
        var boxLeft = $borderBox.offset().left;
        var boxRight = boxLeft + $borderBox.outerWidth();

        // Duyệt qua từng image-container để kiểm tra vị trí và hiển thị overlay tương ứng
        $('.image-container-column-fellow').each(function(index, element) {
            var $imageContainer = $(element);
            var $overlay = $imageContainer.find('.image-overlay');
            
            // Kiểm tra vị trí của image-container
            var imageLeft = $imageContainer.offset().left;
            var imageRight = imageLeft + $imageContainer.outerWidth();

            // Kiểm tra xem ảnh có nằm ngoài vùng hiển thị của border-box hay không
            if (imageRight < boxLeft || imageLeft > boxRight) {
                $overlay.fadeIn('fast'); // Hiển thị overlay
            } else {
                $overlay.fadeOut('fast'); // Ẩn overlay khi nằm trong vùng hiển thị
            }
        });
    }

    // Xử lý sự kiện cuộn khi sử dụng chuột hoặc phím mũi tên
    $imageRow.scroll(checkAndShowOverlay);

    // Xử lý sự kiện click cho mũi tên chuyển đổi trái
    $('.custom-chevron-left-fellow-bc').click(function() {
        $imageRow.animate({
            scrollLeft: $imageRow.scrollLeft() - 273 // Độ lệch bạn muốn cuộn
        }, 'slow', checkAndShowOverlay);
    });

    // Xử lý sự kiện click cho mũi tên chuyển đổi phải
    $('.custom-chevron-right-fellow-bc').click(function() {
        $imageRow.animate({
            scrollLeft: $imageRow.scrollLeft() + 270 // Độ lệch bạn muốn cuộn
        }, 'slow', checkAndShowOverlay);
    });

    // Gọi hàm checkAndShowOverlay ban đầu để khởi tạo
    checkAndShowOverlay();
});

 $(document).ready(function() {
            var $title = $('.title-warter-show');
            var $line = $('.line-warter-show');
            $line.css('width', $title.outerWidth());
        });


//   $(document).ready(function() {
//             const $img = $('.Discover-background img');
//             let isDragging = false;
//             let startY = 0;
//             let startTop = 0;

//             $('.Discover-background').on('mousedown', function(e) {
//                 isDragging = true;
//                 startY = e.clientY;
//                 startTop = parseInt($img.css('top'), 10);
//                 $(this).css('cursor', 'grabbing'); // Thay đổi biểu tượng khi kéo
//                 e.preventDefault();
//             });

//             $(document).on('mousemove', function(e) {
//                 if (isDragging) {
//                     let deltaY = e.clientY - startY;
//                     let newTop = startTop + deltaY;
//                     let maxScroll = $('.white-background-4').height() - $img.height();

//                     if (newTop > 0) {
//                         newTop = 0;
//                     } else if (newTop < maxScroll) {
//                         newTop = maxScroll;
//                     }

//                     $img.css('top', `${newTop}px`);
//                 }
//             });

//             $(document).on('mouseup', function() {
//                 if (isDragging) {
//                     isDragging = false;
//                     $('.Discover-background').css('cursor', 'grab'); // Trở lại biểu tượng ban đầu
//                 }
//             });
//         });

$(document).ready(function() {
    const $img = $('.draggable-img');
    let isDragging = false;
    let startY = 0;
    let startTop = 0;

    $('.Discover-background').on('mousedown', function(e) {
        isDragging = true;
        startY = e.clientY;
        startTop = parseInt($img.css('top'), 10) || 0;
        $(this).css('cursor', 'auto'); // Thay đổi biểu tượng khi kéo
        e.preventDefault();
    });

    $(document).on('mousemove', function(e) {
        if (isDragging) {
            let deltaY = e.clientY - startY;
            let newTop = startTop + deltaY;
            let maxScroll = $('.white-background-4').height() - $img.height();

            if (newTop > 0) {
                newTop = 0;
            } else if (newTop < maxScroll) {
                newTop = maxScroll;
            }

            $img.css('top', `${newTop}px`);
            updateContainerPositions(newTop);
        }
    });

    $(document).on('mouseup', function() {
        if (isDragging) {
            isDragging = false;
            $('.Discover-background').css('cursor', 'auto'); // Trở lại biểu tượng ban đầu
        }
    });

    $('.Discover-background').on('wheel', function(e) {
        let deltaY = e.originalEvent.deltaY;
        let currentTop = parseInt($img.css('top'), 10) || 0;
        let newTop = currentTop - deltaY;
        let maxScroll = $('.white-background-4').height() - $img.height();

        if (newTop > 0) {
            newTop = 0;
        } else if (newTop < maxScroll) {
            newTop = maxScroll;
        }

        $img.css('top', `${newTop}px`);
        updateContainerPositions(newTop);
        e.preventDefault();
    });

    function updateContainerPositions(newTop) {
        $('.outer-discover-container').each(function() {
            const top = $(this).data('top');
            const left = $(this).data('left');
            $(this).css({
                top: `${top + newTop}px`,
                left: `${left}px`
            });
        });
    }

    // Đặt vị trí ban đầu của các container
    updateContainerPositions(parseInt($img.css('top'), 10) || 0);
});
    
$(document).ready(function() {
    $('.chevron-left-svg').each(function() {
        $(this).on('mouseenter', function() {
            // Change the fill color of the rect element
            $(this).find('rect').attr('fill', 'white');
            // Change the stroke color of the path element
            $(this).find('.Icon').attr('stroke', '#057433');
            // Change the stroke color of the circle (border)
            $(this).find('.circle-border').attr('stroke', 'white');
        });

        $(this).on('mouseleave', function() {
            // Revert the fill color of the rect element
            $(this).find('rect').attr('fill', '#057433');
            // Revert the stroke color of the path element
            $(this).find('.Icon').attr('stroke', 'white');
            // Revert the stroke color of the circle (border)
            $(this).find('.circle-border').attr('stroke', '#057433');
        });
    });
});



//   $(document).ready(function() {
//             var containerStates = {};

//             $('.inner-discover-container').click(function() {
//                 var $targetContainer = $(this).closest('.outer-discover-container').find('.rectangle-discover-container');
//                 var containerID = $targetContainer.attr('id');

//                 var isVisible = containerStates[containerID];

//                 if (isVisible) {
//                     $targetContainer.removeClass('visible');
//                     containerStates[containerID] = false;
//                     $(this).find('.number-discover-text').removeClass('active');
//                 } else {
//                     $targetContainer.addClass('visible');
//                     containerStates[containerID] = true;
//                     $(this).find('.number-discover-text').addClass('active');
//                 }
//             });
//         });
$(document).ready(function() {
    var containerStates = {};

    $('.inner-discover-container').click(function() {
        var $targetContainer = $(this).closest('.outer-discover-container').find('.rectangle-discover-container');
        var containerID = $targetContainer.attr('id');

        var isVisible = containerStates[containerID];

        if (isVisible) {
            $targetContainer.removeClass('visible');
            containerStates[containerID] = false;
            $(this).find('.number-discover-text').removeClass('active');
        } else {
            $targetContainer.addClass('visible');
            containerStates[containerID] = true;
            $(this).find('.number-discover-text').addClass('active');
        }
    });
});


});
