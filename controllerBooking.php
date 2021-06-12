<?php
session_start();
require_once "Booking.php";
require_once "DAO.php";
$_SESSION['obj_user'];
$_SESSION['idResto'];


if(isset($_POST['submit'])){
    
    $resDate = date('Y-m-d', strtotime($_POST['res_date']));
    $resHour = $_POST['res_heure'];
    
    $idClient = intval($_SESSION['obj_user']['id']);
    $idRestaurant = intval($_SESSION['idResto']);

    $book1 = new Booking();

    $book1->setDateBooking($resDate);
    $test=$book1->getDateBooking();
    echo $test;
    $book1->setHourBooking($resHour);
    $test2=$book1->getHourBooking();
    echo $test2;
    
    $book1->setClient($idClient);
    $book1->setRestaurant($idRestaurant);

    $book1->addBooking($dsn, $user, $pw);
    

}else{
    echo "je suis en else";
}

?>