const navbar = document.querySelector(".navbar");
const navbarlogo = document.querySelector(".navbar-logo");
const logo = document.querySelector(".logo-svg use");
const navbarbutton = document.querySelector(".navbar-button");

const mMenuToogle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
window.addEventListener("scroll", () => {
  if (this.scrollY > 1) {
    navbar.classList.add("navbar-light");
    navbarlogo.classList.add("navbar-logo-light");
    logo.href.baseVal = "img/sprite.svg#logo_dark";
    navbarbutton.classList.add("navbar-button-light");
  } else {
    navbar.classList.remove("navbar-light");
    navbarlogo.classList.remove("navbar-logo-light");
    logo.href.baseVal = "img/sprite.svg#logo_light";
    navbarbutton.classList.remove("navbar-button-light");
  }
});

mMenuToogle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.toggle("is-open");
});
