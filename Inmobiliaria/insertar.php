
<?php $titulo="Insertar un inmueble" ?>
<?php include 'fragmentos/_config.php';?>
<?php include 'fragmentos/_header.php';?>
<h1><?php $titulo ?></h1>
  <form id="insertar" action="insertar.php" method="post">
        <ul class="datos">
     <!-- <li><label for="id">ID:</label>
     <input type="text" id="id" name="nombre"></li> -->
     <li><label for="nombre">Nombre:</label>
     <input type="text" id="nombre" name="nombre"></li>
     <li><label for="descripcion">Descripción:</label>
     <input type="text" id="descripcion" name="descripcion"></li>
     <li><label for="tipo">Tipo:</label>
     <input type="text" id="tipo" name="tipo"></li>
     <li><label for="latitud">Latitud:</label>
     <input type="text" id="latitud" name="latitud"></li>
     <li><label for="longitud">Longitud:</label>
     <input type="text" id="longitud" name="longitud"></li>
     <li><label for="destacado">Destacado:</label>
     <input type="number" id="destacado" name="destacado"></li>
     <li><label for="imagen">Imagen:</label>
     <input type="file" id="imagen" name="foto"></li>
     <li><label for="precio">Precio:</label>
     <input type="number" id="precio" name="precio"></li>
     <li><input type="submit" value="Cargar" class="boton">
     <a href="inmueblesCRUD.php" class="boton">Volver a listado de inmuebles</a></li>


<?php 
if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['tipo']) && isset($_POST['latitud']) && isset($_POST['longitud'])&& isset($_POST['destacado'])&& isset($_POST['foto'])&& isset($_POST['precio'])) {
  $nombre       = $_POST['nombre'];
  $descripcion  = $_POST['descripcion'];
  $foto        = $_POST['foto'];
  $precio   = $_POST['precio'];
  $tipo      = $_POST['tipo'];
  $latitud   = $_POST['latitud'];
  $longitud   = $_POST['longitud'];
  $destacado  = $_POST['destacado'];
  // if (strlen($nombre) > 0 && strlen($descripcion) > 0 && strlen($foto) > 0 && strlen($precio) > 0 && strlen($tipo) > 0  && strlen($latitud) > 0  && strlen($longitud) > 0  && strlen($destacado) > 0)  {
    // procesar los datos recibidos

  //Si hay datos conectarse a la base de datos
  
  // Crear conexión
  conectar();

  // Consulta SQL para obtener los datos de la tabla "alumnos"
  $sql = "INSERT INTO inmuebles (nombre,descripcion, foto, precio, tipo, latitud, longitud, destacado)
  VALUES ('$nombre','$descripcion','$foto','$precio','$tipo','$latitud','$longitud','$destacado');";
// echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "El inmueble ha sido añadido a la base de datos";
} else {
  echo "Error a la hora de añadir el inmueble a la base de datos: " . $conn->error;
}

  // Ejecutar la consulta SQL

  }
  //Mostramos lo insertado en una mini-ficha:
  ?>

<?php include 'fragmentos/_footer.php';?>
