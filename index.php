<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="/creditx/assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Creditx | Inicio</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="/creditx/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="/creditx/assets/css/animate.min.css" rel="stylesheet" />
    <!--  Light Bootstrap Table core CSS    -->
    <link href="/creditx/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="/creditx/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>

<?php
    include_once 'servicio/session.php';
    // Inicio de sesión
    $session = $_SESSION['status'];
    // Verificar
    if ($session) {
        // Hay sesión
    } else {
        print("<h2>Inicie sesión</h2>");
        print("
            <form action='/creditx/servicio/login.php' method='POST' style='max-width: 200px;'>
                <div class='form-group'>
                    <input name='user' type='text' class='form-control' placeholder='Usuario'>
                </div>
                <div class='form-group'>
                    <input name='pass' type='password' class='form-control' placeholder='Contraseña'>
                </div>
                <button type='submit' class='btn btn-primary'>Entrar</button>
            </form>
        ");
        exit;
    }
?>

<body>
    <div class="wrapper">
        <!-- Panel de navegación -->
        <div class="sidebar" data-color="green" data-image="/creditx/assets/img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="/creditx/" class="simple-text">
                        Creditx
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a href="/creditx/carreras">
                            <i class="pe-7s-info"></i>
                            <p>Carreras</p>
                        </a>
                    </li>
                    <li>
                        <a href="/creditx/generaciones">
                            <i class="pe-7s-info"></i>
                            <p>Generaciones</p>
                        </a>
                    </li>
                    <li>
                        <a href="/creditx/grupos">
                            <i class="pe-7s-users"></i>
                            <p>Grupos</p>
                        </a>
                    </li>
                    <li>
                        <a href="/creditx/alumnos">
                            <i class="pe-7s-user"></i>
                            <p>Alumnos</p>
                        </a>
                    </li>
                    <li>
                        <a href="/creditx/actividades">
                            <i class="pe-7s-note2"></i>
                            <p>Actividades</p>
                        </a>
                    </li>
                    <li>
                        <a href="/creditx/creditos">
                            <i class="pe-7s-server"></i>
                            <p>Creditos</p>
                        </a>
                    </li>
                    <li>
                        <a href="/creditx/tarjetas">
                            <i class="pe-7s-credit"></i>
                            <p>Tarjetas</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Contenido -->
        <div class="main-panel">
            <!-- Barra de Título -->
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand">Página de Inicio</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="/creditx/servicio/logout.php">
                                    <p>Cerrar sesión</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Contenido-->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Email Statistics</h4>
                                    <p class="category">Last Campaign Performance</p>
                                </div>
                                <div class="content">
                                    <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                                    <div class="footer">
                                        <div class="legend">
                                            <i class="fa fa-circle text-info"></i> Open
                                            <i class="fa fa-circle text-danger"></i> Bounce
                                            <i class="fa fa-circle text-warning"></i> Unsubscribe
                                        </div>
                                        <hr>
                                        <div class="stats">
                                            <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!--   Core JS Files   -->
<script src="/creditx/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="/creditx/assets/js/bootstrap.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="/creditx/assets/js/chartist.min.js"></script>
<!--  Notifications Plugin    -->
 <script src="/creditx/assets/js/bootstrap-notify.js"></script>
<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="/creditx/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="/creditx/assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        demo.initChartist();
    });
</script>

</html>