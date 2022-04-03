<?php

session_start();

if(!isset($_SESSION['usuario'])){

echo '

<script> 

alert("Por favor debes iniciar sesion");
window.location = "./indext.php"
</script>

';

session_destroy();
die();
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="contacto.css">
<script src="https://kit.fontawesome.com/9811033810.js" crossorigin="anonymous"></script>
<script defer src="contacto.js"></script>
</head>
<body>


    <div>
    <header class="header">
        <nav class="nav">
            <a href="#" class="logo nav-link">Contacto</a>
            <div class="locont"><i class="fa-solid fa-address-book"></i></div>

            <button class="nav-toggle"><i class="fa-solid fa-bars"></i></button>
        
<ul class="nav-menu">
    <div class="volv"><i class="fa-regular fa-circle-left"></i></div> 
        <li class="nav-menu-item"><a href= "../Principal.php"class="nav-menu-link nav-link">Volver a Inicio</a></li>

    </ul>
    </nav></header><br>
   
   
    <div class="container">
        <div class="card">
          <div class="card__header">
            <img src="../mail.jpg" alt="card__image" class="card__image" width="600">
          </div>
          <div class="card__body">
            <span class="tag tag-blue">ContactInfo</span>
            <h4>Email Address</h4>
            <p>fabiansm2001@gmail.com</p>
          </div>
          <div class="card__footer">
            <div class="user">
              <div class="user__info">
             
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card__header">
            <img src="../phone.jpg" alt="card__image" class="card__image" width="600">
          </div>
          <div class="card__body">
            <span class="tag tag-brown">ContactInfo</span>
            <h4>Phone</h4>
            <p>+50683138874</p>
          </div>
          <div class="card__footer">
            <div class="user">
              <div class="user__info">
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card__header">
            <img src="../facebook.jpg" alt="card__image" class="card__image" width="600">
          </div>
          <div class="card__body">
            <span class="tag tag-red">SocialMedia</span>
            <h4>Facebook</h4>
            <div class="nemo"><nav>    <a href="https://www.facebook.com/fabi.seasmiranda/" class="link">Ir a Mi Facebook</a></nav></div>
          </div>
          <div class="card__footer">
            <div class="user">
              <div class="user__info">
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container">
        <div class="card">
          <div class="card__header">
            <img src="../Instagram.jpg" alt="card__image" class="card__image" width="600">
          </div>
          <div class="card__body">
            <span class="tag tag-blue">SocialMedia</span>
            <h4>Instagram</h4>
            <div class="nemo"><nav><a href="https://www.instagram.com/seasfabian/" class="link">Ir a Mi Instagram</a></nav></div>
          </div>
          <div class="card__footer">
            <div class="user">
              <div class="user__info">
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card__header">
            <img src="../LinkedIn.jpg" alt="card__image" class="card__image" width="600">
          </div>
          <div class="card__body">
            <span class="tag tag-brown">SocialMedia</span>
            <h4>LinkedIn</h4>
            <div class="nemo"><nav><a href="https://www.linkedin.com/in/fabian-seas-1a9b10187/" class="link">Ir a Mi LinkedIn</a></nav></div>
          </div>
          <div class="card__footer">
            <div class="user">
              <div class="user__info">
             
              </div>
            </div>
          </div>
        </div>
      

</body>
</html>