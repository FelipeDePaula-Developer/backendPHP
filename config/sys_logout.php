<?php

    include("conexao.php");

    if(isset($_SESSION['login'])){
        session_destroy();
        header('Location: ../index.php');
        die(); 
    }
?>