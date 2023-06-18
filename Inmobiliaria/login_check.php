<?php 
//si existe por POST
if(isset($_POST['usuario']) && isset($_POST['password'])){
  conectar();
   $sql = "SELECT usuario, pass, rol, foto FROM usuarios  WHERE usuario= '".$_POST['usuario']."' AND pass='".$_POST['password']."';";
   $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "Usuario: " . $row["usuario"]. " - Contraseña: " . $row["pass"]. " Rol:" . $row["rol"]. "<br>";
      $miusuario=$row["usuario"];
      $mipassword=$row["pass"];
      $mirol=$row["rol"];
      $mifoto=$row["foto"];
    }
  } else {
  echo "El usuario no está en nuestra base de datos.<br>";
  } 
}
if(isset($miusuario)&&isset($mipassword)){
  abrirsesion();
  $_SESSION['usuario'] = $miusuario;
  $_SESSION['rol'] = $mirol;
  $_SESSION['foto']=$mifoto;
  header('Location:index.php');
}else{
  echo "Vuelva a loguearse";
}

?>