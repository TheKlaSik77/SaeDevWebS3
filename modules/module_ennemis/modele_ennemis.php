<?php

class ModeleEnnemi extends Connexion {

    /*
    Récupérer dans la BD la description de la tourelle 
    */
    public function get_liste () {
		$req = "SELECT * FROM ennemis";
		$pdo_req = self::$bdd->query($req);
		return $pdo_req->fetchAll();
	}
	
	public function get_details ($id) {
        $req = "SELECT ennemis.id as id, ennemis.nom as nom, ennemis.description as description, ennemis.pv as pv, ennemis.vitesse as vitesse, ennemis.drop_ennmi as drop_ennemi 
        FROM ennemis WHERE ennemis.id=:id";
		$pdo_req = self::$bdd->prepare($req);
		$pdo_req->bindParam("id", $id, PDO::PARAM_INT);
		$pdo_req->execute();
		return $pdo_req->fetch();
	}
}

