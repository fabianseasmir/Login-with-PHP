<?php

session_start();

if(!isset($_SESSION['usuario'])){

echo '

<script> 

alert("Por favor debes iniciar sesion");
window.location = "indext.php"
</script>

';

session_destroy();
die();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/9811033810.js" crossorigin="anonymous"></script>
    <title>Pagina Principal</title>
    <script defer src="./jpag.js"></script> 
</head>
<body>
  
    <div class="wrapper">
    
        <header class="header">
            <nav class="nav">
                <a href="#" class="logo nav-link"><cite>FabianServer</cite></a>
                <div class="lego"><i class="fa-solid fa-cookie-bite"></i></i></div>
            <button class="nav-toggle"><i class="fa-solid fa-bars"></i></button>
    <ul class="nav-menu ">
    
            <li class="nav-menu-item"><a href= "./Principal.php"class="nav-menu-link nav-link">Inicio</a></li>
    
           <div class="inilo"> <i class="fa-brands fa-empire"></i></div>
    
            <li class="nav-menu-item"><a href="./capitulo1/index.php" class="nav-menu-link nav-link">Acerca De Mí</a></li>
    
            <div class="bino"><i class="fa-solid fa-binoculars"></i></div>
    
            <li class="nav-menu-item"><a href="./capitulo1/contacto.php"class="nav-menu-link nav-link">Contacto</a></li>
            
            <div class="locont"><i class="fa-solid fa-address-book"></i></div>
    
            <li class="nav-menu-item"><a href="php/cerrar_sesion.php" class="nav-menu-link nav-link">Cerrar Sesion</a></li>
            
            <div class="locont"><i class="fa-solid fa-user-astronaut"></i></div>
    
          </ul>
         </nav></header><br>

         
          <div class="todo">




            <div class="title-cards">
            </div>
        <div class="container-card">
            
        <div class="card">
            <figure>
                <img src="surface-K7TMzxGGE28-unsplash.jpg">
            </figure>
            <div class="contenido-card">
                <h3>Education</h3>
                <p>
                        Web Developer currently studying <br>
                    UNED Librarian Career 2018-2020<br>
                Liceo Rodrigo Facio Brenes 2018 High School Diploma
                </ul>
            </p>
               
            </div>
        </div>
        <div class="card">
            <figure>
                <img src="element5-digital-OyCl7Y4y0Bk-unsplash.jpg">
            </figure>
            <div class="contenido-card">
                <h3>Skills</h3>
                <p>
                    Focus attention to detail<br>
                    Problem Solving<br>
                    Communication Assertiviness
                    Critical Thinking<br>
                    Time Management Skills<br>
                    Proactive
                </p>
            </div>
        </div>
        <div class="card">
            <figure>
                <img src="branko-stancevic-GI1hwOGqGtE-unsplash.jpg">
            </figure>
            <div class="contenido-card">
                <h3>Web developer skills</h3>
                <p>

                    HTML<br>
                    CSS<br>
                    CSS FLEX BOX<br>
                    CSS GRID<br>
                    BOOTSTRAP
            
                </p>
            
            </div>
        </div>
        </div>
          </div>






</body>
</html>