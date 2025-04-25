<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda resultados</title>

    <?php

    function ejecuta_consulta($labusqueda)
    {
        // $busqueda = $_GET["buscar"];

        require("datos_conexion.php");
        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
        if (mysqli_connect_errno()) {
            echo "Fallo al concetar con la BBDD";
            exit();
        }

        mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
        mysqli_set_charset($conexion, "utf8");

        $consulta = "SELECT * FROM PRODUCTOS WHERE NOMBRE LIKE'%$labusqueda%'";

        $resultados = mysqli_query($conexion, $consulta);

        $space = "&nbsp&nbsp&nbsp&nbsp"; //es cutre no lo siguiente, pero parece que es lo mejor qua hay \n o \t no hacen nada.
        // UPDATE: str_repeat($space, 5) puede valer tambien
        while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
            echo "<table width='50%' align='center' border ='1'><tr><td>";
            echo  $fila['CÓDIGOARTÍCULO'] . str_repeat($space, 1) . "</td><td>"
                . $fila['NOMBRE'] . $space . "</td><td>"
                . $fila['SECCIÓN'] . $space . "</td><td>"
                . $fila['IMPORTADO'] . $space . "</td><td>"
                . $fila['PRECIO'] . $space . "</td><td>"
                . $fila['PAÍSDEORIGEN'] . $space . "</tr><td></tr></table><br>";
        }
        mysqli_close($conexion);
    }
    ?>
</head>

<body>
    <?php
    $mibusqueda = $_GET["buscar"];
    $mipag = $_SERVER['PHP_SELF'];

    if ($mibusqueda != null) {
        ejecuta_consulta($mibusqueda);
    } else {
        echo ("<form action='" . $mipag . "' method='get'>
        <label>Buscar:<input type='text' name='buscar'></label>
        <input type='submit' name='enviado' value='Dale!'>
        </form>");
    }

    ?>
    <!-- VIDEO 42 -->
    <!-- INSERT INTO `productos`(`CÓDIGOARTÍCULO`, `SECCIÓN`, `NOMBRE`) VALUES ('AR42','DEPORTES','CAMISETA CORRER') -->
</body>

</html>