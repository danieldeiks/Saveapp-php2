<?php
 session_start();
    $usuario=$_POST['usuario'];
    $_SESSION['usuario'] = $usuario;
    $contrasena=$_POST['clave'];




//Conectar a la base de datos
    $conexion=mysqli_connect("localhost", "root", "", "saveapp");
    $consulta="SELECT * FROM usuario WHERE usuario='$usuario' AND contrasena='$contrasena'";
    $resultado=mysqli_query($conexion, $consulta);

    
    
    //Valida si existe el usuario y contraseña
    $filas=mysqli_num_rows($resultado);
    if($filas>0){
        header("Location:bienvenido.php");
    }
    else{
        echo "Error en la autentificación";
    }

    //Cierra la conexion y libera memoria de la consulta
    mysqli_free_result($resultado);
    mysqli_close($conexion);


?>