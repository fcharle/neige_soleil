<?php
session_start();
require_once ('../modele/modele_user.php'); 
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $email = $_POST['email']; // Assurez-vous que le champ 'email' existe dans votre formulaire
    $mdp = $_POST['mdp']; // Hasher le mot de passe pour la sécurité
  
    $mdpHash = sha1($mdp);
    
    // Connexion a la base de données
    $modele = new Modele();
    $connexion = $modele->connectUser(array(
        "email" => $email,
        "mdp" => $mdpHash 
    ));
    // Vérification si l'utilisateur existe
    if($connexion != null){
        // Stockage des données dans la sessions
        $_SESSION['email'] = $connexion['email'];
        $_SESSION['nom'] = $connexion['nom'];
        $_SESSION['prenom'] = $connexion['prenom'];
        $_SESSION['role'] = $connexion['role'];

        // Redirection ou affichage d'un message
        header('Location: ../../index.php');
        echo "Connexion réussie!";
    }
    else{
        echo "Erreur lors de la connexion";
    }
}
?>