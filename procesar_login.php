<?php
// Capturar datos del formulario
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

// Aquí podrías validar contra una base de datos.
// Por ahora solo mostramos un mensaje.
echo "<h1>Bienvenido, $usuario</h1>";
echo "<p>Tu sesión ha sido iniciada correctamente.</p>";
echo "<a href='index.php'>⬅ Volver al menú</a>";
?>