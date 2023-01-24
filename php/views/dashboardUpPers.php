<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú | SCAVNICOBATAB2</title>
    <!-- CSS only -->
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../librerias/datatable/dataTables.bootstrap4.min.css">
    <!-- Linea Modificada -->
    <link rel="stylesheet" type="text/css" href="../../css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="../../css/formStyles.css">
        <link rel="stylesheet" type="text/css" href="../../css/textDash.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <div class="col-11 barra">
            <!-- Linea Modificada -->
                <a href="../../index.php"><img src="../../images/app-logo.png" alt="" height="70" width="190"></a>
            </div>
            <div class="col-1 text-right barra">
                <ul class="navbar-nav mr-auto">
                    <li>
                    <a href="#" class="px-3 text-light perfil dropdown-toogle" id="navbar-Dropdown" role="button" data-toogle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown">
                    <i class="fas fa-user-circle fa-2x"></i>
                    </a> 
                    <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                    <!-- Linea Modificada -->
                        <a class="dropdown-item menuperfil cerrar" href="perfil.php">
                            <i class="fas fa-address-card m-1"></i>Perfil
                        </a>
                        <a class="dropdown-item menuperfil cerrar" href="../controller/logout.php">
                            <i class="fas fa-sign-out-alt m-1"></i>Salir
                        </a>
                    </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
    <div class="row">
        <div class="barra-lateral col-12 col-sm-auto">
            <nav class="menu d.flex d-sm-block justify-content-center flex-wrap">
                <ul class="navbar-nav mr-auto">
                    <li>
                    <a href="#" class="px-3 text-light perfil dropdown-toogle" id="navbar-Dropdown" role="button" data-toogle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown">
                    <i class="fas fa-comments m-1"></i>Notificaciones
                    </a> 
                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                        <a class="dropdown-item menuperfil cerrar" href="formRetirada.php">
                            <i class="fas fa-running m-1"></i>Retirada
                        </a>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="px-3 text-light perfil dropdown-toogle" id="navbar-Dropdown" role="button" data-toogle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown">
                            <i class="fas fa-file-alt m-1"></i>Registro
                        </a> 
                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                            <a class="dropdown-item menuperfil cerrar" href="formRVisitantes.php">
                                <i class="fas fa-user-tie m-1"></i>Visitantes
                            </a>
                            <a class="dropdown-item menuperfil cerrar" href="formEntrada.php">
                                <i class="fas fa-arrow-circle-right m-1"></i>Entrada
                            </a>
                            <a class="dropdown-item menuperfil cerrar" href="formSalida.php">
                                <i class="fas fa-arrow-circle-left m-1"></i>Salida
                            </a>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="px-3 text-light perfil dropdown-toogle" id="navbar-Dropdown" role="button" data-toogle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown">
                            <i class="fas fa-folder-open m-1"></i>Reportes
                        </a> 
                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                            <a class="dropdown-item menuperfil cerrar" href="formConducta.php">
                                <i class="fas fa-gavel m-1"></i>Conducta
                            </a>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="px-3 text-light perfil dropdown-toogle" id="navbar-Dropdown" role="button" data-toogle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown">
                            <i class="fas fa-user-clock m-1"></i>Historial
                        </a> 
                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                        <a class="dropdown-item menuperfil cerrar" href="formHistEstudiantes.php">
                                <i class="fas fa-address-book m-1"></i>Estudiantes
                            </a>
                            <a class="dropdown-item menuperfil cerrar" href="formHistVisitantes.php">
                                <i class="fas fa-user-plus m-1"></i>Visitantes
                            </a>
                        </div>
                    </li>
                </ul>
                
            </nav>
        </div>
        
        <main class="main col">