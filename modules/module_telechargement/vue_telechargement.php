<?php

    class VueTele extends VueGenerique {

        public function __construct(){
            parent::__construct();
        }

        public function afficher_telechargement(){
            ?>
             <div id="download-fond">
                <div class="acc">
                <h1 id="titre_download">VOUS ÊTES PRÊTS ?</h1>
                <h2>On passe au téléchargement !</h2>
                <button id="btn_download" class="btn btn-primary">
                <a href="https://github.com/TheKlaSik77/Metallic_Infestation/archive/main.zip" >Clique ici</a>
                </button>
            </div>
            </div>

            <?php
        }
    }
?>