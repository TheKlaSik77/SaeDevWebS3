<?php

    include_once('connexion.php');

    class ModeleProfil extends Connexion{

        public function __construct(){
        }

        public function get_infos_profil(){
            $selecPrepare = self::$bdd->prepare('SELECT biographie, login, mdp, pays, mail FROM Utilisateur');
		    $selecPrepare->execute();
		    $tab = $selecPrepare->fetchall();
		    return $tab;
        }
    }
?>