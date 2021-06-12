<?php

class Booking{

    private $_idBooking;
    private $_dateBooking;
    private $_hourBooking;
    private $_client;
    private $_restaurant;


    public function getIdBooking(){
        return $this->_idBooking;
    }

    public function setIdBooking($idBooking){
        $this->_idBooking = $idBooking;
    }

    public function getDateBooking(){
        return $this->_dateBooking;
    }

    public function setDateBooking($dateBooking){
        $this->__dateBooking = $dateBooking;
    }

    public function getHourBooking(){
        return $this->_hourBooking;
    }
    
    public function setHourBooking($hourBooking){
        $this->__hourBooking = $hourBooking;
    }

    public function getClient(){
        return $this->_client;
    }

    public function setClient($client){
        $this->_client = $client;
    }

    public function getRestaurant(){
        return $this->_restaurant;
    }

    public function setRestaurant($restaurant){
        $this->_restaurant = $restaurant;
    }

    

    //reserver un resto
    public function addBooking($dsn, $user, $pw){
        echo "av try";
        // se connecte
        try{
            $dbh = new PDO($dsn, $user, $pw);
           
        }
        catch(PDOException $e){
            $e->getMessage();
        }
        
        //la requete 
        $requete = "INSERT INTO Reservation (dateBooking, hourBooking, id_client, id_resto) VALUES (:dateBooking, :hourBooking, :id_client, :id_resto);";
        //on prepare la requete 
        $maRequet = $db->prepare($requete);
        //relie les variable avec les element en attente pour la requete
        $maRequet->bindParam(':dateBooking', $this->getdateBooking());
        $maRequet->bindParam(':hourBooking', $this->gethourBooking());
        $maRequet->bindParam(':id_client', $this->getClient());
        $maRequet->bindParam(':id_resto', $this->getRestaurant());
        //excute la requete
        $maRequet->execute();
        header("Location: profil.php");

    }

    // retourne le nombre de reservation par client
    public function countBooking($dsn, $user, $pw){
        
        // se connecte
        try{
            $dbh = new PDO($dsn, $user, $pw);
           
        }
        catch(PDOException $e){
            $e->getMessage();

        }

        $req = $bdd->query("SELECT  COUNT($client) as Nbrbook FROM Booking" );
        $donnees = $req->fetch();
        $req->closeCursor();
        $total= $donnees['Nbrbook'];

        return $total;
    }


}

?>