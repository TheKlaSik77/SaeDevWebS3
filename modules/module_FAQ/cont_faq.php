<?php
    include_once('vue_faq.php');
    include_once('modele_faq.php');
    class ContFaq{

        private $vue;
        private $modele;
        private $action;


        public function __construct(){
            $this->vue = new VueFAQ();
            $this->modele = new ModeleFAQ();
        }

        public function faq(){
            $listeQuestions = $this->modele->get_liste_question();
            $this->vue->afficher_faq($listeQuestions);
        }

        public function exec(){
            $this->faq();
            global $affichage;
            $affichage = $this->vue->getAffichage();
        }
    }
?>