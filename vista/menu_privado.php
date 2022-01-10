<!--Barra de Navegacion-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top clrfondomenu">
    <a class="navbar-brand" href="..\vista\index.php" class="navbar-brand" id="adolfo"><img src="..\recursos\img\admin.svg" alt="Administrador" style="height:40px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" >
            <li class="nav-item dropdown h4" id="mp_libros">
                <a class="nav-link text-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Libros</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../vista/libros.php?pg=certificados">Certificados</a>
                    <a class="dropdown-item" href="../vista/libros.php?pg=android">Android</a>
                    <a class="dropdown-item" href="../vista/libros.php?pg=web">Web</a>
                </div>
            </li>
           
            <li class="nav-item  h4" id="mp_guias">
                <a class="nav-link text-info" href="guias.php">Guías</a>
            </li>
            <?php 
                if ($_SESSION['nombre']=='admin') {
            ?>
           <li class="nav-item  h4" id="mp_mantenimiento">
           <a class="nav-link text-info" href="activar.php">Mantenimiento</a>
            </li>
            <?php 
                }
            ?>
        </ul>
        <ul class="nav navbar-nav mr-5">
            <li class="nav-item dropdown h4">
                <a class="nav-link text-secondary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuario <?php echo $_SESSION['nombre']; ?></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="javascript: void(0)" onclick='cerrar();'>Cerrar Sesión</a>
                </div>
            </li>

        </ul>
    </div>
</nav>