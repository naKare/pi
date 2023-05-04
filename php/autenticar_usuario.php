<?php
// Obtener los valores del formulario
$correo_electronico = $_POST["correo_electronico"];
$contrasena = $_POST["contrasena"];

// Consultar la base de datos para ver si el usuario existe
$sql = "SELECT * FROM usuarios WHERE correo_electronico = '$correo_electronico' AND contrasena = '$contrasena'";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {
    // El usuario existe, redirigir a la página de inicio
    header("Location: ../inicio.html");
} else {
    // El usuario no existe, mostrar un mensaje de error
    echo "Usuario o contraseña incorrectos";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
