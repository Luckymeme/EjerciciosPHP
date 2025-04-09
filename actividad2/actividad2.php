<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2</title>
    <link rel="icon" type="image/x-icon" href="ejemplo_icon.ico">
    <link rel="stylesheet" href="../estiloEj2.css">
</head>

<body>
    <h1 class="titu">Formulario</h1>
    <form action="info_cliente.php" method="GET">
        Nombre: <input type="text" name="nombre" /><br>
        Apellidos: <input type="text" name="apellidos" /><br>
        Fecha nacimiento: <input type="date" name="fecha" /><br>
        <input type="submit" value="Enviar" />
    </form><br>
    <a href="listado_Cli.php">
        <button>Listado</button>
    </a>


</body>

<?php
// $ej = 9.8;
// echo "<br>" . $ej += 2.2;
// if (is_float($ej)) {
//     echo "<br>Es double<br>";
// } else {
//     echo "<br>No lo es";
// }

?>

</html>