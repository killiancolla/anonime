<?php

require('controller/frontend.php');

try 
{
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        if($action == "animeDetails") {
            if(isset($_GET['idAnime'])) {
                animeDetails();
            }
        }
    }
    else {
        home();
    }
}
catch(Exception $e) { 
    $errorMessage = $e->getMessage();
    echo $errorMessage;
}

