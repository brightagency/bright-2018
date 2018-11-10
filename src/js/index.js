import '@babel/polyfill';
import 'objectFitPolyfill';

import './components/font-awesome-icons';

import './components/primary-nav';
import './components/SJDVideoBG';

class WorkCard {
	constructor(el) {
		this.el = el;
		this.client = el.querySelector('.work-card__client');
		this.project = el.querySelector('.work-card__project');
		this.link = el.querySelector('.work-card__link');
		this.attachHandlers();
		this.setTitleOffset();
	}

	attachHandlers = () => {
		window.addEventListener('resize', () => {
			this.setTitleOffset();
		});
		setTimeout(() => {
			this.setTitleOffset();
		}, 100);
	};

	setTitleOffset = () => {
		const projectHeight = this.project.clientHeight;
		const linkHeight = this.link.clientHeight;
		console.log({ projectHeight, linkHeight });
		this.client.style.transform = `translateY(${projectHeight + linkHeight}px)`;
	};
}

const cards = document.querySelectorAll('.work-card');
cards.forEach(card => new WorkCard(card));
