(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($("#spinner").length > 0) {
                $("#spinner").removeClass("show");
            }
        }, 1);
    };
    spinner();

    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $(".navbar").addClass("sticky-top shadow-sm");
        } else {
            $(".navbar").removeClass("sticky-top shadow-sm");
        }
    });

    // Smooth scrolling on the navbar links
    $(".navbar-nav a").on("click", function (event) {
        if (this.hash !== "") {
            event.preventDefault();

            $("html, body").animate(
                {
                    scrollTop: $(this.hash).offset().top - 45,
                },
                1500,
                "easeInOutExpo"
            );

            if ($(this).parents(".navbar-nav").length) {
                $(".navbar-nav .active").removeClass("active");
                $(this).closest("a").addClass("active");
            }
        }
    });

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $(".back-to-top").fadeIn("slow");
        }
    });

    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000,
    });

    // Screenshot carousel
    $(".screenshot-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        loop: true,
        dots: true,
        items: 1,
    });

    // home carousel

    $(".promo-carousel").owlCarousel({
        autoplay: true,
        center: true,
        smartSpeed: 1000,
        loop: true,
        center: true,
        nav: true,
        navText: [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>',
        ],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 1,
            },
            992: {
                items: 2,
            },
        },
    });

    $(".menu-carousel").owlCarousel({
        autoplay: true,
        center: true,
        smartSpeed: 1000,
        loop: true,
        center: true,
        navText: [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>',
        ],
        responsive: {
            0: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
        },
    });

    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        loop: true,
        center: true,
        dots: false,
        nav: true,
        navText: [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>',
        ],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
        },
    });

    // $(".filters ul li").click(function () {
    //     $(".filters ul li").removeClass("active");
    //     $(this).addClass("active");

    //     var data = $(this).attr("data-filter");
    //     $grid.isotope({
    //         filter: data,
    //     });
    // });

    // var $grid = $(".grid").isotope({
    //     itemSelector: ".all",
    //     percentPosition: true,
    //     masonry: {
    //         columnWidth: ".all",
    //     },
    // });

    $(document).ready(function () {
        var $grid = $(".menu-grid").isotope({
            itemSelector: ".menu-item",
            layoutMode: "fitRows",
        });

        $(".filter-button").on("click", function () {
            var filterValue = $(this).attr("data-filter");
            $grid.isotope({ filter: filterValue });
            $(".filter-button").removeClass("active");
            $(this).addClass("active");
        });
    });
})(jQuery);
