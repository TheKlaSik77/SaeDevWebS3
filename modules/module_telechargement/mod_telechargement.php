<?php

if (!defined('MY_APP')) {
    die("Accès interdit");
}
include_once("cont_telechargement.php");

class ModTele
{
    public function __construct()
    {
        $controleur = new ContTele();
        $controleur->exec();
    }
}
?>