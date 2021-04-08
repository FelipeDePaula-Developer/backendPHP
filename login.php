<?php

include('conexao.php');

if(isset($_POST['usuario'], $_POST['senha'])){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if(empty($_POST['usuario']) || empty($_POST['senha'])){
        header('Location: index.php');
    }else{
        $query = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = ?");
        $query->execute([$usuario]);
        $num = $query->rowCount();

        if($num == 1){
            $info = $query->fetch();
            if($senha == $info[senha]){
                $_SESSION['login'] = true;
                $_SESSION['id'] = $info['userid'];
                $_SESSION['usuario'] = $info['usuario'];
                header('Location: painel_admin.php');
                die();
            }else{
                echo '<div><p>Usuário ou senha incorretos!</p></div>';
            }
        }else{
            echo '<div><p>Usuário ou senha incorretos!</p></div>';
        }
    }
}


?>

