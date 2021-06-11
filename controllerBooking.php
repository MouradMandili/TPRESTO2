<?php

require_once "Booking.php";
require_once "DAO.php";
echo var_dump($_POST['submit']);
if(isset($_POST['submit'])){
    echo "coucou";
    $resDate = $_POST['res_date'];
    $resHour = $_POST['res_heure'];
    echo $resDate; 
    echo $resHour;
    $book1 = new Booking;

    $book1->setDateBooking($resDate);
    $book1->setHourBooking($resHour);
    

    $book1->addBooking($dsn, $user, $pw);
    

}else{
    echo "je suis en else";
}

?>