<ul class="menu">
    <li><a href="<?u()?>">Inicio</a></li>   
   <?php
    abrirsesion();
    if(isset($_SESSION['usuario'])){
    ?>
        <li><a href="<? u()?>inmueblesCRUD.php">InmueblesCRUD</a></li>
    <?php
       if($_SESSION['rol']=='admin'){
       echo '<li><a href="__instalacion.php">Instalacion</a></li>';
       }
       echo '<div class="usuario">';
       echo '<img class="avatar" src="img/'.$_SESSION['foto'].'.jpg" alt="foto de '.$_SESSION['usuario'].'">';
       echo '<p>'.$_SESSION['usuario'].' '.$_SESSION['rol'].'</p>';
       echo '<p><a href="cierreSesion.php">Cerrar Sesión</a></p>';
       echo '</div>'; 
    ?>
    
    <? }else{?>

        <li><a href="<? u()?>destacados.php">Inmuebles</a></li>
        <li><a href="<? u()?>nosotros.php">Nosotros</a></li>
        <li><a href="<? u()?>contacto.php">Contacto</a></li>
        <li><a href="<? u()?>login.php">Zona Restringida</a></li>

  <?php   } ?>

</ul>

