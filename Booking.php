<?php

class Booking{

    private $_idBooking;
    private $_dateBooking;
    private $_hourBooking;


    public function getIdBooking(){
        return $this->_idBooking;
    }

    public function setIdBooking($idBooking){
        $this->_idBooking = $_idBooking;
    }

    public function getDateBooking(){
        return $this->booking_date;
    }

    public function setDateBooking($dateBooking){
        $this->_booking_date = $_booking_date;
    }

    public function getHourBooking(){
        return $this->$booking_hour;
    }
    
    public function setHourBooking($hourBooking){
        $this->_booking_hour = $_hourBooking;
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


    //reserver un resto
    public function addBooking($dsn, $user, $pw){
        
        // se connecte
        try{
            $dbh = new PDO($dsn, $user, $pw);
           
        }
        catch(PDOException $e){
            $e->getMessage();

        }
        //la requete 
        $requete = "INSERT INTO Booking (date_res, heure_res, id_client, id_resto) VALUES (:date_res, :heure_res, :id_client, :id_resto);";
        //on prepare la requete 
        $maRequet = $db->prepare($requete);
        //relie les variable avec les element en attente pour la requete
        $maRequet->bindParam(':date_res', $this->getBooking_date());
        $maRequet->bindParam(':heure_res', $this->getBooking_hour());
        $maRequet->bindParam(':id_client', $this->client->id_client);
        $maRequet->bindParam(':id_resto', $this->resto->id_resto);
        //excute la requete
        $maRequet->execute();
        DAO::disconnect;
    }


}

?>