// Слайдер

const rewiewsSliderInit = document.querySelector(".rewiews-slider-1");

if (rewiewsSliderInit) {
  const swiper = new Swiper('.rewiews-slider-1', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    direction: 'horizontal',
    pagination: {
      el: '.rewiews-slider-pagination',
      clickable: true,
      // dynamicBullets: true, // Если много кружков пагинации
      // dynamicMainBullets: 3, // Показывает количество отображаемых кружков пагинаии при включеном dynamicBullets
    },
    navigation: {
      nextEl: '.rewiews-slider-next',
      prevEl: '.rewiews-slider-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 24
      },
      992: {
        slidesPerView: 2,
        spaceBetween: 32
      }
    },
  });
}