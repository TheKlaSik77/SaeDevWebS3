<?php
    class VueMenu extends VueGenerique {

        private $affichageMenu;

        public function __construct () {}

        //La méthode affiche le contenu html stocké dans la variable affichageMenu
        public function affiche() {
            echo $this->affichageMenu;
        }

        //La méthode charge des blocs d'html dans la variable affichageMenu
        public function menu($estAdmin=false){

            

            //Chargement des éléments permanents de la navbar
            $this->affichageMenu = '<div class="collapse navbar-collapse"><ul class="navbar-nav navbar">
            <li class="active"><a class="nav-brand" href="index.php?module=accueil&action=accueil">
                <img id="logo" class"d-inline-block align-top" src="images/logo.jpg" style="height: 30px; width: auto; margin-right: 10px; margin-left:20px"></a></li>
            <li class="active"><a class="nav-brand" href="index.php?module=apropos&action=a_propos"><h3>A propos</h3></a></li>
            <li class="active"><a class="nav-brand" href="index.php?module=tours&action=tours"> <h3>Tours</h3></a></li>
            <li class="active"><a class="nav-brand" href="index.php?module=ennemis&action=ennemis"> <h3>Ennemis</h3></a></li>
            <li class="active"><a class="nav-brand" href="index.php?module=cartes&action=cartes"> <h3>Cartes</h3></a></li>
            <li class="active"><a class="nav-brand" href="index.php?module=classement&action=classement&action=mondial"> <h3>Classement</h3></a></li>
            <li class="active"><a class="nav-brand" href="index.php?module=FAQ"> <h3>FAQ</h3></a></li></ul></div>';

            //Vérification de sécurité si l'utilisateur est toujurs connecté => alors on lui affiche le bouton deconnexion
            if (isset($_SESSION['nouvelsession'])){
                $this->affichageMenu = $this->affichageMenu .
                '<div class="collapse navbar-collapse nav-droite"><ul class="navbar-nav navbar">' .
                "<li class='active'><a class='nav-brand codeco' href=\"index.php?module=profil&action=profil\"><h3>Mon Profil</h3></a></li>".
                "<li class='active'><a class='nav-brand codeco' href=\"index.php?module=co&action=deconnexion\"><h3>Déconnexion</h3></a></li>";
                //Verification des droits administrateurs de l'utilisateur afin de lui permettre ou non de passer de l'interface user a l'interface admin
                if ($estAdmin){
                    $this->affichageMenu = $this->affichageMenu .  
                    '<li class="active"><a class="nav-brand" href="index.php?module=admin"> <h3>ADMIN</h3></a></li></ul></div>'; 
                }
                //Si l'utilisateur n'est pas connecté => on lui affiche le bouton connexion
            } else {
                $this->affichageMenu = $this->affichageMenu .
                '<div class="collapse navbar-collapse nav-droite"><ul class="navbar-nav navbar">' .

                "<li class='active'><a class='nav-brand codeco' href=\"index.php?module=co&action=connexion\"><h3>Connexion</h3></a></li>".
                '<li class="active"><a class="nav-brand" href="index.php?module=co&action=inscription"> <h3>Inscription</h3></a></li>'.
                "</ul></div>";
            }
            
        }
    }
?>