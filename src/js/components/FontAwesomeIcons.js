// FontAwesome Import
import { library, dom } from "@fortawesome/fontawesome-svg-core";

// Free Solid
import {
    faArrowRight,
    faChevronRight,
    faChevronLeft,
} from "@fortawesome/free-solid-svg-icons";

// Brands
import {
    faFacebookF,
    faInstagram,
    faYoutube,
} from "@fortawesome/free-brands-svg-icons";

// Add to library
library.add(
    faChevronRight,
    faChevronLeft,
    faArrowRight,
    faFacebookF,
    faInstagram,
    faYoutube
);

// Start watching the DOM
dom.watch();
