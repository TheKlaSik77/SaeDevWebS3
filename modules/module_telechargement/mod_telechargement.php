<?php

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