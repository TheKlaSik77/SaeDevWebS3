<?php

if (!defined('MY_APP')) {
    die("Accès interdit");
}
include_once("cont_tours.php");

class ModTour
{
    public function __construct()
    {

        $controleur = new ContTour();
        $controleur->exec();
    }
}
?>