<?php $titulo="Cierre de sesion" ;?>
<?php include 'fragmentos/_config.php';?>
<?php
abrirsesion();
session_destroy();
?>
<?php include 'fragmentos/_header.php';?>


<h1>La sesión se ha cerrado</h1>
<p id="cierre">Para volver a iniciar sesión tendrá que loguearse en: <a href="login.php">  Acceder</a></p>
<?php include 'fragmentos/_footer.php'; ?>