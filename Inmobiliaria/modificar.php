
<?php include 'fragmentos/_config.php';?>
<?php
conectar();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }
  else {
    $id = 1;
  }

$sql = "SELECT * FROM inmuebles WHERE id = $id";
// Ejecutar la consulta SQL'
$resultado = $conn->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
 
  // Recorrer los resultados y mostrarlos
  while($row = $resultado->fetch_assoc()) {
    $titulo=$row["nombre"]." ".$row["descripcion"]." ficha."; 
    include 'fragmentos/_header.php';
    echo '<ul class="inmueble">';
    echo '<li>';
    echo '<img src="./img/'.$row["foto"].'.jpg" alt="'.$row["nombre"].'">';
    echo'</li>';
    echo'<li>';
    echo '<ul class="datos">';
        echo "<li><h2>ID: ".$row["id"]. "</h3></li>";
        echo "<li><h2>Nombre: ".$row["nombre"]. "</h3></li>";
        echo "<li><p> Descripcion: ".$row["descripcion"]. "</p></li>";
        echo "<li><h4>Tipo: ".$row["tipo"]."</h4></li>";
        echo "<li><h4>Latitud: ".$row["latitud"]. "</h4></li>";
        echo "<li><h4>Longitud: ".$row["longitud"]. "</h4></li>";
        if($row["destacado"]){
            echo "<li>Es un destacado</li>";
        }
        echo "<h4>".$row["precio"]. " €". "</h4>";
        echo '<a href="Guardar.php?id='.$row["id"].'" class="boton">Modificar</a>';
        echo '<a href="Cancelar.php" class="boton">Eliminar</a>';
        echo '</ul>';// Fin de la lista datos
    echo "</li>";
   echo '</ul>';//Fin de la clase inmueble
      
    } 
 
} else {
      echo "El inmueble no está en nuestra base de datos";
    }
    ?>
    

<?php include 'fragmentos/_footer.php';?>
