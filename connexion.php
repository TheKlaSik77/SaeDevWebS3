<?php

if (!defined('MY_APP')) {
    die("Accès interdit");
}
class Connexion
{

    protected static $bdd;

    public function __construct()
    {

    }

    public static function initConnexion()
    {
        $dsn = 'mysql:dbname=dutinfopw201647;host=database-etudiants.iut.univ-paris8.fr';
        $user = 'dutinfopw201647';
        $password = 'maveradu';

        self::$bdd = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }
}
?>