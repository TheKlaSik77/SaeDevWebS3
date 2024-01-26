<?php

include_once "csrf.php";
include_once "vue_classement.php";
include_once "modele_classement.php";

class ContClassement
{

    private $vue;
    private $modele;
    private $action;

    public function __construct()
    {

        $this->vue = new VueClassement();
        $this->modele = new ModeleClassement();
        $this->action = isset($_GET['action']) ? $_GET['action'] : 'mondial';
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getStatsUtilisateur($joueur)
    {
        if ($joueur != 0) {
            $this->vue->afficherStatistiquesJoueur($joueur);
        } else {
            $this->vue->pasDePartie();
        }
    }

    public function exec()
    {

        $this->vue->menu();

        switch ($_GET['action']) {

            case 'mondial':
                $mondial = $this->modele->ClassementGlobal();
                $this->vue->afficherClassementGlobal($mondial);
                break;

            case 'joueur':
                $joueur = $this->modele->StatistiquesUtilisateur();
                $this->getStatsUtilisateur($joueur);
                break;
            case "connexion":
                header("Location: index.php?module=co&action=connexion");
            default:

        }

        global $affichage;
        $affichage = $this->vue->getAffichage();

    }

}
?>