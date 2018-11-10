const createElWithAttributes = (tag, atts) => {
	const el = document.createElement(tag);
	Object.keys(atts).forEach(key => {
		el.setAttribute(key, atts[key]);
	});
	return el;
};

class SJDVideoBG {
	constructor(el) {
		this.el = el;
		this.videoContainer = createElWithAttributes('div', { class: 'video-container' });
		this.videoEl = createElWithAttributes('video', { class: 'video-element', autoplay: true, muted: true, loop: true });
		this.videoSrc = this.el.dataset.sjdvSrc;
		this.setup();
		this.style();
		console.log(this);
	}

	setup = () => {
		this.el.insertAdjacentElement('afterbegin', this.videoContainer);
		this.videoContainer.insertAdjacentElement('afterbegin', this.videoEl);
		this.videoEl.insertAdjacentHTML('afterbegin', `<source src="${this.videoSrc}" type="video/mp4" />`);
	};

	style = () => {
		this.videoContainer.style.position = `absolute`;
		this.videoContainer.style.top = `0`;
		this.videoContainer.style.left = `0`;
		this.videoContainer.style.width = `100%`;
		this.videoContainer.style.height = `100%`;

		this.videoEl.style.position = `absolute`;
		this.videoEl.style.top = `0`;
		this.videoEl.style.left = `0`;
		this.videoEl.style.width = `100%`;
		this.videoEl.style.height = `100%`;
		this.videoEl.style.objectFit = `cover`;
	};
}

const els = document.querySelectorAll('[data-sjdv-src]');
els.forEach(el => new SJDVideoBG(el));
