// Слайдер

const comSliderInit = document.querySelector(".com-slider");

if(comSliderInit) {
  const comSlider = new Swiper('.com-slider', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: "auto",
    spaceBetween: 32,
    direction: 'horizontal',
    navigation: {
      nextEl: '.com-slider-button-next',
      prevEl: '.com-slider-button-prev',
    },
  });
}