<?php

class VueEnnemi extends VueGenerique
{

  public function __construct()
  {
    parent::__construct();
  }

  public function afficher_ennemis($ennemi)
  {
    ?>

    <style>
       #presentation {
        color: #333;
      }


      .about-section {
        padding: 50px;
        background: #fff;
      }

      .about-section h2 {
        font-weight: bold;
        margin-bottom: 20px;
      }

      .about-section p {
        line-height: 1.6;
      }

      .card {
        margin-top: 30px;
        /* Augmenter la marge supérieure */
        margin-bottom: 30px;
        /* Ajouter une marge inférieure pour l'espace entre les cartes */
        padding-bottom: 15px;
        width: 30vw;
        
        /* Vous pouvez ajuster cette valeur pour contrôler la largeur des cartes */
      }

      .img {
        height: 380px;
        /* Définir une hauteur fixe pour les images */
        width: auto;
        /* Assurer que la largeur est automatiquement ajustée */
        object-fit: cover;
        /* Assurer que l'image couvre la zone définie sans être déformée */
      }

      .row {
        margin-left: 30px;
        /* Augmenter la marge gauche de la rangée */
        margin-right: 30px;
        /* Augmenter la marge droite de la rangée */
       
      }


      .game-elements-section {
        padding: 50px;
      

      }

      .game-elements-section .container {
        
      }

      .row table{
        background-color: #D3D3D3;
      }

  
    </style>
<section id="presentation">
      <div class="about-section">
        <div class="container">
          <h2>À Propos des Ennemis</h2>
        
        </div>
        <div class="container">
        <p>Des créatures mécaniques appelées "les Splicers". Ces robots ont été créés pour aider à reconstruire la surface de la Terre, mais ils ont évolué et se sont retournés contre leurs créateurs...
          </p>
      </div>
    </section>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <section class="game-elements-section">
      <div class="container">
        <div class="row">
          <?php foreach ($ennemi as $ennemi): ?>
            <?php $imagePath = "images/ennemis_" . $ennemi['id'] . ".png"; // Corrected the image path ?>
            <div class="col-md-4 d-flex align-items-stretch">
              <div class="card h-100">
                <?php if (file_exists($imagePath)): ?>
                  <img src="<?= htmlspecialchars($imagePath) ?>" class="card-img-top img"
                    alt="<?= htmlspecialchars($ennemi['nom']) ?>">
                <?php endif; ?>
                <div class="card-body">
                  <h5 class="card-title">
                    <?= htmlspecialchars($ennemi['nom']) ?>
                  </h5>
                  <p class="card-text">
                    <?= htmlspecialchars($ennemi['description']) ?>
                  </p>
                </div>
                  <div class="row">
                    <div class="col">
                      <table class="table table-responsive-md table-bordered table-hover">
                        <thead>
                          <tr>

                            <th scope="col">Pv</th>
                            <th scope="col">Vitesse</th>
                            <th scope="col">drop</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>

                            <td>
                              <?= htmlspecialchars($ennemi['pv']) ?>
                            </td>
                            <td>
                              <?= htmlspecialchars($ennemi['vitesse']) ?>
                            </td>
                            <td>
                              <?= htmlspecialchars($ennemi['drop_ennemi']) ?>
                            </td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <?php
  }
}
?>