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

                padding: 20px;
                color: #fff;
                /* ou toute autre couleur de texte */
                width: 100%;
                /* Prend la largeur totale */
                max-width: 800px;
                /* Largeur maximale pour le conteneur */
                margin: auto;
                /* Centre le conteneur si moins de 100% */
            }

            .profil-header {
                text-align: center;
                margin-bottom: 50px;
                /* Ajoute de l'espace entre le titre et le formulaire */
            }

            .profil-header h1 {
                font-size: 2.5rem;
                /* Taille du texte pour le pseudo */
                background-color: rgba(0, 0, 0, 0.5);
                /* Fond semi-transparent pour le titre */
                display: inline-block;
                /* Pour appliquer padding et background */
                padding: 10px 20px;
                /* Espace autour du texte */
                border-radius: 10px;
                /* Bords arrondis */
                margin: 0;
                /* Enlève la marge par défaut du h1 */
            }

            .profil-form {
                background: rgba(0, 0, 0, 0.5);
                /* fond semi-transparent pour le formulaire */
                padding: 20px;
                border-radius: 10px;
                margin-top: 20px;
                /* Ajoute de l'espace au-dessus du formulaire */
            }

            .profil-form .form-group {
                margin-bottom: 20px;
            }

            .profil-form .form-group label {
                display: block;
                color: rgb(133, 138, 74);
                font-weight: bold;
                /* Rend le texte des labels gras */
                margin-bottom: 5px;
                /* Espace entre le label et le champ de saisie */
            }

            .profil-form .form-group input,
            .profil-form .form-group textarea {
                width: 100%;
                padding: 10px;
                border: none;
                background-color: rgba(128, 128, 128, 0.2);
                /* gris avec 50% de transparence */
                color: #fff;
                border-radius: 5px;
                font-size: 1.3rem;
                /* Taille de la police pour les champs de saisie */
            }

            .profil-actions {
                text-align: right;
                justify-content: flex-end;
                /* Aligner les éléments à la fin du conteneur flex */
                gap: 10px;
                /* Espacer les boutons */
            }

            .profil-actions button {
                padding: 10px 20px;
                margin-left: 10px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                background-color: #4CAF50;
                /* Couleur de fond pour les boutons */
                color: white;
                /* Couleur du texte pour les boutons */
                font-size: 1rem;
                /* Taille de la police pour les boutons */
            }

            .profil-actions button[type="reset"] {
                background-color: #f44336;
                /* Couleur différente pour le bouton d'abandon */
            }


            .btn-primary:active {
                background-color: #3399ff;
                /* Couleur personnalisée plus claire */
            }


            /* Ajoutez des styles supplémentaires pour les boutons et les entrées */
        </style>


        <div class="profil-container">
            <div id="success-alert-placeholder"></div> 
            <div id="danger-alert-placeholder"></div>
            <div class="profil-header">
                <div class="profil-picture">
                    <img src="" alt="">
                </div>
                <h1 id="userLogin"><?php echo htmlspecialchars($profileData['login']); ?></h1>
            </div>
            <form class="profil-form" id="profilForm">
                <div class="form-group">
                    <label for="biographie">Biographie :</label>
                    <textarea id="biographie" name="biographie"><?php echo htmlspecialchars($profileData['biographie']); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="pays">Pays :</label>
                    <input type="text" id="pays" name="pays" value="<?php echo htmlspecialchars($profileData['pays']); ?>">
                </div>
                <div class="form-group">
                    <label for="login">Login* :</label>
                    <input type="text" id="login" name="login" value="<?php echo htmlspecialchars($profileData['login']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Mail* :</label>
                    <input type="email" id="mail" name="mail" value="<?php echo htmlspecialchars($profileData['mail']); ?>">
                </div>
                <div class="profil-actions">
                    <button type="reset" class="btn btn-secondary" id="resetButton">Abandonner les modifications</button>
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                </div>


            </form>
        </div>


    <?php
    }

    public function modification_profil_reussie()
    {
    ?>
        <div class="alert alert-info" role="alert">
            Modification réussie !
        </div>
<?php
    }
}
?>