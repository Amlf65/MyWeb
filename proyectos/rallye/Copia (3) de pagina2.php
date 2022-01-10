<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="refresh" content="60">
<!-- Created on: 11/01/2009 -->
  <meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type">
  <title></title>


  <meta content="" name="description">

  <meta content="" name="keywords">

  <meta content="Unregistered User" name="author">

  <meta content="AceHTML Freeware" name="generator">

<?
	function dfhora($h1,$h2,$h3)
	{	
		$h1=str_replace(",",".",$h1);
		$h2=str_replace(",",".",$h2);
		$var1=split(":",$h1);
		$var2=split(":",$h2);
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
				$msc=intval(($valor-($hora*3600000)-($min*60000)-($sec*1000))/100);
	
				$fin="";
				if ($hora!=0)
				{
					$fin=$fin.$hora.":";
				}
				if ($min!=0)
				{
					$fin=$fin.$min.":";
				}
				$fin=$fin.$sec.".".$msc;
				return $fin;
			}
	}

?>
<?
	$vtr=$_GET["tr"];

	$vgr=$_GET["gr"];

	$vcl=$_GET["cl"];

	$vtf=$_GET["tf"];

	/*echo "$vtr";
	echo "$vgr";
	echo "$vcl";
	echo "$vtf";*/

?>

</head>


<body bgcolor="#edf7de">

<? IF($vgr== "" ){
	$vgr="Todos";}
   IF($vcl== "" ){
	$vcl="Todos";}
   IF($vtf== "" ){
	$vtf="Todos";}
?>




