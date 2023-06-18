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
if(!$conn->set_charset("utf8")){
  printf("Error");
  exit;
}
// Create Tabla Tipos
$sql = "INSERT INTO `tipos` (`nombre_tipo`)
VALUES ('Casa'),
       ('Piso'),
       ('Finca')";
    
if ($conn->query($sql) === TRUE){
  echo "Se han creado nuevos tipos ";
} else {
  echo "Error: " . $conn->error;
}
// cierre de conexión
$conn->close();



?>

<p> Se acaban de insertar los diferentes tipos de inmuebles</p>

<a href="__instalacion.php">Volver a Instalador</a>
<?php include 'fragmentos/_footer.php';?>