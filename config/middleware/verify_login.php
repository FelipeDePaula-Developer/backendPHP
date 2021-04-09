<?php

include('../config/connection.php');

if($_SESSION['login'] != true){
    header('Location: ../../index.php');
    exit();        
}

?>
