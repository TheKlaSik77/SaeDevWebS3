<?php
    include_once('vue_generique.php');
    include_once('Composants/CompMenu/mod_menu.php');
    include_once('modules/module_co/mod_co.php');

   

    class Controleur {
        private $vue;
        private $module;

        public function __construct (){
            $this->vue = new VueGenerique();
            $this->module = isset($_GET['module']) ? $_GET['module'] : "co";
        }

        public function menu() {
            new ModMenu();
        }

        public function exec(){
            switch($this->module){
                case 'co' :
                    new ModCo();
                    break;

                default :
                    echo'default';
                    break;

            }
        }
    }
?>