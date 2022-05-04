<html>
<link href="estilos.css" rel="stylesheet" type="text/css">
</html>

<?php
    session_start();
    include("con_db.php");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario=$_POST['usuario'];
    $passwordlogin=$_POST['passwordlogin'];
    

    $consulta="SELECT*FROM datos WHERE nom_usuario= '$usuario' AND password='$passwordlogin' ";
    $resultado=mysqli_query($conex, $consulta);

    $filas = mysqli_num_rows($resultado);

    if ($filas) {
        $_SESSION['usuario'] = $usuario;
        header("location:/Proyecto/perfilusuario.php");
    } else {
        ?>
        <h1 class="error">Tu nombre de usuario o contraseña son incorrectas</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conex);
}
?>