<?php $titulo="Nuestros inmuebles" ?>
<?php include 'fragmentos/_config.php'?>
<?php include 'fragmentos/_header.php';?>
<button onclick="cambiarVista()" id="btn" class="boton">Cambiar Vista</button>
<form action="inmuebles.php" method="post">
  <label for="inmuebles" method="post">Elije tu inmueble:</label>
  <select name="inmuebles" id="inmuebles">
    <option value="casas">Casas</option>
    <option value="pisos">Pisos</option>
    <option value="fincas">Fincas</option>
    <option value="todo">Todo</option>
  </select>
  <br><br>
  <input type="submit" value="Ver inmuebles">
</form>
<?php
if(isset($_POST['inmuebles'])){
  conectar();
  $inmuebletipo=$_POST['inmuebles'];
  global $tipo;
switch ($inmuebletipo) {
  case "casas":
    $sql = "SELECT * FROM inmuebles WHERE `tipo`='1';";
    break;
  case "pisos":
    $sql = "SELECT * FROM inmuebles WHERE `tipo`='2';";
    break;
  case "fincas":
    $sql = "SELECT * FROM inmuebles WHERE `tipo`='3';";
    break;
  case "todo":
    $sql = "SELECT * FROM inmuebles;";
    break; 
}
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<ul id="lista" class="vista1">';
  while($row = $result->fetch_assoc()) {
    $precio =$row["precio"];
    echo'<a href="ficha.php?id='.$row["id"].'">';
    echo '<li>';
    echo '<img src="./img/'.$row["foto"].'.jpg" alt="'.$row["nombre"].'">';
    echo "<h3>".$row["nombre"]. "</h3>";
    echo "<p>".$row["descripcion"]. "</p>";
    echo "<h4>".$row["precio"]. " €". "</h4>";
    echo "</li>";
    echo '</a>';
  }
  echo '</ul>';

} else {
  echo "No hay inmuebles";
}
}

?>
<h3><a href="destacados.php">Volver a destacados </a></h3>
<script src="js/myscript.js"></script>
<?php include 'fragmentos/_footer.php';?>