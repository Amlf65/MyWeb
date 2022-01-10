
<html>

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
    <?php 
        require_once('menu_publico.php');
        if( isset($_GET["pg"]) ){
            $consulta=($_GET["pg"]);
        }
    ?>
    <div class="container" style="margin-top:80px; margin-bottom:25px;">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 col-lg-10  col-lg-9 p-0">  
                <div class="card">
                    <div class="card-header bg-primary justify-content-around">
                    <?php 
                        switch ($consulta) {
                            case 'recetas':
                                echo "<span class='display-4 text-light'>RECETAS</span>";
                            break;
                            case 'bricolaje':
                                echo "<span class='display-4 text-light'>BRICOLAJE</span>";
                            break;
                        }
                    ?>
                    </div>
                    <div class="card-body" id="base_hobbies">

                    </div>
                    
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
            $("#mp_hobbies").addClass("text-warning")
            listar();
        });
        
        function listar() {
            $.ajax({
                url: '../controlador/hobbies.php',
                type: 'POST',
                data: 'boton=<?php echo $consulta;?>'
            }).done(function(resp) {
                    $("#base_hobbies").html(resp);
                },

            ).fail(function(jqXHR, textStatus, errorThrown) {
                alert("Error!!!");
            })
        }
    </script>
</body>

</html>


