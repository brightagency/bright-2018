import '../scss/main.scss';

import '@babel/polyfill';
import 'objectFitPolyfill';

import 'jquery-parallax.js';

import './components/EmbedSVG';
import './components/FontAwesomeIcons';
import './components/SJDVideoBG';
import './components/WorkCard';
import './components/FooterReveal';
import './components/NavTakeover';
import './components/FullHeight';
import './components/Sliders';
import './components/Animations';

import { TweenLite, Power2 } from 'gsap/TweenLite';
import scrollTo from 'gsap/ScrollToPlugin';
const plugins = [scrollTo];

// Hide the reveal footer until we actually need it
// Prevents interference with parallax elements
window.addEventListener('load', () => {
	const footer = document.querySelector('.primary-footer');
	const revealFooter = document.querySelector('.reveal-footer');
	const handleScroll = () => {
		if (footer.getBoundingClientRect().top - window.innerHeight > 0) {
			revealFooter.classList.remove('visible');
		} else {
			revealFooter.classList.add('visible');
		}
	};
	handleScroll();
	window.addEventListener('scroll', handleScroll);
});

// Scroll Handler
// --------------

// Matches polyfill
if (!Element.prototype.matches) {
	Element.prototype.matches = Element.prototype.msMatchesSelector;
}

document.body.addEventListener('click', event => {
	if (event.target.matches('a[href^="#"]')) {
		event.preventDefault();
		const { hash } = new URL(event.target.href);
		TweenLite.to(window, 1, { scrollTo: hash, ease: Power2.easeInOut });
	}
});
