<?php
session_start();

if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = rand(1,10);
}

$mensaje = "";

if(isset($_POST['adivina'])){

    if($_POST['numero'] == $_SESSION['numero']){

        $mensaje = "Correcto";

        $_SESSION['numero'] = rand(1,10);

    }else{

        $mensaje = "Incorrecto, intenta otra vez";

    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Adivinanzas</title>
</head>
<body>

<h1>Adivina el número del 1 al 10</h1>

<form method="POST">

    <input type="number" name="numero">

    <button type="submit" name="adivina">
        Intentar
    </button>

</form>

<h2><?php echo $mensaje; ?></h2>

</body>
</html>