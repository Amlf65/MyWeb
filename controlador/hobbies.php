<?php
	header("Content-Type: text/html;charset=utf-8");
		require_once('../modelo/hobbies.php');

        
		$boton=$_POST['boton'];
		switch ($boton) {
			
            case 'recetas':
					$ins = new hobbies();
					$array=$ins->listar("recetas");
					echo $array;
				break;

			case 'bricolaje':
					$ins = new hobbies();
					$array=$ins->listar("bricolaje");
					echo $array;
				break;
			
			default:
				# code...
				break;
		}

		
?>