class NavTakeover {
	static CLASS_ACTIVE = 'active';

	constructor(hamburger, takeover) {
		this.hamburger = hamburger;
		this.takeover = takeover;
		this.isOpen = false;
		this.attachHandlers();
		console.log(this);
	}

	attachHandlers = () => {
		this.hamburger.addEventListener('click', this.toggleTakover);
	};

	toggleTakover = () => {
		return this.isOpen ? this.close() : this.open();
	};

	open = () => {
		this.isOpen = true;
		this.takeover.classList.add(NavTakeover.CLASS_ACTIVE);
		this.hamburger.classList.add(NavTakeover.CLASS_ACTIVE);
	};

	close = () => {
		this.isOpen = false;
		this.takeover.classList.remove(NavTakeover.CLASS_ACTIVE);
		this.hamburger.classList.remove(NavTakeover.CLASS_ACTIVE);
	};
}

const hamburger = document.querySelector('.primary-nav__hamburger');
const takeover = document.querySelector('.nav-takeover');

if (hamburger && takeover) {
	new NavTakeover(hamburger, takeover);
}
