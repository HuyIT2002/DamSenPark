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
    </script>
</body>


</html>