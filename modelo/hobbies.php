<?php 
header("Content-Type: text/html;charset=utf-8");
	class hobbies
	{
		private $conexion;
		public function __construct()
		{
			require_once('conexion.php');
			$this->conexion= new conexion();
			$this->conexion->conectar();
		}

        function listar($carpeta)
		{
			
			switch ($carpeta) {
			
				case 'recetas':
					$sql='SELECT * FROM recetas';
					$resultados = $this->conexion->conexion->query($sql);
					if ($resultados->num_rows > 0)
					{
						
						$lista="";
						while($row = $resultados->fetch_array(MYSQLI_ASSOC))
						{
							$lista.="<div class='card mb-3'>";
							$lista.="<div class='card-header'>";
							$lista.="<p class='card-text h5'>". $row["nombre"]."</p>"; 
							$lista.="</div>";
							$lista.="<div class='card-body row'>";
							$lista.="<div class='col-lg-9 col-md-7 col-xs-12'>";
							$lista.="<img src='../recursos/img/recetas/".$row["imagen"].".jpg' class='card-img-top' alt='...'>";
							$lista.="</div>";
							$lista.="<div class='col-lg-3 col-md-5 col-xs-12'>";
							$lista.="<p class='card-text'>". $row["ingre"]."</p>";
							$lista.="</div>";
							$lista.="</div>";
							$lista.="<div class='col-12'>";
							$lista.="<p class='card-text'>". $row["descripcion"]."</p>";
							$lista.="</div>";
							$lista.="</div>";
						}
					   
					   
						
					} else 
					{
						$lista="";
					}
					$this->conexion->cerrar();
					return $lista;
					break;
	
				case 'bricolaje':
					$sql='SELECT * FROM brico inner join brico_det on clave=clave_det order by clave,paso_det';
					$resultados = $this->conexion->conexion->query($sql);
					if ($resultados->num_rows > 0)
					{
						
						$lista="";
						$indice="";
						while($row = $resultados->fetch_array(MYSQLI_ASSOC))
						{
							
							if($indice<>$row["clave"]) 
								{        
								if($lista != ""  )
								{
									$lista.="</div>";
									$lista.="</div>";   
								}
								$indice=$row["clave"];
								$lista.="<div class='card mb-3'>";
								$lista.="<div class='card-header'>";
								$lista.="<p class='card-text h5'>". $row["nombre"]."</p>"; 
								$lista.="</div>";
								$lista.="<div class='card-body row'>";
								$lista.="<div class='col-12 col-md-7'>";
								$lista.="<img src='../recursos/img/brico/".$row["imagen"].".jpg' class='card-img-top' alt='...'>";
								$lista.="</div>";
								$lista.="<div class='col-12 col-md-5'>";
								$lista.="<p class='card-text'>". $row["material"]."</p>";
								$lista.="</div>";
								$lista.="</div>";
								$lista.="</div>";
								$lista.="<p>";
								$lista.="<button class='btn btn-light border border-secondary' type='button' data-toggle='collapse' data-target='#".$row["imagen"]."' aria-expanded='false' aria-controls='collapseExample'>";
								$lista.="Pasos a seguir";
								$lista.="</button>";
								$lista.="</p>";
								$lista.="<div class='collapse mb-3 ' id='".$row["imagen"]."'>";
								$lista.="<div class='card card-body mx-1 justify_content_center'>";
								}
								 
								$lista.="<p class='card-text h5 text-center btn btn-secondary mt-2'>Paso  ".$row["paso_det"]."</p>";
		
								$lista.="<div class='row justify-content-center'>";
								$lista.="<div class='col-12 col-md-7'>";
								$lista.="<img src='../recursos/img/brico/".$row["imagen_det"].".jpg' class='card-img-top' alt='...'>";  
								$lista.="</div>";
								$lista.="<div class='col-12 col-md-5'>";
								
								$lista.="<p>".$row["detalle_det"]."</p>";
								$lista.="</div>";
								$lista.="</div>";
									
						}
						$lista.="</div>";
						$lista.="</div>";   
		
					} else 
					{
						$lista="";
					}
					$this->conexion->cerrar();
					return $lista;
					break;
				
				default:
					# code...
					break;
			}
		}
        /*function grabar($nombre,$descripcion,$ingre,$imagen,$tip)
        {
			
			$sql="INSERT INTO personales VALUES(0,'$nombre','$descripcion','$ingre','$imagen','$tip')";
			if($this->conexion->conexion->query($sql)){
				return true;
			}
			else
			{
				return false;
			}
			$this->conexion->cerrar();
		}
        
	    function borrar($nombre)
        {
			
			$sql="DELETE personales WHERE nombre='$nombre'";
			if($this->conexion->conexion->query($sql)){
				return true;
			}
			else
			{
				return false;
			}
			$this->conexion->cerrar();
		}*/
	}

	
	
?>
