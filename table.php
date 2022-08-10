<html lang="es">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Informacion de Pagos</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/user.css" rel="stylesheet" />
    <link id="conexion-file" href="conexion.php" rel="import" /> 
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/gra-4.jpg">
    <!--
        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag
    -->
    	<div class="sidebar-wrapper">
            <div class="logo" style="background-color: #ffffff;">
                <a> <img src="assets/img/tiza.png">
                </a>
            </div>
            <ul class="nav">
                <li>
                    <a href="index.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Inicio</p>
                    </a>
                </li>
               <li>
                    <a href="dashboard.html">
                        <i class="pe-7s-graph1"></i>
                        <p>Estadisticas</p>
                    </a>
                </li>
                <li>
                    <a href="admin.html">
                        <i class="pe-7s-user"></i>
                        <p>Perfil</p>
                    </a>
                </li>

                <li class="active">
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Informacion Pagos</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Tabla de Negocios</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 <i class="pe-7s-note2"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                         <a href="login.html">
                               <p>Cerrar Sesion</p>
                            </a>
                        </li>
                        <li>
                           <a>
                                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                                     <input type="search" class="form-control form-control-dark" placeholder="Busca tu Negocio Por ID">
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <h1>aqui va la tabla</h1>
                    <?php
                    include_once 'components/modules/conn/conect.php';
                        $q = "SELECT * FROM  [dbo].[infodatausers]";
                        $stmt = sqlsrv_query( $conn, $q );
                        if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
                    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
                      echo $row[0].", ".$row[1]."<br />";
                    }
                    sqlsrv_free_stmt( $stmt);
                ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>   
</html>
