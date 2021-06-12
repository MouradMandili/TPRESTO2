<?php

    if(isset($_GET["deconne"])){
        
        session_start();
        session_destroy();
        header("Location: index.php");
        exit;
    }

?>