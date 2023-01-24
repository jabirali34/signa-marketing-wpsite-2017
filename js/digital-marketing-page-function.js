/**
 * File digital-marketing-page-function.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */

/*MENU TOGGLE*/
var classOne    = document.querySelector("#header");
var classTwo    = document.querySelector("#open-menu-btn");
var classThree  = document.querySelector("#close-menu-btn");
var classFour   = document.querySelector("#primary-menu");
var secondMenuBtn = document.querySelector("#open-secondary-menu-btn");
var secondMenu  = document.querySelector("#services-menu");
var modalButton      = document.querySelector("#lightbox-button");
var modal       = document.querySelector("#lightbox-form");

var allClasses = [classOne, classTwo, classThree, classFour];
var secondMenuClasses = [secondMenuBtn, secondMenu];
var modalClass = [modal];

function openMenu() {
	allClasses.forEach(function(el) {
  		el.classList.add("open")
	})
}
function closeMenu() {
	allClasses.forEach(function(el) {
  		el.classList.remove("open")
	})
}
/*Open Second Menu */
function openSecondMenu() {
	secondMenuClasses.forEach(function(el) {
  		el.classList.toggle("open")
  })

}
/*Modal functions*/
function openModal(){
  modalClass.forEach(function(el) {
      el.classList.remove("lightbox-noshow")
  })
}
function closeModal(){
  modalClass.forEach(function(el) {
      el.classList.add("lightbox-noshow")
  })
}


/*SCROLL FUNCTION*/

window.addEventListener('scroll', function () {
  document.body.classList[
    document.documentElement.scrollTop > 125 ? 'add': 'remove'
  ]('scrolled');
});


