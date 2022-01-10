<?php 
header("Content-Type: text/html;charset=utf-8");
	class guias
	{
		private $conexion;
		public function __construct()
		{
			require_once('conexion.php');
			$this->conexion= new conexion();
			$this->conexion->conectar();
		}

        function listar()
		{
			
        $ruta = "../recursos/docs/guias/";  
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
         $lista.= "<div class='col-12 col-md-6 col-xl-4' >";
         $lista.= "<div class='thumbnail'>";
         $lista.= "<a href='".$ruta.$archivo."' target='_blank'>";
         $lista.= "<embed src='".$ruta.$archivo."#toolbar=0&navpanes=0&scrollbar=0&messages=0&statusbar=0&pagemode=thumbs&view=Fit' alt='".$archivo."' style='width:100%' type='application/pdf'>";
         $lista.= "<div class='caption text-center h5'><small><p>".$archivo."</p></small></div>";
         $lista.= "</div>";
         $lista.= "</div>";
        } 
        $lista.= "</div>"; 
        $this->conexion->cerrar();
        return $lista;
            
		}
		
       
	}

	
	
?>
