<?php

require_once "Booking.php";
require_once "DAO.php";

if(isset($_POST['submit'])){
    
    $resDate = $_POST['res_date'];
    $resHour = $_POST['res_heure'];
    
    $book1->setRes_date($resDate);
    $book1->setRes_hour($resHour);
            

    $book1->addBooking($dsn, $user, $pw);
    header("Location: profil.php");

        

        
    }
}

?>