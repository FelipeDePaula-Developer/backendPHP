<?php
include('../config/connection.php');
include('../config/middleware/check_login.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Dashboard</title>
</head>

<body>

    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <a href='../index.php' class='card-header back-link'>
                            Voltar
                        </a>
                        <div class="card-body">
                            <form action="../config/sys_register.php" method="post">
                                <?php 
                                if (isset($_SESSION['user_nao_cadastrado'])): 
                                ?>
                                <div class="row">
                                    <div class="offset-md-4 col-md-6">
                                        <p>Usuário já cadastrado</p>
                                    </div>
                                </div>
                                <?php
                                endif;
                                unset($_SESSION['user_nao_cadastrado']);
                                ?>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" name="nome" required
                                            autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="username" class="col-md-4 col-form-label text-md-right">Usuario</label>
                                    <div class="col-md-6">
                                        <input type="text" id="username" class="form-control" name="usuario" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="senha" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="office" class="col-md-4 col-form-label text-md-right">Cargo</label>
                                    <div class="col-md-6">
                                        <input type="text" id="office" class="form-control" name="cargo" required>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



</body>

</html>