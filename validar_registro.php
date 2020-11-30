<?php
    //Este if hace que no marque error cuando se inicia la validación sin ningún dato.
    if(isset($_POST['usuario'])){
        //ESTE IF ANIDADO VERIFICA SI ES VALIDO EL REGISTRO DE UN NUEVO USUARIO
        if(empty($usuario)){
            echo "<h3 style=font-family: 'roboto'; font-weight: normal; text-align: center; font-size: 200%; text-color: #FF0000>* Agrega tu usuario </h3>";   
        }elseif(strlen($usuario) > 12 || strlen($usuario) < 5){
                echo "<h3 style=font-family: 'roboto'; font-weight: normal; text-align: center; font-size: 200%; text-color: #FF0000>* El usuario debe tener entre 5 y 12 caracteres </h3>";
            }
        elseif(empty($correo)){
            echo "<h3 style=font-family: 'roboto'; font-weight: normal; text-align: center; font-size: 200%; color: #FF0000>* Agrega tu correo </h3>";
            }
        elseif(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
                echo "<h3 style=font-family: 'roboto'; font-weight: normal; text-align: center; font-size: 200%; color: #FF0000>* Correo inválido </h3>";
            }
        elseif(empty($clave)){
            echo "<h3 style=font-family: 'roboto'; font-weight: normal; text-align: center; font-size: 200%; color: #FF0000>* Agrega tu contraseña </h3>";
            }
        elseif(strlen($clave) > 16 || strlen($clave) < 6){
                echo "<h3 style=font-family: 'roboto'; font-weight: normal; text-align: center; font-size: 200%; text-color: #FF0000>* La contraseña debe tener entre 6 y 16 caracteres </h3>";
            }
        elseif(empty($claveconf)){
            echo "<h3 style=font-family: 'roboto'; font-weight: normal; text-align: center; font-size: 200%; color: #FF0000>* Confirma tu contraseña </h3>";
            }
        elseif($clave!=$claveconf){
            echo "<h3 style=font-family: 'roboto'; font-weight: normal; text-align: center; font-size: 200%; color: #FF0000>* Las contraseñas no coinciden </h3>";
        }else{
        $conexion=mysqli_connect("localhost", "root", "", "saveapp");
        $consulta="INSERT INTO usuario (usuario, contrasena, correo) VALUES ('$usuario', '$clave','$correo')";
        $resultado=mysqli_query($conexion, $consulta);
        header("Location:index.php");
        }
        
        
        
        
    
        

    
        
    }



    /*if($contrasena==$contrasena2){

        
        
    }
    else{
        echo "Las contraseñas no coinciden";
    }*/

/*$conexion=mysqli_connect("localhost", "root", "", "saveapp");
        $consulta="INSERT INTO usuario (usuario, contrasena, correo) VALUES ('$usuario', '$contrasena','$correo')";
        $resultado=mysqli_query($conexion, $consulta);
        header("Location:index.html");*/

?>