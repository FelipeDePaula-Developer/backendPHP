<?php

include('connection.php');

if(isset($_POST['usuario'], $_POST['senha'])){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if(empty($_POST['usuario']) || empty($_POST['senha'])){
        $_SESSION['não_autenticado'] = true;
        header('Location: ../views/login.php');
    }else{
        $query = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = ?");
        $query->execute([$usuario]);
        $num = $query->rowCount();

        if($num == 1){
            $info = $query->fetch();
            if(password_verify($senha, $info[senha]) ){
                $_SESSION['login'] = true;
                $_SESSION['nome'] = $info['nome'];
                header('Location: ../../index.php');
                die();
            }else{
                $_SESSION['não_autenticado'] = true;
                header('Location: ../views/login.php');
            }
        }else{
            $_SESSION['não_autenticado'] = true;
            header('Location: ../views/login.php');
        }
    }
}


?>

