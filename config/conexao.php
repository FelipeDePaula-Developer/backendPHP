<?php

session_start();
const HOST = 'LOCALHOST';
const USUARIO = 'root';
const SENHA = '9581@mysqlFRVS';
const DBNAME = 'backendPHP';

try{
    $pdo = new PDO('mysql:host='.HOST.'; dbname='.DBNAME.'', USUARIO, SENHA);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Mostrar Erros
}catch (Exception $e){
    // Define a variavel $e com Exception
    echo 'Erro ao conectar ao banco de dados';
    echo $e;
}
?>