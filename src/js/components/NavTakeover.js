class NavTakeover {
	static CLASS_ACTIVE = 'active';

	constructor(hamburger, takeover, nav) {
		this.hamburger = hamburger;
		this.takeover = takeover;
		this.nav = nav;
		this.isOpen = false;
		this.attachHandlers();
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
		this.nav.classList.add(NavTakeover.CLASS_ACTIVE);
	};

	close = () => {
		this.isOpen = false;
		this.takeover.classList.remove(NavTakeover.CLASS_ACTIVE);
		this.hamburger.classList.remove(NavTakeover.CLASS_ACTIVE);
		this.nav.classList.remove(NavTakeover.CLASS_ACTIVE);
	};
}

const hamburger = document.querySelector('.primary-nav__hamburger');
const takeover = document.querySelector('.nav-takeover');
const nav = document.querySelector('.primary-nav');

if (hamburger && takeover) {
	new NavTakeover(hamburger, takeover, nav);
}
