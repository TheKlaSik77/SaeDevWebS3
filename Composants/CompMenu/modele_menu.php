<?php
    class ModeleMenu extends Connexion{

        public function __construct () {}

        public function est_admin(){
            if (isset($_SESSION["id"])){
                include_once('connexion.php');
                $requete = self::$bdd->prepare('SELECT admin FROM Utilisateur WHERE idUser=  ?');
                $requete->execute(array($_SESSION["id"]));
                $resultat = $requete->fetch();
                if ($resultat && $resultat['admin'] == 1) {
                    return true;
                }
            }
            return false;
        }
    }

    
?>