<?php

if (!defined('MY_APP')) {
    die("Accès interdit");
}

    include_once("cont_co.php");

    class ModCo{
        public function __construct(){
            
            $controleur = new ContCo();

            $controleur->exec();
        }
    }
?>