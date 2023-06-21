
<?php $titulo="Editar inmueble" ?>
<?php include 'fragmentos/_config.php';?>
<?php include 'fragmentos/_header.php';?>

<h1><?php $titulo?></h1>


<?php 

 if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['tipo']) && isset($_POST['latitud']) && isset($_POST['longitud'])&& isset($_POST['destacado'])&& isset($_POST['foto'])&& isset($_POST['precio'])) {
   global $nombre, $descripcion, $foto, $precio, $tipo, $latitud, $longitud;
   $nombre       = $_POST['nombre'];
   $descripcion  = $_POST['descripcion'];
   $foto        = $_POST['foto'];
   $precio   = $_POST['precio'];
   $tipo      = $_POST['tipo'];
   $latitud   = $_POST['latitud'];
   $longitud   = $_POST['longitud'];
   echo $nombre;
 }

//   // Crear conexión
   conectar();

   // Consulta SQL para obtener los datos de la tabla "alumnos"
  $sql = "UPDATE `inmuebles` SET
`id` = '26',
`nombre` = $nombre,
`descripcion` = 'La supercasa de Bea',
`foto` = 'Foto002.jpg',
`precio` = '70000',
`tipo` = '1',
`latitud` = '48.897',
`longitud` = '-5.89809',
`destacado` = '1'
WHERE `id` = '26'; ";
  
    
 echo $sql;
 if ($conn->query($sql) === TRUE) {
   echo "El inmueble ha sido modificado en la base de datos";
  } else {
    echo "Error a la hora de modificar el inmueble en la base de datos: " . $conn->error;
  }
}
header('Location:modificar.php');
// ?>  
  

<?php include 'fragmentos/_footer.php';?>
