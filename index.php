<?php require_once 'headerAccueil.php' ?>

<div class="container align-items-center" style="height:100vh;">
    <div class="row justify-content-center align-items-center" style="height:100vh;">
      <div class="col-6 d-flex justify-content-center align-items-center">
        <form action="controllerLogin.php" method="POST">

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Addresse email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">jamais communiquer vos coordonnés</div>
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="mdp">
          </div>

          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">j'accepte les conditions RGPD clique ici pour lire les CGU</label>
          </div>

          <button type="submit" class="btn btn-primary" name="submit">se connecter</button>

        </form>
      </div>
    </div>
</div>

<?php require_once 'footer.inc.php' ?>