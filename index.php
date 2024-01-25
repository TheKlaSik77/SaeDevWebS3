<?php



session_start();
define('MY_APP', true);

if (!defined('MY_APP')) {
    die("Accès interdit");
}

include_once "connexion.php";
include_once "controleur.php";


$affichage;
Connexion::initConnexion();

$controleur = new Controleur();
$controleur->exec();

include_once "template.php";


?>