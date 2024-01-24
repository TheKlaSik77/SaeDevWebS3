<?php
class VueCarte extends VueGenerique
{
  public function __construct()
  {
    parent::__construct();
  }



  public function afficher_cartes($Cartes)
  {
    ?>
    <style>


      /* Ajoutez vos styles CSS ici */

      #carouselExampleCaptions {
        width: 65%;
        margin: auto;
      }

      #carouselExampleCaptions p {
        color: rgb(255, 255, 255);
      }

      #carouselExampleCaptions img {
        margin-top: 30px;
        height: 90vh;


      }
    </style>


    </section>
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <?php foreach ($Cartes as $index => $carte): ?>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $index ?>" 
                  class="<?= $index === 0 ? 'active' : '' ?>" 
                  aria-current="<?= $index === 0 ? 'true' : '' ?>" 
                  aria-label="Slide <?= $index + 1 ?>"></button>
        <?php endforeach; ?>
      </div>
      <div class="carousel-inner">
        <?php foreach ($Cartes as $index => $carte): ?>
          <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
            <img src="images/carte_<?= $carte['id'] ?>.png" class="d-block w-100" alt="<?= htmlspecialchars($carte['nom']) ?>">
            <div class="carousel-caption d-none d-md-block">
              <h5><?= htmlspecialchars($carte['nom']) ?></h5>
              <p><?= htmlspecialchars($carte['description']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <?php
  }
}
?>