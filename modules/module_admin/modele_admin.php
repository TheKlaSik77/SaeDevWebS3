<?php
include_once('connexion.php');

class ModeleAdmin extends Connexion
{

    public function __construct()
    {
    }

    public function Utilisateurs()
    {

        try {

            $query = "Select * from Utilisateur;";
            $resultatSelect = self::$bdd->query($query);

            if ($resultatSelect === false) {
                throw new Exception("Erreur de requête SQL : " . self::$bdd->errorInfo()[2]);
            }

        } catch (Exception $e) {
            echo "resultat faux";
        }

        return $resultatSelect->fetchAll(PDO::FETCH_ASSOC);

    }
}
?>