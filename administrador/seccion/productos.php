<?php include ("../template/cabecera.php");?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <link rel="stylesheet" href="../styles/Styles.css">
</head>
<body>
<div class="registro">
    <form action="guardar_datos.php" method="post">
        <label for="nombre">Nombre:</label>
        <input class="conn" type="text" name="nombre" id="nombre" required><br>

        <label for="tipo">Tipo:</label>
        <input class="conn" type="text" name="tipo" id="tipo" required><br>

        <label for="modelo">Modelo:</label>
        <input class="conn" type="text" name="modelo" id="modelo" required><br>

        <label for="precio">Precio:</label>
        <input class="conn" type="text" name="precio" id="prercio" required><br>

        <input type="submit" value="Enviar">
    </form>
    </div>
</body>
</html>
<? php include ("../template/pie.php");?>