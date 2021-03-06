<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>

        .sep{
            margin-top: 60px;
            margin-bottom: 60px;
        }

        .boton{

            width: auto;
            font-size: 30px; 
            font-family: Inter-Bold;
            background:#89D316 ;
            color: white;
            border-radius: 10px;
            padding: 10px 80px 10px 80px;
        }
        .boton:hover{
            background:#89D316 ;
            color: white;
        }

        .boton2{
            width: auto;
            font-size: 30px; 
            font-family: Inter-Bold ;
            background:#89D316 ;
            color: white;
            padding: 15px;
 
        }

        .boton2:hover{
            background:#89D316 ;
            color: white;
        }
        .btn{
            border-radius: 20px;
            margin-bottom: 30px;
        }
        .titu{
           display: block;
           justify-content: center;
           text-align: center;
           margin-top: 100px;
        }

        .cont{
            display: block;
            justify-content: center;
            text-align: justify;
            padding-left: 50px;
            padding-right: 50px;
            width: auto;
            font-size:20px;
            color: white;
            font-family: calibri;
            line-height: 25px;
        }

        .im2{
            margin-top: 40px;
            margin-bottom: 20px;
        }
        .im3{
            margin-top: 50px;
            margin-bottom: 20px;
        }

        .img-icon{
            justify-content: center;
            text-align: center;
            font-size: 50px;
        }

        
    @media (max-width: 600px) {
        .im3{
            margin-top: 20px;
            margin-bottom: 0px;
        }
        .im2{
            margin-top: 10px;
            margin-bottom: 20px;
        }
    
    }

    </style>
    
</head>
<body>

<!-- sobre nosotros -->

<div class="content mt-3 mb-5" id="about">
    <div class="row featurette">
          <div class="col-md-5">
            <!-- <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It???ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p> -->
            <div class="row titu">
                <a href="#" class="btn boton2"> Sobre Nosotros</a>
            </div>

            <div class="row mt-3">
            <p class="cont">Somos una empresa que brinda servicios de marketing digital a precios accesibles. Apoyamos al emprendedor y a los empresarios a conseguir sus objetivos.</p>
            </div>

            <div class="col-12 img-icon mt-3" style="color: white;">
                <a href="#" class="mb-0 me-3" style="color: white; font-size: 60px;"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="mb-0 me-3" style="color: white; font-size: 60px;"><i class="fa-brands fa-youtube"></i></a>
                <a href="#" class="mb-0 me-3" style="color: white; font-size: 60px;"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" class="mb-0 me-3" style="color: white; font-size: 60px;"><i class="fa-brands fa-instagram"></i></a>
            </div>

          </div>
          <div class="col-md-7">
        
            <div class="text-center">
                    <img src="assets/img/imagen03.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="500" alt="...">
            </div>
          </div>
    </div>
</div>
    
<!-- mision y vision -->
<div class="container">
    <div class="row sep">
        <div class="col-lg-4 text-center">
            <p><a class="btn boton"  href="#">Misi??n</a></p>
            <p class="cont">Somos una empresa que brinda servicios de marketing digital a precios accesibles. Apoyamos al emprendedor y empresarios a conseguir sus objetivos.</p>
            <div>
                <img src="assets/img/06.png" class="bd-placeholder-img" width="100" height="auto"  style="margin-bottom: 20px; margin-top: 10px;" alt="...">
            </div>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4 text-center">
            <p><a class="btn boton" href="#" >Visi??n</a></p>
            <p class="cont">Con nuestros precios accesibles, buscamos generar un impacto y ayudar a los emprendedores a conseguir sus objetivos.</p>
            <div>
                <img src="assets/img/05.png" class="bd-placeholder-img im2" width="auto" height="120" alt="...">
            </div>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4 text-center">
            <p><a class="btn boton" href="#" >Valores</a></p>
            <p class="cont">
                <i class="fa-solid fa-angle-right"></i>  Compromiso<br>
                <i class="fa-solid fa-angle-right"></i>  Puntualidad <br>
                <i class="fa-solid fa-angle-right"></i>  Integridad <br>
                <i class="fa-solid fa-angle-right"></i>  Responsabilidad</p>
            <div>
                <img src="assets/img/04.png" class="bd-placeholder-img im3" width="140" height="auto" alt="...">
            </div>
        </div><!-- /.col-lg-4 -->

    </div><!-- /.row -->
</div>