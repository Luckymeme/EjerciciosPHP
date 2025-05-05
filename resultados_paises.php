<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados paises</title>
</head>

<body>
    <?php
    $pais = $_GET["buscar"];
    require("datos_conexion.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);
    if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la BBDD";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");
    // 1
    $sql = "SELECT CÓDIGOARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE PAÍSDEORIGEN = ?";
    // 2
    $resultado = mysqli_prepare($conexion, $sql);
    // 3
    $ok = mysqli_stmt_bind_param($resultado, "s", $pais);
    // 4
    $ok = mysqli_stmt_execute($resultado);
    if ($ok == false) {
        echo "Error al ejecutar la consulta";
    } else {
        // 5
        $ok = mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais);
        // 6
        echo "Articulos encontrados: <br><br>";
        while (mysqli_stmt_fetch($resultado)) {
            echo $codigo . " " . $seccion . " " . $precio . " " . $pais . "<br>";
        }
        mysqli_stmt_close($resultado);
    }


    ?>

</body>

</html>