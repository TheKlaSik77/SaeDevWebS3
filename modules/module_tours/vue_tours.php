<?php

class VueTour extends VueGenerique
{

  public function __construct()
  {
    parent::__construct();
  }

  public function afficher_tours($tours)
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
        margin-bottom: 30px;
        padding-bottom: 15px;
        width: 30vw;


      }

      .img {
        height: 380px;
        width: auto;
        object-fit: cover;

      }

      .row {
        margin-left: 30px;
        margin-right: 30px;


      }


      .game-elements-section {
        padding: 50px;


      }

      .game-elements-section .container {}

      .row table {
        background-color: #D3D3D3;
      }
    </style>

    <section id="presentation">
      <div class="about-section">
        <div class="container">
          <h2>À Propos des Tours</h2>

        </div>
        <div class="container">
          <p>Protéger les citoyens des villes sous-terraines contre les attaques incessantes des Splicers avec les tours
            défensives pour repousser les assauts des Splicers,
            qui de plus en plus difficiles à vaincre...
          </p>
        </div>
    </section>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <section class="game-elements-section">
      <div class="container">
        <div class="row">
          <?php foreach ($tours as $tour): ?>
            <?php $imagePath = "images/tours_" . $tour['id'] . ".png"; // Corrected the image path ?>
            <div class="col-md-4 d-flex align-items-stretch">
              <div class="card h-100">
                <?php if (file_exists($imagePath)): ?>
                  <img src="<?= htmlspecialchars($imagePath) ?>" class="card-img-top img"
                    alt="<?= htmlspecialchars($tour['nom']) ?>">
                <?php endif; ?>
                <div class="card-body">
                  <h5 class="card-title">
                    <?= htmlspecialchars($tour['nom']) ?>
                  </h5>
                  <p class="card-text">
                    <?= htmlspecialchars($tour['description']) ?>
                  </p>
                </div>
                <div class="row">
                  <div class="col">
                    <table class="table table-responsive-md table-bordered table-hover">
                      <thead>
                        <tr>

                          <th scope="col">Coût</th>
                          <th scope="col">Portée</th>
                          <th scope="col">Projectiles</th>
                          <th scope="col">Dégâts</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                          <td>
                            <?= htmlspecialchars($tour['cout']) ?>
                          </td>
                          <td>
                            <?= htmlspecialchars($tour['portee']) ?>
                          </td>
                          <td>
                            <?= htmlspecialchars($tour['projectiles']) ?>
                          </td>
                          <td>
                            <?= htmlspecialchars($tour['degats']) ?>
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