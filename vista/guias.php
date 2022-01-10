<?php 
session_start();
  if (isset($_SESSION['ingreso']) && $_SESSION['ingreso']=='YES') {
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A.M.L.F.</title>

    <link rel="stylesheet" href="../recursos/css/bootstrap.min.css">
    <link rel="stylesheet" href="../recursos/css/main.css">
    <link rel="icon" type="image/svg+xml" href="../recursos/img/admin.svg" sizes="any">

</head>

<body>
    <!--Barra de Navegacion-->
    <?php 
        require_once('menu_privado.php');
    ?>
    <div class="container" style="margin-top:80px; margin-bottom:50px;">
        <div class="row justify-content-center">

            <div class="col-12 col-md-11 col-lg-10  col-lg-9 p-0">  
                <div class="card-header bg-primary  justify-content-around">

                    <span class="display-4 text-light">GUIAS DIDACTICAS</span>

                </div>
                <div class="card-body" id="base_web">

                </div>

            </div>

        </div>
    </div>
    <?php 
        require_once('pie_pagina.php');
    ?>
    <script src="../recursos/js/jquery-3.4.1.min.js"></script>
    <script src="../recursos/js/bootstrap.min.js"></script>
    <script src="../recursos/js/popper.min.js"></script>
    <script>
       $(document).ready(function() {
            $("#mp_guias :nth-child(1)").addClass("text-warning")
            listar();
        });

        /* function cerrar() {
            $.ajax({
                url: '../controlador/guias.php',
                type: 'POST',
                data: "boton=cerrar"
            }).done(function(resp) {
                window.location.href = "index.php";
            });
        } */

        function listar() {
            $.ajax({
                url: '../controlador/guias.php',
                type: 'POST',
                data: 'boton=listar'
            }).done(function(resp) {
                    $("#base_web").html(resp);
                },

            ).fail(function(jqXHR, textStatus, errorThrown) {
                alert("Error!!!  ../controlador/guias.php");
            })
        }
        function cerrar() {
            $.ajax({
                url: '../controlador/usuario.php',
                type: 'POST',
                data: "boton=cerrar"
            }).done(function(resp) {
                window.location.href = "../index.php";
            });
        }

    </script>
</body>

</html>

<?php

  }
  else
  {
    header("location: login.php");
  }
 ?>
