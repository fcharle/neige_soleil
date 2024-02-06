<?php include './php/components/header.php' ?>
</head>
<body>
<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
  <?php include './php/components/navbar.php' ?>

  <section style="padding-top: 7rem;">
    <div class="bg-holder" style="background-image:url(assets/img/hero/hero-bg.svg);">
    </div>
    <!--/.bg-holder-->

    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img"
            src="assets/img/hero/hero-img.png" alt="hero-header" /></div>
        <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
          <h4 class="fw-bold text-danger mb-3"></h4>
          <h1 class="hero-title">Partez, Skier , vivez des aventures inoubliables.</h1>
          <br> 
        </div>
      </div>
    </div>
  </section>
  <!-- ===============================================-->
  <!--    Barre de recherche-->
  <!-- ===============================================-->
  <div>
    <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
      <h4 class="fw-bold text-danger mb-3"></h4>
    </div>
  </div>
  <form action="./sejour.php" method="post">
    <div class="search-box-elegant">
      <input class="search-input-elegant" type="text" placeholder="Destination" name="localisation">
      <div class="divider"></div>
      <input class="search-input-elegant" type="date" placeholder="Arrivée">
      <!-- Type 'date' pour sélection de date -->
      <div class="divider"></div>
      <input class="search-input-elegant" type="date" placeholder="Départ">
      <!-- Type 'date' pour sélection de date -->
      <div class="divider"></div>
      <select class="search-input-elegant" name="voyageurs"> <!-- Sélecteur pour le nombre de voyageurs -->
        <option value="" selected>Nombre de voyageurs</option>
        <option value="1">1 voyageur</option>
        <option value="2">2 voyageurs</option>
        <option value="3">3 voyageurs</option>
        <option value="4">4 voyageurs</option>
        <option value="5">5 voyageurs</option>
        <option value="6">6 voyageurs</option>
        <option value="7">7 voyageurs</option>
        <option value="8">8 voyageurs</option>
        <option value="9">9 voyageurs</option>
        <option value="10">10 voyageurs</option>
      </select>
      <button class="search-button-elegant" type="submit">
        <img src="assets/img/barrederecherche/chercher.png" alt="Rechercher">
      </button>
    </div>
  </form>
  </div>
  </div>
  </section>

  <?php include './php/components/listHouse.php' ?>



</main>
<?php include './php/components/footer.php' ?>