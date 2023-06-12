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
if(!$conn->set_charset("utf8")){
  printf("Error");
  exit;
}
// Create Tabla Tipos
$sql = "INSERT INTO `usuarios` (`usuario`, `pass`, `email`, `rol`,`foto` ,`timestamp`)
VALUES ('Laura','Laura','laura@dalau.com','admin','fotoLaura',now()),
       ('David','David','david@dalau.com','admin','fotoDavid',now()),
       ('Pepito','Pepito','pepito@dalau.com','staff','fotoPepito',now()),
       ('Manolita', 'Manolita', 'manolita@dalau.com', 'staff','fotoManolita', now());";
if ($conn->query($sql) === TRUE){
  echo "Se han creado nuevos usuarios ";
} else {
  echo "Error: " . $conn->error;
}
// cierre de conexión
$conn->close();



?>

<p> Se acaban de insertar inmuebles en la tabla de datos: inmuebles</p>

<a href="__instalacion.php">Volver a Instalador</a>
<?php include 'fragmentos/_footer.php';?>