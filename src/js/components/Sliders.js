import $ from 'jquery';
import 'owl.carousel';

$('.process-slider').owlCarousel({
	items: 1,
	dots: true,
	nav: true,
	loop: true,
	mouseDrag: false,
	navText: ['<i class="far fa-chevron-left"></i>', '<i class="far fa-chevron-right"></i>']
});
