<?php

$imagenes = glob("imagenes/*.*");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Galería</title>

    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h1>Galería de imágenes</h1>

<div class="galeria">

<?php

foreach($imagenes as $imagen){

    echo "<img src='$imagen'>";

}

?>

</div>

<script src="script.js"></script>

</body>
</html>