<TABLE WIDTH="90%" align="center" BORDER="0" CELLSPACING="2" CELLPADDING="2" bordercolor="#edf7de">
   <TD ALIGN="center" BGCOLOR="503F8B" COL WIDTH="2%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Nº</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="503F8B" COL WIDTH="20%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Piloto/Copiloto/Vehiculo</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="503F8B" COL WIDTH="3%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Gr.</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="503F8B" COL WIDTH="3%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2 COL WIDTH="3%">Cl.</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="503F8B" COL WIDTH="6%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Trofeo</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="503F8B" COL WIDTH="6%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Penal.</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="503F8B" COL WIDTH="7%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Tiempo</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="503F8B" COL WIDTH="3%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Dif.1º</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="503F8B" COL WIDTH="3%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Dif.Ant.</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="000000" COL WIDTH="2%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Ord</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="508B3F" COL WIDTH="2%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Nº</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="508B3F" COL WIDTH="20%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Piloto/Copiloto/Vehiculo</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="508B3F" COL WIDTH="3%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Gr.</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="508B3F" COL WIDTH="3%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Cl.</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="508B3F" COL WIDTH="6%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Trofeo</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="508B3F" COL WIDTH="6%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Penal.</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="508B3F" COL WIDTH="7%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Tiempo</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="508B3F" COL WIDTH="3%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Dif.1º</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="508B3F" COL WIDTH="3%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Dif.Ant</FONT></B></TD>
   </TR>

	
	
   <? $lgrl1 = file('general1.txt'); 
   $lgrl2 = file('general2.txt'); 
    
   	
   foreach ($lgrl1 as $linea => $lnum){

	 $dat1 = explode(";", $lnum);
	 $dat2 = explode(";", $lgrl2[$linea]);


         if($vtr=="$dat1[0]" && ($vgr=="$dat1[6]" || $vgr=="" || $vgr=="Todos" ) && ($vcl=="$dat1[8]" || $vcl=="" || $vcl=="Todos") && ($vtf=="$dat1[10]" || $vtf=="" || $vtf=="Todos")) 
		{
		$lg1[]=$lnum;
		}
	 if($vtr=="$dat2[0]" && ($vgr=="$dat2[6]" || $vgr=="" || $vgr=="Todos" ) && ($vcl=="$dat2[8]" || $vcl=="" || $vcl=="Todos") && ($vtf=="$dat2[10]" || $vtf=="" || $vtf=="Todos")) 
		{
		$lg2[]=$lgrl2[$linea];
		}
		
	} 
	

    ?>
    <?
    $tlin=0;	
    $orden=1; 
    $prim=0;
    $ante=0;
    $cabe=0;
    if(count($lg1)<>0) { 
	
    foreach ($lg1 as $linea => $lnum){

	 $dat1 = explode(";", $lnum);
	 $dat2 = explode(";", $lg2[$linea]);
	if ($prim1==0)
	{
	   $prim1=$dat1[12]; 
	   $prim2=$dat2[12];
	}
	
	if($tlin==0)
	{
		$tlin=1;
		?>		

	   	<TD ALIGN="center" BGCOLOR="DDDDFF" COL WIDTH="2%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[2]?></FONT></B></D>
   		<TD ALIGN="left" BGCOLOR="DDDDFF" COL WIDTH="20%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[3].'<br>'.$dat1[4].'<br>'.$dat1[5]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="DDDDFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[6].'/'.$dat1[7]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="DDDDFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[8].'/'.$dat1[9]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="DDDDFF" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[10]?></FONT></B></TD>
		<TD ALIGN="right" BGCOLOR="DDDDFF" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[11]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="DDDDFF" COL WIDTH="7%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[12]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="DDDDFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=dfhora($prim1,$dat1[12],$cabe)?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="DDDDFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=dfhora($ante1,$dat1[12],$cabe)?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="000000" COL WIDTH="2%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2><?=$orden?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="DDFFDD" COL WIDTH="2%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[2]?></FONT></B></TD>
   		<TD ALIGN="left" BGCOLOR="DDFFDD" COL WIDTH="20%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[3].'<br>'.$dat2[4].'<br>'.$dat1[5]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="DDFFDD" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[6].'/'.$dat2[7]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="DDFFDD" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[8].'/'.$dat2[9]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="DDFFDD" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[10]?></FONT></B></TD>
                <TD ALIGN="right" BGCOLOR="DDFFDD" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[11]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="DDFFDD" COL WIDTH="7%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[12]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="DDFFDD" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=dfhora($prim2,$dat2[12],$cabe)?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="DDFFDD" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=dfhora($ante2,$dat2[12],$cabe)?></FONT></B></TD>  
		<?$orden=$orden+1;
		$cabe=1;?>
                </TR>
		<?	
	}
	else
	{
		$tlin=0;
		?>		

	   	<TD ALIGN="center" BGCOLOR="BBBBFF" COL WIDTH="2%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[2]?></FONT></B></D>
   		<TD ALIGN="left" BGCOLOR="BBBBFF" COL WIDTH="20%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[3].'<br>'.$dat1[4].'<br>'.$dat1[5]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="BBBBFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[6].'/'.$dat1[7]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="BBBBFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[8].'/'.$dat1[9]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="BBBBFF" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[10]?></FONT></B></TD>
		<TD ALIGN="right" BGCOLOR="BBBBFF" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[11]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="BBBBFF" COL WIDTH="7%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[12]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="BBBBFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=dfhora($prim1,$dat1[12],$cabe)?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="BBBBFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=dfhora($ante1,$dat1[12],$cabe)?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="000000" COL WIDTH="2%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2><?=$orden?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="BBFFBB" COL WIDTH="2%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[2]?></FONT></B></TD>
   		<TD ALIGN="left" BGCOLOR="BBFFBB" COL WIDTH="20%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[3].'<br>'.$dat2[4].'<br>'.$dat1[5]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="BBFFBB" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[6].'/'.$dat2[7]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="BBFFBB" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[8].'/'.$dat2[9]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="BBFFBB" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[10]?></FONT></B></TD>
		<TD ALIGN="right" BGCOLOR="BBFFBB" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[11]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="BBFFBB" COL WIDTH="7%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[12]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="BBFFBB" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=dfhora($prim2,$dat2[12],$cabe)?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="BBFFBB" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=dfhora($ante2,$dat2[12],$cabe)?></FONT></B></TD>  
		<?$orden=$orden+1?>
		
		</TR>		
		<?
   
	}
         
	$ante1=$dat1[12];
	$ante2=$dat2[12];	
	} 
	
	}
