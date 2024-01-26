<?php

include_once('connexion.php');

class ModeleProfil extends Connexion
{

    public function __construct()
    {
    }



    public function get_infos_profil($idUser)
    {
        $selectPrepare = self::$bdd->prepare('SELECT biographie, login, mdp, pays, mail FROM Utilisateur WHERE idUser = :idUser');
        $selectPrepare->bindValue(':idUser', $idUser, PDO::PARAM_INT);
        $selectPrepare->execute();
        $tab = $selectPrepare->fetch(PDO::FETCH_ASSOC);
        return $tab;
    }


}
?>