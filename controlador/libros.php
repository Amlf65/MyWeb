<?php
	header("Content-Type: text/html;charset=utf-8");
		require_once('../modelo/libros.php');

        
		$boton=$_POST['boton'];
		switch ($boton) {
			
            case 'certificados':
					$ins = new libros();
					$array=$ins->listar("certificados");
					echo $array;
				break;

			case 'android':
					$ins = new libros();
					$array=$ins->listar("android");
					echo $array;
				break;

			case 'web':
					$ins = new libros();
					$array=$ins->listar("web");
					echo $array;
				break;
			
			default:
				# code...
				break;
		}

		
?>