<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   <style>


    .tex1{
        font-family: Inter-Regular; 
        margin-bottom: 0px; 
        padding-bottom: -4px;
        letter-spacing: 2px;
        font-size: 70px;
        color: #fff;
    }

    .tex2{
        font-family: Inter-Bold;   
        margin-top: -20px;
        padding-top: 0px;  
        font-size: 70px;
        color: #fff;
    }
    .tex3{
        font-size: 1.8rem;
        margin-top: 10px;
        line-height: 30px;
        text-align: left;
        font-family: calibri;
        color: #fff;
    }

    .cn1{
        margin-top: 80px;
        padding-left: 120px;

    }
    .btn5{
            background: #89D316 ; 
            margin-left: 50px;
            margin-top: 40px; 
            font-family:Inter-Bold ; 
            letter-spacing: 0.2px; 
            font-size: 20px;
            color: #fff;
            padding: 10px;
    }
    .btn5:hover{
        background: #89D316; 
        color: #fff;
    } 


    /* hacer una media responsive */

    @media (max-width: 600px) {

    .cn1{
     
     margin: 0px;
     padding: 0px;
     display: inline-block;
     justify-content: center;
     align-items: center;

 }
 .btn5{
            margin: 40px;
           display: flex;
           justify-content: center;
           text-align: center;
            padding: auto;
    }
    .tex1{
 
        font-size: 60px;
        color: #fff;
        text-align: center;
        margin: auto    ;
    }

    .tex2{
  
        font-size: 60px;
        color: #fff;
    }
    .tex3{
        font-size: 1.8rem;
        /* text-align: center; */

        text-align: justify;
        line-height: auto;
        padding: 10px;

    }
    }


   </style>

</head>
<body>

<!-- 
<div class="content imt">
    <div class="row ">
        <div class="col-xs-12 col-md-12 cn1">
                <h1 class="tex1">Bienvenidos <p class="tex2">Somos MJV</p></h1>
                <p class="tex3">¿Necesitas hacer crecer tu empresa,<br>
                     pero no sabes por dondé empezar?<br>Nosotros podemos ayudarte</p>
                     <p><a class="btn rounded-pill border-0 btn5" 
                     href="#" >OBTÉN UNA ASESORIA GRATIS</a></p>
        </div>
    </div>
</div> -->

<div class="content ">
    <div class="row cn2">
        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 cn1">
                <h1 class="tex1">Bienvenidos <p class="tex2">Somos MJV</p></h1>
                <p class="tex3">¿Necesitas hacer crecer tu empresa,
                     pero no sabes por dondé empezar? Nosotros podemos ayudarte</p>
                    
                     <p><a class="btn rounded-pill border-0 btn5" 
                     href="#" style="font-family: Inter-Bold;">OBTÉN UNA ASESORÍA GRATIS</a></p>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
        
            <div class="text-center">
                    <img src="assets/img/inicio1.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="auto" height="500" style="padding-right: 20px;" alt="...">
            </div>
          </div>
    </div>
</div>