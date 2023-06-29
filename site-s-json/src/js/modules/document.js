document.documentElement.classList.add("loaded");

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

if(document.body.clientWidth <= 768) {
  const headerContentBottom = document.querySelector(".header-content-bottom");
  const reviewContainer = document.querySelector(".review__container");
  reviewContainer.append(headerContentBottom);
}

// const header = document.querySelector(".header");

// const headerContainer = document.querySelector(".header__container");

// const payments = document.querySelector(".payments");

// const paymentsContainer = document.querySelector(".payments__container");

// const paymentsList = document.querySelector(".payments__list");

// const promotions = document.querySelector(".promotions");

// const promotionsContainer = document.querySelector(".promotions__container");

// const promotionsSliderJ = document.querySelector(".promotions-slider");

// const review = document.querySelector(".review");

// const reviewContainer = document.querySelector(".review__container");

// const reviewTopLeft = document.querySelector(".review-top__left");

// const reviewTopList = document.querySelector(".review-top__list");

// const reviewTopRight = document.querySelector(".review-top__right");

// const reviewTopImages = document.querySelector(".review-top__images");

// const reviewList = document.querySelector(".review-list");

// const games = document.querySelector(".games");

// const gamesContainerOne = document.querySelector(".games__container_1");

// const gamesContainerTwo = document.querySelector(".games__container_2");

// const gamesContent = document.querySelector(".games__content");

// const providers = document.querySelector(".providers");

// const providersContainer = document.querySelector(".providers__container");

// const providersList = document.querySelector(".providers-list");

// const footer = document.querySelector('.footer');

// const footerContainer = document.querySelector('.footer__container');

// const footerElements = document.querySelector('.footer-elements');

// const headerJson = '../json/header.json';

// const paymentJson = '../json/payment.json';

// const promotionsJson = '../json/promotions.json';

// const reviewJson = '../json/review.json';

// const gamesJson = '../json/games.json';

// const providersJson = '../json/providers.json';

// const footerJson = '../json/footer.json';

// if (header) {
//   fetch(headerJson)
//     .then((resp) => resp.json())
//     .then(function (data) {
//       data.forEach(function (e) {
//         let templateContent = `
//       <div class="header-top">
//       <div class="header-top__wrapper-country">
//         <span class="header-top__flag">
//           <picture>
//             <source media="(min-width: 320px)" srcset="${e.flagWebp}" type="image/webp">
//             <img src="${e.flag}" loading="lazy" width="30" height="30" alt="Image">
//           </picture>
//         </span>
//         <div class="header-top__country tx-3">
//             ${e.country}
//         </div>
//       </div>
//     </div>
//     <div class="header-content">
//       <a class="header-content__logo" href="go.php">
//         <img src="${e.logo}" loading="lazy" alt="logo">
//       </a>
//       <div class="header-content__inner">
//         <div class="header-content-top">
//           <h1 class="header-content-top__title tt-1">
//           ${e.casino}
//           </h1>
//           <div class="header-content-top__rating">
//             <div class="header-content-top__rating-num tx-2">
//             ${e.rating}
//             </div>
//             <div class="header-content-top__stars">
//               <picture>
//                 <source media="(min-width: 320px)" srcset="./img/static/header/stars.webp" type="image/webp">
//                 <img src="./img/static/header/stars.png" loading="lazy" width="30" height="30" alt="Stars">
//               </picture>
//             </div>
//           </div>
//         </div>
//         <div class="header-content-bottom">
//           <p class="header-content-bottom__text tx-1">
//           ${e.text1}
//           </p>
//           <p class="header-content-bottom__text tx-1">
//           ${e.text2}
//           </p>
//         </div>
//       </div>
//     </div>
//       `;
//         let template = `
//         <div class="header-image">
//           <picture>
//             <source media="(min-width: 320px)" srcset="${e.imageWebp}" type="image/webp">
//             <img src="${e.image}" loading="lazy" width="300" height="300" alt="Image">
//           </picture>
//         </div>
//       `;
//         headerContainer.insertAdjacentHTML("beforeend", templateContent);
//         header.insertAdjacentHTML("beforeend", template);
//       })
      // if(document.body.clientWidth <= 768) {
      //   const headerContentBottom = document.querySelector(".header-content-bottom");
      //   const reviewContainer = document.querySelector(".review__container");
      //   reviewContainer.append(headerContentBottom);
      // }
