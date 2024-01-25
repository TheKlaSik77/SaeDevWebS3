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

        public function profil(){
            $infos_profil = $this->modele->get_infos_profil();
            $this->vue->afficher_profil($infos_profil);
        }

        public function exec(){
            $this->profil();
            global $affichage;
            $affichage = $this->vue->getAffichage();
        }
    }
?>