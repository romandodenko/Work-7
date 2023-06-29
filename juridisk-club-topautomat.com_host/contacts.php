<!DOCTYPE html>
<html lang="no">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Velkommen til GRAND HOTEL OSLO - et av de beste hotellene i Oslo! Abonnere.">
  <meta property="og:site_name"
    content="ОVi tilbyr nye, luksuriøse og oppgraderte rom for å gi deg det beste nivået av komfort under oppholdet. Våre rom oppfyller de høyeste standarder.">
  <meta property="og:url" content="juridisk-club-topautomat.com">
  <meta property="og:image" content="juridisk-club-topautomat.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Velkommen til GRAND HOTEL OSLO - et av de beste hotellene i Oslo! Abonnere.">
  <meta name="twitter:description"
    content="ОVi tilbyr nye, luksuriøse og oppgraderte rom for å gi deg det beste nivået av komfort under oppholdet. Våre rom oppfyller de høyeste standarder.">
  <meta name="twitter:site" content="juridisk-club-topautomat.com">
  <meta name="twitter:image" content="juridisk-club-topautomat.com/main.png">
  <meta name="description"
    content="ОVi tilbyr nye, luksuriøse og oppgraderte rom for å gi deg det beste nivået av komfort under oppholdet. Våre rom oppfyller de høyeste standarder.">
  <title>Velkommen til GRAND HOTEL OSLO - et av de beste hotellene i Oslo! Abonnere.</title>
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
      <!-- start contacts -->
      <section class="contacts contacts_2">
        <div class="container">
          <h1 class="contacts__title tt-2">
            Abonnere
          </h1>
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