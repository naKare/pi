<?php
// Información de conexión a la base de datos
$host = "localhost";
$user = "root";
$pass = "1821";
$dbname = "usuariosplan";

// Conectarse a la base de datos
$conn = new mysqli($host, $user, $pass, $dbname);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Procesar el formulario si se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Insertar los datos en la tabla "usuarios"
    $sql = "INSERT INTO registro (nombre, email, username, password) VALUES ('$nombre', '$email', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
header("Location: login.html");
exit();
} else {
        echo "Error al insertar el registro: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
