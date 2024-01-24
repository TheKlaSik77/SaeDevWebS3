<?php

    include_once("cont_classement.php");

    class ModClassement{
        public function __construct(){
            
            $controleur = new ContClassement();

            $controleur->exec();

        }
    }
?>