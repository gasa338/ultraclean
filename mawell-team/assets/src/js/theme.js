/*
Template Name: AeroPage - Tailwind CSS Multipurpose One Page Landing Template
Version: 1.0
Author: coderthemes
Email: support@coderthemes.com
*/

import "preline";
import { createIcons, icons } from "lucide";
import gumshoeMin from "gumshoejs";

function init() {
  createIcons({ icons });

  function initStickyNav() {
    function windowScroll() {
      const navbar = document.getElementById("navbar");
      if (navbar) {
        if (
          document.body.scrollTop >= 75 ||
          document.documentElement.scrollTop >= 75
        ) {
          navbar.classList.add("nav-sticky");
        } else {
          navbar.classList.remove("nav-sticky");
        }
      }
    }

    window.addEventListener("scroll", (ev) => {
      ev.preventDefault();
      windowScroll();
    });
  }

  function initBacktoTop() {
    const mybutton = document.querySelector('[data-toggle="back-to-top"]');

    window.addEventListener("scroll", function () {
      if (mybutton) {
        if (window.pageYOffset > 72) {
          mybutton.classList.remove("translate-x-16");
        } else {
          mybutton.classList.add("translate-x-16");
        }
      }
    });

    if (mybutton) {
      mybutton.addEventListener("click", function (e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: "smooth" });
      });
    }
  }

  // Navbar Active Class
  function initNavLinkActive() {
    if (document.querySelector(".menu a")) {
      gumshoeMin(".menu a", {
        offset: 80,
      });
    }
  }

  // Navbar Active Class
  function initMobileNavLinkActive() {
    if (document.querySelector("#mobile-menu nav a")) {
      gumshoeMin("#mobile-menu nav a", {
        offset: 80,
      });
    }
  }

  // Navbar Active Class
  function initgumshoes() {
    if (document.querySelector("#ui-nav a")) {
      new gumshoeMin("#ui-nav a", {
        // Active classes
        // navClass: 'active', // applied to the nav list item
        // contentClass: 'active', // applied to the content
        offset: 80,
      });
    }
  }

  // Fullscreen Button
  function initfullScreenListener() {
    var self = this;
    var fullScreenBtn = document.querySelector('[data-toggle="fullscreen"]');

    if (fullScreenBtn) {
      fullScreenBtn.addEventListener("click", function (e) {
        e.preventDefault();
        document.body.classList.toggle("open");
        if (
          !document.fullscreenElement &&
          !document.mozFullScreenElement &&
          !document.webkitFullscreenElement
        ) {
          if (document.documentElement.requestFullscreen) {
            document.documentElement.requestFullscreen();
          } else if (document.documentElement.mozRequestFullScreen) {
            document.documentElement.mozRequestFullScreen();
          } else if (document.documentElement.webkitRequestFullscreen) {
            document.documentElement.webkitRequestFullscreen(
              Element.ALLOW_KEYBOARD_INPUT,
            );
          }
        } else {
          if (document.cancelFullScreen) {
            document.cancelFullScreen();
          } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
          } else if (document.webkitCancelFullScreen) {
            document.webkitCancelFullScreen();
          }
        }
      });
    }
  }

  function initPassword() {
    document.querySelectorAll("[data-x-password]").forEach((element) => {
      const password = element.querySelector(".form-password");
      const passwordEyeOn = element.querySelector(".password-eye-on");
      const passwordEyeOff = element.querySelector(".password-eye-off");

      if (password && passwordEyeOn && passwordEyeOff) {
        passwordEyeOff.classList.add("hidden");
        passwordEyeOn.addEventListener("click", (ev) => {
          passwordEyeOn.classList.add("hidden");
          passwordEyeOff.classList.remove("hidden");
          password.type = "text";
        });
        passwordEyeOff.addEventListener("click", (ev) => {
          passwordEyeOff.classList.add("hidden");
          passwordEyeOn.classList.remove("hidden");
          password.type = "password";
        });
      }
    });
  }

  function adminNav() {
    const w = window.location.href.split(/[?#]/)[0];
    Array.from(document.querySelectorAll(".admin-menu a")).forEach((z) => {
      z.href === w && z.classList.add("active");
    });
  }

  initStickyNav();
  initBacktoTop();
  initNavLinkActive();
  initMobileNavLinkActive();
  initfullScreenListener();
  initPassword();
  initgumshoes();
  adminNav();
}

init();
