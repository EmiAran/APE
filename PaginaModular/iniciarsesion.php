<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <title>Iniciar Sesion</title>
</head>
<body>
<div class="container">
    <header>
        <nav>
            <div class="navigation">
                <ul>
                    <li>
                    <a href="http://localhost/Proyecto/index.html">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="text">Inicio</span>
                    </a>
                    </li>
                    <li>
                        <a href="/Proyecto/index.html">
                            <span class="icon">
                                <ion-icon name="people-circle-outline"></ion-icon>
                            </span>
                            <span class="text">Foro</span>
        
                            </span>
                        </a>
                    </li>
                    <li>
                    <a href="http://localhost/PaginaModular/registro.php">
                     <span class="icon">
                        <ion-icon name="person-add-outline"></ion-icon>
                     </span>
                     <span class="text">Registrarse</span>
                    </a>

                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <form method="POST" class="form" id="form">
        <h1>Iniciar Sesion</h1>
        <div class="secciones"><br>
            <label for="">Nombre de ususario: </label><br>
            <input type="text" name="usuario" id="usuario"><br>
        </div>
        <div class="secciones">
            <label for="">Contraseña: </label><br>
            <input type="password" name="passwordlogin" id="passwordlogin"><br>
        </div>
        <div>
            <input type="submit" name="login" value="Iniciar sesion">
        </div>
    </form>

 <footer>
    <h4>copyright</h4>
	<p>Contacto, Siguenos en nuestras redes</p>
	<a href="">Click aqui</a>
	<a href=""></a>
	<a href=""></a>
 </footer>
     <?php
     include("datoslogin.php");
     ?>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>