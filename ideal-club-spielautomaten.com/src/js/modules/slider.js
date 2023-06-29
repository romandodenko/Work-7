// Слайдер
const recSliderOne = document.querySelector(".rec-slider-1");
 if(recSliderOne) {
  const recSlider = new Swiper('.rec-slider-1', {
    observer: true,
    observeParents: true,
    watchOverflow: true, 
    direction: 'horizontal',
    navigation: {
      nextEl: '.rec-slider-next',
      prevEl: '.rec-slider-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },
      701: {
        slidesPerView: 2,
        spaceBetween: 50, 
      },
      991: {
        slidesPerView: 3,
        spaceBetween: 50, 
      }
    },
  });
 }