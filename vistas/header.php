<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>MJV</title>
    
    <style>
        .nav-ini{
            font-size: 20px;
            font-family: Inter-Bold;
            /* font-family: Inter-Regular; */
            /* font-family: calibri; */
            /* font-family: msyi; */
            color: white;
            margin-left: 20px;
        }

        .nav-ini:hover{
            color: #89D316;
        }

        .iconos{
            width: 60px;
        }
        /* los query */
        @media (max-width: 700px) { 
            .enc-1 span {
               font-size: 15px;
               text-align: center;
            }
            .enc-2 {
                padding-left: 33%;
            }
         }


         /* ocultar encabezado */

         header .ocultar{
            display: none;
         }

        nav .cont2{
            background: #533268;
        }
        
        .enc-1{
            margin-bottom: -10px;
        }

        nav .fixed-top{
            margin-top: -10px;
        }
         
    </style>
 
</head>
<body>
<header>
        <div class="container-fluid  enc-1">
            <div class="row " style="background: #533268; color: white; height: auto ;">
                <div class="col d-flex justify-content-md-end" style="font-size: 20px;">
                    <span class="" >(01) 745 - 7089 </span> 
                    <span class="ps-3">marketing@mjv.com.pe</span>
                </div>
               
                <div class="col-4 w-auto d-flex justify-content-md-end  enc-2 ">
                    <a href="https://www.facebook.com/mjv.marketingdigital" class="mb-0 me-3 " style="color: white; font-size: 25px;"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.youtube.com/channel/UC7eZbgZrfdneTlqoCMA_1jQ" class="mb-0 me-3" style="color: white; font-size: 25px;"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.linkedin.com/company/71072906" class="mb-0 me-3" style="color: white; font-size: 25px;"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/mjv.marketingdigital/" class="mb-0 me-4" style="color: white; font-size: 25px;"><i class="fa-brands fa-instagram"></i></a>
                </div>
               
            </div>
        </div>


    <!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top " > -->
     <nav class="navbar navbar-expand-lg  navbar-dark">
         <div class="container-fluid nav1 cont2">
             <!-- <a class="navbar-brand" href="#">Navbar</a> -->
             <a class="navbar-brand" href="index.html" style="margin-left: 100px;" >
                 <img src="assets/img/logo_mjv.png" alt="..."  style="width: auto; height: 60px;"/>
             </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
             
             <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNav">
                 <ul class="navbar-nav">
                 <!-- navbar-nav text-uppercase ms-auto py-4 py-lg-0 -->
                     <li class="nav-item">
                         <a class="nav-link nav-ini" aria-current="page" href="./index.php">INICIO</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link nav-ini"   href="./nosotros.php">NOSOTROS</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link nav-ini"   href="./servicios.php">SERVICIOS</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link nav-ini me-2"   href="./contact.php">CONTÁCTANOS</a>
                     </li>
                     
                 </ul>
             </div>
         </div>
     </nav>
    </header>
     <!-- <script>
        window.addEventListener("scroll", function(){
       
            var nav = document.querySelector("nav");
            nav.classList.toggle("fixed-top",window.scrollY>0);

            var nav2 = document.querySelector("nav");
            nav2.classList.toggle("cont",window.scrollY>0);

            var header = document.querySelector("header");
            header.classList.toggle("ocultar",window.scrollY>0);
           
        });
     </script> -->