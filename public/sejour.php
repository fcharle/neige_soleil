<?php include './php/components/header.php'; ?>
<link href="assets/css/theme-sejour.css" rel="stylesheet" />
</head>
<body>
<main class="main" id="top">
  <?php include './php/components/navbar.php'; ?>

  <!-- Section Hero -->
  <section style="padding-top: 7rem; padding-bottom: 2rem;"> <!-- Réduction de l'espace en bas -->
    <div class="bg-holder" style="background-image:url(assets/img/hero/hero-bg.svg);"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end">
          <img class="pt-7 pt-md-0 hero-img" src="assets/img/hero/hero-img.png" alt="hero-header" />
        </div>
        <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
          <h1 class="hero-title">Partez, Skier, vivez des aventures inoubliables.</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- Barre de recherche -->

  <div class="container my-3 px-8"> <!-- Ajustement de l'espace autour de la barre de recherche -->
    <form action="./sejour.php" method="post" class="d-flex justify-content-center align-items-center gap-1">
        <input class="search-input-elegant" type="text" placeholder="Destination" name="localisation">
        <div class="divider"></div>
        <input class="search-input-elegant" type="date" name="arrivee" placeholder="Arrivée">
        <div class="divider"></div>
        <input class="search-input-elegant" type="date" name="depart" placeholder="Départ">
        <div class="divider"></div>
        <select class="search-input-elegant" name="voyageurs">
          <option value="" selected>Nombre de voyageurs</option>
          <option value="1">1 voyageur</option>
          <!-- Ajoutez d'autres options selon le besoin -->
        </select>
        <button class="search-button-elegant" type="submit">
          <img src="assets/img/barrederecherche/chercher.png" alt="Rechercher">
        </button>
    </form>
  </div>

  <?php include './php/components/listHouse.php'; ?>
</main>
<?php include '/Applications/MAMP/htdocs/neige_soleil/public/php/components/footer.php'; ?>
