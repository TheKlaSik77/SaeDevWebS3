<?php

include_once("cont_profil.php");

class ModProfil
{
    public function __construct()
    {
        $controleur = new ContProfil();
        $controleur->exec();
    }
}
?>