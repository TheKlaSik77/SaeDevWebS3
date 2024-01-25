<?php

class VueProfil extends VueGenerique
{

    public function __construct()
    {
        parent::__construct();
    }

    public function afficher_profil($profileData)
    {
 
?>
<style>
    .profil-container {
    background: url('chemin_vers_image_de_fond.jpg') no-repeat center center;
    background-size: cover;
    padding: 20px;
    color: #fff; /* ou toute autre couleur de texte */
}

.profil-header {
    text-align: center;
}

.profil-picture {
    /* Ajoutez des styles pour la photo de profil si nécessaire */
}

.profil-form {
    /* Ajoutez des styles pour votre formulaire */
    background: rgba(0, 0, 0, 0.5); /* fond semi-transparent pour les zones de texte */
    padding: 20px;
    border-radius: 10px;
}

.profil-form .form-group {
    margin-bottom: 20px;
}

.profil-form .form-group label {
    display: block;
}

.profil-form .form-group input,
.profil-form .form-group textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: none;
    background-color: #fff;
    border-radius: 5px;
}

.profil-actions {
    text-align: right;
}

.profil-actions button {
    padding: 10px 20px;
    margin-left: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Ajoutez des styles supplémentaires pour les boutons et les entrées */

</style>



<?php
    }
}
?>