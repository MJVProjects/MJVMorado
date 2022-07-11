<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MJV</title>
    <link rel="icon" type="image/x-icon" href="assets/img/log-mjv.png" />
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/beb51ce232.js" crossorigin="anonymous"></script>
    <!-- Boostrap V-5.2 -->
    <link href="./libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    
    <!-- stylos propios -->

    <link rel="stylesheet" href="./css/styles.css">

    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MJV</title>
        <link rel="icon" type="image/x-icon" href="assets/img/log-mjv.png" />
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="./css/styles.css" rel="stylesheet" />
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
         <!-- stylos propios -->
        
        <!-- <link rel="stylesheet" href="./css/Print_Styles.css"> -->
        <!-- Boostrap V-5.2 -->
        <link href="./libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/beb51ce232.js" crossorigin="anonymous"></script>


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
                    <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
                        <div class="widget clearfix">
                            <div class="widget-title mb-4">
                                <img src="assets/img/logo_mjv.png" alt="" style="max-width:200px;"/>
                            </div>
                            <p style="text-align: justify;color: white;">Somos una empresa  que brinda servicios 
                                de marketing digital a precios accesibles. Apoyamos 
                                al emprendedor y a los empresarios a conseguir sus objetivos.</p>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-xs-center">
                        <div class="widget clearfix" style="margin-left: 5rem;">
                            <div class="widget-title" style="position: relative;display: block;margin-bottom:30px;margin-left: 2rem;">
                                <h3 style="color: #fff;">Índice</h3>
                            </div>
                            <ul class="footer-links hov" style="list-style: none;text-align: justify;font-size: large;">

                                <li><i class="fas fa-angle-double-right" style="color: white"></i> <a style="color: white;text-decoration:none;" href="index.php">Inicio</a></li>                              
                                <li><i class="fas fa-angle-double-right" style="color: white"></i> <a style="color: white;text-decoration:none;" href="nosotros.php">Nosotros</a></li>                              
                                <li><i class="fas fa-angle-double-right" style="color: white"></i> <a style="color: white;text-decoration:none;" href="servicios.php">Servicios</a></li>                              
                                <li><i class="fas fa-angle-double-right" style="color: white"></i> <a style="color: white;text-decoration:none;" href="contact.php">Contacto</a></li>                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-6 col-xs-12 text-md-center text-xs-center">
                        <div class="footer-distributed widget clearfix">
                            <div class="widget-title" style="position: relative;display: block;margin-bottom:30px;margin-left:2rem;">
                                <h3 style="color: #fff;">Ponte en contacto:</h3>
                            </div>
                            <ul class="footer-links hov" style="list-style: none;text-align: justify;font-size: large;">

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
                    <div class="col-12 col-sm-12 col-lg-4 text-lg-start text-sm-center text-center" style="color:#fff;">Todos los derechos reservados</div>
                    <div class="col-12 col-sm-12 col-lg-4 my-3 my-lg-0 text-sm-center text-center">
                            <a class="btn btn-light btn-social mx-2" href=""><i class="fab fa-youtube" style="color: #533268;"></i></a>
                        <a class="btn btn-light btn-social mx-2" href=""><i class="fab fa-facebook-f" style="color: #533268;"></i></a>
                        <a class="btn btn-light btn-social mx-2" href=""><i class="fab fa-linkedin-in" style="color: #533268;"></i></a>
                   
                    </div>
                    <div class="col-12 col-sm-12 col-lg-4 text-lg-end text-sm-center text-center">
                        <a class="text-decoration-none me-3" style="color:#fff;">Copyright &copy; MJV 2021</a>
                    </div>
                </div>
            </div>
        </footer>

    
    
   
</body>
<!-- Boostrap V 5.2 -->
<script src="../MJVMorado/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../MJVMorado/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="../MJVMorado/libs/bootstrap/js/popper.min.js"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.1/firebase.js"></script>
<script src="js/ContactFrom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>


<!-- nuevos -->

<script src="https://smtpjs.com/v3/smtp.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.9.1/firebase.js"></script>
        <script src="js/ContactFrom.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
</html>
