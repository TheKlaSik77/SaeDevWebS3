<?php
    class ModeleMenu extends Connexion{

        public function __construct () {}

        public function est_admin(){
            if (isset($_SESSION["admin"])){
                include_once('connexion.php');
                $requete = self::$bdd->prepare('SELECT admin FROM Utilisateur WHERE idUser=  ?');
                $requete->execute(array($_SESSION["id"]));
                $t = $requete->fetch();
                var_dump($t[0]);
            } else {
                return false;
            }
        }

    }
?>