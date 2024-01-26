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
                // Vérifiez si le login est déjà utilisé
                $checkReq = self::$bdd->prepare("SELECT * FROM Utilisateur WHERE login = :log");
                $checkReq->bindValue(':log', $_POST['login']);
                $checkReq->execute();

                if ($checkReq->rowCount() > 0) {
                    // Login déjà utilisé
                    return -1;
                }

                // Vérifiez si l'e-mail est déjà utilisé
                $checkEmail = self::$bdd->prepare("SELECT * FROM Utilisateur WHERE mail = :mail");
                $checkEmail->bindValue(':mail', $_POST['mail']);
                $checkEmail->execute();

                if ($checkEmail->rowCount() > 0) {
                    // E-mail déjà utilisé
                    return -4;
                }

                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

                $req = self::$bdd->prepare("INSERT INTO Utilisateur (login, mdp, mail, pays, admin) VALUES (:log, :mdp, :mail, :pays, '0')");
                $req->bindValue(':log', $_POST['login']);
                $req->bindValue(':mdp', $password);
                $req->bindValue(':mail', $_POST['mail']);
                $req->bindValue(':pays', $_POST['pays']);
                $result = $req->execute();

                if ($result === false) {
                    return -2;
                }

                return 1;
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

            return $req->fetch();
        } catch (Exception $e) {
            echo "resultat faux";
        }
    }


    public function verifLogin()
    {
        try {
            $req = self::$bdd->prepare("SELECT * from Utilisateur WHERE login=:log");
            $req->bindValue(':log', $_POST['login']);
            $resultat = $req->execute();

            return $resultat;
        } catch (Exception $e) {
            echo "resultat faux";
        }
    }

    public function verifMdp()
    {
        try {
            $req = self::$bdd->prepare("SELECT mdp from Utilisateur WHERE login=:log");
            $req->bindValue(':log', $_POST['login']);
            $resultat = $req->execute();
            $password = $req->fetchColumn();

            if ($resultat == true) {
                return (password_verify($_POST['mdp'], $password));
            }

        } catch (Exception $e) {
            echo "resultat faux";
        }
    }

    public function connexion()
    {
        if (!isset($_SESSION["nouvelsession"])) {

            if ($this->verifLogin() && $this->verifMdp()) {
                $_SESSION["nouvelsession"] = 0;

                try {
                    $req = self::$bdd->prepare("SELECT idUser from Utilisateur WHERE login=:log");
                    $req->bindValue(':log', $_POST['login']);
                    $req->execute();
                    $id = $req->fetchColumn();
                    $_SESSION["id"] = $id;

                } catch (Exception $e) {
                    echo "resultat faux";
                }

                try {
                    $req = self::$bdd->prepare("SELECT admin from Utilisateur WHERE idUser=:id");
                    $req->bindValue(':id', $_SESSION["id"]);
                    $req->execute();
                    $admin = $req->fetchColumn();

                    if ($admin == 1) {

                        $_SESSION["admin"] = $admin;
                        return -3;
                    }

                } catch (Exception $e) {
                    echo "resultat faux";
                }

            } else {
                return -1;
            }
        } else {
            return -2;
        }
    }


    public function deconnexion()
    {
        unset($_SESSION["nouvelsession"]);
        return 0;
    }
}
?>