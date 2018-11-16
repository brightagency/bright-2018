const parser = new DOMParser();

class SVGInline {
	constructor(svgTag) {
		this.svgTag = svgTag;
		this.imageURL = svgTag.src;
		this.imageParent = svgTag.parentNode;
		this.inline();
	}
	inline = () => {
		fetch(this.imageURL)
			.then(response => response.text())
			.then(svgData => {
				const svgDoc = parser.parseFromString(svgData, 'image/svg+xml');
				const svgElement = svgDoc.documentElement;
				this.imageParent.replaceChild(svgElement, this.svgTag);
			});
	};
}

const svgs = document.querySelectorAll('img[data-svg-inline]');
svgs.forEach(svg => new SVGInline(svg));
