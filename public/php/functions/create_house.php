<?php
require_once ('../modele/modele_house.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $TypeH = $_POST['TypeH'];
    $Nom = $_POST['Nom'];
    $Superficie = $_POST['Superficie']; 
    $CP = $_POST['CP'];           
    $Capacite = $_POST['Capacite'];    
    $Adresse = $_POST['Adresse'];     
    $ville = $_POST['Ville']; 
    $PrixHabJ = $_POST['PrixHabJ']; 
    
    

    $modele = new Modele();
    $modele->insertHouse(array(
        "typeH" => $TypeH,
        "nom" => $Nom,
        "superficie" => $Superficie,
        "CP" => $CP,
        "ville" => $ville,
        "capacite" => $Capacite,
        "adresse" => $Adresse,
        "prixHabJ" => $PrixHabJ 
    ));

    // Redirection ou affichage d'un message
    header('Location: ../../index.php'); 
}
?>