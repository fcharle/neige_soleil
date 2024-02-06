<?php include './php/components/header.php' ?>
<link href="assets/css/theme-connexion.css" rel="stylesheet" />
</head>
<body>
<main>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Connexion</header>
                <form action="./php/functions/connexion.php" method="post">
                    <div class="field input-field">
                        <input type="email" name="email" placeholder="Email" required class="input">
                    </div>

                    <div class="field input-field">
                        <input type="password" name="mdp" placeholder="Password" required class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="form-link">
                        <a href="#" class="forgot-pass">Mot de passe oublié ?</a>
                    </div>

                    <div class="field button-field">
                        <button type="submit">Se connecter</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Vous n'avez pas de compte ? <a href="./inscription.php" class="link signup-link">S'inscrire</a></span>
                </div>
            </div>
            <div class="form-link">
                <span><a href="./index.php" class="link signup-link">Accueil</a></span>      
    </section>
</main>
</body>
</html>