//     })
//     .catch(function (error) {
//       console.log(error);
//     });
// }

// if (payments) {
//   fetch(paymentJson)
//     .then((resp) => resp.json())
//     .then(function (data) {
//       data.content.forEach(function (e) {
//         let template = `
//           <div class="payments-top">
//             <span class="payments-top__icon icon">
//               <img src="${e.icon}" loading="lazy" width="30" height="30" alt="Icon">
//             </span>
//             <h2 class="payments-top__title tt-2">
//               ${e.title}
//             </h2>
//           </div>
//           `
//         paymentsContainer.insertAdjacentHTML("afterbegin", template);
//       })
//       data.payments.forEach(function (e) {
//         let template = `
//         <li class="payments__item">
//           <img src="${e.payment}" loading="lazy" alt="Payment">
//         </li>
//         `
//         paymentsList.insertAdjacentHTML("beforeend", template);
//       })
//     })
//     .catch(function (error) {
//       console.log(error);
//     });
// }

// if (promotions) {
//   fetch(promotionsJson)
//     .then((resp) => resp.json())
//     .then(function (data) {
//       data.content.forEach(function (e) {
//         let template = `
//         <div class="promotions-top">
//           <span class="promotions-top__icon icon">
//             <img src="${e.icon}" loading="lazy" width="30" height="30" alt="Icon">
//           </span>
//           <h2 class="promotions-top__title tt-2">
//           ${e.title}
//           </h2>
//         </div>
//           `
//           promotionsContainer.insertAdjacentHTML("afterbegin", template);
//       })
//       data.sliders.forEach(function (e) {
//         let template = `
//         <div class="promotions-slider__slide swiper-slide">
//           <div class="promotions-slider__image">
//             <picture>
//               <source media="(min-width: 320px)" srcset="${e.imageWebp}"
//                 type="image/webp">
//               <img src="${e.image}" loading="lazy" width="200" height="200"
//                 alt="Image">
//             </picture>
//           </div>
//           <div class="promotions-slider__descr">
//             <h3 class="promotions-slider__title tt-3">
//             ${e.title} <span>${e.title2}</span>
//             </h3>
//             <p class="promotions-slider__text tx-4">
//             ${e.text} <span>${e.text1}</span>
//             </p>
//           </div>
//         </div>
//         `
//         promotionsSliderJ.querySelector(".promotions-slider__wrapper").insertAdjacentHTML("beforeend", template);
//       })
//       data.link.forEach(function (e) {
//         let template = `
//         <a class="promotions__link but-1" href="go.php">
//           ${e.text}
//         </a>
//           `
//           promotionsContainer.insertAdjacentHTML("beforeend", template);
//       })
//     })
//     .catch(function (error) {
//       console.log(error);
//     });
// }

