<?php
	header("Content-Type: text/html;charset=utf-8");
		require_once('../modelo/galerias.php');

        
		$boton=$_POST['boton'];
		switch ($boton) {
			
            case 'personales':
					$ins = new galerias();
					$array=$ins->listar("personales");
					echo $array;
				break;

			case 'titulacion':
					$ins = new galerias();
					$array=$ins->listar("titulacion");
					echo $array;
				break;

			case 'sketchup':
					$ins = new galerias();
					$array=$ins->listar("sketchup");
					echo $array;
				break;
			
			default:
				# code...
				break;
		}

		
?>