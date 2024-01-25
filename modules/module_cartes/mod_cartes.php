<?php

if (!defined('MY_APP')) {
    die("Accès interdit");
}

include_once("cont_cartes.php");

class ModCarte
{
    public function __construct()
    {
        $controleur = new ContCarte();
        $controleur->exec();
    }
}

?>