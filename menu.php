<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

        <!-- Custom Css -->
        <link rel="stylesheet" href="estilos.css" type="text/css" />

        <!-- Ionic icons -->
        <link href="https://unpkg.com/ionicons@4.2.0/dist/css/ionicons.min.css" rel="stylesheet">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

        <link rel="shortcut icon" href="img/hotel.png" type="image/vnd.microsoft.icon" />

        <title>Hoteles.net</title>
    </head>

    <body>
        
        <!-- inicio NavBar -->
        <nav class="navbar navbar-default navbar-expand-lg fixed-top custom-navbar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon ion-md-menu"></span>
            </button>
            <img src="img/logo.jpg" class="img-fluid nav-logo-mobile" alt="Company Logo">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="container">
                    <img src="/img/logo.jpg.jpeg" class="img-fluid nav-logo-desktop" alt="Company Logo">
                    <ul class="navbar-nav ml-auto nav-right" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
                        <li class="nav-item nav-custom-link">
                            <a class="nav-link" href="menu.php">Inicio <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
                        </li>
                        <li class="nav-item nav-custom-link">
                            <a class="nav-link" href="controlador/controlador_pan.php?opcion=1">Restaurantes <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
                        </li>
                        <li class="nav-item nav-custom-link">
                            <a class="nav-link" href="controlador/controlador_pedido.php?opcion=1">Reserva <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
                        </li>
                        <li class="nav-item nav-custom-link">
                            <a class="nav-link" href="controlador/controlador_recojo.php?opcion=1">Viaje <i class="icon ion-ios-arrow-forward icon-mobile"e</i></a>
                        </li>
                        <li class="nav-item nav-custom-link">
                            <a class="nav-link" href="controlador/controlador_cliente.php?opcion=1">Clientes <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
                        </li>
                        <li class="nav-item nav-custom-link">
                            <a class="nav-link" href="controlador/controlador_seguridad.php?opcion=2">Usuarios <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
                        </li>
                        <li class="nav-item nav-custom-link">
                            <a class="nav-link" href="controlador/controlador_foto.php?opcion=1">Hotel <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
                        </li>
                        <li class="nav-item nav-custom-link btn btn-demo-small">
                            <a class="nav-link" href="Panaderia.html">Logout<i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- fin NavBar -->

        <!-- inicio Marketing -->
        <section id="marketing">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="content-box">
                            <span>INTRANET</span>
                            <h2 style="color: #5F4C0B">CENTRO DE DATOS</h2>
                            <p>Reserva de hoteles</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="img/cesta_pan.jpg" class="img-fluid" alt="Demo image">
                    </div>
                </div>
            </div>
        </section>
        <!-- fin Marketing -->

                <!-- inicio footer -->
                <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Hoteles.net</h5>
                        <ul>
                            <li><a href="#">Historia</a></li>
                            <li><a href="#">Participación comunitaria</a></li>
                            <li><a href="#">Innovaciones</a></li>
                            <li><a href="#">Mejoras</a></li>
                            <li><a href="#">ambiente laboral</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Nuestros beneficios</h5>
                        <ul>
                            <li><a href="#">Descuentos</a></li>
                            <li><a href="#">Plan de viajes</a></li>
                            <li><a href="#">Suscripciones</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Descuentos</h5>
                        <p>Los clientes registrados tendrán un descuento según las veces que hagan reservaciones</p>
                        <p><a href="mailto:vd180401@gmail.com" class="external-links">vd180401@gmail.com</a></p>
                    </div>
                </div> 
                <div class="divider"></div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <a href="#"><i class="icon ion-logo-facebook"></i></a>
                            <a href="#"><i class="icon ion-logo-instagram"></i></a>
                            <a href="#"><i class="icon ion-logo-twitter"></i></a>
                            <a href="#"><i class="icon ion-logo-youtube"></i></a>
                        </div>
                        <div class="col-md-6 col-xs-12">
                        <small>2024 &copy; Todos los derechos reservados - Grupo Ingeniería en Sistemas Computacionales</small>
                    </div>
                </div>
            </div>
        </footer>
        <!-- fin footer -->

        <!-- External JavaScripts -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>