<?php

session_start();

if(isset($_SESSION['usuario'])){

    header("location: bienvenido.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login and register to app</title>
 
   <link rel="stylesheet" href="./assets/css/estilos.css">

</head>

<body>

<main>


<div class="contenedor-todo">




<div class="caja__trasera">

<div class="cajatraseralogin">

    <h3>Ya tienes una cuenta ?</h3>
<p>Inicia Sesion para entrar al portal!</p>
<button id="btn__iniciar--sesion">Inciar Sesion</button>

</div>


<div class="cajatraseraregister">
    <h3>Aun no tienes una cuenta?</h3>
<p>Registrate para poder entrar al portal!</p>
<button id="btn_regis">Registrarse</button>

</div>

</div>




<div class="contenedor_login-register">

    <form action="php/login_usuario_be.php" method = "POST" class="formulario__login">
<h2>Iniciar Sesion</h2>
<input type="text" placeholder="Correo Electronico" name="correo">
<input type="password" placeholder="Contraseña" name="contrasena">
<button>Entrar</button>
    </form>


    <form action="php/registro_usuario_be.php" method ="POST" class="formulario__register">
        <h2>Registrarse</h2>
        <input type="text" placeholder="Nombre Completo" name ="nombre_completo"><br>
        <input type="text" placeholder="Correo Electronico" name ="correo"><br>
        <input type="text" placeholder="Usuario"  name ="usuario"><br>
        <input type="password" placeholder="Contraseña"  name ="contrasena">
        <button>Registrarse</button>
    </form>
</div>
</div>


</main>



</body>
<script src="./assets/js/script.js"></script>
</html>