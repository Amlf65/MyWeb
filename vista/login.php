<?php 
    session_start();
    if (isset($_SESSION['ingreso']) && $_SESSION['ingreso']=='YES') 
    {
        header("location: index.php");
    }
    else
    {

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A.M.L.F.</title>

    <link rel="stylesheet" href="../recursos/css/bootstrap.min.css">
    <link rel="stylesheet" href="../recursos/css/main.css">
    <link rel="icon" type="image/svg+xml" href="../recursos/img/admin.svg" sizes="any">
</head>

<body>
    <!--Barra de Navegacion-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top clrfondomenu">

        <a class="navbar-brand" href="..\index.php" class="navbar-brand" id="adolfo"><img src="..\recursos\img\adminal.svg" alt="Administrador" style="height:40px;"></a>   
        <!-- <span class="h5">Adolfo Lozano</span> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item h5">
                    <a class="nav-link text-secondary" href="#" id="navbarDropdown" role="button" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#responsive">Registrarse</a>
                </li>
            </ul>
        </div>
    </nav>
     <!--Pie de página-->
     <?php 
        require_once('pie_pagina.php');
    ?>
    <div class="container"  style="margin-top:80px; margin-bottom:50px;">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header h5 clrfondomenu"><strong>Iniciar Sesion</strong></div>
                    <div class="card-body">

                        <form role="form">
                            <div class="form-group">
                                <label for="email"> <span class="fas fa-user"></span>&nbsp;&nbsp;Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control" id="email" placeholder="Nombre usuario">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password"> <span class="fas fa-star"></span>&nbsp;&nbsp;Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="password" class="form-control" id="password" placeholder="Contraseña usuario">
                                </div>
                            </div>
                            <button id="btn_confirmar" type="button" class="btn clrfondomenu float-right">
                            <span >Entrar&nbsp;&nbsp;&nbsp;</span><span class="input-group-addon fas fa-lock"></span></button>
                            <!--onclick='confirmar();' -->
                        </form>
                    </div>
                    <div class="card-footer clrfondomenu">
                        <div class="alert alert-danger text-center" style="display:none;" id="error">
                            <p>Usuario o Password no identificados</p>
                        </div>
                        <div class="alert alert-danger text-center" style="display:none;" id="error2">
                            <p>Usuario registrado pero no activo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="responsive" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                       <h2 class="modal-title">Datos de Usuario</h2>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        
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
                            <div class="form-group">
                                <label for="pass" class="control-label col-xs-5">Clave</label>
                                <div class="col-xs-5">
                                    <input id="pass" name="pass" type="password" class="form-control" placeholder="Introducir contraseña">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pass2" class="control-label col-xs-5"></label>
                                <div class="col-xs-5">
                                    <input id="pass2" name="pass2" type="password" class="form-control" placeholder="Repetir contraseña">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="btn_limpiar" type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
                        <button id="btn_registrar" type="button" class="btn btn-secondary">Guardar</button>
                        <!--onclick="registrar();"-->
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>

    <script src="../recursos/js/jquery-3.4.1.min.js"></script>
    <script src="../recursos/js/bootstrap.min.js"></script>
    <script src="../recursos/js/popper.min.js"></script>
    <script defer src="../recursos/fonts/all.min.js"></script>
    <script>
        $("#btn_confirmar").on("click", function() {
            confirmar()
        });

        $("#btn_registrar").on("click", function() {
            registrar()
        });
        $("#btn_limpiar").on("click", function() {
            limpiar()
        });
        
        // limpiar formulario de datos
        function limpiar() {
            $('#error').css('display', 'none');
            $('#error2').css('display', 'none');
            $("#email2").val('');
            $("#pass").val('');
            $("#pass2").val('');
        }
        // acceso usuario al pulsar entrar validando usuario y contraseña
        function confirmar() {
            var email = $('#email').val();
            var password = $('#password').val();
            $.ajax({
                url: '../controlador/usuario.php',
                type: 'POST',
                data: 'email=' + email + '&password=' + password + "&boton=ingresar"
            }).done(function(resp) {

                if (resp == '0') {
                    $('#error').show();
                } else if (resp == '1') {
                    $('#error2').show();
                } else {
                    location.href = '../vista/index.php';
                }
                setTimeout(function() {
                    $('#error').css('display', 'none');
                    $('#error2').css('display', 'none');
                    $("#email2").val('');
                    $("#pass").val('');
                    $("#pass2").val('');
                }, 1000);
            });
        }
        // regostrarse , crear nuevo usuario
        function registrar() {
            var email = $('#email2').val();
            var password = $('#pass').val();
            var password2 = $('#pass2').val();


            if (password === password2) {

                $.ajax({
                    url: '../controlador/usuario.php',
                    type: 'POST',
                    data: '&email=' + email + '&password=' + password + '&boton=registrar'
                }).done(function(respuesta) {
                    if (respuesta == 'exito') {
                        $('#exito').show();
                    } else {
                        alert(respuesta);
                    }
                    setTimeout(function() {
                        $('#exito').css('display', 'none');
                        $("#email2").val('');
                        $("#pass").val('');
                        $("#pass2").val('');
                    }, 1000);
                });
            } else {
                alert('Debe introducir la misma contraseña');
            }

        }

    </script>
</body>

</html>
<?php 

}?>
