<?php
require_once ('modele_user.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse']; // Assurez-vous que le champ 'adresse' existe dans votre formulaire
    $CP = $_POST['CP'];           // Assurez-vous que le champ 'CP' existe dans votre formulaire
    $ville = $_POST['ville'];     // Assurez-vous que le champ 'ville' existe dans votre formulaire
    $email = $_POST['email'];     // Assurez-vous que le champ 'email' existe dans votre formulaire
    $telephone = $_POST['telephone']; // Assurez-vous que le champ 'telephone' existe dans votre formulaire
    $mdp = $_POST['mdp']; // Hasher le mot de passe pour la sécurité
    
    //$mdpHash = password_hash($mdp, PASSWORD_DEFAULT);

    // Création d'une instance de la classe Modele et insertion du nouvel utilisateur
    $modele = new Modele();
    $modele->insertUser(array(
        "nom" => $nom,
        "prenom" => $prenom,
        "adresse" => $adresse,
        "CP" => $CP,
        "ville" => $ville,
        "email" => $email,
        "telephone" => $telephone,
        "mdp" => $mdp 
    ));

    // Redirection ou affichage d'un message
    header('Location: ../connexion.html'); 
}
?>
