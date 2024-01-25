<?php

include_once('connexion.php');

class ModeleCo extends Connexion
{

    public function __construct()
    {
    }
    public function inscription()
    {
        if (
            isset($_POST['login'], $_POST['password'], $_POST['mail']) &&
            !empty($_POST['login']) && !empty($_POST['password']) &&
            !empty($_POST['mail'])
        ) {
            try {

                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

                $req = self::$bdd->prepare("INSERT INTO Utilisateur (login, mdp, mail, pays) VALUES (:log, :mdp, :mail, :pays)");
                $req->bindValue(':log', $_POST['login']);
                $req->bindValue(':mdp', $password);
                $req->bindValue(':mail', $_POST['mail']);
                $req->bindValue(':pays', $_POST['pays']);
                $result = $req->execute();

                if ($result === false) {
                   return -2;
                }

            } catch (Exception $e) {
                echo "resultat faux";
            }

        } else {
            return -3;
        }
    }


    public function get_utilisateur($login)
    {
        try {
            $req = self::$bdd->prepare("SELECT * from utilisateur WHERE login=?");
            $resultat = $req->execute([$login]);

            if ($resultat == false) {
                echo "FALSE";
            }
            return $req->fetch();
        } catch (Exception $e) {
            echo "resultat faux";
        }
    }



    public function verifLogin()
    {
        try {
            $req = self::$bdd->prepare("SELECT * from Utilisateur WHERE login=:log");
            echo $_POST['login'];
            $req->bindValue(':log',$_POST['login']);
            $resultat = $req->execute();

            if ($resultat == false) {
                echo "FALSE";
            }
            else{
                echo "true";

            }
           
            return $resultat;
        } catch (Exception $e) {
            echo "resultat faux";
        }
    }

    public function verifMdp()
    {
        try {
            $req = self::$bdd->prepare("SELECT mdp from Utilisateur WHERE login=:log");
            echo $_POST['login'];
            $req->bindValue(':log',$_POST['login']);
            $resultat = $req->execute();
            $password = $req->fetchColumn();
            if ($resultat == false) {
                echo "FALSE";
            }
            else{
                echo "OK";
                return (password_verify($_POST['mdp'],$password));
            }

        } catch (Exception $e) {
            echo "resultat faux";
        }
    }

    public function connexion()
    {
        if (!isset($_SESSION["nouvelsession"])) {
            echo "dedans";
            echo "<br>";
            var_dump($this->verifLogin());
            echo "<br>";
            var_dump($this->verifMdp());
            echo "<br>";

            if($this->verifLogin() && $this->verifMdp()){
                $_SESSION["nouvelsession"] = 0;

                try {
                    $req = self::$bdd->prepare("SELECT id from Utilisateur WHERE login=:log");
                    echo $_POST['login'];
                    $req->bindValue(':log',$_POST['login']);
                    $resultat = $req->execute();
                    $id = $req->fetchColumn();
                    echo $id;
                    $_SESSION["id"] = $id;

                    if ($resultat == false) {
                        echo "FALSE";
                    }
                    else{
                        echo "OK";
                    }
        
                } catch (Exception $e) {
                    echo "resultat faux";
                }

                // Connexion en tant qu'admin
                /*$requete = self::$bdd->prepare('SELECT admin FROM roles JOIN Utilisateur ON(roles.id_utilisateur = utilisateurs.id) WHERE login =  ?');
                $requete->execute(array($_POST['login']));
                $t = $requete->fetch();
                if ($t[0] == true) {
                    return 2;
                } else {
                    return 1;
                }*/
                
            } else {
                die("mauvais mot de passe ou nom d'utilisateurs");
            }
        } else {
            return -1;
        }
    }

    public function deconnexion()
    {
        unset($_SESSION["nouvelsession"]);
    }

}
?>