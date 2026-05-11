<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<form onsubmit="return validarFormulario()">

    <input type="text" id="nombre" placeholder="Nombre">

    <input type="email" id="correo" placeholder="Correo">

    <textarea id="mensaje" placeholder="Mensaje"></textarea>

    <button type="submit">Enviar</button>

</form>

<script src="script.js"></script>

</body>
</html>