
<?php $titulo="Editar inmueble" ?>
<?php include 'fragmentos/_config.php';?>
<?php include 'fragmentos/_header.php';?>

<h1><?php $titulo?></h1>


<?php 
conectar();
//  if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['tipo']) && isset($_POST['latitud']) && isset($_POST['longitud'])&& isset($_POST['destacado'])&& isset($_POST['foto'])&& isset($_POST['precio'])) {
  //  $nombre, $descripcion, $foto, $precio, $tipo, $latitud, $longitud;
   $id = $_POST['id'];
   $nombre = $_POST['nombre'];
   $descripcion = $_POST['descripcion'];
   $foto = $_POST['foto'];
   $precio = $_POST['precio'];
   $tipo = $_POST['tipo'];
   $latitud = $_POST['latitud'];
   $longitud = $_POST['longitud'];
   $destacado=$_POST['destacado'];
  
   echo $nombre; 
 
  // Crear conexión
conectar();

//    // Consulta SQL para obtener los datos de la tabla "alumnos"
  $sql = "UPDATE `inmuebles` SET
  `id` = '$id',
  `nombre` = '$nombre',
  `descripcion` = '$descripcion',
  `foto` = '$foto',
  `precio` = '145000',
  `tipo` = '2',
  `latitud` = '43.5369',
  `longitud` = '-5.66447',
  `destacado` = '1'
  WHERE `id` = '$id';";
  
 
    
 echo $sql;

 if ($conn->query($sql) === TRUE) {
   echo "El inmueble ha sido modificado en la base de datos";
  
  } else {
    echo "Error a la hora de modificar el inmueble en la base de datos: " . $conn->error;
   }

 //header("Location:editar.php?id=$id");
 ?>  
  

<?php include 'fragmentos/_footer.php';?>
