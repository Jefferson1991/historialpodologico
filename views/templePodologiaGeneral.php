<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="">
    <title>PODO SYSTEM </title>
    
    <link rel="stylesheet" href="views/assests/css/bootstrap.css">
    <link rel="stylesheet" href="views/assests/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="views/assests/css/sweetalert.css">
    <link rel="stylesheet" href="views/assests/vendor/font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="views/assests/vendor/jquery-ui-1.12.1.custom/jquery-ui.css">
    <script src="views/assests/js/jquery-3.3.1.js"></script>
    <script src="views/assests/vendor/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
          <script>
          $(function() {
            $( "#fechaIngresoPaciente" ).datepicker();
          } );
          </script>

</head>
<body class="container" style="background-color: gray;">
    <div>
        <div class="intro">
            <h2 class="text-center" style="color:white;">EMPRESA HOSPITAL  DEL PIE</h2>
            <p class="text-center" style="color:white;">Sistema de pacientes en tratamiento podologico</p>
        </div>
                 <?php
                    $enlacesDePagina = new PlantillaController();
                    $enlacesDePagina -> enlacePaginaController();
                 ?>
   </div>
    <script src="views/assests/js/bootstrap.min.js"></script>
    <script src="views/assests/js/jquery.dataTables.min.js"></script>
    <script src="views/assests/js/dataTables.bootstrap4.min.js"></script>
    <script src="views/assests/js/sweetalert.js"></script>
    <script src="views/assests/js/ingresoPaciente.js"></script>
</body>
</html>