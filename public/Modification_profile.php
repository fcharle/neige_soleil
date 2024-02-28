<?php 
include './php/components/header.php';
?>
<link href="assets/css/theme-modification.css" rel="stylesheet" />
</head>

<body>
    <?php
    if (isset($_SESSION['email'])) {
        require_once './php/modele/modele_user.php'; // Inclure votre modèle ou script de connexion à la base de données
        $modele = new Modele(); // Créer une instance de votre modèle
        $userInfo = $modele->getUser($_SESSION['email']); // Obtenir les informations
        if (!$userInfo) {
            // Si aucune information utilisateur n'est trouvée, redirigez vers la page de connexion ou d'accueil
            header('Location: connexion.php');
            exit;
        }
    } else {
        header('Location: ./index.php'); // Redirection si l'utilisateur n'est pas connecté
        exit;
    }
    ?>
    <main>
        <section class="container forms">
            <div class="form signup">
                <div class="form-content">
                    <header>Modification</header>
                    <form action="./php/functions/create_house.php" method="post">
                        <div class="field-group">
                            <div class="field input-field half-width">
                                <input type="text" name="nom" placeholder="Nom" class="input" value="<?php echo htmlspecialchars($userInfo['nom']); ?>" disabled  />
                            </div>
                            <div class="field input-field half-width">
                                <input type="text" name="prenom" placeholder="Prénom" class="input" value="<?php echo htmlspecialchars($userInfo['prenom']); ?>" disabled />
                            </div>
                        </div>
                        <div class="field input-field">
                            <input type="text" name="adresse" placeholder="Adresse" class="input" value="<?php echo htmlspecialchars($userInfo['adresse']); ?>" />
                        </div>
                        <div class="field-group">
                            <div class="field input-field half-width">
                                <input type="text" name="CP" placeholder="Code Postal" class="input" value="<?php echo htmlspecialchars($userInfo['CP']); ?>" />
                            </div>
                            <div class="field input-field half-width">
                                <input type="text" name="ville" placeholder="Ville" class="input" value="<?php echo htmlspecialchars($userInfo['ville']); ?>" />
                            </div>
                        </div>
                        <div class="field input-field">
                            <input type="email" name="email" placeholder="Email" class="input" value="<?php echo htmlspecialchars($userInfo['email']); ?>" disabled />
                        </div>
                        <div class="field input-field">
                            <input type="text" name="telephone" placeholder="Téléphone" class="input" value="<?php echo htmlspecialchars($userInfo['telephone']); ?>" />
                        </div>
                        <div class="field input-field">
                            <input type="password" name="mdp" placeholder="Nouveau mot de passe" class="password" />
                            <i class="bx bx-hide eye-icon"></i>
                        </div>
                        <div class="field button-field">
                            <?php 
                            // If errors
                            if (isset($_GET['error'])) {?>
                                <span style="color: red;">Erreur lors de la mise a jour de votre profil</span>
                            <?php
                            }?>
                            <?php 
                            // If Success
                            if (isset($_GET['success'])) {?>
                                <span style="color: green;">Bravo, votre profil à été mis à jour</span>
                            <?php
                            }?>
                            <button type="submit">Modifier</button>
                        </div>
                    </form>
                </div>
                <div class="form-link">
                    <span><a href="./index.php" class="link signup-link">Accueil</a></span>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
