<?php

    include_once("cont_ennemis.php");

    class ModEnnemi{
        public function __construct(){
        
            $controleur = new ContEnnemi();
            $controleur->exec();
        }
    }
?>