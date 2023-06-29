<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title"
    content="Sports bar con las últimas noticias deportivas y retransmisiones en directo. Barcelona-Mallorca.">
  <meta property="og:site_name"
    content="Calientes sensaciones deportivas y el ambiente de una pelea caliente están en el aire de un bar deportivo en España. Aquí todos pueden disfrutar viendo varios eventos deportivos.">
  <meta property="og:url" content="top-clubes-legales.com">
  <meta property="og:image" content="top-clubes-legales.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title"
    content="Sports bar con las últimas noticias deportivas y retransmisiones en directo. Barcelona-Mallorca.">
  <meta name="twitter:description"
    content="Calientes sensaciones deportivas y el ambiente de una pelea caliente están en el aire de un bar deportivo en España. Aquí todos pueden disfrutar viendo varios eventos deportivos.">
  <meta name="twitter:site" content="top-clubes-legales.com">
  <meta name="twitter:image" content="top-clubes-legales.com/main.png">
  <meta name="description"
    content="Calientes sensaciones deportivas y el ambiente de una pelea caliente están en el aire de un bar deportivo en España. Aquí todos pueden disfrutar viendo varios eventos deportivos.">
  <title>Sports bar con las últimas noticias deportivas y retransmisiones en directo. Barcelona-Mallorca.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/.woff2" as="font" type="font/woff2" crossorigin>
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
      <!-- start event -->
      <section class="event">
        <div class="container">
          <h1 class="event__title tt-2">
            Barcelona-Mallorca
          </h1>
          <div class="event-top">
            <ul class="event-top__images">
              <li class="event-top__image event-top__image_1">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/ev-2.webp" type="image/webp">
                  <img src="./img/ev-2.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </li>
              <li class="event-top__image event-top__image_2">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/ev-2-2.webp" type="image/webp">
                  <img src="./img/ev-2-2.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </li>
            </ul>
            <div class="event-top__descr">
              <p class="event-top__text tx-1">
                El partido entre Barcelona y Mallorca prometía ser candente ya que ambos equipos están en un nuevo estado y nueva forma esta temporada. Ambos equipos siguen indecisos sobre posibles líderes y buscan a su campeón. Esto puede llevar al hecho de que los jugadores intentarán demostrar su valía y mostrar sus habilidades. Los oponentes lucharán por cada pelota y no dejarán que los demás se relajen durante el partido. Con todo, el partido entre Barcelona y Mallorca podría ser un espectáculo interesante para los aficionados al fútbol esta temporada.
              </p>
            </div>
          </div>
          <div class="event-bottom">
            <div class="event-bottom__image event-bottom__image_3">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/ev-2-3.webp" type="image/webp">
                <img src="./img/ev-2-3.jpg" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </div>
          </div>
        </div>
      </section>
      <!-- end event -->

      <!-- start eventos -->
      <section class="eventos">
        <div class="container">
          <div class="eventos__content">
            <h2 class="eventos__title tt-2">
              Otros eventos
            </h2>
            <ul class="eventos__list">
              <li class="eventos__item">
                <div class="eventos__image">
                  <a href="event-1.php">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/ev-1.webp" type="image/webp">
                      <img src="./img/ev-1.jpg" loading="lazy" width="300" height="300" alt="Image">
                    </picture>
                  </a>
                </div>
                <div class="eventos__bottom">
                  <div class="eventos__bottom-left">
                    <div class="eventos__data tx-1">
                      04.06.2023
                    </div>
                    <a class="eventos__link tx-2" href="event-1.php">
                      Barcelona-Mallorca
                    </a>
                  </div>
                  <a class="eventos__check" href="event-1.php">
                    <img src="./img/icon.svg" loading="lazy" width="30" height="30" alt="Icon">
                  </a>
                </div>
              </li>
              <li class="eventos__item">
                <div class="eventos__image">
                  <a href="event-3.php">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/ev-3.webp" type="image/webp">
                      <img src="./img/ev-3.jpg" loading="lazy" width="300" height="300" alt="Image">
                    </picture>
                  </a>
                </div>
                <div class="eventos__bottom">
                  <div class="eventos__bottom-left">
                    <div class="eventos__data tx-1">
                      15.06.2023
                    </div>
                    <a class="eventos__link tx-2" href="event-3.php">
                      España - Italia
                    </a>
                  </div>
                  <a class="eventos__check" href="event-3.php">
                    <img src="./img/icon.svg" loading="lazy" width="30" height="30" alt="Icon">
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end eventos -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>