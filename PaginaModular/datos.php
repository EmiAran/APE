<?php
    include("con_db.php");
    
    if (isset($_POST['Registrarse'])) {
        if (strlen($_POST['name']) >= 1 &&
        strlen($_POST['apelli']) >= 1 &&
        strlen($_POST['nom_usuario']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['password']) >= 1 &&
        strlen($_POST['password2']) >= 1 &&
        strlen($_POST['semestre']) >= 1 && 
        strlen($_POST['carrera']) >= 1) {
            $name = trim($_POST['name']);
            $apellido = trim($_POST['apelli']);
            $nom_usuario = trim($_POST['nom_usuario']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $password2 = trim($_POST['password2']);
            $semestre = trim($_POST['semestre']);
            $carrera = trim($_POST['carrera']);
            $consulta = "INSERT INTO datos(nombre, apellido, nom_usuario, correo, password, password2, semestre, carrera) 
            VALUES ('$name','$apellido','$nom_usuario','$email','$password', '$password2', '$semestre', '$carrera')";
            // Verificar que el correo no se repitan en la base de datos
            $verificar_correo = mysqli_query($conex, "SELECT * FROM datos WHERE correo = '$email' ");
            if (mysqli_num_rows($verificar_correo) > 0) {
                echo '
                <script>
                    alert("Este correo ya esta registrado, intenta con otro");
                    window.location = "../PaginaModular/registro.php"
                </script>
                ';
                exit();
            }
            // Verificar que el nombre de usuario no se repita en la base de datos
            $verificar_usuario = mysqli_query($conex, "SELECT * FROM datos WHERE nom_usuario = '$nom_usuario' ");
            if (mysqli_num_rows($verificar_usuario) > 0) {
                echo '
                <script>
                    alert("Este nombre de usuario ya esta registrado, intenta con otro");
                    window.location = "../PaginaModular/registro.php"
                </script>
                ';
                exit();
            }
            $resultado = mysqli_query($conex,$consulta);
        }
    }

    
    mysqli_close($conex);
?>