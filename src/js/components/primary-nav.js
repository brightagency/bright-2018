class Nav {
	static CLASS_ACTIVE = 'active';

	constructor(el) {
		this.el = el;
		this.attachHandlers();
		console.log(this);
	}

	attachHandlers = () => {
		this.el.addEventListener('click', () => {
			if (this.el.classList.contains(Nav.CLASS_ACTIVE)) {
				this.el.classList.remove(Nav.CLASS_ACTIVE);
			} else {
				this.el.classList.add(Nav.CLASS_ACTIVE);
			}
		});
	};
}

const els = document.querySelectorAll('.primary-nav__hamburger');
els.forEach(el => new Nav(el));
