<?php
// Establecer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "1818";
$dbname = "usuariosregistrados";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
  die("La conexión ha fallado: " . mysqli_connect_error());
}

// Recuperar los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];

// Insertar los datos en la tabla de usuarios
$sql = "INSERT INTO usuarios (nombre, email, password, username) VALUES ('$nombre', '$email', '$password', '$username')";

if (mysqli_query($conn, $sql)) {
  echo "Los datos se han insertado correctamente.";
} else {
  echo "Ha ocurrido un error: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>
