<?php
include_once "csrf.php";
include_once "vue_admin.php";
include_once "modele_admin.php";

class ContAdmin
{

    private $vue;
    private $modele;
    private $action;

    public function __construct()
    {

        $this->vue = new VueAdmin();
        $this->modele = new ModeleAdmin();
        $this->action = isset($_GET['action']) ? $_GET['action'] : 'admin';
    }

    public function getAction()
    {
        return $this->action;
    }

    public function exec()
    {

        switch ($this->action) {

            case 'admin':
                $mondial = $this->modele->Utilisateurs();
                $this->vue->afficherUtilisateur($mondial);
                break;
            default:

        }

        global $affichage;
        $affichage = $this->vue->getAffichage();

    }

}
?>