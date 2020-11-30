
   <?php
//Este codigo hace que cuando se inicie la pagina web con ningun valor en la variable no marque error
    if(isset($_POST['submit'])){
        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];
        $claveconf = $_POST['claveconf'];
        
    }
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Registrate a Saveapp</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
                <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
       <div class="contenedor">
        <header class="header">
		<?php
           include('header.html');
        ?>
	    </header>
        <main class="contenido">
        <form action="registrarse.php" method="post">
            <h2 style="font-family: 'Kitten Slant Monoline';font-size: 500%; color: #FF8E06">Saveapp</h2>
            <h3 style="font-family: 'roboto'; font-weight: normal; text-align: center; font-size: 170%">Registrate</h3>
            <input type="text" placeholder="Nuevo usuario" name="usuario" value="<?php if(isset($usuario)) echo $usuario ?>">
            <input type="text" placeholder="Ingrese su correo" name="correo" value="<?php if(isset($correo)) echo $correo ?>">
            <br>
            <input type="password" placeholder="Contraseña" name="clave">
            <input type="password" placeholder="Confirmar contraseña" name="claveconf">
            <input type="submit" name="submit" value="Confirmar">
            <?php
            
            include("validar_registro.php");
            
            ?>
           
            
        </form>
        </main>
        <footer class="footer">
           <br>
           <br>
            <hr>
        </footer>
        </div>
    </body>
</html>
          