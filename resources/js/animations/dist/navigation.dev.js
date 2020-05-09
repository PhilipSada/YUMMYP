"use strict";

var hamburger = document.querySelector('.hamburger');
var navMenuWrapper = document.querySelector('.navigation-menu-wrapper');
var navMenu = document.querySelector('.navigation-menu');
var closeNav = document.querySelector('.navigation-close');
var navLinks = document.querySelectorAll('.navigation-menu ul li');
hamburger.addEventListener('click', function () {
  var timeline = gsap.timeline();
  timeline.fromTo('.navigation-menu-wrapper', {
    opacity: 0,
    zIndex: 10,
    visibility: 'hidden'
  }, {
    opacity: 1,
    zIndex: 100,
    visibility: 'visible'
  }).fromTo('.navigation-menu', {
    x: '100%'
  }, {
    x: 0
  }).fromTo('.navigation-menu ul li', {
    x: 10
  }, {
    x: 0
  });
});
closeNav.addEventListener('click', function () {
  var timeline = gsap.timeline();
  timeline.fromTo('.navigation-menu', {
    x: 0
  }, {
    x: '100%'
  }).fromTo('.navigation-menu-wrapper', {
    opacity: 1,
    zIndex: 100,
    visibility: 'visible'
  }, {
    opacity: 0,
    zIndex: 10,
    visibility: 'hidden'
  });
});
navLinks.forEach(function (link) {
  link.addEventListener('click', function () {
    var timeline = gsap.timeline();
    timeline.fromTo('.navigation-menu', {
      x: 0
    }, {
      x: '100%'
    }).fromTo('.navigation-menu-wrapper', {
      opacity: 1,
      zIndex: 100,
      visibility: 'visible'
    }, {
      opacity: 0,
      zIndex: 10,
      visibility: 'hidden'
    });
  });
});