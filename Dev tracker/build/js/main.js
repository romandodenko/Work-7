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
  if (elementInteractive.closest(".clicks-table-inherit__button")) { // Открытие и закрытие бургера
    const clicksTableInherit = elementInteractive.closest(".clicks-table-inherit-accordion");
    const clicksTableInheritBottom = clicksTableInherit.querySelector(".clicks-table-inherit__row_bottom");

    if (!clicksTableInherit.classList.contains("active")) {
      document.querySelectorAll(".clicks-table-inherit-accordion").forEach(function (q) {
        q.classList.remove("active");
        let clicksTableInheritAccordionBottom = q.querySelector(".clicks-table-inherit__row_bottom");
        clicksTableInheritAccordionBottom.style.height = 0;
        clicksTableInheritAccordionBottom.style.display = "none";
      })

      clicksTableInherit.classList.add("active");
      clicksTableInheritBottom.style.height = "auto";
      clicksTableInheritBottom.style.display = "flex";

    } else {

      clicksTableInherit.classList.remove("active");
      clicksTableInheritBottom.style.height = 0;
      clicksTableInheritBottom.style.display = "none";
      
    }


  }
})
// Перекидывание на странице Клики\Посещения
const clicks = document.querySelector(".clicks");

const clicksTableInherit = document.querySelectorAll(".clicks-table-inherit");

if (clicks) {

  clicksTableInherit.forEach(function (e) {
    let clicksTableInheritBottom = e.querySelector(".clicks-table-inherit__row_bottom");
    if (clicksTableInheritBottom) {
      let clicksTableInheritCleck1400 = e.querySelectorAll(".clicks-table-inherit__td_cleck1400");
      let clicksTableInheritCleck650 = e.querySelectorAll(".clicks-table-inherit__td_cleck650");

      if (document.body.clientWidth < 1401) {
        clicksTableInheritCleck1400.forEach(function (e) {
          clicksTableInheritBottom.append(e);
        })
      }

      if (document.body.clientWidth < 651) {
        clicksTableInheritCleck650.forEach(function (e) {
          clicksTableInheritBottom.append(e);
        })
      }
    }


  })

}
  // Тултип

tippy('.tooltip', {
  placement: 'top', // Расположение 
  role: 'tooltip',
  trigger: 'mouseenter focus click', // Как срабатывает тултип, при наведение, фокусу и клике
  hideOnClick: true,
  theme: "colorToolp", // Кастомная тема
  maxWidth: 200, // максимальная ширина тултипа
  arrow: false,
}); 
};