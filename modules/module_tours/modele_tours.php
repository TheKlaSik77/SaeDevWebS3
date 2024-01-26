<?php

class ModeleTour extends Connexion
{

	public function get_liste()
	{
		$req = "SELECT * FROM tour";
		$pdo_req = self::$bdd->query($req);
		return $pdo_req->fetchAll();
	}

	public function get_details($id)
	{
		$req = "SELECT tour.id as id, tour.nom as nom, tour.description as description, tour.cout as cout, tour.portee as portee, tour.projectiles as projectiles, tour.degats as degats  FROM tour WHERE tour.id=:id";
		$pdo_req = self::$bdd->prepare($req);
		$pdo_req->bindParam("id", $id, PDO::PARAM_INT);
		$pdo_req->execute();
		return $pdo_req->fetch();
	}
}

