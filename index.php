<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Saveapp</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
                <link rel="stylesheet" href="css/estilos.css">
                

    </head>
    <body>
       <div class="contenedor">
       <! -- Menú header -->
        <header class="header">
		<?php
           include('header.html');
        ?>
	    </header>
	    
	    <! -- Contenido de página -->
	    <main class="contenido">
    
            <form action="validar.php" method="post">
                <h2 style="font-family: 'Kitten Slant Monoline';font-size: 500%; color: #FF8E06">Saveapp</h2>
                <h3 style="font-family: 'roboto'; font-weight: normal; text-align: center; font-size: 170%">Inicia sesión</h3>
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="password" placeholder="**********" name="clave">
                <input type="submit" value="Ingresar">
                <br>
                <h3 style="font-family: 'roboto'; font-weight: normal; text-align: center; font-size: 100%">¿No tienes cuenta? Registrate</h3>
                <a href="registrarse.php" class="button">Registrarse</a>

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
                                                                                                                               
                 