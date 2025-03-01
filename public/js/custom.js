/******/ (() => { // webpackBootstrap
/*!********************************!*\
  !*** ./resources/js/custom.js ***!
  \********************************/
AOS.init({
  duration: 1000,
  easing: "ease-in-out",
  once: true,
  delay: 100
});
window.sendWhatsAppMessage = function (message) {
  var phoneNumber = '0651781903'; // Replace with your WhatsApp number (no '+' or special characters)
  var encodedMessage = encodeURIComponent(message);
  var url = "https://wa.me/".concat(phoneNumber, "?text=").concat(encodedMessage);
  window.open(url, '_blank');
};
document.addEventListener("DOMContentLoaded", function () {
  // Initialize VanillaTilt on the element with the `data-tilt` attribute
  VanillaTilt.init(document.querySelectorAll(".image_hero[data-tilt]"), {
    max: 25,
    // Maximum tilt rotation (default is 35)
    speed: 400,
    // Speed of the enter/exit transition (default is 300)
    glare: true,
    // Enable glare effect
    "max-glare": 0.5 // Maximum glare opacity (0 - 1)
  });
});
document.addEventListener("DOMContentLoaded", function () {
  // Initialize VanillaTilt on the element with the `data-tilt` attribute
  VanillaTilt.init(document.querySelectorAll(".img-area[data-tilt]"), {
    max: 15,
    // Maximum tilt rotation (default is 35)
    speed: 300,
    // Speed of the enter/exit transition (default is 300)
    glare: true,
    // Enable glare effect
    "max-glare": 0.5 // Maximum glare opacity (0 - 1)
  });
});
document.addEventListener("DOMContentLoaded", function () {
  var header = document.querySelector("header");
  var ctaHeader = document.querySelector(".ctaHeader");
  var lastScrollY = window.scrollY;
  window.addEventListener("scroll", function () {
    if (window.scrollY > 500) {
      header.classList.add("sticky");
      header.classList.remove("hidden");
      ctaHeader.classList.add('active');
    } else {
      header.classList.remove("sticky", "hidden");
      ctaHeader.classList.remove('active');
    }
    lastScrollY = window.scrollY;
  });
});
/******/ })()
;