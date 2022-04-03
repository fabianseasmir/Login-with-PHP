<?php


include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST ['usuario'];
$contrasena = $_POST['contrasena'];

//Para encriptar la contrasena

$contrasena = hash('sha512', $contrasena);

//

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
          VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";


//Verificar que el correo no se repita

$verficar_correo = mysqli_query ($conexion, "SELECT * FROM usuarios WHERE correo= '$correo'");

//Si encentra una fila que coincida con este correo

if(mysqli_num_rows($verficar_correo) > 0){

echo '

<script>

alert("Este correo ya existe en el sistema, intenta con otro!");
window.location = "../indext.php";
</script>


';
exit();
mysqli_close($conexion);

//con la propiedad exit hace que el codigo termine hasta ahi
//por que si no nos guardaria dos veces el correo en la base de datps
}


//Verificar que el usuario no se repita


$verficar_usuario =  mysqli_query ($conexion, "SELECT * FROM usuarios WHERE usuario= '$usuario'");

if(mysqli_num_rows($verficar_usuario) > 0){

    echo '
    
    <script>
    
    alert("El nombre de usuario ya existe en el sistema, intenta con otro!");
    window.location = "../indext.php";
    </script>
    
    
    ';
    exit();
    mysqli_close($conexion);
    
    }


 $ejecutar = mysqli_query($conexion, $query);    
 
 if($ejecutar){
echo '

<script>

alert("Usuario almacenado exitosamente");
window.location = "../indext.php";
</script>

';

 }
 else{

    echo '

    <script>
    
    alert("Prueba una vez mas, usuario no pudo ser almacenado");
    window.location = "../indext.php";
    </script>
    
    ';


 }

 mysqli_close($conexion);

?>