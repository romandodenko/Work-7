<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Nuevo sports bar en mexico con pantallas gigantes y buena comida">
  <meta property="og:site_name"
    content="Sports Bar con la mejor gastronomía y las retransmisiones deportivas de mayor audiencia cualquier día de la semana. Tocamos música diferente, organizamos veladas temáticas y concursos.">
  <meta property="og:url" content="los-mejores-clubes-de-juego.com">
  <meta property="og:image" content="los-mejores-clubes-de-juego.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Nuevo sports bar en mexico con pantallas gigantes y buena comida">
  <meta name="twitter:description"
    content="Sports Bar con la mejor gastronomía y las retransmisiones deportivas de mayor audiencia cualquier día de la semana. Tocamos música diferente, organizamos veladas temáticas y concursos.">
  <meta name="twitter:site" content="los-mejores-clubes-de-juego.com">
  <meta name="twitter:image" content="los-mejores-clubes-de-juego.com/main.png">
  <meta name="description"
    content="Sports Bar con la mejor gastronomía y las retransmisiones deportivas de mayor audiencia cualquier día de la semana. Tocamos música diferente, organizamos veladas temáticas y concursos.">
  <title>Nuevo sports bar en mexico con pantallas gigantes y buena comida</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/SongMyung-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/VastShadow-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
</head>

<body>
  <div class="page">
    <!-- start header -->
    <?php
    include 'header.php';
    ?>
    <!-- end header -->
    <main>
      <!-- start events -->
      <section class="events events_2" id="events">
        <div class="events__container container">
          <div class="events__top">
            <h1 class="events__title events__title_2 tt-2">
              Próximos Eventos
            </h1>
          </div>
          <ul class="events__list">
            <li class="events__item">
              <div class="events__wrapper-image">
                <div class="events__image">
                  <a href="event-1.php">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/event/event-1.webp" type="image/webp">
                      <img src="./img/event/event-1.jpg" loading="lazy" width="399" height="399" alt="Image">
                    </picture>
                  </a>
                </div>
              </div>
              <p class="events__text tx-2">
                Final de la liga de campeones. ciudad de manchester - inter
              </p>
              <div class="events__middle">
                <div class="events__data tx-2">
                  10.06.2023
                </div>
                <div class="events__time tx-1">
                  21:15
                </div>
              </div>
              <div class="events__wrapper-link">
                <a class="events__link but-2" href="event-1.php">
                  Más información
                </a>
              </div>
            </li>
            <li class="events__item">
              <div class="events__wrapper-image">
                <div class="events__image">
                  <a href="event-2.php">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/event/event-2.webp" type="image/webp">
                      <img src="./img/event/event-2.jpg" loading="lazy" width="399" height="399" alt="Image">
                    </picture>
                  </a>
                </div>
              </div>
              <p class="events__text tx-2">
                Atlético San Luis - Pachuca
              </p>
              <div class="events__middle">
                <div class="events__data tx-2">
                  14.06.2023
                </div>
                <div class="events__time tx-1">
                  21:15
                </div>
              </div>
              <div class="events__wrapper-link">
                <a class="events__link but-2" href="event-2.php">
                  Más información
                </a>
              </div>
            </li>
            <li class="events__item">
              <div class="events__wrapper-image">
                <div class="events__image">
                  <a href="event-3.php">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/event/event-3.webp" type="image/webp">
                      <img src="./img/event/event-3.jpg" loading="lazy" width="399" height="399" alt="Image">
                    </picture>
                  </a>
                </div>
              </div>
              <p class="events__text tx-2">
                Juárez - Nekaxa
              </p>
              <div class="events__middle">
                <div class="events__data tx-2">
                  20.06.2023
                </div>
                <div class="events__time tx-1">
                  21:15
                </div>
              </div>
              <div class="events__wrapper-link">
                <a class="events__link but-2" href="event-3.php">
                  Más información
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end events --> 
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>