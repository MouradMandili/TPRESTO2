<?php
session_start();
require_once "Booking.php";
require_once "DAO.php";
$_SESSION['obj_user'];
$_SESSION['idResto'];


$idClient = $_SESSION['obj_user']['id'];
echo $idClient;
$idRestaurant = $_SESSION['idResto'];
echo $idRestaurant;



if(isset($_POST['submit'])){
    echo "coucou";
    $resDate = $_POST['res_date'];
    $resHour = $_POST['res_heure'];
    
    $idClient = $_SESSION['obj_user']['id'];
    $idRestaurant = $_GET['id'];

    $book1 = new Booking;

    $book1->setDateBooking($resDate);
    $book1->setHourBooking($resHour);
    $book1->setClient($idClient);
    $book1->setRestaurant($idRestaurant);
    

    $book1->addBooking($dsn, $user, $pw);
    

}else{
    echo "je suis en else";
}

?>