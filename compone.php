<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RUIZINI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .custom-bg {
    background-color: #BFC9CA ;
    color: #000000 ;
    font-size: 1.5em;
    height: 50vh;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
    border-radius: 30px;
    margin-bottom: 15px;
    
  }
  .custom-bg p {
    text-align: center;
}
  </style>
</head>
  <body>
  <!-- <div class="container-fluid">
    <img src="imagenesygif/logo2.gif" class="img" alt="GIF" >
</div> -->
<img src="imagenesygif/logo2.gif" class="img-fluid" alt="GIF" >

<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
// Comprobar si el usuario está en una pantalla más pequeña (celular, tablet, iPad)
if (strpos($user_agent, 'Mobile') !== false || strpos($user_agent, 'Tablet') !== false) {
    include 'nav.php'; // Archivo que contiene el código del menú para dispositivos móviles
} else {
    include 'navpc.php'; // Archivo que contiene el código del menú para PC o notebook
}
//include 'navpc.php'; // Archivo que contiene el código del menú para PC o notebook

?>
   

   <div class="container">
  <div class="row">
    <div class="col">
      <div class="card my-4" style="width: 20rem;">
        <img src="imagenesygif/carlosruiz.jpg" class="card-img-top " alt="...">
        <div class="card-body">
            <h5 class="card-title">Director/Dueño</h5>
          <h5 class="card-title">Carlos Ruiz</h5>

          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card my-4" style="width: 20rem;">
        <img src="imagenesygif/carlosm.jpg" class="card-img-top " alt="...">
        <div class="card-body">
          <h5 class="card-title">Desarrollador de Software</h5>
          <h5 class="card-title">Carlos Mondaca Castro</h5>

          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
         
        </div>
      </div>
    </div>
  </div>
</div>




<?php include 'footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>  
</body>
</html>