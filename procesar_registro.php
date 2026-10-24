<?php
// Capturar datos del formulario
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];

// Aquí podrías guardar en una base de datos.
// Por ahora solo mostramos un mensaje.
echo "<h1>Usuario registrado con éxito</h1>";
echo "<p>Nombre: $usuario</p>";
echo "<p>Correo: $correo</p>";
echo "<a href='index.php'>⬅ Volver al menú</a>";
?>