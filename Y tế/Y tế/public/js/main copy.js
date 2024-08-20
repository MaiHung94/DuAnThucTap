$(".slider_main").slick({
  autoplay: true,
  autoplaySpeed: 2000,
  speed: 300,
  dots: true,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: `<button type='button' class='slick-prev2 pull-left'><i class="fa-light fa-chevron-left"></i></button>`,
  nextArrow: `<button type='button' class='slick-next2 pull-right'><i class="fa-light fa-chevron-right"></i></button>`,
});
$(".slider_collect").slick({
  autoplay: true,
  autoplaySpeed: 2000,
  speed: 300,
  dots: true,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: `<button type='button' class='slick-prev2 pull-left'><i class="fa-light fa-chevron-left"></i></button>`,
  nextArrow: `<button type='button' class='slick-next2 pull-right'><i class="fa-light fa-chevron-right"></i></button>`,
});

$(".slider-for").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: ".slider-nav",
});
$(".slider-nav").slick({
  autoplay: true,
  autoplaySpeed: 2000,
  speed: 300,
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow: `<button type='button' class='slick-prev3 pull-left'><i class="fa-solid fa-arrow-left"></i></button>`,
  nextArrow: `<button type='button' class='slick-next3 pull-right'><i class="fa-solid fa-arrow-right"></i></button>`,
  asNavFor: ".slider-for",
  focusOnSelect: true,
});

$(document).ready(function () {
  $(".icon_header1").on("click", function () {
    $(".form_header").addClass("show");
    $(".form_header").toggle();
  });

  $(".btn_logout").on("click", function () {
    $(".login").hide();
    $(".logout").show();
  });

  $(".btn_logout2").on("click", function () {
    $(".logout").hide();
    $(".login").show();
  });
});
