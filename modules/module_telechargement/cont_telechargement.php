<?php

include_once('vue_telechargement.php');
class ContTele
{

    private $vue;


    public function __construct()
    {
        $this->vue = new VueTele();
    }


    public function telechargement()
    {
        $this->vue->afficher_telechargement();
    }


    public function exec()
    {
        $this->telechargement();
        global $affichage;
        $affichage = $this->vue->getAffichage();
    }


}
?>