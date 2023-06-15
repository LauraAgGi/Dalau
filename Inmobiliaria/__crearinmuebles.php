<?php $titulo='Creación de base de datos'?>
<?php include 'fragmentos/_config.php';?>
<?php include 'fragmentos/_header.php';?>



<? 

// Create connection
$conn = new mysqli($servername, $username, $password, $basename);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(!$conn->set_charset("utf8")){
  printf("Error");
  exit;
}
// Create Tabla Tipos
$sql = "INSERT INTO `inmuebles` (`nombre`, `descripcion`, `foto`, `precio`, `tipo`, `latitud`, `longitud`, `destacado`)
VALUES ('Piso en calle la Argandona,2, Centro-Puerto, Gijón', 'En el principio de la calle Argandona, a tan solo cien metros de la Plaza de Europa tienes este fantástico piso en el que puedes entrar y reformarlo a tu gusto poco a poco.', 'Foto001', '145000', '2', '43.53693538658361', '-5.66447',1),
       ('Casa Chalet independiente en camino de las Prímulas, 180, Somió, Gijón', 'En la mejor zona de SOMIÓ, chalet unifamiliar con parcela llana, en perfecto estado y muy soleada.', 'Foto002', '690000', '1', '43.529548454953094', ' -5.614361764417683',1),
       ('Terreno en Camín de Granda a Contrueces, Granda, Gijón', '3 únicas y exclusivas parcelas edificables en la mejor zona de Granda!', 'Foto003', '155000', '3', '43.5067379852188847', '-5.66171',1),
       ('Piso en calle San Bernardo, 15, Centro-Puerta, Gijón', 'EXCLUSIVO, a un paso de la PLAYA, céntrico, completamente reformado, exterior, un auténtico lujo!', 'Foto004', '588000', '2', '40.4236', ' -3.70815',1),
       ('Casa chalet independiente en carretera de Lavandera, Vega, Gijón', 'Vivienda independiente de 186m2 útiles, en Vega situada en un entorno rural y con vistas despejadas.', 'Foto005', '375000', '1', '43.48090336768237', ' -5.647639935582318',0),
       ('Terreno en Somió-Cabueñes','FINCA EDIFICABLE de 1610 m2 con espectaculares vistas desde lo alto de Somió a escasos metros del jardín de los FIGAREDO','Foto006','250000','3','43.53478','-5.62438',0),
       ('Piso en Viesques','Vivienda situada en la calle Albuquerque, una de las mejores zonas residenciales y de las más demandas. ','Foto007','229000','2','43.52666','-5.65132','0'),
       ('Casa rústica en Camino Antiguo de Peón','Fantástica casa independiente en una zona privilegiada de Deva, muy cerca del restaurante Casa Pilar y a 15 minutos del centro de Gijón','Foto008','175000','1','43.51971','-5.58867',0),
       ('Terreno en Camino Llantones','Fin de semana de unos 2200 metros cuadrados situado en Llantones, muy cerca del núcleo urbano.','Foto009','70000','3','43.48126','-5.68044',0),
       ('Casa en Carretera de Lavandera','Adosado en la zona de Vega ( La Camocha ),con todos los servicios a pie de calle, farmacia ( enfrente de la urbanización ), supermercado, colegio, guardería','Foto010','259000','1','43.48667','-5.65002',0),
       ('Terreno en calle Camino de la Carbayera-Granda-Parcela,nº185','Parcelas edificables en Granda, al lado del restaurante la Carbayera de Granda. Son totalmente llanas, y con todos los servicios.','Foto011','140000','3','43.48121','-5.68041',0),
       ('Piso en calle Avenida José Manuel Palacio','vivienda forma parte de un edificio construido en el año 2006 en la calle Jose Manuel Palacio Alvarez 44, un emplazamiento muy próximo a la playa de Poniente','Foto012','205000','2','43.53547','-5.70210',0)
       ;";
if ($conn->query($sql) === TRUE){
  echo "Se ha creado ";
} else {
  echo "Error: " . $conn->error;
}
// cierre de conexión
$conn->close();



?>

<p> Se acaban de insertar inmuebles en la tabla de datos: inmuebles</p>

<a href="__instalacion.php">Volver a Instalador</a>