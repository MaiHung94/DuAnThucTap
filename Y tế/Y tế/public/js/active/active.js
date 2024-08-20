$(document).ready(function () {
    $(".btn-girl").on("click", function () {
        $(".product-girl").addClass("effect-active ");
        $(".product-boy").removeClass("effect-active");
        $(".product-baby").removeClass("effect-active");
    })

    $(".btn-boy").on("click", function () {
        $(".product-boy").addClass("effect-active ");
        $(".product-girl").removeClass("effect-active");
        $(".product-baby").removeClass("effect-active");
    })

    $(".btn-baby").on("click", function () {
        $(".product-baby").addClass("effect-active ");
        $(".product-girl").removeClass("effect-active");
        $(".product-boy").removeClass("effect-active");
    })
})










