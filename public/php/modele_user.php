<?php

class Modele {
    private $unPDO;
    public function __construct(){
        try{
            $url="mysql:host=localhost;port=8889;dbname=neige_et_soleil";
            $user = "root";
            $mdp = "root";
            $this->unPDO = new PDO($url, $user, $mdp);
            }
            catch (PDOException $exp){
                echo "Erreur connexion BDD :".$exp->getMessage();
            }      
    }

    public function insertUser($tab) {
        $requete = "INSERT INTO user (nom, prenom, adresse, CP, ville, email, telephone, mdp) VALUES (:nom, :prenom, :adresse, :CP, :ville, :email, :telephone, :mdp);";
        $select = $this->unPDO->prepare($requete);
        $donnees = array(
            ":nom" => $tab["nom"],
            ":prenom" => $tab["prenom"],
            ":adresse" => $tab["adresse"],
            ":CP" => $tab["CP"],
            ":ville" => $tab["ville"],
            ":email" => $tab["email"],
            ":telephone" => $tab["telephone"],
            ":mdp" => sha1($tab["mdp"]) // Hasher le mot de passe pour la sécurité
        );

        
        $select->execute($donnees);
    }

    public function connectUser($tab){
        $requete = "SELECT * FROM User WHERE email = :email and mdp = :mdp;"; // Chercher les utilisateur avec mon email
        $select = $this->unPDO->prepare($requete);
        $donnees = array(":email" => $tab["email"], ":mdp" => $tab["mdp"]);
        $select->execute($donnees);

        $res= $select->fetch();
         
        return $res;
    }

    // Continuer avec d'autres méthodes...
}
?>
