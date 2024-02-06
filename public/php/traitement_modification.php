<?php
session_start();
require_once('modele_user.php');

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['email'])) {
    // Si non connecté, rediriger vers la page de connexion
    header('Location: connexion.html');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $CP = $_POST['CP'];
    $ville = $_POST['ville'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $mdp = $_POST['mdp']; // Envisager de hasher le mot de passe pour la sécurité
    
    // $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);

    // Récupération de l'ID de l'utilisateur depuis la session
    $user_id = $_SESSION['user_id'];

    // Création d'une instance de la classe Modele et mise à jour de l'utilisateur
    $modele = new Modele();
    $result = $modele->updateUser(array(
        "id" => $user_id, // Assurez-vous d'avoir un paramètre pour l'ID dans votre méthode updateUser
        "nom" => $nom,
        "prenom" => $prenom,
        "adresse" => $adresse,
        "CP" => $CP,
        "ville" => $ville,
        "email" => $email,
        "telephone" => $telephone,
        "mdp" => $mdp // Ou $mdpHash si vous utilisez le hashage
    ));

    if ($result) {
        // Si la mise à jour réussit, rediriger ou afficher un message
        header('Location: profil.php'); // Redirige vers la page de profil ou une page de confirmation
    } else {
        // Gérer l'échec de la mise à jour
        echo "Erreur lors de la mise à jour du profil.";
    }
}
?>
