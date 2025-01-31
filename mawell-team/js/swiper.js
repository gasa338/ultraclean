// swiper.js

import Swiper from "swiper/bundle";
import { Thumbs, FreeMode, Navigation, Autoplay } from "swiper/modules";

function init() {
  function mySwiper() {
    var thumbSwiper = new Swiper(".mySwiper", {
      modules: [Thumbs, FreeMode, Navigation],
      loop: false,
      effect: "fade",
      speed: 1000,
      watchSlidesProgress: true,
    });

    var topSwiper = new Swiper(".mySwiper2", {
      speed: 1000,
      spaceBetween: 10,
      modules: [Thumbs, FreeMode, Autoplay, Navigation],
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".cre-button-next",
        prevEl: ".cre-button-prev",
      },
      thumbs: {
        swiper: thumbSwiper,
      },
      watchSlidesProgress: true,
    });
  }

  function testimonial_directory() {
    new Swiper("#testimonial_directory", {
      modules: [Thumbs, FreeMode],
      slidesPerView: 1,
      spaceBetween: 30,
      centeredSlides: true,
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      breakpoints: {
        400: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 50,
        },
      },
    });
  }

  function auth_swiper() {
    new Swiper("#auth_swiper", {
      modules: [Thumbs, FreeMode],
      slidesPerView: 1,
      spaceBetween: 30,
      centeredSlides: true,
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      breakpoints: {
        400: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
      },
    });
  }

  function testimonials() {
    new Swiper(".testimonials", {
      modules: [Thumbs, FreeMode, Navigation],
      loop: true,
      navigation: {
        nextEl: ".testimonials-button-next",
        prevEl: ".testimonials-button-prev",
      },
      pagination: {
        clickable: true,
        el: ".swiper-pagination",
      },
    });
  }

  function testimonials_swiper() {
    new Swiper(".testimonials_swiper", {
      modules: [Thumbs, FreeMode, Navigation],
      loop: true,
      navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
      },
      pagination: {
        clickable: true,
        el: ".swiper-pagination",
      },
      breakpoints: {
        440: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
      },
    });
  }

  function feedback_swiper() {
    new Swiper(".feedback_swiper", {
      modules: [Thumbs, FreeMode, Navigation],
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }

  mySwiper();
  testimonial_directory();
  auth_swiper();
  testimonials();
  testimonials_swiper();
  feedback_swiper();
}
init();
