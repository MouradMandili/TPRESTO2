<?php
require_once 'controllerLogin.php';
require_once 'header.inc.php';
require_once 'Booking.php';
require_once 'DAO.php';


$users = $_SESSION['obj_user'];

$booking1 = new Booking();


$bookis=$booking1->recupBooking($dsn,$user,$password);

// var_dump($bookis[0]);

//echo $users["firstname"];

?>
<div class="row py-5 px-4">
    <div class="col-md-5 mx-auto">
        
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="col-lg-6 profile mr-3"><img src="<?= $users["picture"]?>" class="img-fluid img-thumbnail"></div>
                    <?php
                        $ip = $_SERVER['REMOTE_ADDR'];
                        setcookie('ip',$ip,time() + 60*60*24*7);
                        echo 'votre @ ip est : '.$_SERVER['REMOTE_ADDR'];
                    ?>
                </div>
            </div>
         
            <div class="px-4 py-3">
                <h5 class="mb-0">Vos informations :</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">Prénom : <?= $users["firstname"]?></p>
                    <p class="font-italic mb-0">Nom de famille : <?= $users["lastname"]?></p>
                    <p class="font-italic mb-0">Email : <?= $users["email"]?></p>
                </div>
            </div>
            <div class="py-4 px-4">
                <!-- <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent photos</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                </div> -->
                <!-- Reservations -->
                <h5>Récapitulatif de vos réservations :</h5>
                <div class="row">
                    <div class="col-lg-12 mb-2 pr-lg-1">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Restaurant</th>
                                <th>date</th>
                                <th>heure</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($bookis  as $booki ): ?>
                                
                                <tr>
                                    <td><?= $booki["name"]?></td>
                                    <td><?= date('d-m-Y', strtotime($booki["dateBooking"]))?></td>
                                    <td><?= substr($booki["hourBooking"],0,5)?></td>
                                </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                          
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

<?php

require_once 'footer.inc.php';
?>