
<?php $titulo="Modificar inmueble" ?>
<?php include 'fragmentos/_config.php';?>
<?php include 'fragmentos/_header.php';?>
<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }
  else {
  header('Location:inmueblesCRUD.php');
  }

$sql = "SELECT * FROM inmuebles WHERE id = $id";
// Ejecutar la consulta SQL'
$resultado = $conn->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
  echo '<ul class="crud">';
  // Recorrer los resultados y mostrarlos
  while($row = $resultado->fetch_assoc()) {
    $titulo=$row["nombre"]." ".$row["descripcion"]." ficha."; 
    echo '<ul class="inmueble">';
    echo '<li>';
    echo '<img src="./img/'.$row["foto"].'.jpg" alt="'.$row["nombre"].'">';
    echo'</li>';
   
    
   echo '<form id="modificar" action="modificar.php" method="post">
        <ul class="datos">
     <li><label for="id">ID:</label>
     <input type="text" id="id" value="'.$row["id"].'" name="id"></li>
     <li><label for="nombre">Nombre:</label>
     <input type="text" id="nombre" value="'.$row["nombre"].'" name="nombre"></li>
     <li><label for="descripcion">Descripción:</label>
     <input type="text" id="descripcion" value="'.$row["descripcion"].'" name="descripcion"></li>
     <li><label for="tipo">Tipo:</label>
     <input type="text" id="tipo" value="'.$row["tipo"].'" name="tipo></li>
     <li><label for="latitud">Latitud:</label>
     <input type="text" id="latitud" value="'.$row["latitud"].'" name="latitud"></li>
     <li><label for="longitud">Longitud:</label>
     <input type="text" id="longitud" value="longitud" name="longitud"></li>
     <li><label for="destacado">Destacado:</label>
     <input type="number" id="destacado" value="'.$row["destacado"].'" name="destacado"></li>
     <li><label for="imagen">Imagen:</label>
     <input type="file" id="imagen" value="'.$row["foto"].'" name="foto"></li>
     <li><label for="precio">Precio:</label>
     <input type="number" id="precio" value="'.$row["precio"].'" name="precio"></li>
     <li><input type="submit" value="Guardar modificacion" class="boton">
    <!--<input type="button" href="inmueblesCRUD.php" class="boton" value="Cancelar">-->
     </li>
      
    </ul><!--Fin de la lista datos-->
   </form>';
       
    echo "</li>";
   echo '</ul>';//Fin de la clase inmueble
    
  } 
  echo '</ul>';//  Fin de la clase crud
  

} else {
      echo "El inmueble no está en nuestra base de datos";
    }
    ?>
<?php 
if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['tipo']) && isset($_POST['latitud']) && isset($_POST['longitud'])&& isset($_POST['destacado'])&& isset($_POST['foto'])&& isset($_POST['precio'])) {
  $nombre       = $_POST['nombre'];
  $descripcion  = $_POST['descripcion'];
  $foto        = $_POST['foto'];
  $precio   = $_POST['precio'];
  $tipo      = $_POST['tipo'];
  $latitud   = $_POST['latitud'];
  $longitud   = $_POST['longitud'];
  
  // Crear conexión
  conectar();

  // Consulta SQL para obtener los datos de la tabla "alumnos"
  $sql = "UPDATE inmuebles SET id=$id AND nombre=$nombre WHERE id=$id";
// echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "El inmueble ha sido modificado en la base de datos";
} else {
  echo "Error a la hora de modificar el inmueble en la base de datos: " . $conn->error;
}

  // Ejecutar la consulta SQL

  }
  //Mostramos lo insertado en una mini-ficha:
  ?> 

<?php include 'fragmentos/_footer.php';?>
