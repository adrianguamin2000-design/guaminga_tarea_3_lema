<?php

session_start();

$usuarios = [
    "admin" => "1234",
    "adrian" => "5678"
];

$mensaje = "";

if(isset($_POST['login'])){

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    if(isset($usuarios[$usuario]) && $usuarios[$usuario] == $clave){

        $_SESSION['usuario'] = $usuario;

        header("Location: bienvenida.php");

    }else{

        $mensaje = "Datos incorrectos";

    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h1>Iniciar sesión</h1>

<form method="POST">

    <input type="text" name="usuario" placeholder="Usuario">

    <input type="password" name="clave" placeholder="Clave">

    <button type="submit" name="login">
        Ingresar
    </button>

</form>

<h2><?php echo $mensaje; ?></h2>

</body>
</html>