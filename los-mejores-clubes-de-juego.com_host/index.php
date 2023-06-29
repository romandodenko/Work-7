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
      <!-- start popup -->
      <div class="popup popup-active" id="popup">
        <div class="popup__close"></div>
        <div class="popup__body">
          <p class="popup__text">Nuestros juegos están destinados a un público ADULTO mayor de 18 años. Al hacer clic en el botón
            Botón para confirmar tu edad.</p>
          <button class="popup__button">El está deacuerdo</button>
        </div>
      </div>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero" style="background-image: url(./img/hero/hero.jpg);">
        <div class="container">
          <div class="hero__content">
            <div class="hero__descr">
              <h1 class="hero__title tt-1">
                ¡Mira retransmisiones deportivas!
              </h1>
              <p class="hero__text tx-2">
                Nuevas salas para ver tus partidos favoritos, así como partidos con altos ratings.
              </p>
              <a class="hero__link but-1" href="#events">
                Ver partidos
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title tt-2">
            Sobre nuestra barra
          </h2>
          <div class="about__content">
            <div class="about__descr">
              <p class="about__text tx-1">
                Nuestro sports bar es el lugar perfecto para los amantes del deporte y la deliciosa comida. Brindamos a
                nuestros huéspedes la oportunidad única de ver sus transmisiones deportivas favoritas de alta audiencia
                en pantallas grandes junto con amigos y familiares.
              </p>
              <p class="about__text tx-1">
                Nuestro bar ofrece una amplia selección de platos diferentes de la mano de los mejores chefs. En la
                carta encontrarás platos de carne y pescado, aperitivos, ensaladas y bebidas. También ofrecemos un
                programa de comidas y varias promociones para nuestros huéspedes.
              </p>
              <p class="about__text tx-1">
                El ambiente deportivo de nuestro bar aporta energía durante retransmisiones como fútbol, ​​hockey,
                baloncesto y muchas otras. Animamos juntos, apoyamos a nuestros atletas y equipos favoritos.
              </p>
              <p class="about__text tx-1">
                Estamos orgullosos de nuestro equipo de bartenders profesionales que preparan cócteles de autor clásicos
                y nuevos, cerveza y otras bebidas. La variedad de nuestra barra será del gusto de cada comensal.
              </p>
            </div>
            <ul class="about__images">
              <li class="about__image about__image_1">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/about/about-1.webp" type="image/webp">
                  <img src="./img/about/about-1.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </li>
              <li class="about__image about__image_2">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/about/about-2.webp" type="image/webp">
                  <img src="./img/about/about-2.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end about -->

      <!-- start events -->
      <section class="events" id="events">
        <div class="events__container container">
          <div class="events__top">
            <h2 class="events__title tt-2">
              Próximos Eventos
            </h2>
            <div class="events__wrapper-see">
              <a class="events__see but-2" href="events.php">
                Todos los eventos
              </a>
            </div>
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

      <!-- start contacts -->
      <section class="contacts" id="contacts">
        <div class="container">
          <div class="contacts__content">
            <div class="contacts__left">
              <h2 class="contacts__title tt-2">
                Contáctenos
              </h2>
              <p class="contacts__text tx-2">
                Rellena el formulario nos pondremos en contacto contigo
              </p>
              <form class="form" action="#!" name="form" autocomplete="off">
                <div class="form__top">
                  <input class="form__input tx-2" type="text" name="text" id="text" placeholder="Nombre..." required>
                  <input class="form__input tx-2" type="email" name="email" id="email" placeholder="Correo..." required>
                </div>
                <button class="form__button but-1" type="submit">Enviar</button>
              </form>
            </div>
            <ul class="contacts__images">
              <li class="contacts__image contacts__image_1">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/contacts/contacts-1.webp" type="image/webp">
                  <img src="./img/contacts/contacts-1.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </li>
              <li class="contacts__image contacts__image_2">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/contacts/contacts-2.webp" type="image/webp">
                  <img src="./img/contacts/contacts-2.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </li>
            </ul>
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