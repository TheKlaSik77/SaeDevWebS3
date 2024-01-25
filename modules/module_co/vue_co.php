<?php

if (!defined('MY_APP')) {
    die("Accès interdit");
}

class VueCo extends VueGenerique
{
    public function __construct()
    {
        parent::__construct();
    }

    public function EchecConnexion()
    {
        ?>
        <div class="alert alert-info" role="alert">
            Echec de la connexion : Login ou mot de passe incorrect !
        </div>
    <?php
    }

    public function UtilisateurDejaConnecte()
    {
        ?>
        <div class="alert alert-info" role="alert">
            Un utilisateur est déjà connecté : veuillez vous déconnecter !
        </div>
    <?php
    }

    //return -3
    public function EchecInscription3()
    {
        ?>
        <div class="alert alert-info" role="alert">
            Tous les champs sont requis !
        </div>
    <?php
    }

    //return -2
    public function EchecInscription2()
    {
        ?>
        <div class="alert alert-info" role="alert">
            Echec lors de l'inscription : les informations fournies n'ont pas pu être intégrées !
        </div>
    <?php
    }

    //return -1
    public function EchecInscription1()
    {
        ?>
        <div class="alert alert-info" role="alert">
            Echec lors de l'inscription : ce pseudo est déjà utilisé !
        </div>
    <?php
    }
    public function confirm_inscription($login)
    {
        ?>
        Inscription de
        <?= $login ?> réussie !
        <?php
    }
    public function erreur_inscription($login)
    {
        ?>
        Echec de l'inscription de
        <?= $login ?>
        <?php
    }

    public function confirm_connexion($login)
    {
        ?>
        Connexion en tant que
        <?= $login ?> réussie !
        <?php
    }

    public function echec_connexion($login)
    {
        ?>
        Echec de la connexion en tant que
        <?= $login ?>
        <?php
    }

    public function utilisateur_inconnu($login)
    {
        ?>
        Utilisateur
        <?= $login ?> inconnu
        <?php
    }

    public function confirm_deconnexion()
    {
        ?>
        Vous êtes bien déconnecté(e)
        <?php
    }
    public function form_connexion()
    {
        ?>

        <div class="container py-5" id="fond_connexion">
            <div class="card">
                <form action='index.php?module=co&action=validerco' method='POST'>
                    <input type="hidden" id="exampleInput1" name="token" value="<?php echo $_SESSION['token'] ?>" required>
                    <!-- header -->

                    <h4 class="mb-0 ">Connexion</h4>


                    <!-- body -->
                    <div class="card-body px-5">

                        <!-- Account section -->
                        <div class="account-section">

                            <div class="login-field">
                                <label for="login">Login</label>
                                <input type="text" class="form-control" id="login" name='login'
                                    placeholder="Nom d'utilisateur" />
                            </div>
                            <div class="login-field">
                                <label for="password">Mot De Passe</label>
                                <input type="password" class="form-control" id="mdp" name='mdp' placeholder="Mot de passe" />
                            </div>
                            <div class="btn-class">
                                <button id="btn" type="submit" class="btn btn-primary">
                                    Se Connecter !
                                </button>
                            </div>
                        </div>

                        <!-- footer -->

                </form>
            </div>
        </div>
        <?php
    }


    public function form_inscription()
    {
        ?>
        <div class="container py-5" id="fond_inscription">
            <div class="card">

                <form action='index.php?module=co&action=validerins' method='POST'>
                    <input type="hidden" id="exampleInput1" name="token" value="<?php echo $_SESSION['token'] ?>" required>
                    <!-- header -->
                    <h4 class="mb-0 ">Inscription</h4>
                    <!-- body -->
                    <div class="card-body px-5">
                        <!-- Account section -->
                        <div class="account-section">
                            <div class="login-field">
                                <label for="login">Login</label>
                                <input type="text" class="form-control" id="login" name='login'
                                    placeholder="Nom d'utilisateur" />
                            </div>
                            <div class="login-field">
                                <label for="password">Mot De Passe</label>
                                <input type="password" class="form-control" id="password" name='password'
                                    placeholder="Mot de passe" />
                            </div>
                            <div class="login-field">
                                <label for="exampleInput2" class="form-label">Adresse Email</label>
                                <input type="email" class="form-control" id="mail" name='mail'
                                    placeholder="Adresse.Mail@exemple.com"
                                    pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" />
                            </div>
                            <div class="login-field">
                                <label for="login">Pays</label>
                                <input type="text" class="form-control" id="pays" name='pays' placeholder="pays" />
                            </div>
                            <div class="btn-class">
                                <button id="btn" type="submit" class="btn btn-primary">
                                    S'inscrire !
                                </button>
                            </div>
                        </div>
                        <!-- footer -->
                </form>

            </div>
        </div>

        <?php


    }

}
?>