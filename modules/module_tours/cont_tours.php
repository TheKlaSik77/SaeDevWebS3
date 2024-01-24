<?php
     include_once("vue_tours.php");
     include_once("modele_tours.php");
    class ContTour{
     
        private $vue;
    

        private $modele;

        public function __construct(){
            $this->vue = new VueTour();
            $this->modele = new ModeleTour();
        }

        public function lesTours(){
            $tours = $this->modele->get_liste();
            $this->vue->afficher_tours($tours);
        }

        public function exec(){
            $this->lesTours();
            global $affichage;
            $affichage = $this->vue->getAffichage();
        }
    }
