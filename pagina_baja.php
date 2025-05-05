<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina busqueda</title>
</head>

<body>
    <?php
    require("datos_conexion.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

    $usuario = mysqli_real_escape_string($conexion, $_GET["usu"]);
    $contra = mysqli_real_escape_string($conexion, $_GET["con"]);

    if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la BBDD";
        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");

    // $consulta = "SELECT * FROM PRODUCTOS WHERE NOMBRE LIKE'%$busqueda%'"; //Es AQUI; genio, crack, mastodonte

    $consulta = "DELETE FROM USUARIOS WHERE USUARIO = '$usuario' AND CONTRA = '$contra'";
    // 'or'1'='1
    echo "$consulta <br><br>";

    mysqli_query($conexion, $consulta);
    if (mysqli_affected_rows($conexion) > 0) {
        echo "Baja procesada";
    } else {
        echo "No se ha encontrado usuario";
    }

    // if (mysqli_query($conexion, $consulta)) {
    //     echo "Baja procesada";

    // }

    // 4:27

    mysqli_close($conexion);

    // SELECT * FROM `productos` WHERE NOMBREARTÍCULOS LIKE '%Algodón'
    // INSERT INTO `productos` (`CÓDIGOARTÍCULO`, `SECCIÓN`, `NOMBRE`, `PRECIO`, `FECHA`, `IMPORTADO`, `PAÍSDEORIGEN`) VALUES ('A006', 'Ropa', 'Crop Top Algodón', '25.99', '24.05.2025', 'FALSO', 'ESPAÑA');
    ?>
</body>

</html>