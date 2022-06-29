<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MJV</title>
        <link rel="icon" type="image/x-icon" href="assets/img/log-mjv.png" />
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
         <!-- stylos propios -->
        <link rel="stylesheet" href="./css/Print_Styles.css">
    </head>
    <body id="top">

        <!-- <div class="top-bar d-one d-md-block" style="background:#693691;padding-top:8px;">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="top-bar-left">
                    <div class="text">
                      <i class="fas fa-phone-square" style="margin: 0 5px;"></i>
                      <a href="tel:+017457089" style="color: white;" >
                          (01) 745 7089
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div> -->
      
        <!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="assets/img/log-mjv.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.html"><b>Inicio</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="index.html"><b>Nosotros</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="services.html"><b>Servicios</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="#top"><b>Contacto</b></a></li>
                    </ul>
                </div>
            </div>
        </nav>   -->

        <!-- <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"  style="color: #89d316;">Contacto</h2>
                    <p style="color: white; font-style: italic;">Escríbenos y agenda una cita con nosotros y nos pondremos
                        en contacto tan pronto como sea posible</p>
                </div>
            </div>
        </section> -->
        <?php
        include_once '../MJVMorado/vistas/header.php';
        ?>
        <section class="page-section" id="about" style="background: #653B7B; color:white;">
            <div class="container">
                <form id="Formulario">
                    <div class="row align-items-stretch mb-3">
                        <div class="info-contact col-md-6">
                            <h6 style="font-size: xxx-large;">¡Escríbenos ahora!</h6><br>
                            <p><i class="fas fa-envelope" style="font-size: 30px;"></i><a href="mailto:marketing@mjv.com.pe" style="color: white; font-size: 15px;padding-left: 10px;">marketing@mjv.com.pe </a></p>
                            <p><i class="far fa-envelope" style="font-size: 30px;"></i><a href="mailto:recursos.humanos@mjv.com.pe" style="color: white; font-size: 15px;padding-left: 10px;">recursos.humanos@mjv.com.pe</a></p>
                            <p><b>Llámanos al: </b></p>
                            <p><i class="fas fa-phone-square" style="font-size: 30px;"></i><a href="tel:+017457089" style="color: white;font-size: 15px;padding-left: 10px;">(01) 745 7089</a></p>                              
                           
                        </div>
                        <div class="col-md-6">
                            <h6 style="font-size: xxx-large;">¡Contáctanos hoy!</h6>
                            <p style="font-size: 13px;">Cuéntanos sobre tu negocio y los requerimientos que tengas y uno de nuestros
                                consultores se pondrá en contacto contigo para atender tu solicitud.</p>
                            <div class="form-group">
                                <input class="form-control" id="nombre" type="text" placeholder="Nombre Completo" required/>
                            </div>
                            <div class="form-group" style="padding-top: 10px;">
                                <input class="form-control" id="empresa" type="text" placeholder="Empresa"  required/>
                            </div>
                            <div class="form-group" style="padding-top: 10px;">
                                <input class="form-control" id="telefono" type="text" placeholder="Número de Celular" maxlength="9" required/>
                            </div>
                            <div class="form-group" style="padding-top: 10px;">
                                <input class="form-control" id="email" type="email" placeholder="Dirección de correo"  required/>
                            </div><br>
                            <p>¿De qué lugar nos escribes?</p>
                            <div class="form-group" style="padding-top: 5px;">
                                <input class="form-control" id="ciudad" type="text" placeholder="Ejm. Lima" required/>
                            </div>
                            <div class="form-group" style="padding-top: 10px;">
                                <textarea class="form-control" id="detalles" rows="3" placeholder="Déjanos un mensaje sobre tu requerimiento o consulta" required ></textarea>
                            </div>
                            <p>¿Por qué medio preferirías que te contactemos?</p>
                            <div style="display: flex;">
                                <div class="form-check form-check">
                                   <input class="form-check-input" type="checkbox" id="whatsapp" >
                                   <label >Whatssapp</label>
                                </div>
                                <div class="form-check form-check"> 
                                    <input class="form-check-input" type="checkbox" id="correo" checked required>
                                    <label >Correo</label>
                                </div>
                                <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="llamada" >
                                    <label >Llamada</label>
                                </div>
                                    
                            </div>   
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit" id="save">Enviar</button>
                   </div>
                </form>
            </div>
        </section>


        <footer class="footer py-4" style="background-color:#653B7B;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <img src="assets/img/logo_mjv.png" alt="" style="max-width:200px;"/>
                            </div>
                            <p style="text-align: justify;color: white;">Somos una empresa  que brinda servicios 
                                de marketing digital y de reclutamiento de personal a precios accesibles, apoyamos 
                                al emprendedor y empresarios a conseguir sus objetivos.</p>
                        </div>
                    </div>
    
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="widget clearfix">
                            <div class="widget-title" style="position: relative;display: block;margin-bottom:30px;">
                                <h3 style="color: #fff;">Índice</h3>
                            </div>
                            <ul class="footer-links hov" style="list-style: none;text-align: justify;font-size: large;">

                                <li><i class="fas fa-angle-double-right" style="color: white"></i> <a style="color: white;" href="index.html">Inicio</a></li>                              
                                <li><i class="fas fa-angle-double-right" style="color: white"></i> <a style="color: white;" href="index.html">Nosotros</a></li>                              
                                <li><i class="fas fa-angle-double-right" style="color: white"></i> <a style="color: white;" href="services.html">Servicios</a></li>                              
                                <li><i class="fas fa-angle-double-right" style="color: white"></i> <a style="color: white;" href="contact.html">Contacto</a></li>                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-distributed widget clearfix">
                            <div class="widget-title" style="position: relative;display: block;margin-bottom:30px;">
                                <h3 style="color: #fff;">Ponte en contacto:</h3>
                            </div>
                            <ul class="footer-links hov" style="list-style: none;text-align: justify;font-size: large;">

                                <li><i class="fas fa-envelope" style="color: white"></i> <a style="color: white;" href="mailto:recursos.humanos@mjv.com.pee" >recursos.humanos@mjv.com.pe</a></li><br>      
                                <li><i class="fas fa-envelope" style="color: white"></i> <a style="color: white;" href="mailto:marketing@mjv.com.pe" target="">marketing@mjv.com.pe</a></li><br>            

                                <li><i class="fas fa-phone-square" style="color: white"></i> <a style="color: white;" href="tel:+017457089">(01) 745 - 7089</a></li>      
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
                        <a class="link-dark text-decoration-none me-3" style="color:#fff;">Copyright &copy; MJV 2021</a>
                    </div>
                </div>
            </div>
        </footer>

        
    </body>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.9.1/firebase.js"></script>
        <script src="js/ContactFrom.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
</html>