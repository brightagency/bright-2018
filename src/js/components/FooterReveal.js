class FooterReveal {
	constructor(revealEl, previousEl) {
		this.revealEl = revealEl;
		this.previousEl = previousEl;
		this.handleResize();
		this.setup();
		this.attachHandlers();
	}

	setup = () => {
		this.revealEl.style.position = 'fixed';
		this.revealEl.style.bottom = '0';
		this.revealEl.style.left = '0';
		this.revealEl.style.left = '0';
		this.revealEl.style.width = '100%';
		this.revealEl.style.zIndex = '-101';
	};

	attachHandlers = () => {
		window.addEventListener('resize', this.handleResize);
	};

	handleResize = () => {
		const revealElHeight = this.revealEl.clientHeight;
		this.previousEl.style.marginBottom = `${revealElHeight}px`;
	};
}

window.addEventListener('load', () => {
	const revealEl = document.querySelector('footer.reveal-footer');
	const previousEl = document.querySelector('footer.primary-footer');
	if (revealEl && previousEl) {
		new FooterReveal(revealEl, previousEl);
	}
});
