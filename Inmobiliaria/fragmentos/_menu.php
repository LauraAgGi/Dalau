<ul class="menu">
    <li><a href="<?u()?>">Inicio</a></li>
    <li><a href="<?u()?>destacados.php">Inmuebles</a></li>
    <li><a href="<?u()?>nosotros.php">Nosotros</a></li>
    <li><a href="<?u()?>contacto.php">Contacto</a></li>
    <?php
    abrirsesion();
    if(!isset($_SESSION['usuario'])){
     echo '<li><a href="login.php">Zona Restringida</a></li>';
    }
    ?>
    <?php

    if(isset($_SESSION['usuario'])){
        echo 'Hola';
        echo '<div class="usuario">';
        echo '<img class="avatar" src="img/'.$_SESSION['foto'].'.jpg" alt="foto de '.$_SESSION['usuario'].'">';
        echo '<p>'.$_SESSION['usuario'].' '.$_SESSION['rol'].'</p>';
        echo '<p><a href="cierreSesion.php">Cerrar Sesión</a></p>';
        echo '</div>';
    
     }
    ?>
</ul>

