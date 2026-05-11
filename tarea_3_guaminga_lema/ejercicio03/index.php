<?php

$archivo = "contador.txt";

if(!file_exists($archivo)){
    file_put_contents($archivo, 0);
}

$visitas = file_get_contents($archivo);

$visitas++;

file_put_contents($archivo, $visitas);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador</title>
</head>
<body>

<h1>Contador de visitas</h1>

<h2>
    Número de visitas: <?php echo $visitas; ?>
</h2>

</body>
</html>