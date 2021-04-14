<?php

include('connection.php');

$result = $pdo->query('SELECT nome, usuario, cargo FROM usuarios'); 
$info = $result -> fetchAll(PDO::FETCH_ASSOC);
$_SESSION['usuarios'] = $info;
header('Location: ../index.php')

?>