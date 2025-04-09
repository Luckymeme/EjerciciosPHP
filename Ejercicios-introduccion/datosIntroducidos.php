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
    <h1 class="titulo">Resultado</h1>
</header>

<body>
    <?php

    // $nom = "nom";
    // $apellido = "apellido";
    // list($nom,$apellido) = explode(" ",  $tnom);

    // $nom = "nom";
    // list($nom) = explode(" ",  $nom);

    // if (!empty($_GET['nom']) && !empty($_GET['apellido'])) { //!empty() verifica si la variable existe y no esta vacia isset() solo verifica si la variable existe pero permite valores vacios.
    //     $nom = htmlspecialchars($_GET[$nom]);
    //     $apellido = htmlspecialchars($_GET[$apellido]);
    //     echo "Datos alumno: </br>" . "<b>" . htmlspecialchars($nom . " " . $apellido) . "</b>";
    // } else {
    //     echo "Alumno no introducido.";
    // }


    $tnom = "tnom";
    if (!empty($_GET["tnom"])) {
        $tnom = htmlspecialchars($_GET["tnom"]);
        $partes = explode(" ", $tnom);

        echo "Datos alumno: </br>";
        foreach ($partes as $nombres) {
            echo "<b>" . $nombres . "</b> <br>";
        }
    } else {
        echo "Alumno no introducido.";
    }

    ?>
    <br>
    <a href="datosAlumno.php">Volver al formulario</a>

</body>

</html>