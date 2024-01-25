<?php

if (!defined('MY_APP')) {
    die("Accès interdit");
}

include_once("cont_accueil.php");

class ModAccueil
{
    public function __construct()
    {
        $controleur = new ContAccueil();
        $action = isset($_GET['action']) ? $_GET['action'] : "accueil";
        $controleur->setAction($action);
        $controleur->exec();
    }
}
?>