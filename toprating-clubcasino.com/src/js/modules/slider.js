// Слайдер

const reviewsSliderInit = document.querySelector(".reviews-slider-1");

if (reviewsSliderInit) {
  const reviewsSlider = new Swiper('.reviews-slider-1', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
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
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 24
      },
      992: {
        slidesPerView: 2,
        spaceBetween: 32,
      }
    },
  });
}