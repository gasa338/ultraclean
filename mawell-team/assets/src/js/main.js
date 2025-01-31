// auth.js
import initSwiper from "./swiper";
import initTheme from "./theme";
import Demo from "./gallery";
import GLightbox from "glightbox";
import * as ThemeCustomizer from "./head"
import * as Auth from './auth'


/** init theme */
initTheme()

/** init Auth */
const Layout = new Auth();
Layout.init()

/** Init Swiper */
initSwiper()

/** Init gallery */
document.addEventListener("DOMContentLoaded", () => {
    if (document.getElementById("gallery-wrapper")) {
        window.demo = new Demo(document.getElementById("gallery-wrapper"));
    }
});


/** Init glightbox */
var lightbox = GLightbox({ selector: ".glightbox", title: !1 });
//
/** head js */
new ThemeCustomizer();
