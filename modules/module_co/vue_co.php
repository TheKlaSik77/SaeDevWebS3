<!-- Version 1.0 - 2022/12/05 -
GNU GPL Copyleft 🄯 2022-2032 -
Initiated by Ismael ARGENCE & Mathéo NGUYEN & Nathan FENOLLOSA -->

<?php

class VueCo extends VueGenerique
{
    public function __construct()
    {
        parent::__construct();
    }

    public function form_connexion()
    {
        ?>


        <div class="container py-5" id="fond_connexion">
            <div class="card">
                <form action='index.php?module=co&action=validerco' method='post'>
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
                                <input type="password" class="form-control" id="password" name='password'
                                    placeholder="Mot de passe" />
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
                <form action='index.php?module=co&action=validerins' method='post'>
                    <input type="hidden" id="exampleInput1" name="token" value="<?php echo $_SESSION['token'] ?>" required>
                    <!-- header -->
                    <!--<div class="card-header py-4 px-5 bg-light border-0">-->
                        <h4 class="mb-0 fw-bold">Inscription</h4>
                    <!-- body -->
                    <div class="card-body px-5">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="exampleInput1" class="form-label">Login</label>
                                <input type="text" class="form-control" id="exampleInput1" style="max-width: 500px;"
                                    name='login' placeholder="Login" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInput1" class="form-label">Mot De Passe</label>
                                <input type="password" class="form-control" id="exampleInput1" style="max-width: 500px;"
                                    name='password' placeholder="Mot De Passe"
                                    pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" />
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Pays</label>
                                <select id="disabledSelect" class="form-control">
                                    <option>Selectionner pays</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled="">
                                    <label class="form-check-label" for="disabledFieldsetCheck">
                                        Can't check this
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInput2" class="form-label">Adresse Email</label>
                                <input type="email" class="form-control" id="exampleInput2" style="max-width: 500px;"
                                    name='email' placeholder="Adresse.Mail@exemple.com"
                                    pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" />
                                <small>Format attendu : example@example.com</small>
                            </div>
                        </div>
                        <!--<div class="card-footer text-end py-4 px-5 bg-light border-0">-->
                            <button type="submit" class="btn btn-primary btn-rounded">
                                S'inscrire
                            </button>
                        <!--</div>-->
                    </div>
                </form>
            </div>
        </div>
        <?php
    }

}
?>