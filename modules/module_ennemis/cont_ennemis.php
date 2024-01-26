<?php
include_once("vue_ennemis.php");
include_once("modele_ennemis.php");
class ContEnnemi
{

    private $vue;


    private $modele;

    public function __construct()
    {
        $this->vue = new VueEnnemi();
        $this->modele = new ModeleEnnemi();
    }

    public function lesEnnemis()
    {
        $ennemis = $this->modele->get_liste();
        $this->vue->afficher_ennemis($ennemis);
    }

    public function exec()
    {
        $this->lesEnnemis();
        global $affichage;
        $affichage = $this->vue->getAffichage();
    }
}
