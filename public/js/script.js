(function ($) {
    "use strict";
    var POTENZA = {};
    var $window = $(window),
        $document = $(document),
        $body = $("body"),
        $countdownTimer = $(".countdown"),
        $counter = $(".counter");
    $.fn.exists = function () {
        return this.length > 0;
    };
    POTENZA.dropdownmenu = function () {
        if ($(".navbar").exists()) {
            $(".dropdown-menu a.dropdown-toggle").on("click", function (e) {
                if (!$(this).next().hasClass("show")) {
                    $(this)
                        .parents(".dropdown-menu")
                        .first()
                        .find(".show")
                        .removeClass("show");
                }
                var $subMenu = $(this).next(".dropdown-menu");
                $subMenu.toggleClass("show");
                $(this)
                    .parents("li.nav-item.dropdown.show")
                    .on("hidden.bs.dropdown", function (e) {
                        $(".dropdown-submenu .show").removeClass("show");
                    });
                return false;
            });
        }
    };
    POTENZA.isSticky = function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 150) {
                $(".header-sticky").addClass("is-sticky");
            } else {
                $(".header-sticky").removeClass("is-sticky");
            }
        });
    };
    POTENZA.Tooltip = function () {
        var tooltipTriggerList = [].slice.call(
            document.querySelectorAll('[data-bs-toggle="tooltip"]')
        );
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    };
    POTENZA.Popover = function () {
        var popoverTriggerList = [].slice.call(
            document.querySelectorAll('[data-bs-toggle="popover"]')
        );
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl);
        });
    };
    POTENZA.counters = function () {
        var counter = jQuery(".counter");
        if (counter.length > 0) {
            $counter.each(function () {
                var $elem = $(this);
                $elem.appear(function () {
                    $elem.find(".timer").countTo();
                });
            });
        }
    };
    POTENZA.carousel = function () {
        var owlslider = jQuery("div.owl-carousel");
        if (owlslider.length > 0) {
            owlslider.each(function () {
                var $this = $(this),
                    $items = $this.data("items") ? $this.data("items") : 1,
                    $loop = $this.attr("data-loop") ? $this.data("loop") : true,
                    $navdots = $this.data("nav-dots")
                        ? $this.data("nav-dots")
                        : false,
                    $navarrow = $this.data("nav-arrow")
                        ? $this.data("nav-arrow")
                        : false,
                    $autoplay = $this.attr("data-autoplay")
                        ? $this.data("autoplay")
                        : true,
                    $autospeed = $this.attr("data-autospeed")
                        ? $this.data("autospeed")
                        : 5000,
                    $smartspeed = $this.attr("data-smartspeed")
                        ? $this.data("smartspeed")
                        : 1000,
                    $autohgt = $this.data("autoheight")
                        ? $this.data("autoheight")
                        : false,
                    $space = $this.attr("data-space")
                        ? $this.data("space")
                        : 30,
                    $animateOut = $this.attr("data-animateOut")
                        ? $this.data("animateOut")
                        : false;
                $(this).owlCarousel({
                    loop: $loop,
                    items: $items,
                    responsive: {
                        0: {
                            items: $this.data("xx-items")
                                ? $this.data("xx-items")
                                : 1,
                        },
                        575: {
                            items: $this.data("xs-items")
                                ? $this.data("xs-items")
                                : 1,
                        },
                        768: {
                            items: $this.data("sm-items")
                                ? $this.data("sm-items")
                                : 2,
                        },
                        980: {
                            items: $this.data("md-items")
                                ? $this.data("md-items")
                                : 3,
                        },
                        1200: {
                            items: $items,
                        },
                    },
                    dots: $navdots,
                    autoplayTimeout: $autospeed,
                    smartSpeed: $smartspeed,
                    autoHeight: $autohgt,
                    margin: $space,
                    nav: $navarrow,
                    navText: [
                        "<i class='fas fa-chevron-left'></i>",
                        "<i class='fas fa-chevron-right'></i>",
                    ],
                    autoplay: $autoplay,
                    autoplayHoverPause: true,
                });
            });
        }
    };
    POTENZA.slickslider = function () {
        if ($(".slider-for").exists()) {
            $(".slider-for").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                asNavFor: ".slider-nav",
            });
            $(".slider-nav").slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                asNavFor: ".slider-for",
                dots: false,
                centerMode: true,
                focusOnSelect: true,
            });
        }
    };
    POTENZA.mediaPopups = function () {
        if (
            $(".popup-single").exists() ||
            $(".popup-gallery").exists() ||
            $(".modal-onload").exists() ||
            $(".popup-youtube, .popup-vimeo, .popup-gmaps").exists()
        ) {
            if ($(".popup-single").exists()) {
                $(".popup-single").magnificPopup({
                    type: "image",
                });
            }
            if ($(".popup-gallery").exists()) {
                $(".popup-gallery").magnificPopup({
                    delegate: "a.portfolio-img",
                    type: "image",
                    tLoading: "Loading image #%curr%...",
                    mainClass: "mfp-img-mobile",
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0, 1],
                    },
                });
            }
            if ($(".popup-youtube, .popup-vimeo, .popup-gmaps").exists()) {
                $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
                    disableOn: 700,
                    type: "iframe",
                    mainClass: "mfp-fade",
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false,
                });
            }
            var $modal = $(".modal-onload");
            if ($modal.length > 0) {
                $(".popup-modal").magnificPopup({
                    type: "inline",
                });
                $(document).on("click", ".popup-modal-dismiss", function (e) {
                    e.preventDefault();
                    $.magnificPopup.close();
                });
                var elementTarget = $modal.attr("data-target");
                setTimeout(function () {
                    $.magnificPopup.open(
                        {
                            items: {
                                src: elementTarget,
                            },
                            type: "inline",
                            mainClass: "mfp-no-margins mfp-fade",
                            closeBtnInside: !0,
                            fixedContentPos: !0,
                            removalDelay: 500,
                        },
                        0
                    );
                }, 1500);
            }
        }
    };
    POTENZA.datetimepickers = function () {
        if ($(".datetimepickers").exists()) {
            $("#datetimepicker-01, #datetimepicker-02").datetimepicker({
                format: "L",
            });
            $("#datetimepicker-03, #datetimepicker-04").datetimepicker({
                format: "LT",
            });
        }
    };
    POTENZA.select2 = function () {
        if ($(".basic-select").exists()) {
            var select = jQuery(".basic-select");
            if (select.length > 0) {
                $(".basic-select").select2({ dropdownCssClass: "bigdrop" });
            }
        }
    };
    POTENZA.rangesliders = function () {
        if ($(".property-price-slider").exists()) {
            var rangeslider = jQuery(".rangeslider-wrapper");
            $("#property-price-slider").ionRangeSlider({
                type: "double",
                min: 0,
                max: 10000,
                from: 1000,
                to: 8000,
                prefix: "$",
                hide_min_max: true,
                hide_from_to: false,
            });
        }
    };
    POTENZA.countdownTimer = function () {
        if ($countdownTimer.exists()) {
            $countdownTimer.downCount({
                date: "12/25/2023 12:00:00",
                offset: -4,
            });
        }
    };
    POTENZA.scrollbar = function () {
        var scrollbar = jQuery(".scrollbar");
        if (scrollbar.length > 0) {
            var scroll_light = jQuery(".scroll_light");
            if (scroll_light.length > 0) {
                $(scroll_light).niceScroll({
                    cursorborder: 0,
                    cursorcolor: "rgba(255,255,255,0.25)",
                });
                $(scroll_light).getNiceScroll().resize();
            }
            var scroll_dark = jQuery(".scroll_dark");
            if (scroll_dark.length > 0) {
                $(scroll_dark).niceScroll({
                    cursorborder: 0,
                    cursorcolor: "rgba(0,0,0,0.1)",
                });
                $(scroll_dark).getNiceScroll().resize();
            }
        }
    };
    POTENZA.goToTop = function () {
        var $goToTop = $("#back-to-top");
        $goToTop.hide();
        $window.scroll(function () {
            if ($window.scrollTop() > 100) $goToTop.fadeIn();
            else $goToTop.fadeOut();
        });
        $goToTop.on("click", function () {
            $("body,html").animate(
                {
                    scrollTop: 0,
                },
                1000
            );
            return false;
        });
    };
    POTENZA.featurebox = function () {
        $(".feature-info-02").hover(function () {
            $(".feature-info-02").removeClass("active");
            $(this).addClass("active");
        });
    };
    POTENZA.contactform = function () {
        $("#contactform").submit(function (event) {
            $("#ajaxloader").show();
            $("#contactform").hide();
            $.ajax({
                url: "php/contact-form.php",
                data: $(this).serialize(),
                type: "post",
                success: function (response) {
                    $("#ajaxloader").hide();
                    $("#contactform").show();
                    $("#formmessage")
                        .html(response)
                        .show()
                        .delay(20000)
                        .fadeOut("slow");
                },
            });
            event.preventDefault();
        });
    };
    $window.on("load", function () {});
    $document.ready(function () {
        POTENZA.counters(),
            POTENZA.slickslider(),
            POTENZA.datetimepickers(),
            POTENZA.select2(),
            POTENZA.dropdownmenu(),
            POTENZA.isSticky(),
            POTENZA.mediaPopups(),
            POTENZA.rangesliders(),
            POTENZA.Tooltip(),
            POTENZA.Popover(),
            POTENZA.carousel(),
            POTENZA.countdownTimer(),
            POTENZA.scrollbar(),
            POTENZA.featurebox(),
            POTENZA.goToTop(),
            POTENZA.contactform();
    });
})(jQuery);
