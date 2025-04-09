<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento PHP</title>
    <link rel="icon" type="image/x-icon" href="ejemplo_icon.ico">
    <link rel="stylesheet" href="estilo.css">
</head>

<header>
    <H1>Scuffedzone</H1>
</header>

<body>

    <form method="GET">
        Producto: <input type="text" name="producto" /><br>
        <input type="submit" value="Enviar" />
    </form><br>

    <!-- Ejercicio 1 -->
    <!-- <form method="POST">
        1: <input type="text" name="num1" /><br>
        2: <input type="text" name="num2" /><br>
        <input type="submit" value="Enviar" />
    </form> -->

    <?php

    $producto = "producto";
    if (isset($_GET[$producto])) {
        $producto = trim($_GET[$producto]);

        if (empty($producto)) {
            echo "Producto no encontrado.";
        } else {
            echo "Resultado: </br>" . htmlspecialchars($producto);
        }
    }




    ?>

</body>

</html>