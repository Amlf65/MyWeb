<?php 
session_start();
  if (isset($_SESSION['ingreso']) && $_SESSION['ingreso']=='YES') {
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>A.M.L.F.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../recursos/css/bootstrap.min.css">
    <link rel="stylesheet" href="../recursos/css/main.css">
    <link rel="icon" type="image/svg+xml" href="../recursos/img/admin.svg" sizes="any">

</head>

<body>
    <!--Barra de Navegacion-->
    <?php 
        require_once('menu_privado.php');
    ?>
    <!--Pie de página-->
    <?php 
        require_once('pie_pagina.php');
    ?>
    <div class="modal fade" id="actusu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h2 class="modal-title">Activar Usuario</h2>
                </div>
                <div class="modal-body">
                    <div class="alert alert-success text-center" id="exito" style="display:none;">
                        <span class="glyphicon glyphicon-ok"> </span><span> Su cuenta ha sido registrada</span>
                    </div>
                    <form class="form-horizontal" id="formCliente">

                        <div class="form-group">
                            <label for="email2" class="control-label col-xs-5">Usuario</label>
                            <div class="col-xs-5">
                                <input id="email2" name="email2" type="email" class="form-control" placeholder="Introducir usuario">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button id="btn_registrar" type="button" class="btn btn-success">Guardar</button>
                    <!--onclick="registrar();"-->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script src="../recursos/js/jquery-3.4.1.min.js"></script>
    <script src="../recursos/js/bootstrap.min.js"></script>
    <script src="../recursos/js/popper.min.js"></script>

    <script>
        function cerrar() {
            $.ajax({
                url: '../controlador/usuario.php',
                type: 'POST',
                data: "boton=cerrar"
            }).done(function(resp) {
                window.location.href = "../index.php";
            });
        }

        function activar(nombre) {
            $.ajax({
                url: '../controlador/usuario.php',
                type: 'POST',
                data: !!!!!"&boton=activar"
            }).done(function(resp) {
                if (resp == 'exito') {
                    alert("Ok");
                } else {
                    alert(resp);
                }
            });
        }

        function presentar(nombre) {
            $.ajax({
                url: '../controlador/usuario.php',
                type: 'POST',
                data: !!!!!"&boton=activar"
            }).done(function(resp) {
                if (resp == 'exito') {
                    alert("Ok");
                } else {
                    alert(resp);
                }
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
