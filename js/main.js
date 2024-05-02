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

let currentMoadl; // Текущее модальное окно
let modalDialog; // Белое диалоговое окно
let alertMoadl = document.querySelector("#alert-modal"); // Окно с благодарностью

const modalButtons = document.querySelectorAll("[data-toggle=modal]"); // Переключатели модальных окон

modalButtons.forEach((button) => {
  /* Клик по переключателю */
  button.addEventListener("click", (event) => {
    event.preventDefault();
    /* Определяем текущее открытое оконо */
    currentMoadl = document.querySelector(button.dataset.target);
    /* Открываем текущее окно */
    currentMoadl.classList.toggle("is-open");
    /* Назначаем новое белое диалоговое окно */
    modalDialog = currentMoadl.querySelector(".modal-dialog");
    /* Отслеживаем событие клика внутри окна и вне окна */
    currentMoadl.addEventListener("click", (event) => {
      /* Если клик в пустую область */
      if (!event.composedPath().includes(modalDialog)) {
        /* Закрываем окно */
        currentMoadl.classList.remove("is-open");
      }
    });
  });
});
/* Ловим нажатие кнопки */
document.addEventListener("keyup", (event) => {
  /* Если это ESC */
  if (event.key == "Escape" && currentMoadl.classList.contains("is-open")) {
    /* Закрываем окно */
    currentMoadl.classList.toggle("is-open");
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
            currentMoadl.classList.remove("is-open");
            alertMoadl.classList.add("is-open");
            currentMoadl = alertMoadl;
            modalDialog = currentMoadl.querySelector(".modal-dialog");
            /* Отслеживаем событие клика внутри окна и вне окна */
            currentMoadl.addEventListener("click", (event) => {
              /* Если клик в пустую область */
              if (!event.composedPath().includes(modalDialog)) {
                /* Закрываем окно */
                currentMoadl.classList.remove("is-open");
              }
            });
          } else {
            alert("Ошибка. Текст ошибки: ".response.statusText);
          }
        });
      };
      ajaxSend(formData);
    });
});

/////////////

/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});
