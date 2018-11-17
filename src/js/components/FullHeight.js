class FullHeight {
	constructor(el) {
		this.el = el;
		this.handleResize();
		this.attachHandlers();
	}

	attachHandlers = () => {
		window.addEventListener('resize', this.handleResize);
	};

	handleResize = () => {
		this.el.style.height = `${window.innerHeight}px`;
	};
}

const els = document.querySelectorAll('.full-height');
els.forEach(el => new FullHeight(el));
