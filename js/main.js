const navbar = document.querySelector(".navbar");
const headerlogo = document.querySelector(".header-logo");
const logo = document.querySelector(".logo-svg use");
const navbarbutton = document.querySelector(".navbar-button");
window.addEventListener("scroll", () => {
  if (this.scrollY > 1) {
    navbar.classList.add("navbar-light");
    headerlogo.classList.add("header-logo-light");
    logo.href.baseVal = "img/sprite.svg#logo_dark";
    navbarbutton.classList.add("navbar-button-light");
  } else {
    navbar.classList.remove("navbar-light");
    headerlogo.classList.remove("header-logo-light");
    logo.href.baseVal = "img/sprite.svg#logo_light";
    navbarbutton.classList.remove("navbar-button-light");
  }
});
