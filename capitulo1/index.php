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
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
    <script src="https://kit.fontawesome.com/9811033810.js" crossorigin="anonymous"></script>
    <script defer src="index.js"></script>

</head>
<body>
<div class="wrapper">
    <header class="header">
        <nav class="nav">
            <a href="#" class="logo nav-link">Acerca De Mí</a>
            <div class="bino"><i class="fa-solid fa-binoculars"></i></i></div>

            
 <button class="nav-toggle"><i class="fa-solid fa-bars"></i></button>
        
<ul class="nav-menu">
   <div class="volv"><i class="fa-regular fa-circle-left"></i></div> 
        <li class="nav-menu-item"><a href= "../Principal.php"class="nav-menu-link nav-link">Volver a Inicio</a></li>

    </ul>
    </nav></header><br>
    
<h3 class="frase">"De todos los medios que conducen a la fortuna, los más seguros son la perseverancia y el trabajo"</h3>
<img src="../clayton-robbins-7r7-7RLdwCU-unsplash.jpg" alt="no carga imagen" class="img1">
<br*3>
<p>Para empezar, me considero una persona ambiciosa al crecimiento, amante de los deportes,siempre estoy tratando buscar áreas de desarrollo,meta que me asigno a cumplir,trabajo hasta cumplirla,me considero una persona muy tranquila</p>

<h2 class="tit2"><cite>Calisthenics Life</cite></h2>
<p class="text2">Mi pasion básicamente es la calistenia, Calistenia es una palabra que procede del griego Kallos, belleza, y sthenos, fortaleza.<br> Se trata de un sistema de ejercicios basado en el peso del propio cuerpo y que trabaja grandes grupos musculares, 2017 hasta el presente 2022
llevo practicando esta disciplina, la cual me ha generado la capacidad de desarollar mi potencial en todos aspectos.</p>

<img src="../Calis.JPG" class="calis" >


<h3 class="eje"><cite>Gustos</cite></h3>

<div class="containe"><img src="../spiderman-colgado (1).png" class="spiderman"></div>
 
<p>En realidad no soy una persona que le guste mucho ver peliculas, me considero mas de estar escuchando musica <br>
todo el tiempo, es como un vicio, y pues me gustan los super heroes, la paz mental, actividades al aire libre <br>
y leer que siempre ha sido un beneficio, la mayoria de mi tiempo lo dedico a entrenar en realidad, casi nunca tiempo oseo.


</p>


<h2 class="dat"><cite>Dato Curioso</cite></h2>

<img src="../pgrogra.jpg" width="150" class="progra" >

<p>Hace mucho tiempo, en mis años de joventud. pensaba que esto de programar y la computación en general no iba hacer una area como para desarrollarme, y bueno aqui estoy JAJA</p>

<p>Muy emocionado por que esto es una pincelada de lo que es pogramacion y lo que puedo desarrollar en ella, este es el comienzo de muchos proyectos y sueños que tengo seguro con la suficiente paciencia y perserverancia y la ayuda de Dios se van a lograr. </p>

<h2><mark><cite>Last but not least!!!!</cite></mark> </h2>

<video src="../Snoop Dogg en su discurso de agradecimiento en Hollywood.mp4" width="400" controls class="video"></video>

<nav>
    <a href= "../Principal.php" class="enlace">Volver a Inicio</a>
</nav> </div>


</body>
</html>