<?php

if (!defined('MY_APP')) {
    die("Accès interdit");
}
class VueAccueil extends VueGenerique
{

    public function __construct()
    {
        parent::__construct();
    }

    public function afficher_accueil()
    {
        ?>
        <div id="fond">
            <div class="acc">
                <h1 id="titre_accueil"> METALLIC INFESTATION </h1>
                <div class="btn-class">
                    <button id="btn" type="submit" class="btn btn-primary">
                        <a href="index.php?module=telechargement&action=telechargement">Joueur Maintenant !
                    </button>
                </div>
            </div>
        </div>

        <?php
    }
}
?>