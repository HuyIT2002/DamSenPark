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

    /*------------------
       hover đổi màu
    --------------------*/



    
});
