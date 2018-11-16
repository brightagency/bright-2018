// FontAwesome Import
import { library, dom } from '@fortawesome/fontawesome-svg-core';

// Pro Solid
import { faArrowRight } from '@fortawesome/pro-solid-svg-icons';

// Pro Regular
import { faChevronRight, faChevronLeft } from '@fortawesome/pro-regular-svg-icons';

// Pro Light
import { faTimes } from '@fortawesome/pro-light-svg-icons';

// Add to library
library.add(faChevronRight, faChevronLeft, faTimes, faArrowRight);

// Start watching the DOM
dom.watch();
