const navbar = document.querySelector(".navbar");
const navbarlogo = document.querySelector(".navbar-logo");
//const logo = document.querySelector(".logo-svg");
const logoLight = document.querySelector(".logo-svg_light");
const logoDark = document.querySelector(".logo-svg_dark");
const navbarbutton = document.querySelector(".navbar-button");

const mMenuToogle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const isFront = document.body.classList.contains("front-page");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  navbarlogo.classList.add("navbar-logo-light");
  //logo.href.baseVal = "img/sprite.svg#logo_dark"; //+ .use в const logo
};

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  navbarlogo.classList.remove("navbar-logo-light");
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
/*window.addEventListener("scroll", () => {
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
});*/

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

/////////

const changeNavHeight = (height) => {
  navbar.style.height = height;
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? changeNavHeight("4.625rem") : changeNavHeight("5.875rem");
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
});

const changeNavPd = (padding) => {
  navbarlogo.style.padding = padding;
};

window.addEventListener("scroll", () => {
  this.scrollY > 1
    ? changeNavPd(".9375rem 3.125rem")
    : changeNavPd("1.5625rem 3.125rem");
});

const forms = document.querySelectorAll("form"); //Собираем все формы
forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validation
    .addField("[name=username]", [
      {
        rule: "required",
        errorMessage: "Укажите имя",
      },
      {
        rule: "maxLength",
        value: 50,
        errorMessage: "Максимально 50 символов",
      },
    ])
    .addField("[name=userphone]", [
      {
        rule: "required",
        errorMessage: "Укажите номер телефона",
      },
    ])
    .onSuccess((event) => {
      const thisForm = event.target; // Наша форма
      const formData = new FormData(thisForm); // Данные из нашей формы
      const ajaxSend = (formData) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,
        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            alert("Форма отправлена! 😊");
          } else {
            alert("Ошибка. Текст ошибки: ".response.statusText);
          }
        });
      };
      ajaxSend(formData);
    });
});
