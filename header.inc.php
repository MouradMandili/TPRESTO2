<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="jquery-3.6.0.min.js"></script>
    <script src="anime.js"></script>
    <title>Accueil</title>

    <style>
      body{
          background: url("uploads/bg.jpg") !important;
      } 
      
      /* .view{
        display: none;
      } */
    
      .view.active{
        display: none;
      }

      /* .view:not(.active){
        display: none;
      } */

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="listResto.php?liste=restos">Restos</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a style="margin:5px; color:#fff;" class="nav-link btn-success active" aria-current="page" href="profil.php">Profil</a>
        <a style="margin:5px; color:#fff;" class="nav-link btn-success" href="addResto.php">Ajouter un Restaurant</a>
        <a style="margin:5px; color:#fff;" class="nav-link btn-success" href="listResto.php?liste">liste des Restaurants</a>
        <a style="margin:5px; color:#fff;" class="nav-link btn-danger" href="listResto.php?dec">se deconneter</a>
        <!-- <input  type="submit" class="nav-link" value="D??connexion"> -->
      </div>
    </div>
  </div>
</nav>