// Слайдер

const reviewsSliderInit = document.querySelector(".reviews-slider-init");

if(reviewsSliderInit) {
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