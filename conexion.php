<?php
$host = 'localhost';
$dbname = 'BodaMyE'; // cuidado con el carácter especial (&)
$usuario = 'postgres';
$contrasena = 'tssped';

try {
  $conn = new PDO("pgsql:host=$host;dbname=$dbname", $usuario, $contrasena);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "❌ Error de conexión: " . $e->getMessage();
}
?>


