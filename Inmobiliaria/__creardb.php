<?php $titulo='Creación de base de datos'?>
<?php include 'fragmentos/_config.php';?>
<?php include 'fragmentos/_header.php';?>



<? 

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $basename";
if ($conn->query($sql) === TRUE) {
  echo "La base de datos Inmuebles esta creada";
} else {
  echo "Error en la creación de la base de datos: " . $conn->error;
}

// cierre de conexión





?>

<p> Se acaba de crear la base de datos: inmobiliaria</p>

<a href="__instalacion.php">Volver a Instalador</a>
<?php include 'fragmentos/_footer.php'?>