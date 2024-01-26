<?php
class VueAdmin extends VueGenerique
{

    public function __construct()
    {
        parent::__construct();
    }

    public function afficherUtilisateur($tableau)
    {
        ?>
        <div class="table-responsive">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">idUser</th>
                        <th scope="col">Login</th>
                        <th scope="col">Mail</th>
                        <th scope="col">Pays</th>
                        <th scope="col">Biographie</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach ($tableau as $index => $data): ?>
                        <tr>

                            <th scope="row">
                                <?php echo $index + 1; ?>
                            </th>
                            <td>
                                <?php echo $data['idUser']; ?>
                            </td>
                            <td>
                                <?php echo $data['login']; ?>
                            </td>
                            <td>
                                <?php echo $data['mail']; ?>
                            </td>
                            <td>
                                <?php echo $data['pays']; ?>
                            </td>
                            <td>
                                <?php echo $data['biographie']; ?>
                            </td>
                            <td>
                                <form class="suppForm">

                                    <button type="submit" id="supprimer" name=supprimer class="supprimerBtn"
                                        value="<?php echo $data['idUser']; ?>">Supprimer</button>
                                </form>

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
                                <?php $data['nbTourelles']; ?>
                            </td>
                            <td>
                                <?php echo $data['moyenne_degats_Tourelles']; ?>
                            <td>
                                <?php echo $data['nbOstacles']; ?>
                            </td>
                            <td>
                                <?php echo $data['moyenne_degats_Obstacles']; ?>
                            </td>
                            <td>
                                <?php echo $data['nbEnnemisMort']; ?>
                            </td>
                            <td>
                                <?php echo $data['nbEnnemisPasses']; ?>
                            </td>
                            <td>
                                <?php echo $data['max_pv_perdu']; ?>
                            </td>
                            <td>
                                <?php echo $data['pourcentage_ennemis_tues']; ?>
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

    public function pasDePartie()
    {
        ?>
        <div class="alert alert-info" role="alert">
            Aucune partie enregistrée !
        </div>
        <?php

    }
}
?>