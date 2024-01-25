<?php
    include_once('vue_profil.php');
    include_once('modele_profil.php');
    class ContProfil{

        private $vue;
        private $modele;
        private $action;


        public function __construct(){
            $this->vue = new VueProfil();
            $this->modele = new ModeleProfil();
        }

        public function profil($idUser){
            $idUser = $_SESSION["id"];
            $infos_profil = $this->modele->get_infos_profil($idUser);
            $this->vue->afficher_profil($infos_profil);
        }

        

        public function exec(){
            $this->profil($_SESSION["id"]);
            global $affichage;
            $affichage = $this->vue->getAffichage();
        }
    }
?>