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
    </style>
 
</head>
<body>
    <div class="container-fluid mb-0  enc-1">
        <div class="row " style="background: #533268; color: white; height: auto ;">
            <div class="col d-flex justify-content-md-end" style="font-size: 20px;">
                <span class="" >(01) 745 - 7089 </span> 
                <span class="ps-3"> recursos.humanos@mjv.com.pe</span>
            </div>
           
            <div class="col-4 w-auto d-flex justify-content-md-end  enc-2 ">
                <a href="#" class="mb-0 me-3 " style="color: white; font-size: 25px;"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="mb-0 me-3" style="color: white; font-size: 25px;"><i class="fa-brands fa-youtube"></i></a>
                <a href="#" class="mb-0 me-3" style="color: white; font-size: 25px;"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" class="mb-0 me-4" style="color: white; font-size: 25px;"><i class="fa-brands fa-instagram"></i></a>
            </div>
           
        </div>
    </div>

    <!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top " > -->
     <nav class="navbar navbar-expand-lg navbar-dark " >
         <div class="container-fluid " style="background: #653B7B ;  padding: 0px;">
             <!-- <a class="navbar-brand" href="#">Navbar</a> -->
             <a class="navbar-brand " href="index.html" style="margin-left: 100px;" >
                 <img src="assets/img/logo.jpg" alt="..."  style="width: auto; height: 70px;"/>
             </a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             
             <div class="collapse navbar-collapse justify-content-end me-5" id="navbarSupportedContent">
                 <ul class="navbar-nav ms-auto mb-0 mb-lg-0 " >
                 <!-- navbar-nav text-uppercase ms-auto py-4 py-lg-0 -->
                     <li class="nav-item">
                         <a class="nav-link nav-ini" style="font-size: 25px; font-family:calibri;" aria-current="page" href="./index.php">INICIO</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link nav-ini" style="font-size: 25px; font-family:calibri;"  href="#about">NOSOTROS</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link nav-ini" style="font-size: 25px; font-family:calibri;"  href="#servicios">SERVICIOS</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link nav-ini me-2" style="font-size: 25px; font-family:calibri;"  href="./contact.php">CONTÁCTANOS</a>
                     </li>
                     
                 </ul>
             </div>
         </div>
     </nav>

   