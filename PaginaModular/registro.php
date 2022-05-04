<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="main.css" rel="stylesheet" type="text/css">

	<title>Registro</title>
</head>
<body class="body">
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
                    <a href="http://localhost/PaginaModular/iniciarsesion.php">
                     <span class="icon">
					 	<ion-icon name="log-in-outline"></ion-icon>
                     </span>
                     <span class="text">Iniciar Sesion</span>
                    </a>
                    </li>
                </ul>
            </div>
	</nav>
</header>

			<form method="POST" class="form" id="form">
			 <h1 class="titulos">Registro</h1>
			<div class="secciones">
			 <label for="">Nombre:</label><br>
			 <input type="text" name="name" id="nombre" class="prinombre"><br>
			</div>
			<div class="secciones">
			 <label for="">Apellidos: </label><br>
			 <input type="text" name="apelli" id="apellido"><br>
			</div>
			<div class="secciones"> 
			 <label for="">Nombre de usuario:</label><br>
			 <input type="text" name="nom_usuario" id="nomusuario"><br>
			</div>
			<div class="secciones">
			 <label for="">Correo electronico:</label><br> 
			 <input type="email" name="email" id="email"><br>
			</div>
			<div class="secciones"> 
			 <label for="">Contraseña:</label><br>
			 <input type="password" name="password" id="password"><br>
			</div>
			<div class="secciones"> 
			 <label for="">Repite la contraseña:</label><br>
			 <input type="password" name="password2" id="password2"><br>
			</div>
			<div class="secciones"> 
			 <label for="semestre">Semestre:</label><br>
			 <input type="range" id="vol" min="1" max="10" step="1" value="5" list="tickmarks" name="semestre" onchange="document.getElementById('outvol').value=value">
			 <output id="outvol" name="outvol" for="vol">5</output>
			 <datalist id="tickmarks">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4">
					<option value="5">
					<option value="6">
					<option value="7">
					<option value="8">
					<option value="9">
					<option value="10">
				</datalist>
			</div>
			<div class="secciones"> 
			 <label for="">Carrera:</label><br>
			 <label for="">INNI</label><input type="radio" name="carrera" value="INNI">
			 <label for="">INCO</label><input type="radio" name="carrera" value="INCO">
			</div>
			 <input type="submit" name="Registrarse">
			 <p class="warnings" id="warnings"></p>
			</form>	
<footer>
	<h4>copyright</h4>
	<p>Contacto, Siguenos en nuestras redes</p>
	<a href="">Click aqui</a>
	<a href=""></a>
	<a href=""></a>
</footer>
 <script src="codigo.js"></script>
 <?php
 include("datos.php");
 ?>
 
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>  
</html>