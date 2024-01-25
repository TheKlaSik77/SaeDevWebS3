<?php
if (!defined('MY_APP')) {
    die("Accès interdit");
}

include_once("cont_faq.php");

class ModFAQ
{
    public function __construct()
    {
        $controleur = new ContFaq();
        $controleur->exec();
    }
}
?>