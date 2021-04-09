<?php

include('../config/conexao.php');

if($_SESSION['login'] != true){
    header('Location: ../../index.php');
    exit();        
}

?>
