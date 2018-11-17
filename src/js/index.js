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

// Hide the reveal footer until we actually need it
// Prevents interference with parallax elements
const footer = document.querySelector('.primary-footer');
const revealFooter = document.querySelector('.reveal-footer');
window.addEventListener('scroll', () => {
	if (footer.getBoundingClientRect().top - window.innerHeight > 0) {
		revealFooter.classList.remove('visible');
	} else {
		revealFooter.classList.add('visible');
	}
});
