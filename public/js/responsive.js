/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/responsive.js ***!
  \************************************/
var menuTogler = document.querySelector('.menu-toggler');
var closeIcon = document.querySelector('.close');
var menuMobile = document.querySelector('.menu-mobile');
menuTogler.addEventListener('click', function () {
  menuMobile.style.animation = 'slideIn 300ms linear';
  menuMobile.style.display = 'flex';
});
closeIcon.addEventListener('click', function () {
  menuMobile.style.animation = 'slideOut 300ms linear';
  setTimeout(function () {
    menuMobile.style.display = "none";
  }, 300);
});
/******/ })()
;