<?php
    session_start();

    if (!isset($_SESSION['usuario'])) {
        echo '
            <script>
                alert("Debes iniciar sesion antes");
                window.location = "iniciarsesion.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro APE</title>
    <link rel="stylesheet" type="text/css" href="estilosForo.css">
</head>
<body>
    <div class="navigation">
        <ul>
            <li>
                <a href="">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="text">Inicio</span>

                    </span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="icon">
                        <ion-icon name="people-circle-outline"></ion-icon>
                    </span>
                    <span class="text">Foro</span>

                    </span>
                </a>
            </li>
            <li>
                <a href="cerrar_sesion.php">
                    <span class="icon">
                        <ion-icon name="log-in-outline"></ion-icon>
                    </span>
                    <span class="text">Cerrar Sesion</span>

                    </span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="icon">
                        <ion-icon name="person-add-outline"></ion-icon>
                    </span>
                    <span class="text">Registrarse</span>

                    </span>
                </a>
            </li>
        </ul>
    </div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>