<?php
require dirname(__FILE__) . "/../vendor/autoload.php";
require dirname(__FILE__) . "/../helpers/myHelpers.php";
require dirname(__FILE__) . "/../config/alumnes.php";

loadWhoops();

$arrayAlumnos=explode(":", $alumnes);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Cover Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

    <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand"><?=  greetins() ?></h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="index.php">Home</a>
        <a class="nav-link" href="pupils.php">Features</a>
        <a class="nav-link" href="upload.php">Contact</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">

  <table>

     <tr><th>Nombre</th><th>Grupo</th></tr>
         <?php  
         
         foreach($arrayAlumnos as $key ){

         $array2=explode(';', $key);


          echo paintLine($array2);

         }
         
         
         ?>
      
     
  
  </table>
  
  

  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p><?= valDate() ?></p>
    </div>
  </footer>
</div>
</body>
</html>
