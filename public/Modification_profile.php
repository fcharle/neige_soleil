<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/theme-modification.css">
    <title>Modification du Profil</title>
</head>
<?php
// Exemple de récupération des informations de l'utilisateur depuis la base de données
$userInfo = []; // Initialiser un tableau pour stocker les informations de l'utilisateur
if (isset($_SESSION['email'])) {
    // Supposons que vous ayez une fonction getUserInfoById qui récupère les informations de l'utilisateur
    require_once 'chemin/vers/votre/fichier/../modele/modele_user.php'; // Inclure votre modèle ou script de connexion à la base de données
    $modele = new Modele(); // Créer une instance de votre modèle
    $userInfo = $modele->getUser($_SESSION['email']); // Obtenir les informations
}
?>

<body>
    <form action="./php/functions/modification.php" method="post"></form>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                <h2 class="h3 mb-4 page-title">Paramètres</h2>
                <div class="my-4">
                    <form action="update_profile.php" method="post">
                        <div class="row mt-5 align-items-center">
                            <div class="col-md-3 text-center mb-5">
                                <div class="avatar avatar-xl">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..."
                                        class="avatar-img rounded-circle" />
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <h4 class="mb-1">
                                        <?php echo htmlspecialchars($userInfo['nom']); ?>
                                    </h4>
                                    <p class="small mb-3"><span class="badge badge-dark">
                                            <?php echo htmlspecialchars($userInfo['email']); ?>
                                        </span></p>
                                </div>
                            </div>
                        </div>
                </div>
                <hr class="my-4" />
                <form action="./php/functions/modification.php" method="post" class="mon-formulaire">
                    <div class="field input-field">
                        <input type="text" name="nom" placeholder="Nom" required class="input" />
                    </div>
                    <div class="field input-field">
                        <input type="text" name="prenom" placeholder="Prénom" required class="input" />
                    </div>
                    <div class="field input-field">
                        <input type="text" name="adresse" placeholder="Adresse" class="input" />
                    </div>
                    <div class="field-group">
                        <div class="field input-field half-width">
                            <input type="text" name="CP" placeholder="Code Postal" class="input" />
                        </div>
                        <div class="field input-field half-width">
                            <input type="text" name="ville" placeholder="Ville" class="input" />
                        </div>
                    </div>
                    <div class="field input-field">
                        <input type="email" name="email" placeholder="Email" required class="input" />
                    </div>
                    <div class="field input-field">
                        <input type="text" name="telephone" placeholder="Téléphone" class="input" />
                    </div>
                    <div class="field input-field">
                        <input type="password" name="mdp" placeholder="Mot de passe" required class="password" />
                    </div>
            </div>
            <hr class="my-4" />
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputPassword4">Ancien Mot de Passe</label>
                        <input type="password" class="form-control" id="inputPassword4" name="oldPassword" />
                    </div>
                    <div class="form-group">
                        <label for="inputPassword5">Nouveau Mot de Passe</label>
                        <input type="password" class="form-control" id="inputPassword5" name="mdp" required />
                    </div>
                    <div class="form-group">
                        <label for="inputPassword6">Confirmer le Nouveau Mot de Passe</label>
                        <input type="password" class="form-control" id="inputPassword6" name="confirmPassword"
                            required />
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="mb-2">Exigences du Mot de Passe</p>
                    <ul class="small text-muted pl-4 mb-0">
                        <li>Minimum 8 caractères</li>
                        <li>Au moins un caractère spécial</li>
                        <li>Au moins un chiffre</li>
                        <li>Ne peut pas être identique à un mot de passe précédent</li>
                    </ul>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer les Modifications</button>
            </form>
        </div>
    </div>
    </div>
    </div>
    </form>
</body>

</html>