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
                    <div class="col-lg-6 profile mr-3"><img src="<?= $users["picture"]?>" class="img-fluid img-thumbnail">Edit profile</a></div>
                    
                </div>
            </div>
         
            <div class="px-4 py-3">
                <h5 class="mb-0">About</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0"><?= $users["firstname"]?></p>
                    <p class="font-italic mb-0"><?= $users["lastname"]?></p>
                    <p class="font-italic mb-0"><?= $users["email"]?></p>
                </div>
            </div>
            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent photos</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                </div>
                <!-- Reservations -->
                <div class="row">
                    <div class="col-lg-6 mb-2 pr-lg-1">
                        <?php foreach ($bookis  as $booki ): ?>
                            
                            <tr>
                                <td><?= $booki["name"]?></td>
                                <td><?= date('d-m-Y', strtotime($booki["dateBooking"]))?></td>
                                <td><?= substr($booki["hourBooking"],0,5)?></td>
                            </tr>

                        <?php endforeach; ?>  
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

<?php

require_once 'footer.inc.php';
?>