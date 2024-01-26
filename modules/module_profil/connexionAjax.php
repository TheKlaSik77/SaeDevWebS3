<?php

class ConnexionAjax
{

    protected static $bdd;

    public function __construct()
    {
        self::initConnexion();
    }

    public static function initConnexion()
    {
        $dsn = 'mysql:dbname=dutinfopw201647;host=database-etudiants.iut.univ-paris8.fr';
        $user = 'dutinfopw201647';
        $password = 'maveradu';

        self::$bdd = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    public static function getBdd()
    {
        if (!isset(self::$bdd)) {
            self::initConnexion();
        }
        return self::$bdd;
    }
}
?>