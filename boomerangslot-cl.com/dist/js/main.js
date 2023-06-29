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

// Плавный скролл на странице

const pageLinks = document.querySelectorAll('a[href^="#"]');

// добавляем обработчик события на каждую ссылку
pageLinks.forEach(link => {
  link.addEventListener('click', function (event) {
    // отменяем стандартное поведение ссылки
    event.preventDefault();

    // получаем id элемента, на который ссылается якорь
    const id = this.getAttribute('href').substring(1);

    // находим элемент на странице по id
    const element = document.getElementById(id);

    // вычисляем координаты элемента на странице
    const top = element.getBoundingClientRect().top + window.pageYOffset;

    // запускаем анимацию скролла к элементу
    window.scrollTo({
      top,
      behavior: 'smooth'
    });
  });
});
  // Слайдер

const gamesSliderInit = document.querySelector(".games-slider");

if(gamesSliderInit) {
  const gamesSlider = new Swiper('.games-slider', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: "auto",
    spaceBetween: 0,
    direction: 'horizontal',
    scrollbar: {
      el: '.games-slider-scrollbar',
      draggable: true,
    },
  });
}

const renesansSliderInit = document.querySelector(".resenans-slider");

if(renesansSliderInit) {
  const renesansSlider = new Swiper('.resenans-slider', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: "auto",
    spaceBetween: 0,
    direction: 'horizontal',
    scrollbar: {
      el: '.resenans-slider-scrollbar',
      draggable: true,
    },
  });
}

// const swiper = new Swiper('.hero__swiper', {
//   loop: true,
//   // loopAdditionalSlides: 3, // Добавляет количество слайдов которые будут склонированы после создания цикла
//   // centeredSlides: true, // центрирует активный слайд по центру а не слева
//   observer: true,
//   observeParents: true,
//   watchOverflow: true,
//   slidesPerView: 1,
//   spaceBetween: 32,
//   // effect: "fade", анимация перелистывания слайдера
//   // slidesPerGroup: 1, 
//   // centeredSlides: true, // активный слайд будет в центре
//   // autoHeight: true,
//   direction: 'horizontal',
//   // speed: 500, // Автовоспроизведение
//   // autoplay: {
//   // delay: 5000,
//   // disableOnInteraction: false,
//   // waitForTransition: false, если нужно чтобы слайды листались когда пользователь уходит со страницы
//   // },
//   // grid: { // если нужно сделать слайдер не в 1 строку
//   //   rows: 2,
//   // },
//   // thumbs: { // Читаем ниже что даёт эта настройка
//   //   swiper: thumbsSwiper,
//   // },
//   pagination: {
//     el: '.hero__pagination',
//     clickable: true,
//     // dynamicBullets: true, // Если много кружков пагинации
//     // dynamicMainBullets: 3, // Показывает количество отображаемых кружков пагинаии при включеном dynamicBullets
//   },
//   navigation: {
//     nextEl: '.hero__button-next',
//     prevEl: '.hero__button-prev',
//   },
//   // scrollbar: {
//   //   el: '.hero__scrollbar',
//   //   draggable: true, // позволяет сделать полосу прокрутки перетаскиваемой
//   // },
//   // breakpoints: {
//   //   320: {
//   //     slidesPerView: 2,
//   //     spaceBetween: 20
//   //   },
//   //   480: {
//   //     slidesPerView: 3,
//   //     spaceBetween: 30
//   //   },
//   //   640: {
//   //     slidesPerView: 4,
//   //     spaceBetween: 40
//   //   }
//   // },
//   // on: {
//   // slideChange () {
//   // Событие будет запущено при изменении текущего активного слайда
//   // },
//   // slideChangeTransitionEnd () {
//   // Событие будет запущено после анимации другого слайда (следующего или предыдущего).
//   // },
//   // slideChangeTransitionStart() {
//   // Событие будет запущено в начале анимации для другого слайда (следующего или предыдущего). Т.е при клике на кнопку или пагинацию или перелистывание
//   // },
//   //   slideNextTransitionStart() {
//   // То же, что и "slideChangeTransitionStart", но только для направления "вперед"
//   //   },
//   //   slidePrevTransitionStart() {
//   // То же, что и "slideChangeTransitionStart", но только для направления "назад"
//   //   },
//   //   afterInit() {
//   // Событие будет запущено сразу после инициализации т.е при загрузке страницы сразу все заработает
//   //   }
//   // }
// });
};