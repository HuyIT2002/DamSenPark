<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đầm Sen Park</title>

    <head>
        <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/public/css/style.css') }}">
        <!-- Bootstrap Icons CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    </head>

    <style>
        .hidden {
            display: none;
        }
    </style>

<body>
    <div class="container">
        @include('layouts.sidebar')
        <div class="content">
            <!-- <div class="white-background">
                @yield('content')
            </div> -->
            @yield('content')
        </div>
    </div>

    @include('layouts.footer')

    </div>
    <script src="{{ asset('/public/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('/public/js/jbootstrap.min.js') }}"></script>
    <script src="{{ asset('/public/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('/public/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/public/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/public/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('/public/js/style.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            var itemWidth = $('.recommendation-item').outerWidth(
                true); // Lấy chiều rộng của mỗi item recommendation

            $('.custom-chevron-right').click(function() {
                var container = $('.recommendation-items-container');
                var scrollAmount = container.scrollLeft() + itemWidth; // Di chuyển tới item kế tiếp
                container.animate({
                    scrollLeft: scrollAmount
                }, 400);
            });

            $('.custom-chevron-left').click(function() {
                var container = $('.recommendation-items-container');
                var scrollAmount = container.scrollLeft() - itemWidth; // Di chuyển tới item trước đó
                container.animate({
                    scrollLeft: scrollAmount
                }, 400);
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const menuLink = document.getElementById('menu-link-1');
            const currentIcon = document.querySelector('.current-icon');
            const alternateIcon = document.querySelector('.alternate-icon');

            // Kiểm tra nếu URL hiện tại là main-2
            let isAlternate = window.location.href.includes("main-2");

            // Cập nhật hiển thị của các SVG khi tải trang
            currentIcon.style.display = isAlternate ? 'none' : 'block';
            alternateIcon.style.display = isAlternate ? 'block' : 'none';

            menuLink.addEventListener('click', function(event) {
                event.preventDefault(); // Ngăn chuyển trang ngay lập tức

                if (isAlternate) {
                    window.location.href = "{{ route('main') }}";
                } else {
                    window.location.href = "{{ route('main-2') }}";
                }

                isAlternate = !isAlternate;

                currentIcon.style.display = isAlternate ? 'none' : 'block';
                alternateIcon.style.display = isAlternate ? 'block' : 'none';
            });
        });



        // document.addEventListener('DOMContentLoaded', function() {
        //     var slides = document.querySelectorAll('.section-inner img');
        //     var highlightContainer = document.querySelector('.highlight-container');
        //     var slideshowContainer = document.querySelector('.slideshow-container');
        //     var sections = document.querySelectorAll('.section');

        //     // Get the first image and its section
        //     var firstSlide = slides[0];
        //     var firstSection = sections[0];
        //     var firstSectionInner = firstSection.querySelector('.section-inner');

        //     // Ensure the first image is always displayed in the slideshow container
        //     firstSectionInner.appendChild(firstSlide);

        //     slides.forEach(function(slide) {
        //         // Skip adding click event for the first image
        //         if (slide === firstSlide) return;

        //         slide.addEventListener('click', function() {
        //             // Move clicked slide to the highlight container
        //             highlightContainer.innerHTML = ''; // Clear any existing content
        //             highlightContainer.appendChild(slide);

        //             // Rearrange the remaining slides except the first one
        //             var remainingSlides = Array.from(slides).filter(function(otherSlide) {
        //                 return otherSlide !== slide && otherSlide !== firstSlide;
        //             });

        //             // Update the sections with remaining slides
        //             sections.forEach(function(section, index) {
        //                 var sectionInner = section.querySelector('.section-inner');
        //                 sectionInner.innerHTML = ''; // Clear any existing content
        //                 if (index === 0) {
        //                     // Ensure the first image is always in the first section
        //                     sectionInner.appendChild(firstSlide);
        //                 } else if (remainingSlides[index - 1]) {
        //                     // Fill other sections with remaining slides
        //                     sectionInner.appendChild(remainingSlides[index - 1]);
        //                 }
        //             });
        //         });
        //     });
        // });
        // document.addEventListener('DOMContentLoaded', function() {
        //     var originalSlides = Array.from(document.querySelectorAll('.section-inner img'));
        //     var highlightContainer = document.querySelector('.highlight-container');
        //     var sections = document.querySelectorAll('.section');

        //     function setupSlides() {
        //         originalSlides.forEach(function(slide) {
        //             slide.addEventListener('click', function() {
        //                 // Di chuyển ảnh được click vào highlight container
        //                 highlightContainer.innerHTML =
        //                     ''; // Xóa nội dung hiện tại trong highlight container
        //                 highlightContainer.appendChild(
        //                     slide); // Thêm ảnh đã click vào highlight container

        //                 // Lấy tất cả ảnh còn lại ngoại trừ ảnh vừa click
        //                 var remainingSlides = originalSlides.filter(function(otherSlide) {
        //                     return otherSlide !== slide;
        //                 });

        //                 // Sắp xếp lại các ảnh còn lại vào các sections
        //                 sections.forEach(function(section, index) {
        //                     var sectionInner = section.querySelector('.section-inner');
        //                     sectionInner.innerHTML =
        //                         ''; // Xóa nội dung hiện tại của section
        //                     if (remainingSlides[index]) {
        //                         sectionInner.appendChild(remainingSlides[
        //                             index]); // Thêm ảnh vào section
        //                     }
        //                 });
        //             });
        //         });
        //     }

        //     // Thiết lập lại sự kiện cho các slides
        //     setupSlides();

        //     // Đảm bảo khi highlightContainer không có ảnh nào thì ảnh đầu tiên sẽ hiển thị lại trong slideshow
        //     if (!highlightContainer.hasChildNodes() && originalSlides.length > 0) {
        //         highlightContainer.appendChild(originalSlides[0]);
        //     }
        // });


        document.addEventListener('DOMContentLoaded', function() {
            var originalSlides = Array.from(document.querySelectorAll('.section-inner img'));
            var highlightContainer = document.querySelector('.highlight-container');
            var sections = document.querySelectorAll('.section');
            var dotsContainer = document.querySelector('.custom-dots-container');

            function setupDots() {
                // Xóa các custom-dot cũ nếu có
                dotsContainer.innerHTML = '';

                originalSlides.forEach(function(slide, index) {
                    var dot = document.createElement('div');
                    dot.className = 'custom-dot';
                    if (index === 0) {
                        dot.classList.add('active');
                    }
                    dotsContainer.appendChild(dot);
                });
            }

            function updateDots(activeIndex) {
                var dots = dotsContainer.querySelectorAll('.custom-dot');
                dots.forEach(function(dot, index) {
                    if (index === activeIndex) {
                        dot.classList.add('active');
                    } else {
                        dot.classList.remove('active');
                    }
                });
            }

            function setupSlides() {
                originalSlides.forEach(function(slide, index) {
                    slide.addEventListener('click', function() {
                        // Di chuyển ảnh được click vào highlight container
                        highlightContainer.innerHTML =
                            ''; // Xóa nội dung hiện tại trong highlight container
                        var clonedSlide = slide.cloneNode(true); // Tạo bản sao của ảnh
                        highlightContainer.appendChild(
                            clonedSlide); // Thêm bản sao của ảnh vào highlight container

                        // Lấy tất cả ảnh còn lại ngoại trừ ảnh vừa click
                        var remainingSlides = originalSlides.filter(function(otherSlide) {
                            return otherSlide !== slide;
                        });

                        // Sắp xếp lại các ảnh còn lại vào các sections
                        sections.forEach(function(section, sectionIndex) {
                            var sectionInner = section.querySelector('.section-inner');
                            sectionInner.innerHTML =
                                ''; // Xóa nội dung hiện tại của section
                            if (remainingSlides[sectionIndex]) {
                                sectionInner.appendChild(remainingSlides[
                                    sectionIndex]); // Thêm ảnh vào section
                            }
                        });

                        // Cập nhật custom-dot
                        updateDots(index);
                    });
                });
            }

            // Thiết lập custom dots
            setupDots();

            // Thiết lập lại sự kiện cho các slides
            setupSlides();

            // Đảm bảo khi highlightContainer không có ảnh nào thì ảnh đầu tiên sẽ hiển thị lại trong slideshow
            if (!highlightContainer.hasChildNodes() && originalSlides.length > 0) {
                var clonedFirstSlide = originalSlides[0].cloneNode(true); // Tạo bản sao của ảnh đầu tiên
                highlightContainer.appendChild(clonedFirstSlide);

                // Đặt dot đầu tiên là active
                updateDots(0);
            }
        });


        document.addEventListener('DOMContentLoaded', function() {
            var originalSlides = Array.from(document.querySelectorAll('.section-inner img'));
            var highlightContainer = document.querySelector('.highlight-container');
            var sections = document.querySelectorAll('.section');
            var dotsContainer = document.querySelector('.custom-dots-container');
            var dotLeft = document.querySelector('.custom-dot-left');
            var dotRight = document.querySelector('.custom-dot-right');

            var currentIndex = 0; // Chỉ số của ảnh hiện tại trong highlightContainer

            function setupDots() {
                // Xóa các custom-dot cũ nếu có
                dotsContainer.innerHTML = '';

                originalSlides.forEach(function(slide, index) {
                    var dot = document.createElement('div');
                    dot.className = 'custom-dot';
                    if (index === 0) {
                        dot.classList.add('active');
                    }
                    dotsContainer.appendChild(dot);
                });
            }

            function updateDots(activeIndex) {
                var dots = dotsContainer.querySelectorAll('.custom-dot');
                dots.forEach(function(dot, index) {
                    if (index === activeIndex) {
                        dot.classList.add('active');
                    } else {
                        dot.classList.remove('active');
                    }
                });
            }

            function updateHighlightContainer(index) {
                highlightContainer.innerHTML = ''; // Xóa nội dung hiện tại trong highlight container
                var clonedSlide = originalSlides[index].cloneNode(true); // Tạo bản sao của ảnh
                highlightContainer.appendChild(clonedSlide); // Thêm bản sao của ảnh vào highlight container
            }

            function showPreviousSlide() {
                currentIndex = (currentIndex > 0) ? currentIndex - 1 : originalSlides.length - 1;
                updateSlides();
            }

            function showNextSlide() {
                currentIndex = (currentIndex < originalSlides.length - 1) ? currentIndex + 1 : 0;
                updateSlides();
            }

            function updateSlides() {
                updateHighlightContainer(currentIndex);
                updateDots(currentIndex);

                // Lấy tất cả ảnh còn lại ngoại trừ ảnh hiện tại
                var remainingSlides = originalSlides.filter(function(otherSlide, index) {
                    return index !== currentIndex;
                });

                // Sắp xếp lại các ảnh còn lại vào các sections
                sections.forEach(function(section, sectionIndex) {
                    var sectionInner = section.querySelector('.section-inner');
                    sectionInner.innerHTML = ''; // Xóa nội dung hiện tại của section
                    if (remainingSlides[sectionIndex]) {
                        sectionInner.appendChild(remainingSlides[sectionIndex]); // Thêm ảnh vào section
                    }
                });
            }

            function setupSlides() {
                originalSlides.forEach(function(slide, index) {
                    slide.addEventListener('click', function() {
                        // Di chuyển ảnh được click vào highlight container
                        currentIndex = index; // Cập nhật chỉ số hiện tại
                        updateSlides();
                    });
                });
            }

            // Thiết lập custom dots
            setupDots();

            // Thiết lập lại sự kiện cho các slides
            setupSlides();

            // Đảm bảo khi highlightContainer không có ảnh nào thì ảnh đầu tiên sẽ hiển thị lại trong slideshow
            if (!highlightContainer.hasChildNodes() && originalSlides.length > 0) {
                updateSlides();
            }

            // Thêm sự kiện cho các nút điều hướng
            if (dotLeft) {
                dotLeft.addEventListener('click', showPreviousSlide);
            }

            if (dotRight) {
                dotRight.addEventListener('click', showNextSlide);
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            function positionCTA() {
                const section = document.querySelector('.section:nth-child(5)');
                const ctaSection = section.querySelector('.cta-section-inner');

                if (section && ctaSection) {
                    const sectionRect = section.getBoundingClientRect();
                    const ctaRect = ctaSection.getBoundingClientRect();

                    ctaSection.style.top = `${(sectionRect.height - ctaRect.height) / 2}px`;
                    ctaSection.style.left = `${(sectionRect.width - ctaRect.width) / 2}px`;
                }
            }

            positionCTA();
            window.addEventListener('resize', positionCTA);
        });
    </script>
</body>


</html>