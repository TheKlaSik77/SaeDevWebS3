<?php

include_once("cont_admin.php");

class ModAdmin
{
    public function __construct()
    {

        $controleur = new ContAdmin();

        $controleur->exec();

    }
}
?>