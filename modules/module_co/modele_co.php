<!-- Version 1.0 - 2022/12/05 -
GNU GPL Copyleft 🄯 2022-2032 -
Initiated by Ismael ARGENCE & Mathéo NGUYEN & Nathan FENOLLOSA -->

<?php

    include_once('connexion.php');

    class ModeleCo extends Connexion{
        
        public function __construct(){
        }

        public function inscription(){
            if(isset($_POST['login']) && isset($_POST['mdp'])  && isset($_POST['mail']) && !empty($_POST['login']) && !empty($_POST['mdp'])  && !empty($_POST['mail'])){
                $oui = array($_POST['login'], $_POST['mdp'],  $_POST['mail'], $_POST['pays']);
                $req = self::$bdd->prepare("INSERT INTO utilisateurs (login, mdp, mail) VALUES (?, ?, ?)");
                $req->execute($oui);
                return ($_POST['login']);
            }
        }

        public function verifLogin($login){
            $req = self::$bdd->prepare('SELECT * FROM utilisateurs WHERE login =  ?');
            $req->execute(array($login));
            $tab = $req->fetchAll();
            if (!empty($tab)){
                return true;
            } else {
                return false;
            }
        }

        /*public function verifMdp($login, $mdp){
            $req = self::$bdd->prepare('SELECT mdp FROM utilisateurs WHERE login =  ?');
            $req->execute(array($login));
            $tab = $req->fetch();
            return (password_verify($mdp,$tab['mdp']));
        }*/

        public function connexion(){
            if (!isset($_SESSION["nouvelsession"])){
                if ($this->verifLogin($_POST['login']) /*&& $this->verifMdp($_POST['login'], $_POST['mdp'])*/){
                    $_SESSION["nouvelsession"] = 0;
                    $req = self::$bdd->prepare('SELECT id FROM utilisateurs WHERE login =  ?');
                    $req->execute(array($_POST['login']));
                    $tab = $req->fetch();
                    $_SESSION["id"] = $tab[0];

                    // Connexion en tant qu'admin
                    $requete = self::$bdd->prepare('SELECT admin FROM roles JOIN utilisateurs ON(roles.id_utilisateur = utilisateurs.id) WHERE login =  ?');
                    $requete->execute(array($_POST['login']));
                    $t = $requete->fetch();
                    if ($t[0] == true){
                        return 2;
                    }
                    
                    else {
                        return 1;
                    }
                } else {
                    die("mauvais mot de passe ou nom d'utilisateurs");
                }
            } else {
                return -1;
            }
        }

        public function deconnexion(){
            unset($_SESSION["nouvelsession"]);
        }
    }
?>