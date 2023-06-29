<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Fruit Party is een entertainmentspel met kleurrijke afbeeldingen. Abonneren.">
  <meta property="og:site_name"
    content="Fruit Party is een spannend spel met eenvoudige regels en mooie graphics. Bonusfuncties en hoge vermenigvuldigers maken het spel nog interessanter en spannender.">
  <meta property="og:url" content="club-fruitautomaten.com">
  <meta property="og:image" content="club-fruitautomaten.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Fruit Party is een entertainmentspel met kleurrijke afbeeldingen. Abonneren.">
  <meta name="twitter:description"
    content="Fruit Party is een spannend spel met eenvoudige regels en mooie graphics. Bonusfuncties en hoge vermenigvuldigers maken het spel nog interessanter en spannender.">
  <meta name="twitter:site" content="club-fruitautomaten.com">
  <meta name="twitter:image" content="club-fruitautomaten.com/main.png">
  <meta name="description"
    content="Fruit Party is een spannend spel met eenvoudige regels en mooie graphics. Bonusfuncties en hoge vermenigvuldigers maken het spel nog interessanter en spannender.">
  <title>Fruit Party is een entertainmentspel met kleurrijke afbeeldingen. Abonneren.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Manrope-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/FredokaOne-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
            Abonneren
          </h1>
          <div class="contacts__content">
            <div class="contacts__left">
              <p class="contacts__text tx-2">
                Vul het formulier in en we sturen je gamenieuws! Wees als eerste op de hoogte van alle overeenkomsten en
                updates!
              </p>
            </div>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input tx-1" type="text" name="text" id="text" placeholder="Naam..." required>
                <input class="form__input tx-1" type="email" name="email" id="email" placeholder="Mail..." required>
              </div>
              <button class="form__button but-2" type="submit">Versturen</button>
            </form>
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