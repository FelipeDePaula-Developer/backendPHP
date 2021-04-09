<?php
include '../config/conexao.php';
include '../config/middleware/checar_logado.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                class="tab">Entrar</label>
            <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Esqueceu a
                Senha?</label>

            <div class="login-form">
                <form action="../config/sys_login.php" method="post">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input name="usuario" id="user" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Senha</label>
                            <input name="senha" id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                        <?php 
                        if (isset($_SESSION['não_autenticado'])): 
                        ?>
                        <div><p>Usuário ou senha inválidos</p></div>
                        <?php
                        endif;
                        unset($_SESSION['não_autenticado']);
                        ?>
                        <input type="submit" class="button" value="Sign In">
                        </div>
                        <div class="hr"></div>
                    </div>
                </form>

                <div class="for-pwd-htm">
                    <div class="group">
                        <label for="user" class="label">Email</label>
                        <input id="user" type="text" class="input">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Reset Password">
                    </div>
                    <div class="hr"></div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>