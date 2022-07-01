<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MJV</title>
    <link rel="icon" type="image/x-icon" href="assets/img/log-mjv.png" />
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/beb51ce232.js" crossorigin="anonymous"></script>
    <!-- Boostrap V-5.2 -->
    <link href="./libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- stylos propios -->
    <link rel="stylesheet" href="./css/Print_Styles.css">
    <!-- <link rel="stylesheet" href="./css/carousel.css">
    <link rel="stylesheet" href="./css/carousel.rtl.css"> -->
    <!-- <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/nosotros.css"> -->


</head>
<body style="background: #653B7B;">
    <?php
        include_once '../MJVMorado/vistas/header.php';
        include_once '../MJVMorado/vistas/carrucel.php';
        include_once '../MJVMorado/vistas/Nosotros.php';
         include_once '../MJVMorado/services.php';
        // include_once '../MJVMorado/vistas/footer.php';
    ?>
<br>
<!-- footer     -->
<footer class="footer py-4" style="background-color:#653B7B;">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <img src="assets/img/logo_mjv.png" alt="" style="max-width:200px;"/>
                            </div>
                            <p style="text-align: justify;color: white;">Somos una empresa  que brinda servicios 
                                de marketing digital y de reclutamiento de personal a precios accesibles, apoyamos 
                                al emprendedor y empresarios a conseguir sus objetivos.</p>
                        </div>
                    </div>
    
                    <div class="col-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="widget clearfix" style="margin-left: 5rem;">
                            <div class="widget-title" style="position: relative;display: block;margin-bottom:30px;margin-left: 2rem;">
                                <h3 style="color: #fff;">Índice</h3>
                            </div>
                            <ul class="footer-links hov" style="list-style: none;text-align: justify;font-size: large;">

                                <li><i class="fas fa-angle-double-right" style="color: white"></i> <a style="color: white;text-decoration:none;" href="index.html">Inicio</a></li>                              
                                <li><i class="fas fa-angle-double-right" style="color: white"></i> <a style="color: white;text-decoration:none;" href="index.html">Nosotros</a></li>                              
                                <li><i class="fas fa-angle-double-right" style="color: white"></i> <a style="color: white;text-decoration:none;" href="services.html">Servicios</a></li>                              
                                <li><i class="fas fa-angle-double-right" style="color: white"></i> <a style="color: white;text-decoration:none;" href="contact.html">Contacto</a></li>                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-distributed widget clearfix">
                            <div class="widget-title" style="position: relative;display: block;margin-bottom:30px;margin-left:2rem;">
                                <h3 style="color: #fff;">Ponte en contacto:</h3>
                            </div>
                            <ul class="footer-links hov" style="list-style: none;text-align: justify;font-size: large;">

                                <li><i class="fas fa-envelope" style="color: white"></i> <a style="color: white;text-decoration:none;" href="mailto:recursos.humanos@mjv.com.pee" >recursos.humanos@mjv.com.pe</a></li><br>      
                                <li><i class="fas fa-envelope" style="color: white"></i> <a style="color: white;text-decoration:none;" href="mailto:marketing@mjv.com.pe" target="">marketing@mjv.com.pe</a></li><br>            

                                <li><i class="fas fa-phone-square" style="color: white"></i> <a style="color: white;text-decoration:none;" href="tel:+017457089">(01) 745 - 7089</a></li>      
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <footer class="footer py-4" style="background: #533268;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start" style="color:#fff;">Todos los derechos reservados</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="text-decoration-none me-3" style="color:#fff;">Copyright &copy; MJV 2021</a>
                    </div>
                </div>
            </div>
        </footer>

    <!-- Boostrap V 5.2 -->
    <script src="../MJVMorado/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../MJVMorado/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="../MJVMorado/libs/bootstrap/js/popper.min.js"></script>
    
   
</body>
</html>
