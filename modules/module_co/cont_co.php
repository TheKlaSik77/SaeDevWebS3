<?php
include_once "csrf.php";
class ContCo
{
    private $vue;
    private $modele;
    private $action;

    public function __construct()
    {
        include_once('vue_co.php');
        $this->vue = new VueCo();
        include_once('modele_co.php');
        $this->modele = new ModeleCo();
        $this->action = isset($_GET['action']) ? $_GET['action'] : "erreur";
    }

    public function getAction()
    {
        return $this->action;
    }

    public function form_con()
    {
        $this->vue->form_connexion();
    }

    public function form_ins()
    {
        $this->vue->form_inscription();
    }

    public function connexion()
    {
        $val = $this->modele->connexion();
        if ($val === -1) {
            $this->vue->EchecConnexion();
        } else if ($val === -2) {
            $this->vue->UtilisateurDejaConnecte();
        } else if ($val === -3) {
            $this->vue->Admin();
        } else {
            header("Location: index.php?module=accueil&action=accueil");
        }
    }

    public function deconnexion()
    {
        $this->modele->deconnexion();
        $this->vue->DeconnexionReussie();
    }

    public function inscription()
    {
        $val = $this->modele->inscription();
        //champs requis
        if ($val === -3) {
            $this->vue->EchecInscriptionChampsRequis();
        }
        //pseudo déja utilisé
        else if ($val === -1) {
            $this->vue->EchecInscriptionLoginExistant();
        }
        //erreur inscirption
        else if ($val === -2) {
            $this->vue->EchecInscriptionErreurInscription();
        }
        //mail déja utilisé
        else if ($val === -4) {
            $this->vue->EchecInscriptionMailExistant();
        } else {
            header("Location: index.php?module=co&action=connexion");
        }
    }

    public function exec()
    {
        switch ($this->getAction()) {
            case "inscription":
                genererToken();
                $this->form_ins();
                break;

            case "connexion":
                genererToken();
                $this->form_con();
                break;

            case "validerco":
                if (verifToken()) {
                    $this->connexion();
                }
                supprimerToken();
                break;

            case "validerins":
                if (verifToken()) {
                    $this->inscription();
                }
                supprimerToken();
                break;

            case "deconnexion":
                $this->deconnexion();
                header("Location: index.php?module=accueil&action=accueil");
                break;
        }
        global $affichage;
        $affichage = $this->vue->getAffichage();
    }
}

?>