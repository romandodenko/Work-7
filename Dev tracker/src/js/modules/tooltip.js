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