<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado clientela</title>
    <link rel="icon" type="image/x-icon" href="ejemplo_icon.ico">
    <link rel="stylesheet" href="../estiloEj2.css">
</head>

<body>
    <h1 class="tit">Listado cliente</h1>

</body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "actividad2";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<b>" . $row["nombre"] . " " . $row["apellidos"] . "</b> - Fecha de Nacimiento: " . $row["fecha"] . "<br>";
    }
} else {
    echo "No hay clientes registrados.";
}
?>
<footer>
    <br>
    <a href="actividad2.php"> <!--target="actividad2.php" ¿Abre una pestaña nueva?-->
        <button>Pagina principal</button>
    </a>
</footer>

</html>