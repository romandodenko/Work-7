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