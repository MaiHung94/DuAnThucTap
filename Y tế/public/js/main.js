$('.header-top').slick({
    infinite: true,
    speed: 0,
    slidesToShow: 1,
    prevArrow: `<button type='button' class='slick-prev pull-left'><i class="fa-light fa-chevron-left"></i></button>`,
    nextArrow: `<button type='button' class='slick-next pull-right'><i class="fa-light fa-chevron-right"></i></button>`,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

$('.list_slide-endow').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    prevArrow: `<button type='button' class='slick-prev2 pull-left'><i class="fa-light fa-chevron-left"></i></button>`,
    nextArrow: `<button type='button' class='slick-next2 pull-right'><i class="fa-light fa-chevron-right"></i></button>`,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
            },
        },
    ],
});

$('.slider_banner_xiaomi').slick({
    infinite: true,
    slidesToScroll: 3,
    slidesToShow: 3,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow: `<button type='button' class='slick-prev3 pull-left'><i class="fa-light fa-chevron-left"></i></button>`,
    nextArrow: `<button type='button' class='slick-next3 pull-right'><i class="fa-light fa-chevron-right"></i></button>`,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows: false,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows: false,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
            },
        },
    ],
});

$('.slider_payonl').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow: `<button type='button' class='slick-prev4 pull-left'><i class="fa-light fa-chevron-left"></i></button>`,
    nextArrow: `<button type='button' class='slick-next4 pull-right'><i class="fa-light fa-chevron-right"></i></button>`,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows: false,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,

                slidesToScroll: 1,
                arrows: false,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,

                slidesToScroll: 1,
                arrows: false,
            },
        },
    ],
});

$('.list_product_xiaomi').slick({
    infinite: false,
    slidesToShow: 5,
    slidesToScroll: 5,
    prevArrow: `<button type='button' class='icon_xiaomi_right pull-left'><i class="fa-light fa-chevron-left"></i></button>`,
    nextArrow: `<button type='button' class='icon_xiaomi_left pull-right'><i class="fa-light fa-chevron-right"></i></button>`,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3.2,
                slidesToScroll: 2,
                arrows: false,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2.1,

                slidesToScroll: 2,
                arrows: false,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2.1,

                slidesToScroll: 2,
                arrows: false,
            },
        },
    ],
});

$(function () {
    $('#header').load('../layouts/header.html');
});

$(function () {
    $('#header-respont').load('../layouts/header.html');
});
