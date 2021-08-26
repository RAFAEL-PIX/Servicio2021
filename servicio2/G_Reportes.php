<?php
?>
<!doctype html>
<html lang="es">
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

    <title>Generar Reportes!</title>
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
                  <a class="fw-bold text-success nav-link" href="#">Generar Reportes</a>
                </li>
                <li class="nav-item">
                  <a class="fw-bold text-success nav-link" href="#">Control de Reportes</a>
                </li>
                <li class="nav-item">
                  <a class="fw-bold text-success nav-link" href="formulario.php">nuevo usuario</a>
                </li>
                <li class="nav-item">
                  <a class="fw-bold text-success nav-link" href="A_Reportes.php">Ver Reportes</a>
                </li>
                <li class="nav-item">
                  <a class="fw-bold text-success nav-link" href="partials/cerrar_sesion.php">Cerrar Sesion</a>
                </li>
                <?php
                  session_start();

                  $sesion_id = $_SESSION['idS'];
                  $sesion_nombre = $_SESSION['nombreS'];
                  $sesion_apellidos = $_SESSION['apellido'];

                
                ?>
                <li class="nav-item">
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </section>


    
    <form class="row g-3 col-sm-20 bg-light p-4 border" id="reporte">
    <div class="col-md-4">
      <label for="inputnombre" class="form-label">universidad</label>
      <select id="universidad" class="form-select">
        <option selected></option>
        <option>IUA</option>
        <option>TESI</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="inputapellidos" class="form-label">No.Reporte</label>
      <input type="text" class="form-control" id="nreportes" >
    </div>
    <div class="col-md-4">
      <label for="inputapellidos" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" value = <?php echo $sesion_nombre; ?> disabled>
    </div>
    <div class="col-md-4">
      <label for="inputapellidos" class="form-label">apellidos</label>
      <input type="text" class="form-control" id="apellidos" value = <?php echo $sesion_apellidos; ?> disabled>
    </div>
    <div class="col-md-4">
      <label for="inputapellidos" class="form-label">id_usuarios</label>
      <input type="text" class="form-control" id="idusu" value = <?php echo $sesion_id; ?> disabled>
    </div>
    <div class="col-md-4">
      <label for="inputapellidos" class="form-label">Fecha de reporte</label>
      <input type="date" class="form-control" id="fecha">
    </div>
    <div class="col-md-4">
      <label for="inputapellidos" class="form-label">Carrera</label>
      <select id="carrera" class="form-select">
        <option selected></option>
        <option>Contabilidad</option>
        <option>Sistemas</option>
      </select>
    </div>
    <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Area del Reporte</label>
  <textarea class="form-control" id="area_report" rows="5"></textarea>
</div>
    <div class="d-flex justify-content-center col-12">
      <button type="submit" class="btn btn-primary" style="margin: 20px">Guardar</button>

      <button type="button" onclick = 'cancelar()' class="btn btn-primary" style="margin: 20px">Cancelar</button>

      <button type="reset" class="btn btn-primary" style="margin: 20px">Limpiar</button>
    </div>
  </form>


    <script src="https://code.jquery.com/jquery-3.6.0.js"integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="sweetalert2.all.min.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <script src="js/Reportes.js"></script>
    <script>
      function cancelar() {
        window.location.href='menu.php';
        
      }
    </script>
  </body>
</html>