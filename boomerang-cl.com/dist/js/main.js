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
 
  // Слайдер

const comentSliderInit = document.querySelector(".coment-slider");

if(comentSliderInit) {
  const comentSlider = new Swiper('.coment-slider', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: "auto",
    spaceBetween: 0,
    direction: 'horizontal',
    pagination: {
      el: '.coment-slider-pagination',
      type: "fraction",
    },
    navigation: {
      nextEl: '.coment-slider-next',
      prevEl: '.coment-slider-prev',
    },
  });
  
}
};