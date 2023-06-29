// Слайдер

const promotionsSliderInit = document.querySelector(".promotions-slider");

if(promotionsSliderInit) {
  const promotionsSlider = new Swiper('.promotions-slider', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: "auto",
    spaceBetween: 16,
    direction: 'horizontal',
    pagination: {
      el: '.promotions-slider-pagination',
      clickable: true,
    },
  });
}