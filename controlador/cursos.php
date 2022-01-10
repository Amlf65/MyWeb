<?php
	header("Content-Type: text/html;charset=utf-8");
		require_once('../modelo/cursos.php');

        
		$boton=$_POST['boton'];
		$ins = new cursos();
		$array=$ins->listar($boton);
		echo $array;
		
?>