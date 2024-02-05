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

    public function getListOfHouse($localisation){
        if ($localisation != null) {
            $requete = "SELECT * FROM Habitations WHERE Ville = :ville;"; // Chercher les habitations qui ont une localisation particulière
            $select = $this->unPDO->prepare($requete);
            $donnees = array(":ville" => $localisation);
            $select->execute($donnees);
            $res = $select->fetchAll();
        }
        else{
            $requete = "SELECT * FROM Habitations;"; // Chercher les habitations
            $select = $this->unPDO->prepare($requete);
            $select->execute();
            $res = $select->fetchAll();
        }
        return $res;
    }

    // Continuer avec d'autres méthodes...
}
?>
