<?php include 'fragmentos/_config.php';?>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<?php
conectar();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }
  else {
    $id = 1;
  }
$sql_count = "SELECT COUNT(*) as count FROM inmuebles";
$result_count = $conn->query($sql_count);
$count = $result_count->fetch_assoc()['count'];
$sql = "SELECT a.id, a.nombre, a.descripcion, a.precio, a.tipo, a.foto, a.latitud, a.longitud, b.id, b.nombre FROM inmuebles a INNER JOIN tipos b ON a.tipo =b.id WHERE a.id=$id";
// Ejecutar la consulta SQL
$resultado = $conn->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
 
  // Recorrer los resultados y mostrarlos
  while($fila = $resultado->fetch_assoc()) {
    ?>
    <?php $titulo=$fila["nombre"]." ".$fila["descripcion"]." ficha."; ?>
    <?php include 'fragmentos/_header.php';?>
    
    <div class="ficha">
    <div class="foto">
     <img src='img/<? echo $fila["foto"];?>.jpg'>
    </div>
    
    <div class="datos">
      <h1><span><?php echo $fila["nombre"]?></span></h1>
      <h2><span><?php echo $fila["descripcion"]?></span>
      <p><span>Tipo de inmueble:</span> <? echo $fila["nombre"];?></p>
      <p id="precio"><span>Precio:</span> <? echo $fila["precio"];?> €</p>
      <button onclick="mostrarMapa(<?php echo $fila["latitud"];?>, <?php echo $fila["longitud"];?>)" id="btnmap">Ver situación</button>

    </div>
    
    <?php
      }
      
    } else {
      echo "No se encontraron resultados";
    }
    ?>
    </div>
    
    <div id="showMap" style="width: 450px; height: 350px;"></div>

    <div class="botonera">
    <?php
    // Comprobar si hay una fila anterior
    $prev_id = $id - 1;
    $sql_prev = "SELECT id FROM inmuebles WHERE id=$prev_id";
    $result_prev = $conn->query($sql_prev);
    if ($result_prev->num_rows > 0) {
      echo "<a href='?id=$prev_id'><button>Anterior</button></a>";
    }
    
    // Cargar la siguiente fila disponible
    $next_id = $id + 1;
    $sql_next = "SELECT id FROM inmuebles WHERE id=$next_id";
    $result_next = $conn->query($sql_next);
    while ($result_next->num_rows == 0 && $next_id <= $count) {
      $next_id++;
      $sql_next = "SELECT id FROM inmuebles WHERE id=$next_id";
      $result_next = $conn->query($sql_next);
    }
    if ($next_id <= $count) {
      echo "<a href='?id=$next_id'><button>Siguiente</button></a>";
    }
    
    // Cerrar la conexión
    $conn->close();
    ?>
    </div>
    
    
    <script src="js/myscriptmap.js"></script>

<?php include 'fragmentos/_footer.php';?>