// if (review) {
//   fetch(reviewJson)
//     .then((resp) => resp.json())
//     .then(function (data) {
//       data.content.forEach(function (e) {
//         let template = `
//         <div class="review-head">
//           <span class="review-head__icon icon">
//             <img src="${e.icon}" loading="lazy" width="30" height="30" alt="Icon">
//           </span>
//           <h2 class="review-head__title tt-2">
//           ${e.title}
//           </h2>
//         </div>
//           `
//           reviewContainer.insertAdjacentHTML("afterbegin", template);
//       })
//       data.reviewLeftTitle.forEach(function (e) {
//         let template = `
//         <h3 class="review-top__title tt-3">
//           ${e.title}
//         </h3>
//           `
//           reviewTopLeft.insertAdjacentHTML("afterbegin", template);
//       })
//       data.reviewBenefits.forEach(function (e) {
//         let template = `
//         <li class="review-top__item">
//           <p class="review-top__text tx-4">
//           ${e.text}
//           </p>
//         </li>
//           `
//           reviewTopList.insertAdjacentHTML("beforeend", template);
//       })
//       data.reviewRightTitle.forEach(function (e) {
//         let template = `
//         <h3 class="review-top__title review-top__title_2 tt-3">
//           ${e.title}
//         </h3>
//           `
//           reviewTopRight.insertAdjacentHTML("afterbegin", template);
//       })
//       data.reviewRightImage.forEach(function (e) {
//         let template = `
//         <li class="review-top__image review-top__image_${e.class}">
//           <picture>
//             <source media="(min-width: 320px)" srcset="${e.imageWebp}" type="image/webp">
//             <img src="${e.image}" loading="lazy" alt="Image">
//           </picture>
//         </li>
//           `
//           reviewTopImages.insertAdjacentHTML("beforeend", template);
//       })
//       data.reviewList.forEach(function (e) {
//         let template = `
//         <li class="review-list__item">
//           <span class="review-list__icon">
//             <img src="${e.icon}" loading="lazy" width="30" height="30" alt="Icon">
//           </span>
//           <strong class="review-list__title tx-4">
//           ${e.title}
//           </strong>
//           <p class="review-list__num tt-2">
//           ${e.num}
//           </p>
//         </li>
//           `
//           reviewList.insertAdjacentHTML("beforeend", template);
//       })
//     })
//     .catch(function (error) {
//       console.log(error);
//     });
// }

// if (games) {
//   fetch(gamesJson)
//     .then((resp) => resp.json())
//     .then(function (data) {
//       data.content.forEach(function (e) {
//         let template = `
//         <div class="games-top">
//           <span class="games-top__icon icon">
//             <img src="${e.icon}" loading="lazy" width="30" height="30" alt="Icon">
//           </span>
//           <h2 class="games-top__title tt-2">
//           ${e.title}
//           </h2>
//         </div>
//           `
//           gamesContainerOne.insertAdjacentHTML("afterbegin", template);
//       })
//       data.contentImages.forEach(function (e) {
//         let template = `
//         <li class="games__content-item">
//           <picture>
//             <source media="(min-width: 320px)" srcset="${e.imageWebp}" type="image/webp">
//             <img src="${e.image}" loading="lazy" width="300" height="300" alt="Image">
//           </picture>
//         </li>
//           `
//           gamesContent.insertAdjacentHTML("afterbegin", template);
//       })
//       data.link.forEach(function (e) {
//         let template = `
//         <a class="games__link but-1" href="go.php">
//           ${e.text}
//         </a>
//           `
//           gamesContainerTwo.insertAdjacentHTML("afterbegin", template);
//       })
//     })
//     .catch(function (error) {
//       console.log(error);
//     });
// }

// if (providers) {
//   fetch(providersJson)
//     .then((resp) => resp.json())
//     .then(function (data) {
//       data.content.forEach(function (e) {
//         let template = `
//         <div class="providers-top">
//           <span class="providers-top__icon icon">
//             <img src="${e.icon}" loading="lazy" width="30" height="30" alt="Icon">
//           </span>
//           <h2 class="providers-top__title tt-2">
//           ${e.title}
//           </h2>
//         </div>
//           `
//           providersContainer.insertAdjacentHTML("afterbegin", template);
//       })
//       data.list.forEach(function (e) {
//         let template = `
//         <li class="providers-list__item">
//           <img src="${e.image}" loading="lazy" width="30" height="30" alt="Providers">
//         </li>
//           `
//           providersList.insertAdjacentHTML("beforeend", template);
//       })
//     })
//     .catch(function (error) {
//       console.log(error);
//     });
// }

// if (footer) {
//   fetch(footerJson)
//     .then((resp) => resp.json())
//     .then(function (data) {
//       data.list.forEach(function (e) {
//         let template = `
//         <li class="footer-elements__item">
//           <img src="${e.image}" loading="lazy" width="30" height="30" alt="Icon">
//         </li>
//           `
//           footerElements.insertAdjacentHTML("beforeend", template);
//       })
//       data.copy.forEach(function (e) {
//         let template = `
//         <p class="footer__text tx-1">
//           ${e.text}
//         </p>
//           `
//           footerContainer.insertAdjacentHTML("beforeend", template);
//       })
//     })
//     .catch(function (error) {
//       console.log(error);
//     });
// }