<?php 
require_once "Resto.php";
require_once "DAO.php";

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $address = $_POST['address'];
    // $picture = $_POST['picture2'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    
    if (isset($_FILES['picture2']) && $_FILES['picture2']['error'] == 0) {
        echo "c'est bon";

        $target_dir = './uploads/';
    
   
        $informationsImage = pathinfo($_FILES['picture2']['name']);
    
        $extensionImage = strtolower($informationsImage['extension']);
        
        $target_file = $target_dir .  $name . "." .$extensionImage;
        echo $target_file;
        

        if (move_uploaded_file($_FILES['picture2']['tmp_name'], $target_file)) {
            echo "The file ". basename( $_FILES["picture2"]["name"]). " has been uploaded.";
            $resto = new Resto();

            $resto->setName($name);
            $resto->setAddress($address);
            $resto->setType($type);
            $resto->setDescription($description);
            $resto->setPicture($target_file );

            echo $resto->getName();

            $resto->envoisDonnees($dsn, $user, $password);
            header("Location: listResto.php");

        } else {

            echo "Sorry, there was an error uploading your file.";
        }

        
    }

}