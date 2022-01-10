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
	

	$vtr=$_GET["tr"];

	$vgr=$_GET["gr"];

	$vcl=$_GET["cl"];

	$vtf=$_GET["tf"];

	echo "$vtr";
	echo "$vgr";
	echo "$vcl";
	echo "$vtf";

?>

</head>


<body bgcolor="#edf7de">



<? if($vgr == "Todos" && $vcl == "Todos" && $vtf == "Todos") 
{
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
    if(count($lg1)<>0) { 
	
    foreach ($lg1 as $linea => $lnum){

	 $dat1 = explode(";", $lnum);
	 $dat2 = explode(";", $lg2[$linea]);
	
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
   		<TD ALIGN="right" BGCOLOR="DDDDFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[13]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="DDDDFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[14]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="000000" COL WIDTH="2%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2><?=$orden?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="DDFFDD" COL WIDTH="2%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[2]?></FONT></B></TD>
   		<TD ALIGN="left" BGCOLOR="DDFFDD" COL WIDTH="20%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[3].'<br>'.$dat2[4].'<br>'.$dat1[5]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="DDFFDD" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[6].'/'.$dat2[7]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="DDFFDD" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[8].'/'.$dat2[9]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="DDFFDD" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[10]?></FONT></B></TD>
                <TD ALIGN="right" BGCOLOR="DDFFDD" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[11]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="DDFFDD" COL WIDTH="7%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[12]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="DDFFDD" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[13]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="DDFFDD" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[14]?></FONT></B></TD>  
		<?$orden=$orden+1?>
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
   		<TD ALIGN="right" BGCOLOR="BBBBFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[13]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="BBBBFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[14]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="000000" COL WIDTH="2%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2><?=$orden?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="BBFFBB" COL WIDTH="2%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[2]?></FONT></B></TD>
   		<TD ALIGN="left" BGCOLOR="BBFFBB" COL WIDTH="20%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[3].'<br>'.$dat2[4].'<br>'.$dat1[5]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="BBFFBB" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[6].'/'.$dat2[7]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="BBFFBB" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[8].'/'.$dat2[9]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="BBFFBB" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[10]?></FONT></B></TD>
		<TD ALIGN="right" BGCOLOR="BBFFBB" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[11]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="BBFFBB" COL WIDTH="7%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[12]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="BBFFBB" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[13]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="BBFFBB" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[14]?></FONT></B></TD>  
		<?$orden=$orden+1?>
		</TR>		
		<?
   		
		
	}
         
		
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

<bR>
<?
}
	else
	{
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
    if(count($lg1)<>0) { 
	
    foreach ($lg1 as $linea => $lnum){

	 $dat1 = explode(";", $lnum);
	 $dat2 = explode(";", $lg2[$linea]);
	
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
   		<TD ALIGN="right" BGCOLOR="DDDDFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[13]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="DDDDFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[14]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="000000" COL WIDTH="2%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2><?=$orden?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="DDFFDD" COL WIDTH="2%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[2]?></FONT></B></TD>
   		<TD ALIGN="left" BGCOLOR="DDFFDD" COL WIDTH="20%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[3].'<br>'.$dat2[4].'<br>'.$dat1[5]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="DDFFDD" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[6].'/'.$dat2[7]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="DDFFDD" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[8].'/'.$dat2[9]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="DDFFDD" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[10]?></FONT></B></TD>
                <TD ALIGN="right" BGCOLOR="DDFFDD" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[11]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="DDFFDD" COL WIDTH="7%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[12]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="DDFFDD" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[13]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="DDFFDD" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[14]?></FONT></B></TD>  
		<?$orden=$orden+1?>
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
   		<TD ALIGN="right" BGCOLOR="BBBBFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[13]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="BBBBFF" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[14]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="000000" COL WIDTH="2%"><B><FONT COLOR="ffffff" FACE="arial" SIZE=2><?=$orden?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="BBFFBB" COL WIDTH="2%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[2]?></FONT></B></TD>
   		<TD ALIGN="left" BGCOLOR="BBFFBB" COL WIDTH="20%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[3].'<br>'.$dat2[4].'<br>'.$dat1[5]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="BBFFBB" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[6].'/'.$dat2[7]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="BBFFBB" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[8].'/'.$dat2[9]?></FONT></B></TD>
   		<TD ALIGN="center" BGCOLOR="BBFFBB" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[10]?></FONT></B></TD>
		<TD ALIGN="right" BGCOLOR="BBFFBB" COL WIDTH="6%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat1[11]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="BBFFBB" COL WIDTH="7%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[12]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="BBFFBB" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[13]?></FONT></B></TD>
   		<TD ALIGN="right" BGCOLOR="BBFFBB" COL WIDTH="3%"><B><FONT COLOR=0 FACE="arial" SIZE=1><?=$dat2[14]?></FONT></B></TD>  
		<?$orden=$orden+1?>
		</TR>		
		<?
   		
		
	}
         
		
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

<bR>
<?
}	
?>

</body>
</html>



