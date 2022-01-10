<?php 
header("Content-Type: text/html;charset=utf-8");
	class galerias
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
			$ruta = "../recursos/img/".$carpeta."/";   
			switch ($carpeta) {
				case 'personales':			
					$sql='SELECT * FROM galerias WHERE carpeta="personales" ORDER BY imagen';
					$resultados = $this->conexion->conexion->query($sql);
					if ($resultados->num_rows > 0)
					{
						$lista= "<div class='row border pt-3'>";
						while($row = $resultados->fetch_array(MYSQLI_ASSOC)){
							$lista.= "<div class='col-12 col-md-6 col-lg-4'>";
							$lista.= "<div class='thumbnail'>";
							$lista.= "<a href='".$ruta.$row["imagen"].".jpg' target='_blank'>";
							$lista.= "<img src='".$ruta.$row["imagen"].".jpg' alt='".$row["titulo"]."' style='width:100%'>";
							$lista.= "<div class='caption text-center h6'><small><p>".$row["titulo"]."</p></small></div>";
							$lista.= "</div>";
							$lista.= "</div>";
						} 
						$lista.= "</div>"; 
					} else 
					{
						$lista="";
					}
					$this->conexion->cerrar();
					return $lista;
				break;
				case 'titulacion':
					
					$sql='SELECT * FROM galerias WHERE carpeta="titulacion" ORDER BY imagen';
					$resultados = $this->conexion->conexion->query($sql);
					if ($resultados->num_rows > 0)
					{
						$lista= "<div class='row border pt-3'>";
						while($row = $resultados->fetch_array(MYSQLI_ASSOC)){
							$lista.= "<div class='col-12 col-md-6 col-lg-4'>";
							$lista.= "<div class='thumbnail'>";
							$lista.= "<a href='".$ruta.$row["imagen"].".jpg' target='_blank'>";
							$lista.= "<img src='".$ruta.$row["imagen"].".jpg' alt='".$row["titulo"]."' style='width:100%'>";
							$lista.= "<div class='caption text-center h6'><small><p>".$row["titulo"]."</p></small></div>";
							$lista.= "</div>";
							$lista.= "</div>";
						} 
						$lista.= "</div>"; 
					} else 
					{
						$lista="";
					}
					$this->conexion->cerrar();
					return $lista;
				break;
				case 'sketchup':
					
					$sql='SELECT * FROM galerias WHERE carpeta="sketchup" ORDER BY imagen';
					$resultados = $this->conexion->conexion->query($sql);
					if ($resultados->num_rows > 0)
					{
						$lista= "<div class='row border pt-3'>";
						while($row = $resultados->fetch_array(MYSQLI_ASSOC)){
							$lista.= "<div class='col-12 col-md-6 col-lg-4'>";
							$lista.= "<div class='thumbnail'>";
							$lista.= "<a href='".$ruta.$row["imagen"].".png' target='_blank'>";
							$lista.= "<img src='".$ruta.$row["imagen"].".png' alt='".$row["titulo"]."' style='width:100%'>";
							$lista.= "<div class='caption text-center h6'><small><p>".$row["titulo"]."</p></small></div>";
							$lista.= "</div>";
							$lista.= "</div>";
						} 
						$lista.= "</div>"; 
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
	}
?>
