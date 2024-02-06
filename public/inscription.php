<?php include './php/components/header.php' ?>
<link href="assets/css/theme-inscription.css" rel="stylesheet" />
</head>
<body>
  <main>
    <section class="container forms">
      <div class="form signup">
        <div class="form-content">
          <header>inscription</header>
          <form action="./php/functions/inscription.php" method="post">
            <div class="field-group">
              <div class="field input-field half-width">
                <input
                  type="text"
                  name="nom"
                  placeholder="Nom"
                  required
                  class="input"
                />
              </div>
              <div class="field input-field half-width">
                <input
                  type="text"
                  name="prenom"
                  placeholder="Prénom"
                  required
                  class="input"
                />
              </div>
            </div>
            <div class="field input-field">
              <input
                type="text"
                name="adresse"
                placeholder="Adresse"
                class="input"
              />
            </div>
            <div class="field-group">
              <div class="field input-field half-width">
                <input
                  type="text"
                  name="CP"
                  placeholder="Code Postal"
                  class="input"
                />
              </div>
              <div class="field input-field half-width">
                <input
                  type="text"
                  name="ville"
                  placeholder="Ville"
                  class="input"
                />
              </div>
            </div>
            <div class="field input-field">
              <input
                type="email"
                name="email"
                placeholder="Email"
                required
                class="input"
              />
            </div>
            <div class="field input-field">
              <input
                type="text"
                name="telephone"
                placeholder="Téléphone"
                class="input"
              />
            </div>
            <div class="field input-field">
              <input
                type="password"
                name="mdp"
                placeholder="Mot de passe"
                required
                class="password"
              />
              <i class="bx bx-hide eye-icon"></i>
            </div>
            <div class="field button-field">
              <button type="submit">S'inscrire</button>
            </div>
          </form>
          <div class="form-link">
            <span
              >Vous avez déjà un compte ?
              <a href="connexion.php" class="link login-link"
                >Connexion</a
              ></span
            >
          </div>
        </div>
        <div class="form-link">
            <span><a href="./index.php" class="link signup-link">Accueil</a></span> 
      </div>
    </section>
  </main>
</body>
</html>