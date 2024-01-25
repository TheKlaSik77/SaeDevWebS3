<?php

if (!defined('MY_APP')) {
    die("Accès interdit");
}

class VueClassement extends VueGenerique
{

    public function __construct()
    {
        parent::__construct();
    }

    public function menu()
    {
        ?>
        <div>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?module=classement&action=mondial">Classement
                        Mondial</a>
                </li>
                <?php if (isset($_SESSION["nouvelsession"])) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php?module=classement&action=joueur">Mes
                            statistiques</a>
                    </li>
                <?php } else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true" href="index.php?module=classement&action=joueur">Mes
                            statistiques</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <?php
    }

    public function afficherClassementGlobal($tableau)
    {
        ?>
        <div class="table-responsive">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Login</th>
                        <th scope="col">Tourelles </th>
                        <th scope="col">moyenne Dégâts</th>
                        <th scope="col">Obstacles</th>
                        <th scope="col">moyenne Dégâts</th>
                        <th scope="col">Morts</th>
                        <th scope="col">Survivants</th>
                        <th scope="col">Max Pv perdus</th>
                        <th scope="col">% de réussite</th>
                        <th scope="col">Ennemi Frequent</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach ($tableau as $index => $data):
                        $login = $data['login']; ?>
                        <tr>

                            <th scope="row">
                                <?php echo $index + 1; ?>
                            </th>
                            <td>
                                    <?php echo $login; ?>
                            </td>
                            <td>
                                <?php echo $data['nbTourelles']; ?>
                            </td>
                            <td>
                                <?php echo $data['moy_dgts_Tour']; ?>
                            <td>
                                <?php echo $data['nbOstacles']; ?>
                            </td>
                            <td>
                                <?php echo $data['moy_dgts_Obs']; ?>
                            </td>
                            <td>
                                <?php echo $data['nbEnnemisMort']; ?>
                            </td>
                            <td>
                                <?php echo $data['nbEnnemisPasses']; ?>
                            </td>
                            <td>
                                <?php echo $data['max_perte']; ?>
                            </td>
                            <td>
                                <?php echo $data['prcent_reussite']; ?>
                            </td>
                            <td>
                                <?php echo $data['ennemiFrequent']; ?>
                            </td>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <?php
    }

    public function afficherStatistiquesJoueur($tableau)
    {
        ?>
        <div class="table-responsive">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">n° de partie</th>
                        <th scope="col">Login</th>
                        <th scope="col">Tourelles </th>
                        <th scope="col">moyenne Dégâts</th>
                        <th scope="col">Obstacles</th>
                        <th scope="col">moyenne Dégâts</th>
                        <th scope="col">Morts</th>
                        <th scope="col">Survivants</th>
                        <th scope="col">Max Pv perdus</th>
                        <th scope="col">% de réussite</th>
                        <th scope="col">Ennemi Frequent</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach ($tableau as $index => $data): ?>
                        <tr>
                            <th scope="row">
                                <?php echo $data['idPartie']; ?>
                            </th>
                            <td>
                                <?php echo $data['login']; ?>
                            </td>
                            <td>
                                <?php echo $data['nbTourelles']; ?>
                            </td>
                            <td>
                                <?php echo $data['moy_dgts_Tour']; ?>
                            <td>
                                <?php echo $data['nbOstacles']; ?>
                            </td>
                            <td>
                                <?php echo $data['moy_dgts_Obs']; ?>
                            </td>
                            <td>
                                <?php echo $data['nbEnnemisMort']; ?>
                            </td>
                            <td>
                                <?php echo $data['nbEnnemisPasses']; ?>
                            </td>
                            <td>
                                <?php echo $data['max_perte']; ?>
                            </td>
                            <td>
                                <?php echo $data['prcent_reussite']; ?>
                            </td>
                            <td>
                                <?php echo $data['ennemiFrequent']; ?>
                            </td>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <?php
    }

    public function pasDePartie(){
        ?> <div class="alert alert-info" role="alert">
            Aucune partie enregistrée ! 
        </div>
        <?php      

    }
}
?>