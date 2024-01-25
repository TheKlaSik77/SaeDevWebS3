<?php

if (!defined('MY_APP')) {
    die("Accès interdit");
}
include_once("vue_cartes.php");
include_once("modele_cartes.php");
class ContCarte
{

    private $modele;
    private $vue;
    private $action;

    public function __construct()
    {
        $this->vue = new VueCarte();
        $this->modele = new ModeleCarte();
    }

    public function lesCartes()
    {
        $Cartes = $this->modele->get_liste(); // Récupère les données de la BD
        $this->vue->afficher_cartes($Cartes); // Affiche les données
    }

    public function exec()
    {
        $this->lesCartes();
        global $affichage;
        $affichage = $this->vue->getAffichage();
    }
}
