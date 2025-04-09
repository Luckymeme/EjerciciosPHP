<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // echo "Nombre y apellido: " . $_GET["nom"] . "&nbsp" . $_GET["apellido"] . "<br>" . "Fecha: " . $_GET["fecha"];

    $servername = "localhost";
    $username = "root"; // Cambia si usas otro usuario
    $password = ""; // Si tienes contraseña, agrégala aquí
    $database = "actividad2";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $nombre =  $_GET["nombre"];
    $apellidos = $_GET["apellidos"];
    $fecha = $_GET["fecha"];

    $sql = "INSERT INTO clientes (nombre, apellidos, fecha) 
            VALUES ('$nombre', '$apellidos', '$fecha')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Cliente registrado correctamente');
            window.location.href = 'actividad2.php';
        </script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
    ?>
</body>

</html>