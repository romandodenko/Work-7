<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Sports bar con las últimas noticias deportivas y retransmisiones en directo.">
  <meta property="og:site_name"
    content="Calientes sensaciones deportivas y el ambiente de una pelea caliente están en el aire de un bar deportivo en España. Aquí todos pueden disfrutar viendo varios eventos deportivos.">
  <meta property="og:url" content="top-clubes-legales.com">
  <meta property="og:image" content="top-clubes-legales.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Sports bar con las últimas noticias deportivas y retransmisiones en directo.">
  <meta name="twitter:description"
    content="Calientes sensaciones deportivas y el ambiente de una pelea caliente están en el aire de un bar deportivo en España. Aquí todos pueden disfrutar viendo varios eventos deportivos.">
  <meta name="twitter:site" content="top-clubes-legales.com">
  <meta name="twitter:image" content="top-clubes-legales.com/main.png">
  <meta name="description"
    content="Calientes sensaciones deportivas y el ambiente de una pelea caliente están en el aire de un bar deportivo en España. Aquí todos pueden disfrutar viendo varios eventos deportivos.">
  <title>Sports bar con las últimas noticias deportivas y retransmisiones en directo.</title>
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
      <!-- start popup -->
      <div class="popup popup-active" id="popup">
        <div class="popup__close"></div>
        <div class="popup__body">
          <p class="popup__text">Nuestros juegos están destinados a un público ADULTO mayor de 18 años. Al hacer clic en
            el botón
            Botón para confirmar tu edad.</p>
          <button class="popup__button">El está deacuerdo</button>
        </div>
      </div>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__descr">
            <h1 class="hero__title tt-1">
              <span>Sports bar</span> con las últimas retransmisiones
            </h1>
            <p class="hero__text tx-1">
              Bar con la capacidad de ver eventos deportivos calientes en pantallas grandes
            </p>
            <ul class="hero__list">
              <li class="hero__item">
                <a class="hero__link hero__link_1 but-1" href="eventos.php">
                  Todos los eventos
                </a>
              </li>
              <li class="hero__item">
                <a class="hero__link hero__link_2 but-1" href="index.php#about">
                  Sobre nosotros
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start eventos -->
      <section class="eventos">
        <div class="container">
          <div class="eventos__content">
            <h2 class="eventos__title tt-2">
              Eventos
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
                      Celta - Barcelona
                    </a>
                  </div>
                  <a class="eventos__check" href="event-1.php">
                    <img src="./img/icon.svg" loading="lazy" width="30" height="30" alt="Icon">
                  </a>
                </div>
              </li>
              <li class="eventos__item">
                <div class="eventos__image">
                  <a href="event-2.php">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/ev-2.webp" type="image/webp">
                      <img src="./img/ev-2.jpg" loading="lazy" width="300" height="300" alt="Image">
                    </picture>
                  </a>
                </div>
                <div class="eventos__bottom">
                  <div class="eventos__bottom-left">
                    <div class="eventos__data tx-1">
                      28.05.2023
                    </div>
                    <a class="eventos__link tx-2" href="event-2.php">
                      Barcelona-Mallorca
                    </a>
                  </div>
                  <a class="eventos__check" href="event-2.php">
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
            <a class="eventos__see but-1" href="eventos.php">
              Más
            </a>
          </div>
        </div>
      </section>
      <!-- end eventos -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title tt-2">
            Sobre nosotros
          </h2>
          <div class="about__content">
            <div class="about__left">
              <h3 class="about__subtitle tx-2">
                ¡Bienvenido a nuestro bar deportivo!
              </h3>
              <p class="about__text tx-1">
                Estamos orgullosos de tener una alta calificación entre los amantes del deporte y los bares. Tenemos
                todo lo que necesitas para ver juegos calientes en pantallas gigantes, disfrutar de deliciosas comidas y
                bebidas en un ambiente agradable y amigable.
              </p>
              <p class="about__text tx-1">
                Estamos constantemente actualizando nuestro menú para ofrecer nuevas y emocionantes opciones de
                alimentos y bebidas que hacen deleitar a nuestros comensales.
              </p>
              <p class="about__text tx-1">
                Nuestro equipo está formado por personas alegres, experimentadas y profesionales que siempre están
                listas para hacer todo lo posible para que se sienta cómodo y acogedor con nosotros. Si desea pasar
                tiempo en agradable compañía, disfrutar de buena comida y juegos deportivos, entonces nuestro bar
                deportivo es el lugar perfecto para usted.
              </p>
            </div>
            <ul class="about__images">
              <li class="about__image about__image_1">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/sobre-1.webp" type="image/webp">
                  <img src="./img/sobre-1.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </li>
              <li class="about__image about__image_2">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/sobre-2.webp" type="image/webp">
                  <img src="./img/sobre-2.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end about -->

      <!-- start gallery -->
      <section class="gallery" id="gallery">
        <div class="container">
          <h2 class="gallery__title tt-2">
            Galería
          </h2>
          <div class="gallery__content">
            <div class="gallery__left">
              <div class="gallery__image gallery__image_1">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-1.webp" type="image/webp">
                  <img src="./img/gallery-1.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
              <div class="gallery__image gallery__image_2">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-2.webp" type="image/webp">
                  <img src="./img/gallery-2.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
            </div>
            <div class="gallery__right">
              <div class="gallery__image gallery__image_3">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-3.webp" type="image/webp">
                  <img src="./img/gallery-3.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
              <div class="gallery__image gallery__image_4">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-4.webp" type="image/webp">
                  <img src="./img/gallery-4.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end gallery -->

      <!-- start contacts -->
      <section class="contacts">
        <div class="contacts__container contacts__container_1 container">
          <h2 class="contacts__title tt-2">
            Contactos
          </h2>
        </div>
        <div class="contacts__inner">
          <div class="contacts__decro"></div>
        <div class="contacts__container container">
          <div class="contacts__content">
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input tx-1" type="text" name="text" id="text" placeholder="Nombre..." required>
                <input class="form__input tx-1" type="email" name="email" id="email" placeholder="Correo..." required>
              </div>
              <button class="form__button but-1" type="submit">Enviar</button>
            </form>
            <div class="contacts__right" data-da=".contacts__container_1, 991, 1">
              <h3 class="contacts__subtitle tt-3">
                Contáctenos
              </h3>
              <p class="contacts__text tx-1">
                Si tiene preguntas, sugerencias o desea discutir cualquier tema con más detalle, ¡contáctenos! Siempre
                estamos listos para escucharte y ayudarte a resolver cualquier problema.
              </p>
            </div>
          </div>
        </div>
        </div>
      </section>
      <!-- end contacts -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>