<?php 
header("Content-Type: text/html;charset=utf-8");
	class cursos
	{
		private $conexion;
	
        function listar($carpeta)
		{
			$ruta = "../recursos/img/cursos/".$carpeta."/";   
			$filehandle = opendir($ruta);
			$archi="";
			while ($file = readdir($filehandle)) { 
				if ($file != "." && $file != ".." && !empty($file)) { 
					$arch=$file; 
					$archi=$arch.'*'.$archi; 
				} 
			} 
	
			closedir($filehandle);  
			$archivosfile=explode("*", $archi,-1);   
					
			sort($archivosfile);
			$columnas=0;
			$lista= "<div class='row border pt-3'>";
			foreach ($archivosfile as $archivo) {  
				$lista.= "<div class='col-4>";
				$lista.= "<div class='thumbnail'>";
				$lista.= "<a href='".$ruta.$archivo."' target='_blank'>";
				$lista.= "<img src='".$ruta.$archivo."' alt='".$archivo."' class='w-100 shadow p-3 mb-3 bg-white rounded '>";
				//$lista.= "<div class='caption text-center h4 text-info'><small><p>".$archivo."</p></small></div>";
				$lista.= "</div>";
				$lista.= "</div>";
			} 
			$lista.= "</div>"; 
			return $lista;
		}
	}
?>
