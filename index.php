
<!DOCTYPE html>
<html lang="es">

<head>
    <title>A.M.L.F.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css">
    <link rel="stylesheet" href="recursos/css/main.css">
    <link rel="icon" type="image/svg+xml" href="recursos/img/admin.svg" sizes="any">
</head>

<body>
    <!--Barra de Navegacion-->
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top clrfondomenu">

<a class="navbar-brand" href="." class="navbar-brand" id="adolfo"><img src="recursos\img\admin.svg" alt="Administrador" style="height:40px;"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>


<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item h4">
            <a class="nav-link text-info" href="vista/login.php">Home</a>
        </li>
        <li class="nav-item dropdown h4">
            <a class="nav-link text-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Proyectos</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" target="_blank" href="proyectos/ci/index.html">Clínica</a>
                <a class="dropdown-item" target="_blank" href="proyectos/rallye/rallye.php">Rallye</a>
                <a class="dropdown-item" target="_blank" href="proyectos/subida/subida.php">Subida</a>
            </div>
        </li>
        <li class="nav-item dropdown h4">
            <a class="nav-link text-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Cursos</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="vista/cursos.php?pg=html">HTML</a>
                <a class="dropdown-item" href="vista/cursos.php?pg=css">CSS</a>
                <a class="dropdown-item" href="vista/cursos.php?pg=javascript">Javascript</a>
                <a class="dropdown-item" href="vista/cursos.php?pg=php">PHP</a>
                <a class="dropdown-item" href="vista/cursos.php?pg=java">Java</a>
                <a class="dropdown-item" href="vista/cursos.php?pg=bootstrap">Bootstrap</a>
                <a class="dropdown-item" href="vista/cursos.php?pg=jwuery">JQuery</a>
                <a class="dropdown-item" href="vista/cursos.php?pg=angular">Angular</a>
                <a class="dropdown-item" href="vista/cursos.php?pg=sql">SQL</a>
                <a class="dropdown-item" href="vista/cursos.php?pg=python">Python</a>
            </div>
        </li>
        <li class="nav-item dropdown h4">
            <a class="nav-link text-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Certificados</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-dark" href="vista/ifcd0110.php">IFCD0110</a>
                <a class="dropdown-item text-dark" href="vista/ifcd0210.php">IFCD0210</a>
                <a class="dropdown-item text-dark" href="vista/ifct0108.php">IFCT0108</a>
                <a class="dropdown-item text-dark" href="vista/ifct0109.php">IFCT0109</a>
            </div>
        </li>

        <li class="nav-item dropdown h4">
            <a class="nav-link text-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Hobbies</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="vista/hobbies.php?pg=recetas">Recetas</a>
                <a class="dropdown-item" href="vista/hobbies.php?pg=bricolaje">Bricolaje</a>

            </div>
        </li>

        <li class="nav-item dropdown h4">
            <a class="nav-link text-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galerías</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="vista/galerias.php?pg=personales">Personales</a>
                <a class="dropdown-item" href="vista/galerias.php?pg=titulacion">Titulación</a>
                <a class="dropdown-item" href="vista/galerias.php?pg=sketchup">Sketchup</a>
                <!-- <a class="dropdown-item" href="vista/personales.php">Personales</a>
                <a class="dropdown-item" href="vista/titulacion.php">Titulación</a>
                <a class="dropdown-item" href="vista/sketchup.php">Sketchup</a> -->
            </div>
        </li>
    </ul>
</div>
</nav>
    <!--Pie de página-->
    <?php 
        require_once('vista/pie_pagina.php');
    ?>
    <script src="recursos/js/jquery-3.4.1.min.js"></script>
    <script src="recursos/js/bootstrap.min.js"></script>
    <script src="recursos/js/popper.min.js"></script>
    <script>
       
    </script>

</body>

</html>
