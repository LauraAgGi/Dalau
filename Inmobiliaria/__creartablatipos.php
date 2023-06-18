<?php $titulo='Creación de base de datos'?>
<?php include 'fragmentos/_config.php';?>
<?php include 'fragmentos/_header.php';?>



<?php

// Create connection
$conn = new mysqli($servername, $username, $password, $basename);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create Tabla Tipos
$sql = "CREATE TABLE IF NOT EXISTS `tipos` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre_tipo` varchar(255) NOT NULL
);";
if ($conn->query($sql) === TRUE){
  echo "Se ha creado ";
} else {
  echo "Error: " . $conn->error;
}
// cierre de conexión
$conn->close();

?>

<p> Se acaba de crear la tabla de datos: tipos</p>

<a href="__instalacion.php">Volver a Instalador</a>