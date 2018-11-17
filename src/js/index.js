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
