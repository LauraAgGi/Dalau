<?php $titulo="Instalación de la inmobiliaria Dalau" ?>
<?php include 'fragmentos/_config.php';?>
<?php include 'fragmentos/_header.php';?>
<h1>Bienvenidos a la <?php echo $titulo ?></h1>
<!-- <h2>Tu instalador personal de confianza</h2>
<img src="img/instalador.png" id="instalador" alt="Instalador"> -->
<ul class="install">
    <h3>Base de Datos</h3>  
    <li><a href="__creardb.php">Crear Base de Datos "Inmobiliaria"</a></li>
    <h3>Creacion de nuestras tablas de inmuebles:</h3>
    <p><li><a href="__creartablainmuebles.php">Crear Tabla "Inmuebles"</a></li></p>
    <p><li><a href="__creartablatipos.php">Crear Tabla "Tipos"</a></li></p>
    <p><li><a href="__creartablausuarios.php">Crear Tabla "Usuarios"</a></li></p>
    <h3>Creacion de nuestros de nuestros inmuebles en la tabla "Inmuebles":</h3>
    <p><li><a href="__crearinmuebles.php">Crear Inmuebles</a></li></p>
    <p><li><a href="__crearusuarios.php">Crear Usuarios</a></li></p>
    <li><a href="--borrar.php">Borrar Base de Datos</a></li>
  </ul>
 
  <br>
  
  
  <a href="index.php">Volver a Inicio</a>


<?php include 'fragmentos/_footer.php';?>