"use strict"

window.addEventListener("load", windowLoad);

function windowLoad() {
  document.documentElement.classList.add("loaded");

  // Открытие и закрытие бургера

  const menu = document.querySelector(".header__menu");

  document.addEventListener("click", function (e) {

    const elementInteractive = e.target;

    if (elementInteractive.closest(".burger")) { // Открытие и закрытие бургера
      menu.classList.add("menu-active")
      document.body.style.overflow = "hidden";
    }
    if (elementInteractive.closest(".header__exit-menu")) { // Открытие и закрытие бургера 
      menu.classList.remove("menu-active")
      document.body.style.overflow = "";
    }
    if (elementInteractive.closest(".nav__link")) { // Открытие и закрытие бургера
      menu.classList.remove("menu-active")
      document.body.style.overflow = "";
    }
  })

  // Скрипт для проверки , поддерживает ли браузер webp 

  function testWebP(callback) {
    var webP = new Image();

    webP.onload = webP.onerror = function () {
      callback(webP.height == 2);
    };

    webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
  }

  testWebP(function (support) {
    if (support == true) {
      document.querySelector('body').classList.add('webp');
    } else {
      document.querySelector('body').classList.add('no-webp');
    }
  });

  const heroImages = document.querySelector(".hero__images");

  if (heroImages) {

    let heroImageOne = document.querySelector(".hero__image_1");

    if (document.body.clientWidth < 992) {
      heroImages.append(heroImageOne);
    }

  }

  const aboutImages = document.querySelector(".about__images");

  if (aboutImages) {

    let aboutImageTwo = document.querySelector(".about__image_2");

    if (document.body.clientWidth < 992) {
      aboutImages.append(aboutImageTwo);
    }

  }

  const popup = document.querySelector(".popup");

  if (popup) {
    function setCookie(name, value, days) {
      let expires = "";
      if (days) {
        let date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        expires = "; expires=" + date.toUTCString();
      }
      document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    function getCookie(name) {
      let matches = document.cookie.match(
        new RegExp(
          "(?:^|; )" +
          name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") +
          "=([^;]*)"
        )
      );
      return matches ? decodeURIComponent(matches[1]) : undefined;
    }

    function checkCookies() {
      let cookieNote = document.querySelector(".popup-active"); // элемент
      let cookieBtnAccept = cookieNote.querySelector(".popup__button"); // кнопка

      // Если куки cookies_policy нет или она просрочена, то показываем уведомление
      if (!getCookie("cookies_policy")) {
        cookieNote.classList.add("show");
      }

      // При клике на кнопку устанавливаем куку cookies_policy на один год
      cookieBtnAccept.addEventListener("click", function () {
        setCookie("cookies_policy", "true", 365);
        cookieNote.classList.remove("show");
      });
    }

    checkCookies();
  }
  // Слайдер

  const reviewsSliderInit = document.querySelector(".reviews-slider-init");

  if (reviewsSliderInit) {
    const reviewsSlider = new Swiper('.reviews-slider-init', {
      observer: true,
      observeParents: true,
      watchOverflow: true,
      slidesPerView: 1,
      spaceBetween: 24,
      direction: 'horizontal',
      pagination: {
        el: '.reviews-slider-pagination',
        clickable: true,
        // dynamicBullets: true, // Если много кружков пагинации
        // dynamicMainBullets: 3, // Показывает количество отображаемых кружков пагинаии при включеном dynamicBullets
      },
      navigation: {
        nextEl: '.reviews-slider-next',
        prevEl: '.reviews-slider-prev',
      },
    });
  }
};