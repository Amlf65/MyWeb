<!DOCTYPE HTML">
<html lang="es">

<head>

   <title>Subida</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css">

    <?php
	function dfhora($h1,$h2,$h3)
	{	
		if ($h1=="" or $h2=="")
		{
		return "";
		}
		$h1=str_replace(",",".",$h1);
		$h2=str_replace(",",".",$h2);
		$var1=explode(":",$h1);
		$var2=explode(":",$h2);
		if (count($var1)==2)
		{
			$valor1=$var1[0]*60000+$var1[1]*1000;
		}
		if (count($var1)==3)
		{
			$valor1=$var1[0]*3600000+$var1[1]*60000+$var1[2]*1000;
		}
		if (count($var2)==2)
		{
			$valor2=$var2[0]*60000+$var2[1]*1000;
		}
		if (count($var2)==3)
		{
			$valor2=$var2[0]*3600000+$var2[1]*60000+$var1[2]*1000;
		}
		$valor=$valor2-$valor1;

		if ($h3==0)
			{
				return "";
			}
			else
		{
				$hora=intval(($valor)/3600000);
				$min=intval(($valor-($hora*3600000))/60000);
				$sec=intval(($valor-($hora*3600000)-($min*60000))/1000);
				$msc=$valor-($hora*3600000)-($min*60000)-($sec*1000);
	
				$fin="";
				if ($hora!=0)
				{
					$fin=$fin.$hora.":";
				}
				if ($min!=0)
				{
					$fin=$fin.$min.":";
				}
				if (strlen($msc)==3)
				{
				$fin=$fin.$sec.".".$msc;
				}
				if (strlen($msc)==2)
				{
				$fin=$fin.$sec.".0".$msc;
				}
				if (strlen($msc)==1)
				{
				$fin=$fin.$sec.".00".$msc;
				}
				return $fin;
			}
	}

	function iif($condition,$val_if_true,$val_if_false="")
    {
    		if ($condition) 
        	return $val_if_true;
    		else 
       		 return $val_if_false;
	}



    if(isset($_GET['tr'])) {$vtr=$_GET["tr"];}
    
    if(isset($_GET['bt'])){$vbt=$_GET["bt"];}else{$vbt="1";}

	if(isset($_GET['gr'])){$vgr=$_GET["gr"];}else{$vgr="Todos";}

	if(isset($_GET['cl'])){$vcl=$_GET["cl"];}else{$vcl="Todos";}

	if(isset($_GET['tf'])){$vtf=$_GET["tf"];}else{$vtf="Todos";}

	/*echo "$vtr";
	echo "$vgr";
	echo "$vcl";
	echo "$vtf";*/

?>

</head>


