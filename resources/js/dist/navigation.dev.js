"use strict";

var hamburger = document.querySelector('.hamburger');
var openLinks = document.querySelector('.open');
var navLinks = document.querySelector('.nav-links');
var links = document.querySelectorAll('.nav-links li');
var navClose = document.querySelector('.close');
var sideMenu = document.querySelector('.side-menu');
hamburger.addEventListener('click', function () {
  sideMenu.classList.add('display');
  navLinks.classList.add('open'); //  links.forEach(link => {
  //      link.classList.add('fade');
  //  });
});
navClose.addEventListener('click', function () {
  sideMenu.classList.remove('display');
  navLinks.classList.remove('open');
});