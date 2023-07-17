
<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu base de datos está en un servidor remoto
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$modelo = $_POST['modelo'];
$precio = $_POST['precio'];



$sql = "INSERT INTO user (nombre, tipo , modelo ,precio) VALUES ('$nombre', '$tipo','$modelo','$precio')";

if ($conn->query($sql) === TRUE) {
    echo "Datos guardados correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
