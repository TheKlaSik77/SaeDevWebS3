<?php

include_once("cont_apropos.php");

class ModApropos
{
    public function __construct()
    {
        $controleur = new ContApropos();
        $controleur->exec();
    }
}


?>