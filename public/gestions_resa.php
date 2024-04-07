<?php include './php/components/header.php'; ?>

<?php

require_once '/Applications/MAMP/htdocs/neige_soleil/public/php/modele/modele_reservations.php';

function getModeleResaUser($modele)
{
    return $modele->getResaUser($_SESSION['id']);
}

// Connexion à la base de données
$modele = new ModeleReservation();


// Suppression d'une House
if (isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == "delete") {
    $modele->deleteResa($_GET['id']);
    header('Location: ./gestion_resa.php');
    exit; // Ajouté pour s'assurer que le reste du script ne s'exécute pas après une redirection
}

// Récupérer c'est Resa
$reservations = getModeleResaUser($modele); // Assurez-vous que la variable s'appelle $reservations comme utilisé plus loin

// Vérifier si des utilisateurs ont été récupérés
if ($reservations === false) {
    echo "Erreur lors de la récupération des biens.";
    exit;
}
?>

<?php include './php/components/navbar.php'; ?>

<div class="container mt-5 pt-9"> <!-- Ajustement de l'espacement sous la navbar -->

    <?php if (empty($reservations)): ?>
        <div class="d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 120px);">
            <div class="text-center my-5">
                <p class="mb-4">Pas de réservations ? Il serait temps de réserver un bien !</p>
                <a href="./sejour.php" class="btn btn-primary">Réserver maintenant</a>
            </div>
        </div>
    <?php else: ?>
        <div class="row">
            <?php foreach ($reservations as $reservation): 
                // Détermination de la classe de badge en fonction de l'état de la réservation
                $badgeClass = '';
                switch ($reservation['Etat']) {
                    case 'valide':
                        $badgeClass = 'bg-success';
                        break;
                    case 'attente':
                        $badgeClass = 'bg-info'; 
                        break;
                    case 'Refusé':
                        $badgeClass = 'bg-dange';
                        break;
                    default:
                        $badgeClass = 'bg-secondary'; // Une couleur par défaut pour les états non gérés
                        break;
                }
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card overflow-hidden shadow">
                        <img class="card-img-top img-fluid"
                            <?php if(($reservation['TypeH'] ?? '') == "maison"): ?>
                                src="./assets/img/logements/Acceuil1.jpg"
                            <?php elseif(($reservation['TypeH'] ?? '') == "chalet"): ?>
                                src="./assets/img/logements/acceuil2.jpg"
                            <?php elseif(($reservation['TypeH'] ?? '') == "appartement"): ?>
                                src="./assets/img/logements/acceuil3.jpg"
                            <?php else: ?>
                                src="./assets/img/logements/default.jpg" 
                            <?php endif; ?>
                            alt="Image de logement" />
                        <div class="card-body">
                            <h4 class="text-secondary fw-medium mb-3">
                                <?php echo htmlspecialchars($reservation['Nom']); ?>
                            </h4>
                            <span class="badge <?php echo $badgeClass; ?> mb-3">
                                <?php echo htmlspecialchars($reservation['Etat']); ?>
                            </span>
                            <p>
                                <?php echo htmlspecialchars($reservation['Description']); ?>
                            </p>
                            <!-- Affichage des dates de réservation -->
                            <p class="mb-2">Du <strong><?php echo htmlspecialchars($reservation['DateD']); ?></strong> au <strong><?php echo htmlspecialchars($reservation['DateF']); ?></strong></p>
                            <p class="fs-5 fw-small">
                                <?php echo htmlspecialchars($reservation['PrixHabJ']); ?> euros
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <div class="container mt-5 pt-9">   
</div> <!-- Fermeture du container principal -->

<?php include './php/components/footer.php'; ?>


