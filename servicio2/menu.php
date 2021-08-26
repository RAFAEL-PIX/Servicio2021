<?php
session_start();
if(!(isset($_SESSION['usuarioS']))){
  header("Location:login.html");

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c80dac9823.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Css/Style.css" />

    <title>Pagina Principal!</title>
  </head>
    <br>
   <body class="bg-green">
  <section>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
          <div class="container-fluid">
            <a class="navbar-brand margin-left: 5rem" href="#"><img src="Img/LOGO.png" class="img-fluid" width="110" height="300"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto text-left">
                <li class="nav-item">
                  <a class="fw-bold text-success nav-link active" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="fw-bold text-success nav-link" href="#">Autorizacion de Reportes</a>
                </li>
                <li class="nav-item">
                  <a class="fw-bold text-success nav-link" href="G_Reportes.php">Generar Reportes</a>
                </li>
                <li class="nav-item">
                  <a class="fw-bold text-success nav-link" href="#">Control de Reportes</a>
                </li>
                <li class="nav-item">
                  <a class="fw-bold text-success nav-link" href="formulario.php">nuevo usuario</a>
                </li>
                <li class="nav-item">
                  <a class="fw-bold text-success nav-link" href="#">Ver Reportes</a>
                </li>
                <li class="nav-item">
                  <a class="fw-bold text-success nav-link" href="partials/cerrar_sesion.php">Cerrar Sesion</a>
                </li>
                
                <li class="nav-item">
                </li>
              </ul>
            </div>
          </div>
        </nav>

  </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>