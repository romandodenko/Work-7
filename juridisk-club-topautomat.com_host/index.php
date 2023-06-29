<!DOCTYPE html>
<html lang="no">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Velkommen til GRAND HOTEL OSLO - et av de beste hotellene i Oslo!">
  <meta property="og:site_name"
    content="ОVi tilbyr nye, luksuriøse og oppgraderte rom for å gi deg det beste nivået av komfort under oppholdet. Våre rom oppfyller de høyeste standarder.">
  <meta property="og:url" content="juridisk-club-topautomat.com">
  <meta property="og:image" content="juridisk-club-topautomat.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Velkommen til GRAND HOTEL OSLO - et av de beste hotellene i Oslo!">
  <meta name="twitter:description"
    content="ОVi tilbyr nye, luksuriøse og oppgraderte rom for å gi deg det beste nivået av komfort under oppholdet. Våre rom oppfyller de høyeste standarder.">
  <meta name="twitter:site" content="juridisk-club-topautomat.com">
  <meta name="twitter:image" content="juridisk-club-topautomat.com/main.png">
  <meta name="description"
    content="ОVi tilbyr nye, luksuriøse og oppgraderte rom for å gi deg det beste nivået av komfort under oppholdet. Våre rom oppfyller de høyeste standarder.">
  <title>Velkommen til GRAND HOTEL OSLO - et av de beste hotellene i Oslo!</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Mako-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Anybody-Bold.woff2" as="font" type="font/woff2" crossorigin>
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
          <p class="popup__text">Spillene våre er beregnet på et VOKSENt publikum over 18 år. Klikk
            Akseptert for å bekrefte alderen din.</p>
          <button class="popup__button">Akseptert</button>
        </div>
      </div>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero__top">
          <div class="container">
            <h1 class="hero__title tt-1">
              Grand Hotel Oslo by Scandic
            </h1>
            <p class="hero__text tx-2">
              GRAND HOTEL OSLO er et kjent hotell i hovedstaden i Norge. Det tilbyr eksklusiv og komfortabel
              innkvartering i sentrum. Hotellet har alle nødvendige fasiliteter for et komfortabelt og hyggelig opphold.
            </p>
          </div>
        </div>
        <div class="hero__image">
          <picture>
            <source media="(min-width: 320px)" srcset="./img/hero.webp" type="image/webp">
            <img src="./img/hero.jpg" loading="lazy" width="300" height="300" alt="image">
          </picture>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title tt-2">
            Om hotellet
          </h2>
          <div class="about__content">
            <div class="about__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/about.webp" type="image/webp">
                <img src="./img/about.jpg" loading="lazy" width="300" height="300" alt="image">
              </picture>
            </div>
            <div class="about__descr">
              <p class="about__text tx-1">
                GRAND HOTEL OSLO er et av de beste hotellene i Norge, med lisensierte tjenester av topp kvalitet.
              </p>
              <p class="about__text tx-1">
                Hotellet ble åpnet i 1874 og har siden blitt et av de mest ikoniske stedene i Oslo. Innvendig er alt
                nytt og organisert for maksimal komfort og bekvemmelighet for gjestene.
              </p>
              <p class="about__text tx-1">
                GRAND HOTEL OSLO tilbyr det aller beste innen gjestfrihetsbransjen, inkludert restauranter, spa, barer,
                luksuriøse rom og mer.
              </p>
              <p class="about__text tx-1">
                Elskere av elegant avslapning vil sette pris på alle gledene til GRAND HOTEL OSLO: kunst, komfort,
                luksuriøst interiør og det høyeste nivået av service.
              </p>
              <p class="about__text tx-1">
                Reisende som ønsker å nyte den perfekte blandingen av gammel bykultur og moderne bekvemmeligheter kan
                finne omtrent alt de leter etter på GRAND HOTEL OSLO.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end about -->

      <!-- start nomers -->
      <section class="nomers">
        <div class="nomers__container nomers__container_1 container">
          <div class="nomers__top">
            <h2 class="nomers__title tt-2">
              Hotellrom
            </h2>
            <a class="nomers__link but-1" href="nomers.php">
              Se forbi
              <img src="./img/arrow.svg" loading="lazy" width="30" height="30" alt="Arrow">
            </a>
          </div>
          <ul class="nomers__list">
            <li class="nomers__item">
              <div class="nomers__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-1.webp" type="image/webp">
                  <img src="./img/hotel-1.jpg" loading="lazy" width="300" height="300" alt="image">
                </picture>
              </div>
              <h3 class="nomers__subtitle tt-3">
                Superior med utsikt
              </h3>
              <div class="nomers__bottom">
                <div class="nomers__info tx-1">
                  <svg width="10" height="10">
                    <use xlink:href="./img/svg/sprites.svg#person"></use>
                  </svg>
                  2 person
                </div>
                <div class="nomers__info tx-1">
                  <svg width="10" height="10">
                    <use xlink:href="./img/svg/sprites.svg#person"></use>
                  </svg>
                  20-22 m<span>2</span>
                </div>
              </div>
            </li>
            <li class="nomers__item">
              <div class="nomers__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-2.webp" type="image/webp">
                  <img src="./img/hotel-2.jpg" loading="lazy" width="300" height="300" alt="image">
                </picture>
              </div>
              <h3 class="nomers__subtitle tt-3">
                Nobelsuiten
              </h3>
              <div class="nomers__bottom">
                <div class="nomers__info tx-1">
                  <svg width="10" height="10">
                    <use xlink:href="./img/svg/sprites.svg#person"></use>
                  </svg>
                  2 person
                </div>
                <div class="nomers__info tx-1">
                  <svg width="10" height="10">
                    <use xlink:href="./img/svg/sprites.svg#person"></use>
                  </svg>
                  71 m<span>2</span>
                </div>
              </div>
            </li>
            <li class="nomers__item">
              <div class="nomers__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-3.webp" type="image/webp">
                  <img src="./img/hotel-3.jpg" loading="lazy" width="300" height="300" alt="image">
                </picture>
              </div>
              <h3 class="nomers__subtitle tt-3">
                Grand Petite Dobbeltrom
              </h3>
              <div class="nomers__bottom">
                <div class="nomers__info tx-1">
                  <svg width="10" height="10">
                    <use xlink:href="./img/svg/sprites.svg#person"></use>
                  </svg>
                  2 person
                </div>
                <div class="nomers__info tx-1">
                  <svg width="10" height="10">
                    <use xlink:href="./img/svg/sprites.svg#person"></use>
                  </svg>
                  16-21 m<span>2</span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end nomers -->

      <!-- start gallery -->
      <section class="gallery">
        <div class="gallery__container gallery__container_1 container">
          <div class="gallery__top">
            <h2 class="gallery__title tt-2">
              Galleri
            </h2>
            <a class="gallery__link but-1" href="gallery.php">
              Se forbi
              <img src="./img/arrow.svg" loading="lazy" width="30" height="30" alt="Arrow">
            </a>
          </div>
          <div class="gallery-top">
            <div class="gallery-top__left">
              <div class="gallery-top__left-item">
                <div class="gallery-top__image">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/gallery-1.webp" type="image/webp">
                    <img src="./img/gallery-1.jpg" loading="lazy" width="300" height="300" alt="image">
                  </picture>
                </div>
                <div class="gallery-top__image">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/gallery-2.webp" type="image/webp">
                    <img src="./img/gallery-2.jpg" loading="lazy" width="300" height="300" alt="image">
                  </picture>
                </div>
              </div>
              <div class="gallery-top__left-item">
                <div class="gallery-top__image">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/gallery-3.webp" type="image/webp">
                    <img src="./img/gallery-3.jpg" loading="lazy" width="300" height="300" alt="image">
                  </picture>
                </div>
                <div class="gallery-top__image">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/gallery-4.webp" type="image/webp">
                    <img src="./img/gallery-4.jpg" loading="lazy" width="300" height="300" alt="image">
                  </picture>
                </div>
              </div>
            </div>
            <div class="gallery-top__image gallery-top__image_2">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-5.webp" type="image/webp">
                <img src="./img/gallery-5.jpg" loading="lazy" width="300" height="300" alt="image">
              </picture>
            </div>
          </div>
        </div>
      </section>
      <!-- end gallery -->

      <!-- start contacts -->
      <section class="contacts">
        <div class="container">
          <h2 class="contacts__title tt-2">
            Abonnere
          </h2>
          <div class="contacts__content">
            <div class="contacts__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/contacts.webp" type="image/webp">
                <img src="./img/contacts.jpg" loading="lazy" width="30" height="30" alt="image">
              </picture>
            </div>
            <div class="contacts__right">
              <p class="contacts__text tx-2">
                Abonner på våre oppdateringer og følg med for alle de siste oppdateringene fra hotellet vårt!
              </p>
              <form class="form" action="#!" name="form" autocomplete="off">
                <div class="form__inputs">
                  <input class="form__input tx-1" type="text" name="text" id="text" placeholder="Navn..." required>
                  <input class="form__input tx-1" type="email" name="email" id="email" placeholder="Post..." required>
                </div>
                <button class="form__button but-1" type="submit">
                  Sende
                  <img src="./img/arrow.svg" loading="lazy" width="30" height="30" alt="Arrow">
                </button>
              </form>
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