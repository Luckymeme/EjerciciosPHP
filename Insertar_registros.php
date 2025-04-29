<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar registros</title>
</head>

<body>
    <?php

    // $busqueda = $_GET["buscar"];

    require("datos_conexion.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    if (mysqli_connect_errno()) {
        echo "Fallo al concetar con la BBDD";
        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");
    echo "hola";
    $consulta = "INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBRE, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) VALUES ('AR44','Deportes','Raqueta badminton','15.78','29.04.2025','FALSO','España')";
    $resultados = mysqli_query($conexion, $consulta);

    // UPDATE `productos` SET PRECIO = '34.40' WHERE NOMBRE = 'Vestido señora'
    // UPDATE `productos` SET PRECIO = '350.69', PAÍSDEORIGEN='España' WHERE CÓDIGOARTÍCULO = 'A001'

    mysqli_close($conexion);


    ?>

</body>

</html>