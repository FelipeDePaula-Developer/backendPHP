<?php

include('connection.php');

if(@$_GET['func'] == 'deleta'){
    $result = $pdo->prepare('SELECT * FROM usuarios WHERE userid = ?');
    $result -> execute([@$_GET['id']]);
    $info = $result -> fetch(PDO::FETCH_ASSOC);
    
    $delete = $pdo->prepare('DELETE FROM usuarios WHERE userid = ?');
    $delete -> execute([$info['userid']]);

    header('Location: ../index.php');
}

?>