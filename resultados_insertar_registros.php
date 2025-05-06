<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados paises</title>
</head>

<body>
    <?php
    $c_art = $_GET["c_art"];
    $secc = $_GET["secc"];
    $n_art = $_GET["n_art"];
    $pre = $_GET["pre"];
    $fec = $_GET["fec"];
    $imp = $_GET["imp"];
    $p_ori = $_GET["p_ori"];

    require("datos_conexion.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);
    if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la BBDD";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");
    // 1
    $sql = "INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBRE, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) VALUES (?,?,?,?,?,?,?)";
    // 2
    $resultado = mysqli_prepare($conexion, $sql);
    // 3
    $ok = mysqli_stmt_bind_param($resultado, "sssisss", $c_art, $secc, $n_art, $pre, $fec, $imp, $p_ori);
    // 4
    $ok = mysqli_stmt_execute($resultado);
    if ($ok == false) {
        echo "Error al ejecutar la consulta";
    } else {
        // 5
        // 6
        echo "Nuevo registro agregado : <br><br>";

        mysqli_stmt_close($resultado);
    }


    ?>

</body>

</html>