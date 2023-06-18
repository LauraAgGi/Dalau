<?php $titulo="CRUD de los inmuebles" ?>
<?php include 'fragmentos/_config.php'?>
<?php include 'fragmentos/_header.php';?>
<a href="insertar.php" class="boton" id="insert">Insertar nuevo inmueble</a>
<?php
conectar();
$sql = "SELECT * FROM inmuebles;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo '<ul class="crud">';
    while($row = $result->fetch_assoc()) {;
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
            echo '<a href="modificar.php?id='.$row["id"].'" class="boton">Modificar</a>';
            echo '<a href="preguntareli.php" class="boton">Eliminar</a>';
            echo '</ul>';// Fin de la lista datos
        echo "</li>";
     echo '</ul>';//Fin de la clase inmueble

    }
    echo '</ul>';//  Fin de la clase crud
  
  } else {
    echo "No hay inmuebles";
  }
  
  
?>
<?php include 'fragmentos/_footer.php';?>