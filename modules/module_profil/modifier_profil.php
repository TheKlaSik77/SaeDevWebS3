<?php

include_once 'connexionAjax.php';
session_start();

class ModifierProfil extends ConnexionAjax
{

    public function miseAJourProfil()
    {

        header('content-type: application/json;charset=utf-8');

        $connexion = new ConnexionAjax();
        $data = json_decode(file_get_contents("php://input"), true);
        $idUser = $_SESSION['id'];

        // Préparation de la requête SQL de mise à jour
        $sql = $connexion->getBdd()->prepare('UPDATE Utilisateur SET login = :login, mail = :mail, pays = :pays, biographie = :biographie WHERE idUser = :idUser');

        $sql->bindParam(':login', $data['login'], PDO::PARAM_STR);
        $sql->bindParam(':mail', $data['mail'], PDO::PARAM_STR);
        $sql->bindParam(':pays', $data['pays'], PDO::PARAM_STR);
        $sql->bindParam(':biographie', $data['biographie'], PDO::PARAM_STR);
        $sql->bindParam(':idUser', $idUser, PDO::PARAM_INT);

        $sql->execute();

        // Vérification si la mise à jour a réussi
        if ($sql->rowCount() > 0) {
            echo json_encode(['success' => true]);

        } else {
            echo json_encode(['error' => 'La mise à jour a échoué ou aucune donnée n’a été modifiée.']);

        }
    }
}

// Instancier et appeler la méthode miseAJourProfil si la requête est POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $modifierProfil = new ModifierProfil();
    $modifierProfil->miseAJourProfil();
}

?>