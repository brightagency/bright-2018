class FullHeight {
	constructor(el) {
		this.el = el;
		console.log(this);
		this.handleResize();
		this.attachHandlers();
	}

	attachHandlers = () => {
		window.addEventListener('resize', this.handleResize);
	};

	handleResize = () => {
		console.log('Setting height', this.el);
		this.el.style.height = `${window.innerHeight}px`;
	};
}

const els = document.querySelectorAll('.full-height');
els.forEach(el => new FullHeight(el));
