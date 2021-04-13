<?php

include('connection.php');

if(isset($_POST['nome'], $_POST['usuario'], $_POST['senha'], $_POST['cargo'])){
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);
    $cargo = $_POST['cargo'];
    $dados_cadastrais = [$nome, $usuario, $senha, $cargo];

    if(empty($_POST['nome']) || empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['cargo'])){
        $_SESSION['não_cadastrado'] = true;
        header('Location: ../views/register.php');
    }else{
        $query = $pdo -> prepare('SELECT usuario FROM usuarios WHERE usuario = ?');
        $query->execute([$usuario]);
        $num = $query -> rowCount();

        if($num >= 1){
            $_SESSION['user_nao_cadastrado'] = true;
            header('Location: ../views/register.php');
            die();
        }else{

        $query = $pdo->prepare('INSERT INTO usuarios(nome, usuario, senha, cargo) VALUES (?, ?, ?, ?)');
        $query->execute($dados_cadastrais);
        $_SESSION['login'] = true;
        $_SESSION['nome'] = $nome;
        header('Location: ../../index.php');
        die();
    }
    }

}

?>