<?php

if (!defined('MY_APP')) {
    die("Accès interdit");
}
include_once('vue_accueil.php');
class ContAccueil
{

    private $vue;
    private $action;


    public function __construct()
    {
        $this->vue = new VueAccueil();
    }

    public function setAction($action)
    {
        $this->action = $action;
    }

    public function accueil()
    {
        $this->vue->afficher_accueil();
    }

    public function exec()
    {
        $this->accueil();
        global $affichage;
        $affichage = $this->vue->getAffichage();
    }
}
?>