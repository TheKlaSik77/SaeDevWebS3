<!-- Version 1.0 - 2022/12/05 -
GNU GPL Copyleft 🄯 2022-2032 -
Initiated by Ismael ARGENCE & Mathéo NGUYEN & Nathan FENOLLOSA -->

<?php
    include_once('vue_apropos.php');
    class ContApropos{

        private $vue;


        public function __construct(){
            $this->vue = new VueApropos();
        }
        public function apropos(){
            $this->vue->afficher_apropos();
        }
        
        public function exec(){
            $this -> apropos();
            global $affichage;
            $affichage = $this->vue->getAffichage();
        }
    }
?>