<?php
    include_once "modele_menu.php";
    include_once "vue_menu.php";

    class ContMenu {

        private $vue;
        private $modele;

        public function __construct () {
            $this->vue = new VueMenu();
            $this->modele = new ModeleMenu();
        }

        public function exec() {
            $estAdmin = $this->modele->est_admin();
            $this->vue->menu($estAdmin);
            $this->vue->affiche();
        }
    }
?>