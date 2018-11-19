import ScrollReveal from 'scrollreveal';

window.sr = ScrollReveal({
	duration: 1250,
	delay: 0,
	viewFactor: 0.1,
	scale: 1,
	distance: '50px',
	easing: 'ease',
	mobile: true
});

const staggerDuration = 150;

ScrollReveal().reveal('.hero .container .columns > *', {
	interval: staggerDuration
});

const contentBlocks = document.querySelectorAll('.content-block:not(.reveal-footer)');
contentBlocks.forEach(block => {
	ScrollReveal().reveal(block.querySelectorAll('.columns > *'), {
		interval: staggerDuration
	});
});

ScrollReveal().reveal('.service', {
	interval: staggerDuration
});

ScrollReveal().reveal('.brief-us-in .container .columns', {
	interval: staggerDuration
});

ScrollReveal().reveal('.work-card-wrap', {
	interval: staggerDuration
});

ScrollReveal().reveal('.case-study-feature .columns', {
	interval: staggerDuration
});

ScrollReveal().reveal('.case-study-overview .columns', {
	interval: staggerDuration
});

ScrollReveal().reveal('.pagination-grid > *', {
	interval: staggerDuration
});

ScrollReveal().reveal('.row-of-images p', {
	interval: staggerDuration
});
