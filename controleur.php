<?php
    include_once('vue_generique.php');
    include_once('Composants/CompMenu/mod_menu.php');
    include_once('modules/module_co/mod_co.php');
    include_once('modules/module_accueil/mod_accueil.php');
    include_once('modules/module_FAQ/mod_faq.php');
    include_once('modules/module_apropos/mod_apropos.php');
    include_once('modules/module_telechargement/mod_telechargement.php');

   

    class Controleur {
        private $vue;
        private $module;

        public function __construct (){
            $this->vue = new VueGenerique();
            $this->module = isset($_GET['module']) ? $_GET['module'] : "accueil";
        }

        public function menu() {
            new ModMenu();
        }

        public function exec(){
            switch($this->module){
                case 'co' :
                    new ModCo();
                    break;
                
                case 'accueil':
                    new ModAccueil();
                    break;

                case 'telechargement':
                    new ModTele();
                    break;
                    
                case 'apropos':
                    new ModApropos();
                    break;

                case 'FAQ':
                    new ModFAQ();
                    break;
                
                    case 'apropos':
                        new ModApropos();
                        break;

                default :
                    echo'default';
                    break;

            }
        }
    }
?>