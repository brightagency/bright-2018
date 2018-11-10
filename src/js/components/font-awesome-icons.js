// FontAwesome Import
import { library, dom } from '@fortawesome/fontawesome-svg-core';

// Pro Regular
import { faArrowRight } from '@fortawesome/pro-solid-svg-icons';
import { faChevronRight } from '@fortawesome/pro-regular-svg-icons/faChevronRight';
import { faTimes } from '@fortawesome/pro-light-svg-icons/faTimes';

// Add to library
library.add(faChevronRight, faTimes, faArrowRight);

// Start watching the DOM
dom.watch();
