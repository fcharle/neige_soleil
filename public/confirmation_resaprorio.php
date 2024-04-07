
<?php include './php/components/header.php'; ?>

<?php

require_once '/Applications/MAMP/htdocs/neige_soleil/public/php/modele/modele_reservations.php';

// Assurez-vous d'avoir l'ID du bien dont vous souhaitez récupérer les réservations
// Cet ID peut venir de la session, d'une requête GET/POST, ou être fixé de manière statique pour le test
$IdHouse = $_GET['idHouse'] ?? null; // Exemple avec $_GET, ajustez selon votre contexte

$modele = new ModeleReservation();

// Suppression d'une réservation
if (isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == "delete") {
    $modele->deleteResa($_GET['id']);
    header('Location: ./gestion_resa.php');
    exit; // Pour éviter l'exécution du reste après redirection
}

// Récupérer les réservations du bien
if ($IdHouse) {
    $reservations = $modele->getReservationsForBien($IdHouse);
    if ($reservations === false) {
        echo "Erreur lors de la récupération des réservations du bien.";
        exit;
    }
} else {
    echo "ID du bien non spécifié.";
    exit;
}

?>

<?php include './php/components/navbar.php'; 
?>
<div class="container mt-5">
    <h2 class="mb-4">Réservations de votre bien</h2>
    
    <?php if (empty($reservations)): ?>
        <div class="alert alert-warning" role="alert">
            Aucune réservation trouvée pour ce bien.
        </div>
    <?php else: ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom du Client</th>
                    <th>Date de Début</th>
                    <th>Date de Fin</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservations as $reservation): ?>
                <tr>
                    <td><?= htmlspecialchars($reservation['nomClient']) ?></td>
                    <td><?= htmlspecialchars($reservation['dateD']) ?></td>
                    <td><?= htmlspecialchars($reservation['dateF']) ?></td>
                    <td>
                        <a href="valider_reservation.php?id=<?= $reservation['id'] ?>" class="btn btn-success">Accepter</a>
                        <a href="refuser_reservation.php?id=<?= $reservation['id'] ?>" class="btn btn-danger">Refuser</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
<?php include './php/components/footer.php'; // Assurez-vous que ce fichier contient les balises de fermeture ?>
</body>
</html>
