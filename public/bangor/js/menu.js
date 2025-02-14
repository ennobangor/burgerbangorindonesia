(function ($) {
    "use strict";

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
