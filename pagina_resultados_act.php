<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina busqueda</title>
</head>

<body>
    <?php
    $busqueda = $_GET["buscar"];

    require("datos_conexion.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    if (mysqli_connect_errno()) {
        echo "Fallo al concetar con la BBDD";
        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");

    $consulta = "SELECT * FROM PRODUCTOS WHERE NOMBRE LIKE'%$busqueda%'"; //Es AQUI; genio, crack, mastodonte

    $resultados = mysqli_query($conexion, $consulta);

    $space = "&nbsp&nbsp&nbsp&nbsp"; //es cutre no lo siguiente, pero parece que es lo mejor qua hay \n o \t no hacen nada.
    // UPDATE: str_repeat($space, 5) puede valer tambien
    while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
        // echo "<table width='50%' align='center' border ='1'><tr><td>";

        echo "<form action='Actualizar.php' method='get'>"; //Cabezera del formulario
        echo "<input type='text' name='c_art' value='" . $fila['CÓDIGOARTÍCULO'] . "'><br>";
        echo "<input type='text' name='n_art' value='" . $fila['NOMBRE'] . "'><br>";
        echo "<input type='text' name='seccion' value='" . $fila['SECCIÓN'] . "'><br>";

        echo "<input type='text' name='importado' value='" . $fila['IMPORTADO'] . "'><br>";
        echo "<input type='text' name='precio' value='" . $fila['PRECIO'] . "'><br>";
        echo "<input type='text' name='fecha' value='" . $fila['FECHA'] . "'><br>";
        echo "<input type='text' name='p_orig' value='" . $fila['PAÍSDEORIGEN'] . "'><br>";

        echo "<input type='submit' name='enviando' value='Actualizar!'><br>";
        echo "</form>";

        // echo $fila['CÓDIGOARTÍCULO'] . str_repeat($space, 1) . "</td><td>" . $fila['NOMBRE'] . $space . "</td><td>" . $fila['SECCIÓN'] . $space . "</td><td>" . $fila['IMPORTADO'] . $space . "</td><td>" . $fila['PRECIO'] . $space . "</td><td>"
        //     . $fila['PAÍSDEORIGEN'] . $space . "</tr><td></tr></table><br>";
    }
    mysqli_close($conexion);

    // SELECT * FROM `productos` WHERE NOMBREARTÍCULOS LIKE '%Algodón'
    // INSERT INTO `productos` (`CÓDIGOARTÍCULO`, `SECCIÓN`, `NOMBRE`, `PRECIO`, `FECHA`, `IMPORTADO`, `PAÍSDEORIGEN`) VALUES ('A006', 'Ropa', 'Crop Top Algodón', '25.99', '24.05.2025', 'FALSO', 'ESPAÑA');
    ?>
</body>

</html>