'use strict';

const toggleElem = function (elem) { elem.classList.toggle('active'); }

const navbar = document.querySelector('[data-navbar]');
const navTogglers = document.querySelectorAll('[data-nav-toggler]');
const overlay = document.querySelector('[data-overlay]');

navTogglers.forEach(toggler => {
  toggler.addEventListener('click', () => {
    toggleElem(navbar);
    toggleElem(overlay);
  });
});

const header = document.querySelector('[data-header]');
const backTopBtn = document.querySelector('[data-back-top-btn]');

window.addEventListener('scroll', () => {
  if (window.scrollY >= 100) {
    header.classList.add('active');
    backTopBtn.classList.add('active');
    header.classList.add('header-anim');
  } else {
    header.classList.remove('active');
    backTopBtn.classList.remove('active');
    header.classList.remove('header-anim');
  }
});

const searchTogglers = document.querySelectorAll('[data-search-toggler]');
const searchBox = document.querySelector('[data-search-box]');

searchTogglers.forEach(toggler => {
  toggler.addEventListener('click', () => {
    toggleElem(searchBox);
  });
});

const whishlistBtns = document.querySelectorAll('[data-whish-btn]');

whishlistBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    toggleElem(btn);
  });
});