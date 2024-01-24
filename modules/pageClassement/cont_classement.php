<?php
    include_once "csrf.php";
    include_once "vue_classement.php";
    include_once "modele_classement.php";

    class ContClassement {

        private $vue;
        private $modele;
        private $action;

        public function __construct(){
           
            $this->vue = new VueClassement();
            $this->modele = new ModeleClassement();
            $this->action = isset($_GET['action']) ? $_GET['action'] : "mondial";
        }

        public function getAction(){
            return $this->action;
        }

        public function exec(){

            $this->vue->menu();

            switch ($this->getAction()) {

                case "mondial" : 
                   $mondial = $this->modele->ClassementGlobal();
                   $this->vue->afficherClassementGlobal($mondial);
                    break;

                case "joueur":
                    $joueur = $this->modele->StatistiquesUtilisateur();
                    if($joueur != 0){
                    $this->vue->afficherStatistiquesJoueur($joueur);
                    }
                    break;
                case "login":
                    //echo $_GET["login"];
                default :
                
            }

            global $affichage;
            $affichage = $this->vue->getAffichage();

        }
     
    }
?>