?>

<TABLE WIDTH="90%" align="center" BORDER="0" CELLSPACING="2" CELLPADDING="15" bordercolor="#edf7de">
<TD ALIGN="LEFT" BGCOLOR="edf7de"><B><FONT COLOR="ffffff" FACE="arial" SIZE=3> </FONT></B></TD>
</TABLE>

<TABLE WIDTH="90%" align="center" BORDER="0" CELLSPACING="2" CELLPADDING="2" bordercolor="#edf7de">
<TD ALIGN="center" BGCOLOR="#edf7de"><B><FONT COLOR=0 FACE="arial" SIZE=3>RETIRADOS</FONT></B></TD>
</TABLE>
<TABLE WIDTH="90%" align="center" BORDER="0" CELLSPACING="2" CELLPADDING="2" bordercolor="#4B4B4B">
   <TD ALIGN="center" BGCOLOR="4B4B4B"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Nº</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="4B4B4B"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Escudería</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="4B4B4B"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Piloto/Copiloto</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="4B4B4B"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Vehículo</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="4B4B4B"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Gr.</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="4B4B4B"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Cl.</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="4B4B4B"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>T.C.</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="4B4B4B"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Post.</FONT></B></TD>
   <TD ALIGN="center" BGCOLOR="4B4B4B"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2>Motivo</FONT></B></TD>
   </TR>
 
   <? $lgrl1 = file('retirados.txt'); 
   
    
   $tlin=0;	
   foreach ($lgrl1 as $linea => $lnum){

	 $dat1 = explode(";", $lnum);
	
	if ($dat1[7]<=$vtr){
	if($tlin==0)
	{
		$tlin=1;
		?>		

	   	<TD ALIGN="center" BGCOLOR="B4B4B4"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[0]?></FONT></B></D>
		<TD ALIGN="left" BGCOLOR="B4B4B"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[1]?></FONT></B></TD>
   		<TD ALIGN="left" BGCOLOR="B4B4B4"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[2].'<br>'.$dat1[3]?></FONT></B></TD>   		
   		<TD ALIGN="left" BGCOLOR="B4B4B"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[4]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="B4B4B"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[5]?></FONT></B></TD>
		<TD ALIGN="center" BGCOLOR="B4B4B"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[6]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="B4B4B"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[7]?></FONT></B></TD>
		<TD ALIGN="center" BGCOLOR="B4B4B"><B><FONT COLOR=0 FACE="arial" SIZE=2><?=$dat1[8]?></FONT></B></TD>
		<TD ALIGN="left" BGCOLOR="B4B4B"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[9]?></FONT></B></TD>
                </TR>
		<?	
	}
	else
	{
		$tlin=0;
		?>		

	   	<TD ALIGN="center" BGCOLOR="969696"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[0]?></FONT></B></D>
		<TD ALIGN="left" BGCOLOR="969696"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[1]?></FONT></B></TD>
   		<TD ALIGN="left" BGCOLOR="969696"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[2].'<br>'.$dat1[3]?></FONT></B></TD>
   		<TD ALIGN="left" BGCOLOR="969696"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[4]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="969696"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[5]?></FONT></B></TD>
		<TD ALIGN="center" BGCOLOR="969696"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[6]?></FONT></B></TD>
		<TD ALIGN="center" BGCOLOR="969696"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[7]?></FONT></B></TD>
		<TD ALIGN="center" BGCOLOR="969696"><B><FONT COLOR=0 FACE="arial" SIZE=2><?=$dat1[8]?></FONT></B></TD>
   		<TD ALIGN="left" BGCOLOR="969696"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[9]?></FONT></B></TD>  
		</TR>		
		<?
   		
		
	}
         
			

	}

}	
?>

</body>
</html>


