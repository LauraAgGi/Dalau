<?php $titulo="Inicio de Sesion" ?>
<?php include 'fragmentos/_config.php' ?>
<?php include './fragmentos/_header.php';?> 

<h1>Identifíquese para acceder a la zona restringida</h1>
<form action="login.php" method="post">
    <label for="usuario">Introduzca su nombre de usuario</label><br>
    <input type="text" id="usuario" name="usuario" placeholder="Pepito Pérez" required><br><br>
    <label for="pass">Introduzca su contraseña</label><br>
    <input type="password" id="pass" name="password" required><br><br>
    <input type="submit" value="Iniciar sesión">
</form>
<?php include 'login_check.php';?>
<?php include 'fragmentos/_footer.php';?>
