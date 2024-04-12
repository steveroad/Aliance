const navbar = document.querySelector(".navbar");
const navbarlogo = document.querySelector(".navbar-logo");
//const logo = document.querySelector(".logo-svg");
const logoLight = document.querySelector(".logo-svg_light");
const logoDark = document.querySelector(".logo-svg_dark");
const navbarbutton = document.querySelector(".navbar-button");

const mMenuToogle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logoDark.style.display = "block";
  logoLight.style.display = "none";
  //logo.href.baseVal = "img/sprite.svg#logo_dark"; //+ .use в const logo
};

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logoDark.style.display = "none";
  logoLight.style.display = "block";
  //logo.href.baseVal = "img/sprite.svg#logo_light";
};

const openMenu = (event) => {
  //Функция открывания меню
  menu.classList.add("is-open"); //Вешает класс is-open
  mMenuToogle.classList.add("is-close");
  document.body.style.overflow = "hidden"; //Запрещаем прокрутку сайта под меню
  lightModeOn();
};

const closeMenu = (event) => {
  //Функция закрывания меню
  menu.classList.remove("is-open"); //Убирает класс is-open
  mMenuToogle.classList.remove("is-close");
  document.body.style.overflow = "visible"; //Возвращает прокрутку сайта под меню
  lightModeOff();
};
/////////
window.addEventListener("scroll", () => {
  if (this.scrollY > 1) {
    // this.scrollY > 1 ? lightModeOn() : lightModeOff();  // Аналог
    lightModeOn();
    navbarlogo.classList.add("navbar-logo-light");
    navbarbutton.classList.add("navbar-button-light");
  } else {
    lightModeOff();
    navbarlogo.classList.remove("navbar-logo-light");
    navbarbutton.classList.remove("navbar-button-light");
  }
});

mMenuToogle.addEventListener("click", (event) => {
  event.preventDefault();
  //menu.classList.toggle("is-open");
  if (menu.classList.contains("is-open")) {
    closeMenu();
  } else {
    openMenu();
  }
});
//1//
const swiper1 = new Swiper(".swiper1", {
  speed: 400,
  //autoHeight: true,
  slidesPerView: 1,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
      centeredSlides: true,
      slidesOffsetBefore: -100,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 5,
    },
  },
});

//2//
const swiper2 = new Swiper(".swiper2", {
  speed: 400,
  autoHeight: true,
  slidesPerView: 1,
  navigation: {
    nextEl: ".steps-button-next",
    prevEl: ".steps-button-prev",
  },
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,
    },
  },
});

//3//
const swiperBlog = new Swiper(".blog-swiper", {
  speed: 400,
  autoHeight: true,
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
  breakpoints: {
    // when window width is >= 768px
    768: {
      slidesPerView: 1,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 2,
    },
  },
});
/////////
/*const modal = document.querySelector(".modal");
const modalToggle = document.querySelectorAll("[data-toggle=modal]");
const modalClose = document.querySelector(".modal-close");
modalToggle.forEach((element) => {
  element.addEventListener("click", (event) => {
    event.preventDefault();
    modal.classList.add("is-open");
  });
});
modalClose.addEventListener("click", (event) => {
  event.preventDefault();
  modal.classList.remove("is-open");
});*/
const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");

document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) &&
      modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
});
