<?php
	header("Content-Type: text/html;charset=utf-8");
		require_once('../modelo/guias.php');

        
		$boton=$_POST['boton'];

		switch ($boton) {

            case 'listar':
                    
					$ins = new guias();
					$array=$ins->listar();
					echo $array;
                
				break;
			default:
				# code...
				break;
		}

		
?>