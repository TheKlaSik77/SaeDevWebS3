<?php

include_once 'connexionAjaxx.php';
session_start();

class SupprimerJoueur extends ConnexionAjaxx
{

    public function deleteProfil()
    {

        header('content-type: application/json;charset=utf-8');

        $connexion = new ConnexionAjaxx();

        $json = file_get_contents("php://input");
        $data = json_decode($json, true);

        if (!$data || !isset($data['idUser'])) {
            echo json_encode(['error' => 'Aucune donnée reçue.']);
            exit;
        }
        $idUser = $data['idUser'];




        //requête de suppression
        $sql = $connexion->getBdd()->prepare('DELETE FROM Utilisateur WHERE idUser = :idUser');
        $sql->bindParam(':idUser', $idUser, PDO::PARAM_INT);

        // Eécution de la requête
        $sql->execute();

        //vérification de la suppression
        if ($sql->rowCount() > 0) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['error' => 'Erreur lors de la suppression.']);
        }
    }
}

// Instancier et appeler la méthode miseAJourProfil si la requête est POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $supprimeJoueur = new SupprimerJoueur();
    $supprimeJoueur->deleteProfil();
}

?>