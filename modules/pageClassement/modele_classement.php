<?php
include_once('connexion.php');

class ModeleClassement extends Connexion
{

    public function __construct()
    {
    }

    public function ClassementGlobal()
    {

        try {

            $query = "Select * from StatistiquesParUtilisateur order by prcent_reussite desc;";
            $resultatSelect = self::$bdd->query($query);

            if ($resultatSelect === false) {
                throw new Exception("Erreur de requête SQL : " . self::$bdd->errorInfo()[2]);
            }

        } catch (Exception $e) {
            echo "resultat faux";
        }

        return $resultatSelect->fetchAll(PDO::FETCH_ASSOC);

    }

    public function trouverUtilisateur()
    {
        if (isset($_SESSION["nouvelsession"])) {
            return $_SESSION["id"];
        }

        return 0;
    }

    public function StatistiquesUtilisateur()
    {

        $id = $this->trouverUtilisateur();

        try {

            $query = "Select * from StatistiquesParPartie where idUser = $id order by idPartie;";
            $resultatSelect = self::$bdd->query($query);

            if ($resultatSelect === false) {
                throw new Exception("Erreur de requête SQL : " . self::$bdd->errorInfo()[2]);
            }

        } catch (Exception $e) {
            return 0;
        }
        return $resultatSelect->fetchAll(PDO::FETCH_ASSOC);

    }

    public function StatistiquesLogin(){
        
    }
}
?>