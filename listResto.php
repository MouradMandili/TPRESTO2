<?php
session_start();
 require_once 'header.inc.php';
 require_once 'controllerResto.php';
 $restos = $_SESSION['AllResto'];
 
?>

<main>
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php foreach ($restos  as $resto ): ?>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="<?= $resto["picture"]?>" alt="">
            <div class="card-body">
                <h1><?= $resto["name"]?></h1>
              <p class="card-text"><?= $resto["address"]?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary affiche">View</button>
                  <a class="btn btn-sm btn-success" href="addBooking.php?id=<?= $resto["id"]?>" >Reserve</a>
                </div>
              </div>
                <small class="text-muted">9 min</small>
              </div>
            </div>
          </div>        

          <div class="col view">
            <div class="card shadow-sm">
              <div class="card-body">
                <h1><?= $resto["type"]?></h1>
                <p class="card-text"><?= $resto["description"]?></p>
                <button type="button" class="btn btn-sm btn-danger retour">Fermer</button>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
      </div>
    </div>
  </div>

</main>

<?php

require_once 'footer.inc.php';

?>