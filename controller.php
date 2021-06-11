<?php 
require_once "Resto.php";
require_once "DAO.php";

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $address = $_POST['address'];
    $type = $_POST['type'];
    $description = $_POST['description'];

    if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
        // echo "c'est bon";

        $target_dir = './uploads/';
    
   
        $informationsImage = pathinfo($_FILES['picture']['name']);
    
        $extensionImage = strtolower($informationsImage['extension']);
        
        $target_file = $target_dir .  $lastname . "." .$extensionImage;
        // echo $target_file;
        

        if (move_uploaded_file($_FILES['picture']['tmp_name'], $target_file)) {
            // echo "The file ". basename( $_FILES["picture"]["name"]). " has been uploaded.";
            $resto = new Resto();

            $resto->setName($name);
            $resto->setAddress($address);
            $resto->setType($type);
            $resto->setDescription($description);
            $resto->setPicture($target_file );

            // echo $user1->getFirstName();

            $resto->envoisDonnees($dsn, $user, $password);
            header("Location: listResto.php");

        } else {

            echo "Sorry, there was an error uploading your file.";
        }

        
    }

}