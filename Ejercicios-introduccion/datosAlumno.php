<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 3</title>
    <link rel="icon" type="image/x-icon" href="ejemplo_icon.ico">
    <link rel="stylesheet" href="estilo2.css">
</head>

<header>
    <h2>Formulario</h2>
</header>

<body>

    <form action="datosIntroducidos.php" method="GET">
        Nombre legal: <input type="text" name="tnom" /><br>
        <!-- Nombre: <input type="text" name="nom" /><br>
        Apellido: <input type="text" name="apellido" /><br> -->
        <input type="submit" value="Enviar" />
    </form><br>

    <!-- <?php
            // $nom = "nom";
            // echo "Alumno: " . htmlspecialchars($_GET[$nom]) . ".<br>";

            ?> -->

</body>

</html>