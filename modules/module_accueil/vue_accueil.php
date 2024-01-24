<!-- Version 1.0 - 2022/12/05 -
GNU GPL Copyleft 🄯 2022-2032 -
Initiated by Ismael ARGENCE & Mathéo NGUYEN & Nathan FENOLLOSA -->

<?php

    class VueAccueil extends VueGenerique {

        public function __construct(){
            parent::__construct();
        }

        public function afficher_accueil(){
            ?>
                
                
                <div id="fond">
                <div class="acc" >
                    <h1 id="titre_accueil"> METALLIC INFESTATION </h1>
                    <div class="btn-class">
                        <button id="btn" type="submit" class="btn btn-primary">
                            Joueur Maintenant !
                        </button>
                        </div>
                </div>
                </div>
            <?php
        }
    }
?>