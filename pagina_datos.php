<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina busqueda</title>
    <!-- 48 -->
</head>

<body>
    <?php
    $usuario = $_GET["usu"];
    $contra = $_GET["con"];

    require("datos_conexion.php");

    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    if (mysqli_connect_errno()) {
        echo "Fallo al concetar con la BBDD";
        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");

    // $consulta = "SELECT * FROM PRODUCTOS WHERE NOMBRE LIKE'%$busqueda%'"; //Es AQUI; genio, crack, mastodonte

    $consulta = "SELECT * FROM USUARIOS WHERE USUARIO = '$usuario' AND CONTRA = '$contra'";
    echo "$consulta <br><br>";

    $resultados = mysqli_query($conexion, $consulta);

    $space = "&nbsp&nbsp&nbsp&nbsp"; //es cutre no lo siguiente, pero parece que es lo mejor qua hay \n o \t no hacen nada.
    // UPDATE: str_repeat($space, 5) puede valer tambien
    while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
        echo "Bienvenid@ <b>$usuario</b> <br> Estos son tus datos: <br>";

        echo "<table width='50%' align='center' border ='1'><tr><td>";
        echo $fila['usuario'] . str_repeat($space, 1) . "</td><td>"
            . $fila['contra'] . $space . "</td><td>"
            . $fila['tfno'] . $space . "</td><td>"
            . $fila['direccion'] . $space . "</tr><td></tr></table><br>";
    }
    mysqli_close($conexion);

    // SELECT * FROM `productos` WHERE NOMBREARTÍCULOS LIKE '%Algodón'
    // INSERT INTO `productos` (`CÓDIGOARTÍCULO`, `SECCIÓN`, `NOMBRE`, `PRECIO`, `FECHA`, `IMPORTADO`, `PAÍSDEORIGEN`) VALUES ('A006', 'Ropa', 'Crop Top Algodón', '25.99', '24.05.2025', 'FALSO', 'ESPAÑA');
    ?>
</body>

</html>