<?php 
header("Content-Type: text/html;charset=utf-8");
	class libros
	{
		function listar($carpeta)
		{
			$ruta = "../recursos/docs/".$carpeta."/";   
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
				$lista.= "<div class='col-3'>";
				$lista.= "<div class='thumbnail'>";
				$lista.= "<a href='".$ruta.$archivo."' target='_blank'>";
				$lista.= "<embed src='".$ruta.$archivo."#toolbar=0&navpanes=0&scrollbar=0&messages=0&statusbar=0&pagemode=thumbs&view=fitH' alt='".$archivo."' style='width:100%' type='application/pdf'>";
				$lista.= "<div class='caption text-center h6'><small><p>".$archivo."</p></small></div>";
				$lista.= "</div>";
				$lista.= "</div>";
			} 
			$lista.= "</div>"; 
			return $lista;
		}
	}
?>
