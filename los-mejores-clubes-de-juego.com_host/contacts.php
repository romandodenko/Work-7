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
      <!-- start contacts -->
      <section class="contacts contacts_2" id="contacts">
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