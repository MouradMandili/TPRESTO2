<?php

require_once "Booking.php";
require_once "DAO.php";

if(isset($_POST['submit'])){
    
    $resDate = $_POST['res_date'];
    $resHour = $_POST['res_heure'];
    
    $book1 = new Booking;

    $book1->setDateBooking($resDate);
    $book1->setHourBooking($resHour)];
    

    $book1->addBooking($dsn, $user, $pw);
    

}

?>