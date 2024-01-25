<?php

if (!defined('MY_APP')) {
	die("Accès interdit");
}

class ModeleCarte extends Connexion
{
	/*
	   Récupérer dans la BD la description de la tourelle 
	   */
	public function get_liste()
	{
		$req = "SELECT * FROM carte";
		$pdo_req = self::$bdd->query($req);
		return $pdo_req->fetchAll();
	}

	public function get_details($id)
	{
		$req = "SELECT carte.id as id, carte.nom as nom, carte.description as description FROM carte WHERE carte.id=:id";
		$pdo_req = self::$bdd->prepare($req);
		$pdo_req->bindParam("id", $id, PDO::PARAM_INT);
		$pdo_req->execute();
		return $pdo_req->fetch();
	}

	public function get_nom($id)
	{
		$req = "SELECT carte.nom as nom FROM carte WHERE carte.id=:id";
		$pdo_req = self::$bdd->prepare($req);
		$pdo_req->bindParam("id", $id, PDO::PARAM_INT);
		$pdo_req->execute();
		return $pdo_req->fetch();
	}

	public function get_description($id)
	{
		$req = "SELECT carte.description as description FROM carte WHERE carte.id=:id";
		$pdo_req = self::$bdd->prepare($req);
		$pdo_req->bindParam("id", $id, PDO::PARAM_INT);
		$pdo_req->execute();
		return $pdo_req->fetch();
	}

}

