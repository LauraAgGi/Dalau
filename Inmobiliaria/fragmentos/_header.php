<?php
// function Checksesion(){
//     if (session_status() === PHP_SESSION_NONE) {
//         session_start();
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo?></title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time()?>">
</head>
<body>
    <header>
        <nav>
          <img src="img/dalaulogo.png" alt="Logo Daluu">
          <h2 class="empresa">Inmobiliaria Dalau</h2>
          <?php include 'fragmentos/_menu.php';?>
        </nav>
    </header>
    <main>


    