<body bgcolor="#edf7de">

    <?php /*IF($vbt== "" ){$vbt="1";}
        IF($vgr== "" ){ $vgr="Todos";}
        IF($vcl== "" ){ $vcl="Todos";}
        IF($vtf== "" ){ $vtf="Todos";}*/
    ?>

    <TABLE WIDTH="90%" align="center" BORDER="0" CELLSPACING="2" CELLPADDING="2" bordercolor="#edf7de">
        <tr>
            <TD ALIGN="center" BGCOLOR="503F8B" COL WIDTH="2%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>N??</FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="503F8B" COL WIDTH="20%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Piloto/Vehiculo</FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="503F8B" COL WIDTH="3%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Gr.</FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="503F8B" COL WIDTH="3%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2 COL WIDTH="3%">Cl.</FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="503F8B" COL WIDTH="6%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Trofeo</FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="503F8B" COL WIDTH="6%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Penal.</FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="503F8B" COL WIDTH="7%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Tiempo</FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="503F8B" COL WIDTH="3%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Dif.1??</FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="503F8B" COL WIDTH="3%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Dif.Ant.</FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="000000" COL WIDTH="2%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Ord</FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="508B3F" COL WIDTH="2%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>N??</FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="508B3F" COL WIDTH="20%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Piloto/Vehiculo</FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="508B3F" COL WIDTH="3%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Gr.</FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="508B3F" COL WIDTH="3%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Cl.</FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="508B3F" COL WIDTH="6%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Trofeo</FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="508B3F" COL WIDTH="6%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Penal.</FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="508B3F" COL WIDTH="7%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Tiempo</FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="508B3F" COL WIDTH="3%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Dif.1??</FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="508B3F" COL WIDTH="3%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Dif.Ant</FONT></B></TD>
        </tr>



        <?php $lgrl1 = file('general1.txt'); 
        $lgrl2 = file('general2.txt'); 
        $lg1=[];
        $lg2=[];


        foreach ($lgrl1 as $linea => $lnum)
        {

         $dat1 = explode(";", $lnum);
         $dat2 = explode(";", $lgrl2[$linea]);


             if($vtr=="$dat1[1]" && ($vbt=="$dat1[0]") && ($vgr=="$dat1[5]" || $vgr=="" || $vgr=="Todos" ) && ($vcl=="$dat1[7]" || $vcl=="Todos") && (strpos($dat1[9],$vtf)!==false  || $vtf=="Todos")) 
            {
            $lg1[]=$lnum;
            }
         if($vbt=="$dat2[0]" && ($vgr=="$dat2[5]" || $vgr=="Todos")  && ($vcl=="$dat2[7]" || $vcl=="Todos") && ($vtf=="$dat2[9]" || $vtf=="Todos")) 
            {
            $lg2[]=$lgrl2[$linea];
            }

        } 

        $tlin=0;	
        $orden=1; 
        $prim=0;
        $ante=0;
        $cabe=0;
        
        if(count($lg1)<>0) 
        { 
            foreach ($lg1 as $linea => $lnum)
            {
                $dat1 = explode(";", $lnum);
                $dat2 = explode(";", $lg2[$linea]);
                if ($prim==0)
                {
                   $prim1=$dat1[11]; 
                   $prim2=$dat1[11]; 
                    
                   $ante1=0;
                   $ante2=0;
                    $prim=1;
                }
                if($tlin==0)
                {
                    $tlin=1;
                    
		?>
       
        <tr>
            <TD ALIGN="center" BGCOLOR="DDDDFF" COL WIDTH="2%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[2]?></FONT></B></TD>
            <TD ALIGN="left" BGCOLOR="DDDDFF" COL WIDTH="20%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[3].'<br>'.$dat1[4]?></FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="DDDDFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[5].'/'.$dat1[6]?></FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="DDDDFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[7].'/'.$dat1[8]?></FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="DDDDFF" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[9]?></FONT></B></TD>
            <TD ALIGN="right" BGCOLOR="DDDDFF" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[10]?></FONT></B></TD>
            <TD ALIGN="right" BGCOLOR="DDDDFF" COL WIDTH="7%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[11]?></FONT></B></TD>
            <TD ALIGN="right" BGCOLOR="DDDDFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo dfhora($prim1,$dat1[11],$cabe)?></FONT></B></TD>
            <TD ALIGN="right" BGCOLOR="DDDDFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo dfhora($ante1,$dat1[11],$cabe)?></FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="000000" COL WIDTH="2%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2><?php echo $orden?></FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="DDFFDD" COL WIDTH="2%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat2[2]?></FONT></B></TD>
            <TD ALIGN="left" BGCOLOR="DDFFDD" COL WIDTH="20%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat2[3].'<br>'.$dat2[4]?></FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="DDFFDD" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo iif("$dat2[5]"=="","",$dat2[5].'/'.$dat2[6])?></FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="DDFFDD" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo iif("$dat2[7]"=="","",$dat2[7].'/'.$dat2[8])?></FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="DDFFDD" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat2[9]?></FONT></B></TD>
            <TD ALIGN="right" BGCOLOR="DDFFDD" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat2[10]?></FONT></B></TD>
            <TD ALIGN="right" BGCOLOR="DDFFDD" COL WIDTH="7%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat2[11]?></FONT></B></TD>
            <TD ALIGN="right" BGCOLOR="DDFFDD" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo dfhora($prim2,$dat2[11],$cabe)?></FONT></B></TD>
            <TD ALIGN="right" BGCOLOR="DDFFDD" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo dfhora($ante2,$dat2[11],$cabe)?></FONT></B></TD> </tr>
            <?php $orden=$orden+1;
            $cabe=1;	
                }
                else
                {
                $tlin=0;
                ?>
        <tr>
            <TD ALIGN="center" BGCOLOR="BBBBFF" COL WIDTH="2%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[2]?></FONT></B></TD>
            <TD ALIGN="left" BGCOLOR="BBBBFF" COL WIDTH="20%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[3].'<br>'.$dat1[4]?></FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="BBBBFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[5].'/'.$dat1[6]?></FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="BBBBFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[7].'/'.$dat1[8]?></FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="BBBBFF" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[9]?></FONT></B></TD>
            <TD ALIGN="right" BGCOLOR="BBBBFF" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[10]?></FONT></B></TD>
            <TD ALIGN="right" BGCOLOR="BBBBFF" COL WIDTH="7%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[11]?></FONT></B></TD>
            <TD ALIGN="right" BGCOLOR="BBBBFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo dfhora($prim1,$dat1[11],$cabe)?></FONT></B></TD>
            <TD ALIGN="right" BGCOLOR="BBBBFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo dfhora($ante1,$dat1[11],$cabe)?></FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="000000" COL WIDTH="2%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2><?php echo $orden?></FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="BBFFBB" COL WIDTH="2%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat2[2]?></FONT></B></TD>
            <TD ALIGN="left" BGCOLOR="BBFFBB" COL WIDTH="20%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat2[3].'<br>'.$dat2[4]?></FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="BBFFBB" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo iif("$dat2[5]"=="","",$dat2[5].'/'.$dat2[6])?></FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="BBFFBB" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo iif("$dat2[7]"=="","",$dat2[7].'/'.$dat2[8])?></FONT></B></TD>
            <TD ALIGN="center" BGCOLOR="BBFFBB" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat2[9]?></FONT></B></TD>
            <TD ALIGN="right" BGCOLOR="BBFFBB" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat2[10]?></FONT></B></TD>
            <TD ALIGN="right" BGCOLOR="BBFFBB" COL WIDTH="7%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat2[11]?></FONT></B></TD>
            <TD ALIGN="right" BGCOLOR="BBFFBB" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo dfhora($prim2,$dat2[11],$cabe)?></FONT></B></TD>
            <TD ALIGN="right" BGCOLOR="BBFFBB" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo dfhora($ante2,$dat2[11],$cabe)?></FONT></B></TD></tr>
            <?php $orden=$orden+1;
               
                }         
           	$ante1=$dat1[11];
	        $ante2=$dat2[11];	

            } 
        }
        ?>
    </TABLE>
    <TABLE WIDTH="90%" align="center" BORDER="0" CELLSPACING="2" CELLPADDING="15" bordercolor="#edf7de">
        <TD ALIGN="LEFT" BGCOLOR="edf7de"><B><FONT COLOR="ffffff" FACE="arial" SIZE=3> </FONT></B></TD>
    </TABLE>

    <TABLE WIDTH="90%" align="center" BORDER="0" CELLSPACING="2" CELLPADDING="2" bordercolor="#edf7de">
        <TD ALIGN="center" BGCOLOR="#edf7de"><B><FONT COLOR=0 FACE="arial" SIZE=3>RETIRADOS</FONT></B></TD>
    </TABLE>
        <TABLE WIDTH="90%" align="center" BORDER="0" CELLSPACING="2" CELLPADDING="2" bordercolor="#4B4B4B">
            <tr>
                <TD ALIGN="center" BGCOLOR="4B4B4B"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>N??</FONT></B></TD>
                <TD ALIGN="center" BGCOLOR="4B4B4B"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Escuder??a</FONT></B></TD>
                <TD ALIGN="center" BGCOLOR="4B4B4B"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Piloto/Copiloto</FONT></B></TD>
                <TD ALIGN="center" BGCOLOR="4B4B4B"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Veh??culo</FONT></B></TD>
                <TD ALIGN="center" BGCOLOR="4B4B4B"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Gr.</FONT></B></TD>
                <TD ALIGN="center" BGCOLOR="4B4B4B"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Cl.</FONT></B></TD>
                <TD ALIGN="center" BGCOLOR="4B4B4B"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>T.C.</FONT></B></TD>
                <TD ALIGN="center" BGCOLOR="4B4B4B"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Post.</FONT></B></TD>
                <TD ALIGN="center" BGCOLOR="4B4B4B"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Motivo</FONT></B></TD>
            </tr>

            <?php $lgrl1 = file('retirados.txt'); 
    if(count($lgrl1)<>0){
               $tlin=0;	
               foreach ($lgrl1 as $linea => $lnum)
               {
                    $dat1 = explode(";", $lnum);
                    if ($dat1[7]<=$vtr)
                    {
                        if($tlin==0)
                        {
                            $tlin=1;
                        ?>
            <tr>
                <TD ALIGN="center" BGCOLOR="B4B4B4"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[0]?></FONT>
                    </B></TD>
                <TD ALIGN="left" BGCOLOR="B4B4B4"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[1]?></FONT>
                    </B></TD>
                <TD ALIGN="left" BGCOLOR="B4B4B4"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[2].'<br>'.$dat1[3]?></FONT>
                    </B></TD>
                <TD ALIGN="left" BGCOLOR="B4B4B4"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[4]?></FONT>
                    </B></TD>
                <TD ALIGN="center" BGCOLOR="B4B4B4"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[5]?></FONT>
                    </B></TD>
                <TD ALIGN="center" BGCOLOR="B4B4B4"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[6]?></FONT>
                    </B></TD>
                <TD ALIGN="center" BGCOLOR="B4B4B4"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[7]?></FONT>
                    </B></TD>
                <TD ALIGN="center" BGCOLOR="B4B4B4"><B><FONT COLOR=0 FACE="arial" SIZE=2><?php echo $dat1[8]?></FONT>
                    </B></TD>
                <TD ALIGN="left" BGCOLOR="B4B4B4"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[9]?></FONT>
                    </B></TD>
                        </tr>
                        <?php	
                        }
                        else
                        {
                            $tlin=0;
                        ?>
                        <tr>
                <TD ALIGN="center" BGCOLOR="969696"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[0]?></FONT>
                    </B></TD>
                <TD ALIGN="left" BGCOLOR="969696"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[1]?></FONT>
                    </B></TD>
                <TD ALIGN="left" BGCOLOR="969696"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[2].'<br>'.$dat1[3]?></FONT>
                    </B></TD>
                <TD ALIGN="left" BGCOLOR="969696"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[4]?></FONT>
                    </B></TD>
                <TD ALIGN="center" BGCOLOR="969696"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[5]?></FONT>
                    </B></TD>
                <TD ALIGN="center" BGCOLOR="969696"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[6]?></FONT>
                    </B></TD>
                <TD ALIGN="center" BGCOLOR="969696"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[7]?></FONT>
                    </B></TD>
                <TD ALIGN="center" BGCOLOR="969696"><B><FONT COLOR=0 FACE="arial" SIZE=2><?php echo $dat1[8]?></FONT>
                    </B></TD>
                <TD ALIGN="left" BGCOLOR="969696"><B><FONT COLOR=0 FACE="arial" SIZE=1><?php echo $dat1[9]?></FONT>
                    </B></TD>
            </tr>
                            <?php
                       }  	
                    }
                }
    }
                ?>
        </TABLE>
    
</body>

</html>