<!DOCTYPE HTML">
<html lang="es">

<head>

   <title>Subida</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css">

  <style>a:visited {color: #fffff}</style>

</head>


<body  vlink="#1E4873" alink="#1E4873" link="#1E4873" bgcolor="#edf7de" text="#1E4873">

<TABLE align="center" WIDTH="90%" BORDER="1" CELLSPACING="2" CELLPADDING="2" bordercolor="#093409"> 

<?php $lines = file('mangas.txt'); ?>

<tr>

	
<?php
foreach ($lines as $line_num => $line) {
        
        $datos = explode(";", $line);
?>      
	

    </tr>
        <tr>
	<td align='center' valign='middle' col width="7%">
<?php
switch ($datos[4]) {
case '0':
  echo"<img src='boton0.gif'><br><font face='Arial' size=1>Sin iniciar</font>";
  break;
case '1':
  echo"<img src='boton1.gif'><br><font face='Arial' size=1>En curso</font>";
  break;
case '2':
  echo"<img src='boton2.gif'><br><font face='Arial' size=1>Finalizado</font>";
  break;
case '3':
  echo"<img src='boton3.gif'><br><font face='Arial' size=1>Neutralizado</font>";
  break;
default:
  echo " ";
  break;
}  
?>
</td>
	
    <td align='center' valign='middle' col width="7%">
	<font face='Arial' size=2><b><?php echo $datos[0] ?></b></font></td>
	<td align='left' valign='middle' col width="40%">
    <a href="mangas.php?tr=<?php echo $datos[0]?>" target="_top"><font face='Arial' size=2><b><?php echo $datos[1]?></b></font></a></td>
	<td align='right' valign='middle' col width="10%">
	<font face='Arial' size=2><b><?php echo $datos[2] ?> Kms </b></font></td>
	<td align='right' valign='middle' col width="10%"> 
	<font face='Arial' size=2><b><?php echo $datos[3] ?> Km/h </b></font></td>	
	
	<?php if ($datos[0]==1) {	
	echo "<td rowspan=50% col width='20%' valign='top' align='center' ><br>";
	echo "<font face='Arial' size=2><b>Listado de Inscritos</font><b><br>";
		if(file_exists('inscritos.pdf')) {echo "<a href='inscritos.pdf' TARGET='_new'><img src='pdf.gif' border='0' align='center'></a>";}
		echo " ";
		if(file_exists('inscritos.xls')) {echo "<a href='inscritos.xls' TARGET='_new'><img src='excel.gif' border='0' align='center'></a>";}
	echo "<br><br><br>";

	echo"<font face='Arial' size=2><b>Libro Oficial</font><b><br>";		
		if(file_exists('oficial.pdf')) {echo "<a href='oficial.pdf' TARGET='_new'><img src='pdf.gif' border='0' align='center'></a>";}
		echo " ";
   		if(file_exists('oficial.xls')) {echo "<a href='oficial.xls' TARGET='_new'><img src='excel.gif' border='0' align='center'></a>";}
	echo "<br><br><br>";
	echo "</td>";
	}
	?>

</tr>
<?php    
        } //fin foreach
?>

</TABLE>

</body>
</html>