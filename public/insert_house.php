<?php include './php/components/header.php'; ?>
<link href="assets/css/theme-inscription.css" rel="stylesheet" />
</head>
<body>
  <main>
    <section class="container forms">
      <div class="form signup">
        <div class="form-content">
          <header>Créer une annonce</header>
          <form action="./php/functions/create_house.php" method="post">
            <div class="field input-field">
              <input type="text" name="TypeH" placeholder="Type de bien" required class="input" />
            </div>
            <div class="field input-field">
              <input type="text" name="Nom" placeholder="Nom du bien" required class="input" />
            </div>
            <div class="field input-field">
              <input type="number" name="Superficie" placeholder="Superficie (m²)" required class="input" />
            </div>
            <div class="field input-field">
              <input type="text" name="CP" placeholder="Code Postal" class="input" />
            </div>
            <div class="field input-field">
              <input type="number" name="Capacite" placeholder="Capacité" required class="input" />
            </div>
            <div class="field input-field">
              <input type="text" name="Adresse" placeholder="Adresse" class="input" />
            </div>
            <div class="field input-field">
              <input type="text" name="Ville" placeholder="Ville" class="input" />
            </div>
            <div class="field input-field">
              <input type="text" name="PrixHabJ" placeholder="Prix par jour" required class="input" />
            </div>
            <div class="field button-field">
              <button type="submit">Créer l'annonce</button>
            </div>
          </form>
          <div class="form-link">
            <span>Retour à l'<a href="./index.php" class="link signup-link">accueil</a></span> 
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
