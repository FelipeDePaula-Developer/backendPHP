<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
    include('config/connection.php')
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/demo/demo.css" rel="stylesheet" />
    <link href="assets/icons/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                    <!-- <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div> -->
                    <!-- <p>CT</p> -->
                </a>
                <a href="https://www.creative-tim.com" class="simple-text logo-normal">
                    Logo
                    <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav" role='tablist'>
                    <li class='nav-item'>
                        <a class="nav-link" id="painel-user-tab" data-toggle="tab" href="#painel-user" role="tab"
                            aria-controls="painel-user" aria-selected="true">
                            <i class="bi bi-people-fill"></i>
                            <p>Painel de Usuarios</p>
                        </a>
                    </li>
                    <li class='nav-item'>
                        <a class="nav-link" id="segundo-tab" data-toggle="tab" href="#segundo" role="tab"
                            aria-controls="segundo" aria-selected="false">
                            <i class="nc-icon nc-diamond"></i>
                            <p>Segundo Item</p>
                        </a>
                    </li>
                    <li class='nav-item'>
                        <a class="nav-link" id="terceiro-tab" data-toggle="tab" href="#terceiro" role="tab"
                            aria-controls="terceiro" aria-selected="false">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Terceiro Item</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel" style="height: 100vh;">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Titulo</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Procurar...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="bi bi-bell-fill"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Algumas Ações</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Ação</a>
                                    <a class="dropdown-item" href="#">Outra Ação</a>
                                    <a class="dropdown-item" href="#">Alguma Coisa Aqui</a>
                                </div>
                            </li>
                            <?php if($_SESSION['login'] != true) :?>
                            <li class="nav-item">
                                <a class="nav-link" href="views/login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="views/register.php">Cadastrar</a>
                            </li>
                            <?php else :?>
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="bi bi-person-circle"></i>
                                    Olá <?php echo $_SESSION['nome'] ?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="config/sys_logout.php">Logout</a>
                                </div>
                            </li>
                        </ul>
                        <?php endif ?>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-md-12 tab-content">
                        <div class="tab-pane" id="painel-user" role="tabpanel" aria-labelledby="painel-user-tab">

                            <a href='config/consult_user.php'>Consulta</a>
                            <table class='table'>
                                <thead>
                                    <tr>
                                        <th scope='col'>Nome</th>
                                        <th scope='col'>Usuário</th>
                                        <th scope='col'>Cargo</th>
                                    </tr>
                                </thead>
                                <?php 
                                $info = $_SESSION['usuarios'];
                                for($i =0; $i < count($info); $i++):?>
                                <tr>
                                    <td><?php echo $info[$i]['nome'] ?></td>
                                    <td><?php echo $info[$i]['usuario'] ?></td>
                                    <td><?php echo ucfirst($info[$i]['cargo']) ?></td>
                                    <td>
                                        <a class='exc-link' href="#">
                                            <i class="bi bi-person-dash-fill"></i>
                                            Excluir
                                        </a>
                                    </td>
                                </tr>
                                <?php endfor;
                                unset($_SESSION['usuarios']);
                                ?>
                            </table>

                        </div>
                        <div class="tab-pane" id="segundo" role="tabpanel" aria-labelledby="segundo-tab">2</div>
                        <div class="tab-pane" id="terceiro" role="tabpanel" aria-labelledby="terceiro-tab">3</div>
                    </div>
                </div>
            </div>
            <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
                <div class="container-fluid">
                    <div class="row">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
                            </ul>
                        </nav>
                        <div class="credits ml-auto">
                            <span class="copyright">
                                © 2020, made with <i class="fa fa-heart heart"></i> by Creative Tim
                            </span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="./assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>

</html>