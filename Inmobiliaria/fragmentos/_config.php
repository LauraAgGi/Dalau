<?php
//DATOS GENERALES
// $url='http://inmobiliaria.local/Inmobiliaria/';
$url='http://localhost:8080/Inmobiliaria/';

//Datos de conexión
$servername = "localhost";
$username = "root";
// $password = "root";
$basename = "inmobiliaria";



////-------------------------------------


// FUNCIONES 
function url(){
  global $url;
  echo $url;
}


function u(){
  url();
}


// ABRE CONEXIÓN
conectar();
if(!isset($_SESSION['usuario'])){
$conexionabierta=false;
};
function conectar(){
  global $conn, $servername, $username, $password, $basename;
  //Temporal para el usuario
  $conn = new mysqli ($servername, $username, $password,$basename);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
    $conexionabierta=true;
  };

if(!$conn->set_charset("utf8")){
  printf("Error");
  exit;
}
 
} // -- -fin de la función conectar()




// INICIA LA SESIÓN SI NO HA ASIDO YA ABIERTA ------
// abrirsesion()
function abrirsesion(){
  //Inicia sesión
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
}// fin de la función abrirsesion
// ---------------------------


?>

