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
                width: 100%;
                max-width: 800px;
                margin: auto;
            }

            .profil-header {
                text-align: center;
                margin-bottom: 50px;
            }

            .profil-header h1 {
                font-size: 2.5rem;
                background-color: rgba(0, 0, 0, 0.5);
                display: inline-block;

                padding: 10px 20px;

                border-radius: 10px;

                margin: 0;

            }

            .profil-form {
                background: rgba(0, 0, 0, 0.5);

                padding: 20px;
                border-radius: 10px;
                margin-top: 20px;

            }

            .profil-form .form-group {
                margin-bottom: 20px;
            }

            .profil-form .form-group label {
                display: block;
                color: rgb(133, 138, 74);
                font-weight: bold;

                margin-bottom: 5px;

            }

            .profil-form .form-group input,
            .profil-form .form-group textarea {
                width: 100%;
                padding: 10px;
                border: none;
                background-color: rgba(128, 128, 128, 0.2);

                color: #fff;
                border-radius: 5px;
                font-size: 1.3rem;

            }

            .profil-actions {
                text-align: right;
                justify-content: flex-end;

                gap: 10px;

            }

            .profil-actions button {
                padding: 10px 20px;
                margin-left: 10px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                background-color: #4CAF50;

                color: white;

                font-size: 1rem;
            }

            .profil-actions button[type="reset"] {
                background-color: #f44336;

            }


            .btn-primary:active {
                background-color: #3399ff;

            }
        </style>


        <div class="profil-container">
            <div id="success-alert-placeholder"></div>
            <div id="danger-alert-placeholder"></div>
            <div class="profil-header">
                <div class="profil-picture">
                    <img src="" alt="">
                </div>
                <h1 id="userLogin">
                    <?php echo htmlspecialchars($profileData['login']); ?>
                </h1>
            </div>
            <form class="profil-form" id="profilForm">
                <div class="form-group">
                    <label for="biographie">Biographie :</label>
                    <textarea id="biographie"
                        name="biographie"><?php echo htmlspecialchars($profileData['biographie']); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="pays">Pays :</label>
                    <input type="text" id="pays" name="pays" value="<?php echo htmlspecialchars($profileData['pays']); ?>">
                </div>
                <div class="form-group">
                    <label for="login">Login* :</label>
                    <input type="text" id="login" name="login" value="<?php echo htmlspecialchars($profileData['login']); ?>"
                        required>
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