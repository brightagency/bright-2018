import "owl.carousel";

$(".process-slider").owlCarousel({
    items: 1,
    dots: true,
    nav: true,
    loop: true,
    mouseDrag: false,
    navText: [
        '<i class="fa fa-chevron-left"></i>',
        '<i class="fa fa-chevron-right"></i>',
    ],
});
