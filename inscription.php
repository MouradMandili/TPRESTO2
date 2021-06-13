<?php require_once 'headerAccueil.php' ?>

<div class="container">
<form class="row g-3" method="POST" action="controllerInscription.php" enctype="multipart/form-data"> 
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Nom</label>
    <input type="text" class="form-control" id="validationDefault01"  name="lastname" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">prénom</label>
    <input type="text" class="form-control" id="validationDefault01"  name="firstname" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Email</label>
    <input type="email" class="form-control" id="validationDefault02" name="email" required>
  </div>
 
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="validationDefault05" required name="password">
  </div>

  <div class="mb-3">
  <label for="picture" class="form-label">Photo de profil</label>
  <input class="form-control" type="file" id="picture" name="picture">
</div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        J'accepte les CGU clique ici pour lire les RGPD
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit">s'inscrire</button>
  </div>
</form>   
</div>
 
<?php

require_once 'footer.inc.php';
?>