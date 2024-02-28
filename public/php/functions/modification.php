<?php
session_start();
require_once('../modele/modele_user.php');

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['email'])) {
    // Si non connecté, rediriger vers la page de connexion
    header('Location: ../../connexion.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupération des données du formulaire
    $id = $_SESSION['id'];
    $adresse = $_POST['adresse'];
    $CP = $_POST['CP'];
    $ville = $_POST['ville'];
    $telephone = $_POST['telephone'];
    $mdp = null;
    if ($_POST['mdp'] != "") {
        $mdp = $_POST['mdp'];
    }
    // Création d'une instance de la classe Modele et mise à jour de l'utilisateur
    $modele = new Modele();
    $result = $modele->updateUser(array(
        "id" => $id,
        "adresse" => $adresse,
        "CP" => $CP,
        "ville" => $ville,
        "telephone" => $telephone,
        "mdp" => $mdp 
    ));
    if ($result) {
        header('Location: ../../modification_profile.php?success=1');
    } else {
        // Gérer l'échec de la mise à jour
        header('Location: ../../modification_profile.php?error=1');
    }
}
?>
