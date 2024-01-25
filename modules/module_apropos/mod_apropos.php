<?php

if (!defined('MY_APP')) {
    die("Accès interdit");
}

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