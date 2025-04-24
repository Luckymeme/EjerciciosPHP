<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL</title>
</head>

<body>

    <?php
    // $db_host = "localhost";
    // $db_nombre = "pruebas";
    // $db_usuario = "root";
    // $db_contra = "";
    require("datos_conexion.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    if (mysqli_connect_errno()) {
        echo "Fallo al concetar con la BBDD";
        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");

    // $consulta = "SELECT * FROM DATOSPERSONALES";
    $consulta = "SELECT * FROM PRODUCTOS";
    // $filtro = "SELECT * FROM hoja1 WHERE PAÍSDEORIGEN='ESPAÑA'";
    // $consulta = "SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN='ESPAÑA'";


    $resultados = mysqli_query($conexion, $consulta); //BBDD y consulta a realizar = tabla virtual record set o result set.
    // $fila = mysqli_fetch_row($resultados); //mira lo que hay fila a fila en la "tabla virtual".

    $space = "&nbsp&nbsp&nbsp&nbsp"; //es cutre no lo siguiente, pero parece que es lo mejor qua hay \n o \t no hacen nada.
    // UPDATE: str_repeat($space, 5) puede valer tambien
    while ($fila = mysqli_fetch_row($resultados)) {
        echo "<table width='50%' align='center' border ='1'><tr><td>"; //12:36 video  38

        echo $fila[0] . "</td><td>" . str_repeat($space, 2) . $fila[1] . "</td><td>" . $space . $fila[2] . $space . "</td><td>" .  $fila[3] . "</tr><td></tr></table><br>";
    }






    mysqli_close($conexion);

    ?>
</body>

</html>