<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insertar Registro 2</title>
</head>

<body>
    <?php

    // $busqueda = $_GET["buscar"];
    // VVV "Lo busca en formulario registro" VVV
    $cod = $_GET["c_art"];
    $sec = $_GET["seccion"];
    $nom = $_GET["n_art"];
    $pre = $_GET["precio"];
    $fec = $_GET["fecha"];
    $imp = $_GET["importado"];
    $por = $_GET["p_orig"];

    require("datos_conexion.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    if (mysqli_connect_errno()) {
        echo "Fallo al concetar con la BBDD";
        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");

    $consulta = "INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBRE, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) VALUES ('$cod','$sec','$nom','$pre','$fec','$imp','$por')";
    $resultados = mysqli_query($conexion, $consulta);

    if ($resultados == false) {
        echo "Error en la consulta";
    } else {
        echo "Registro guardado<br><br>";
        echo "<table><tr><td>$cod</td></tr>" . "<tr><td>$sec</td></tr>" . "<tr><td>$nom</td></tr>" . "<tr><td>$pre</td></tr>" . "<tr><td>$fec</td></tr>" . "<tr><td>$imp</td></tr>" . "<tr><td>$por</td></tr></table>";
    }


    mysqli_close($conexion);


    ?>

</body>

</html>