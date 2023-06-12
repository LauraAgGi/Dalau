<?php $titulo='Creación de base de datos'?>
<?php include 'fragmentos/_config.php';?>
<?php include 'fragmentos/_header.php';?>



<? 

// Create connection
$conn = new mysqli($servername, $username, $password, $basename);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create Tabla 
$sql = "CREATE TABLE IF NOT EXISTS`usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `usuario` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL
) COLLATE 'utf8_spanish2_ci';";

if ($conn->query($sql) === TRUE){
  echo "<h2 class=mens>Se ha creado la tabla usuarios</h2>";
} else {
  echo "Error: " . $conn->error;
}
// cierre de conexión
$conn->close();



?>

<p> Se acaba de crear la tabla de datos: usuarios</p>

<a href="__instalacion.php">Volver a Instalador</a>