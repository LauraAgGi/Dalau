<?php $titulo="Inmuebles"; ?>
<?php include 'fragmentos/_config.php';?>
<?php include 'fragmentos/_header.php';?>
<h1>Estos son nuestros <?php echo $titulo ?></h1>
<h2>Inmuebles destacados</h2>
<button onclick="cambiarVista()" id="btn">Cambiar Vista</button>
<!-- <h3 id="titulillo">Hola</h3> -->
<?php
conectar();   
$sql = "SELECT * FROM inmuebles WHERE `destacado`=1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<ul id="lista" class="vista1">';
  while($row = $result->fetch_assoc()) {
    $precio =$row["precio"];
    
    echo '<li>';
    echo '<img src="img/'.$row["foto"].'.jpg" alt="'.$row["nombre"].'">';
        echo "<h3>".$row["nombre"]. "</h3>";
      echo '</div>';
    echo "<p>".$row["descripcion"]. "</p>";
    echo "<h4>".$row["precio"]. " €". "</h4>";
    echo "</li>";
  }
  echo '</ul>';

} else {
  echo "No hay inmuebles";
}
?>
<h3 id="btnmas"><a href="inmuebles.php">Ver más inmuebles</a></h3>

<script src="js/myscript.js"></script>
<?php include 'fragmentos/_footer.php';?>